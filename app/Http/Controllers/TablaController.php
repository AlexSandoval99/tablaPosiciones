<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class TablaController extends Controller
{
    public function readExcel()
    {
        $fileUrl = "https://docs.google.com/spreadsheets/d/1HKikMoNr5RR05IS9iNkqvIm7DU8Zcy0NcgQQVfTQlyI/export?format=xlsx";

        $tempFilePath = tempnam(sys_get_temp_dir(), 'excel');
        file_put_contents($tempFilePath, file_get_contents($fileUrl));

        $spreadsheet = IOFactory::load($tempFilePath);
        $worksheet = $spreadsheet->getActiveSheet();
        $data = $worksheet->toArray();
        $positions = [];

    foreach ($data as $matches) {
        if($matches[0] && $matches[3])
        {
            if($matches[1] != '' && $matches[1] >= 0  && $matches[2] != '' && $matches[2] >= 0)
            {
                $team1 = $matches[0];
                $score1 = $matches[1];
                $score2 = $matches[2];
                $team2 = $matches[3];
    
                if (!isset($positions[$team1])) 
                {
                    $positions[$team1] = ['team' => $team1, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'points' => 0];
                }
    
                if (!isset($positions[$team2])) 
                {
                    $positions[$team2] = ['team' => $team2, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'points' => 0];
                }
                $positions[$team1]['played']++;
                $positions[$team2]['played']++;
    
                if ($score1 > $score2) 
                {
                    $positions[$team1]['won']++;
                    $positions[$team1]['points'] += 3;
                    $positions[$team2]['lost']++;
                } 
                elseif ($score1 < $score2) 
                {
                    $positions[$team2]['won']++;
                    $positions[$team2]['points'] += 3;
                    $positions[$team1]['lost']++;
                } 
                else 
                {
                    $positions[$team1]['drawn']++;
                    $positions[$team2]['drawn']++;
                    $positions[$team1]['points']++;
                    $positions[$team2]['points']++;
                }
            }
        }
    }
    $positions = collect($positions)->sortByDesc('points');

    return view('welcome', compact('positions', 'data'));
    }
}
