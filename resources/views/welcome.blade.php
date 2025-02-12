<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla de Posiciones y Resultados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <style>
        .body {
            background: #333;
            color: white;
        }
        .tabs-container {
            margin-top: 20px;
        }
        .table {
            margin-bottom: 0;
        }
    </style>
</head>
<body class="body">
    <div class="container">
        <div class="ibox float-e-margins">
            <div class="tabs-container">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAA9lBMVEX///82XZ7ABBLYrQm7AAD+//3//v82XZy+AAC6AAAlU5nVqAA1XJ7z58kmVJg2XZ+7xNqvutUZTZYnVJn09fqVpMjp7PNYcqn29/oxWZ3Iz+K/AAzr7vQjUZlof7HX3Oh6jrnh5O5BY6Kmss69xtpKaaWFl74VSpaos87T2Ob16eNthLP58u5ZdavHRj6OnsMAQ5Lgpp/sz8jZj4fGPjXx3tecqcjow73ks6zasinr1Zvhv1vUe3LjxnDcmJJ+kLnNYVjELynAIRzXiYDOZV/UfXXksKvKVk3QbmnlzIP479roz4z48+Pctz3r2KLx48Deu0vv3rNlKLPuAAAa80lEQVR4nO1dDZ/aNtK3d7HNahUv2LxYLAIMGJawhGTbkKRNs9em7TV9ud59/y/z6NVvko0NbJL+Hv53bRMwlkYazYxGMyPDOOOMM84444wzzjjjjDPOOOOMM84444wz/mEIOsMex7Bjp7+wvlSPToXeqt193Eyh6wOMPfI/jAEyo9F211oF7Il/Lol22F5skAd8F0FomvQfAof9H0JEKPbMUXfe+9L9PAzBarehk4U4WYWgdLrru/BL97cmhu21i909tCWAEHjm4zz40t2uit4s8oB+6hz2L4f/Nz+ZYDlq/QOIDFob7MMsBRAhAAAm/5AFiRCTOISBfWUUEHYngy9NQTGoQBwvyOxliSPUROvtXWsV9jryUbvTC1et2WI09QARQqnxcBCAuyF92VcpX+cbnCYPugD0t61xGecFq/ZiikF6yTo+mIw/W58rwqYD3p4CMRs3bFV5o9kqRZxd+GtjONiSlZvoEoi8zerJO10LhMA2TM0DwuZiUE9oDNsjF6Tf0P+6aGxN/bh3EIDFQb0L5utlsoqht/l6eHUVJaPveqP54W/q3EU4fhXy1l+HtdOZeE48fV63d6SZuZosY35AeHeqXh4KQsvdEgkJAcG0fYqXDruu7wgifXPwhQ3zsA+kkAfT1qneGuywL1/rTUqk8NNj50nJcEL6KOwuQI6wAdCXM3OGfSBWIAIzzfe91Wo17tmSyezeat6e7XazuTQCrKCTgZ3ix86jNB+gt/hCfNqSYo90Qaf8Zi+p/fkyntu7l8QWdQl87I34vLReeim8zA5T2MdihbvRF9lcLTyxUnCkU1yW0WcDgNbyk7abmGbIG9FBaQEzBb+be0fLFVIMeiddA5XQ6fuyrzoGJRh6N9zMlPObptB03MjIU4gW+XcEEzmMnvLdE2OMxCIB/SKt3Ba9B1JQcAohEgYo2CoUbtW3DOKGNsHnVBtzMbRwSRlL3/CId+0mnhlGIewv1j77BuKhoJDYeQxLVb9bRmeEBf3msMx8PyFIKzNOIERmsQEaYCYkyEYDiI4xCl06JAuXymDQFhRGqwGHnh1mHt+zILD6XNp/K2bQ35TsH1p0nU4hlURCEMUUWsbU4cuOUQj78Y/0/SdLgmsl73NoRssyHgXbeJplk2BCiHNnlERXMF8yh8aW8imacApRv+w9FMHGFfKm9TkmccLV/B4BbtO+e+GEkAIj/lGKwp2fohDupdCQowq99hOTaFECeVt++aIYAOrG4FR5XF9LCsmvFuk5NKN5i6J0OyiWvuOdxLgvhiUJRLBXPpiUBqLsQzr24I59lMxhgNk67EpZ6lPgddn7YvH9pLqfiMSFYNHpkBFoF1IJBWUwYUNGIVp0hoOI9RUPBIVcjEhmLsJAMuoRO+x9sIyuaCWSpnPRo2P6ICbcuWbSdEg/ExofY+ERgHZG48NpaeO2MZaM+oQStc3bQJJA43nRk13GkWQE2j413JgIlFab2I/QFZWhsEjgWPf8P4LEGxM/kXPDMgZeZgYt483VvwpmkZKBHskf2ELk1nfGLjXxgryAy1JIXeB4+ahr0zJeX1zci7+OhZRDHfXR42EZPb5bgqY0EN9eXTRvH3QPM7rgZNwL58xUA0FCIaRefozv6EuEtrACCo1JRh551bhtNF+Lv8dj/CTGTWDy5YOG4oNXjYuLi9vGB82zTN+RJedhIIWKpDCKptPNY4uTs1cf3v+LNSJItIlEZZ3wJ6ekTEJY0lhuRj/QtgkaL+5zA0q2hpnDC8GwjEI/Y12XU2gZD80ma+O2IWfxjss6XLBlOwY7PhtEkBHDjTT+ShB4cdFsvsk92/Ni2m4EiYaksMv7XoVC45vGrWhDzCL53ZbrK298aj5dsU47fPkQvLq6iHF79T7bWpsxqUvP0lym3B28ylhtEqUUPv+2kWojXouMlxwqDU4Iywj4ttWdSCGTapxO44+v089vEBvl1naxbYePzELr1qbwbaOZbuK2+Zy3bVNr3nRQuQlUG2s+cJEg+OHqIovbq1dGfL7UyfSbS9NpLQptw/rt6jbbRKMh1nvILQZwUgu1xUSY40kx+k2+edKBRDW2yFK5kXsmY8j4m1jfqXW4j0Lj9U+NfAPNK7ncW2LFDE+1Ei0+KaSXiUX4cNtUetB84LYqs9RMEG//+3SLTggmFDp0DlN6r0VXqYbCVw11BP99H3894fbf5kQEyi6bbtro4Ioqx6nfsAEJlgB4AMeSoLvE5IPIaC8BBsvsHJKvMM6b3Pf/Vt+dUbt8KZ6QT7kl4dxkP33VUBnpBTdUh2GYNh07YRhS/g56YZizt+hHw+xHsRJMvzhnOo3ZcRf0TiRPLX4Q5K0yri5iMP6o9qTx9ujmPmo49Od85EKXaUWkMWUPAdf1eXctVfu/KALntvHbcWEUz79Vhq3R+JW0lbNaI7bxJHr/BIp/yA9AocoRZHOhYaifXivdqQiyn84pQfbCH3V7NG6BmNGhbSWwjAmzMbHeeXD/QiNwXh3c2G+at/2if5YZEiY4gfMtZIOFCiXzB41qTAn2Onh9oVFBeZtXosNWIjSPd4OPoDB09bB0oq/R1O4a9+CDRsS8KB6rGRMP/tEag8tlJrTIMpnnz78orJ816utj3Ya0/K7bewYjcX4xZf4QVOwNq4YR36tQnUXeBMFGcSCQzdSvyujfNr4t9OFoQGWWQmDj4rXm0ZUJJvxPzCAy3bvjVmLIDgFd4b/f+TcIDHJvpOP5/EdV+1PVWKltMgnWR+X3F1e/0V9n3mDRyAEYL5mIe1WOoY+fPrBzMIqOD02n4KzyF80i+q3a4FrZnaAYoCud7TDc+CmDdI6FOD0YFtmsw9QULpjB67BTdaXzRapxfyNaJfjtc81P5yJ4QXpMudrf40kuB3N7mmLTNPRkZALWCTCtvVxBNVYXVI+yA6YgirtbweExfpbB7bUJ/+sCyeguB691Nq9GNTb3qsYHnRJ80DBJGPlx+0Ds41iUMTxit883qOKEc5i4lwjVSDdwOpXdeFPKqRoleKUdlbt4Ak125MheOkvz2CFg/ha5Qe1mXNbQUw7didrQcdzVe6vQdtSIGG705QclGOFM+DvmA8y35v7BrkVusDGOsMWJWIpEtz/U8NLbnF5rNF68LZxD6/7DRW4Ocz4tgZWfc8DCEf+CG83lZzol2DEfEuZ/Ea7YdCv+XMOAWdXY+PFNcVg6/dx6lZHBeg3TTXMox5I7pvkWAx8Wa2sZzI0vg1yCtefkm/EWCvuRDn6MBU6z+eueRmy6y2wkz+uUYK8PcgkajgxTsoxpuo91wc4AU+PTUkfS1wacSVuc7jGqKP0H4VhrvNBZei2A8s26TuzxZnxm+odZbjv3Jntu2Yv8fFvQu8v/zKaqsZlzoSa4z33EWJUKqNvGN0xapb+zDHuijisNOZXCK2SyBh+mEpnFkPXgLpTmINCqxleNZkO/g/pB++mHK/3z46mbpw/izK43ogysxPxVQi/HpAwD6m9OLwrHRFAdQNt4rZWJhvHsWqc6bOOtlqNnHrzJEQiibIzEjFmqB1luPPIu50Ikigk4uXmEXo0R/HT9rPKzpC11VeTb4irNO+Tgm7mB0UIZ2Z26MEBftSoKlv7ltZ5NNYjDEhMgoEYpTOkX7iFbfeYHwZq4B7I28noDFTiqFPx+fXlZUewtvDx9Jh5p1jwzlw85iWKz7wBdTIA9wflpdLxqztk/ri+rsWmvr4oYfazunE6F41ZqPoN22Qpu4RwD3ZiuWcWwuLy8vP5U4bmWpyrBqT7Ye8j1Rd1IcJtbfEgrQ2ytaqxytk6Z9PJyr3q2J4qIIUrQKkiAY2aNX99xyn4HiiOstktF4LBlUtrOH5TCvWw6NlXLomSh8zBAVSTuQYcL4ZKd10BN9d2b/PHusgKbaoS1rxHWMXiQ6qZuiPSK80nZI8FI3W6UR9VyJiVsWoLOBuQltVOucENumtR1ft+xGNdR+UMzdbTdqGS0v+MUXv9e/MhAFTE6oykNm1Ho1RU1jLn98uQ4S7diliUUvuNTeP1H8SMthS/waF8UG0td0dgCFX5VQUA95vSymhWS4E/BpKVsmjcJsbJ5UcDEvls3VZEPXwUVN89yatlPvpMUlrHpLptZU6AEM2DGd9nQ6sDOrhxQxYnV66dEQ6mR/5ecwjI27aXZtFouUMvXR3SUd5ufelR7OOVGKeOVhEkv35W8rZ8kApeo4zTGLGbFqdZZiRULEK3qw1pBKQDLmPQ/CYXXf+oe4GtesqkDNsPSNP4YfDpQvcCMFnOz7VEWCYK1DDMXXXr29zMFMZMSfFK//lsszrF8VWXREXDLtJ5fWMTVV3uYVVRgRlysQP/861rBZRrq15+4j8Yy+LE6qhFeyWa9pu3NWKWWky6MXMdJeXW+y1K0F4mxGsEbU38wUgSWRlXrgMbiCr+eirEfPScRDZbxew3yrr+3kh8+orrJP4eofK5Ea7oG5iAT0GD9UHUar/+Tfs3Oq5v2y6Ipap6UMgr9uqerw2l2tf+vEonX77IGQLt2LBfrbU0KWcRsRXWURm71EIGzn8C8a6p+ON7iAI7jFJ4g/eaPfSRe/318I4zCWrGY9okopNLiWTl9f2l1f02whM2asUMnm0NC5vfF01hmoNZA/Tk8fB1q8Z9CEqv7v0uxOHQO/ZoUWsaDPi7h93faCfxer/MenpfkNWrxeMAcHqQPjQ9X2lAvK7VxShH4qcAx96pRFI9YBDofTk1twUbFrRcBcP+iUXCiZli6Ofxe/6jxsXn1S71A441ZXx9u6bbZrXUq96bRvGgUnGr/rVuJ1wWhNv8i76kV98dPOnVHLCVggSp+Dcvbek9P45vv9WOvtd+u/6d72DKaF3VD4uEBe4uWSJivChG3f/uj7kvL0gtTPZs+F4f6P1fnUxbYBOodIc6p68OpfLIa57hc3ev6pWVSMomW7uG3IvqkqQ0v1YE7ldx6qbN8o42qPEqEQpI/ow/L/kFLIGVTDd7L+Bp9iLAG3OldM850yCqT4EpGcDrQu/mb5oG0JL2+TM2njk2t2yRIqizMO4UB2Ofl0yBgvuxKaeHZPLaGpk8pJiXT9ilFooZL36RDqopD9dNgEQe1IxSnFbfN9y+yqYi6qKaYSa/fUTs7IVi3r/g5m1dZlG6RxgGqzRBxCqDUo04n4E0+vJdI03zasxG7usWx2v1/5Sc/5PWFdZ/P3Wz8RAVOiVPR4nmztdMSuvudbRZVgrn+kEFXJOAzSU8yY3LXeK289EOewgqBxiwao3ak8JwpxH6x8WTTRM9KOS6fODH/Tb/qdy5wNGyqTU+9N7SKhUMc5tatsyCOHcse0SV6aoQfl6TX36XtbEvuGjXBNbr0w8ZDiZ3K/PMHxJiCPU76vYmeEpRJ884m2l/uptJ0vCg9tWgtct9u/YCaTfmeq/pIE+1w/YNuBv58VxRco+WOQluc+RL3HObqwEQwnBR8W5DoqQO3XbTffbouiAHTrfDGm4K38Jzg+h6XOc9+03xj6RI9b/UbJ8v4vczZ9OxalaYc7xWZetF4b+kEDpMYTm1BQ+02p2hLoslxafyky3Gh+KFoK2/Qz//8q8iZqGhanoOj4s49wGZjYNXklMwwq1aiJ53DPc0UOqN06Xo61cj0fW2LhoI5IdUjxIpKUGLPJq9EzRWqxix4rEnNDT7HgPN3bnuhS/RUc1xIv1eGOA6sBluXla0T2Pn0VL6xAIdk5gc+VE5n7v+tMaq0iZ7rZa0MAbuvOfLN7DyT9r7JPMRLp1Q+rc6A+UxjTWrpU36bt68NdfRXJnLwurobIpwilp5qZ2/YIS/4VVO5gWbuyQdtFkFwYDawyH1LSrN9VNfFlTbHZeexWl9VYmEY5iwiF/m6xfRcU7mBbNFks5xJD8ztCpZO2g2pUYIaj5hNEz1FjgvcX1KdzkWwlnFVmvAZQskvqmpMihox17VTM5YmBi9psuEd1+gnvVdznoRIQzfav6dpp3JiaA6OyhQ61XjLmw7o4NwcnLLO82xFoP9Dfj3cXn3UWcOLVHqUQ/hnVB451sqkjNzoajdYRDXmSbxt8oFoHxJoksBmMbLSL5xLFWxolWCo5LigZVQkyS1jvFRi4mkUhjqNeSXVFAKVebuPKBm14CWN+URlXEQs/VXtiJrCV5D8JTHPJxYSM8rRcfbDbaZ54fAaH67uOUSKpYjB/CkZRo35ZLGgYTULa49ajMVSwqksGkoZPevnlCRv/sIfWLMSZOiImgN9tr+IWDGaVAUzvQm80uS4aBVAFjusXP9EI9rUTqcM/oaoZcTWfO3I0gQWkzU3ccFQOYlX2io7XTUDU1XiOhDzQB0Z9XDWSlRj8z3/aEH3sM7BcoaBl8YXNQz4Skzr2wTDvhKAblaNvQvWWP2tNqhGpJuKVThkhdtqnB/pwMJv4xoG395ym0mlsAXUmPab6iWO2kpIvKO5D8ESlRukIN1SuX1TO4Q9Cx7YSONvKbM9XOXtXg5NIpTpTeq004sUFoDass/E9pe6kHsRncOM7gQ7N05hsy3jZ62ziSrBXP9QvZLN5J2LZX4WNQGKtO0PsiYIS1pzvGPvheJHNDJa+F53FjTL5wc5sDTrogA03TA/TmilGdDX/CNR3unYKZS1zKRbUW1PkzmzVwnq0dmoKaO42DvBK8YWlneqDouPbNEmeuCj3MAfcfWNmvEENRlPvEIsL+99khqfzLh1CsrbdXWJnodXah47al6lPorEmkK2Ck9S+FqUt1NWtK1P0D+qwq89ydsNNzw9Ne/x6/KaH9vjy7UZsvZEPjXBkqWoMhzqTo+r72slNxAl0CTOhKJ2+olKQ/ICIm5efCjDzZXgcXUTrSqVGywW7V5YCLA+AsxKOqf5lGztbvJLxilL9KyD7d4sbi7gT1ai1TLaPJxjmmplprGzC68NqouBagNmihqNRZndPTdQ1MEIZfbSlk511amssA+dkcaO33IHuW1x34OpvQntUAx5g1imQYwUoX7a+98sNT31xnkp7dQ1dz0c6mDTg6d2OrEFEeW2dEBX7eAohGZuFIGUdDPAqoGc+g6ICRdwSLiJgmmKREdTpeZI2IpqlNUSjQH/+OS3sdi8ogkVX4zEoZlwUaVEzxpgLnubXc4X0wikhd3jQ33y2xEsI8Sy7jxHQmLFkhgHIElP9SWBAS90fVwpQS1seQUL4CLTMoY8rZImekqZ3TlNcP8qYQlh98YE8gCKp7qIZcGr+sVlttha9Dex7W+RXWyUr/1ZH8PRy5RYpg48CNayhTUvTvk0l+lYfPxSazyIsiXWx0sic2qcqenRxm66/50Rlgc2lpR34Kku0bV5SVRz2ZIHFuvMhqMPoYP8g00pMjT0gtK5m4sc2e3k9wtuZ4AnW/jGkPOpo5fULUDW/6RyuSEV4ciLhsYKaHN1bEIg9ya4o+OLeBf3gfunHTqLSvFGn9rmK8DqqIS1F0owpAVYER6HwNULLHG73P6r9o7CWN5+NlNI3Po0cGOBaOBHcOOZNeQq2TJNADEmhpEL8RZpMjvJnK35GszY/08BUe2d2dkpEi1a/A6i9dplHtoRMt39ieBWEmtyh7nXbOGZEOrKcdgbYVRNn/w60pXHfX6xFSWwQXAKEGTesS1ZryyUzowmd0WaSyyl8YJoGFr4ATIJ2cLIUeaQKF9hCD/5DNLGVvKOzn66sTk2p0ZruqRz2/L8BQtT6ZGFBfLO71hI9O4mY+rQp5QNsLOBTMuFU5gLSrfj+qU3n2EGKcZif5opChAB5henRI892O9hKhDnrun4UBgku2gktj/zSTQlembnUb996NHluwLu2Icusx6Ak3WCWtKcclDhcfKJEcoL7FMnC8FC6sEAQtBbYarUtggMQpeX/7F9yKVg0Cczi8hPmdg1Apf6uMYAD9uAbPnI0tz5uVgzeSoCNp/tmvWO3B7qThYiBOn1mzSqsU8DXfqQ1d6k0ZyYelL7yAGj9bRndDzmv4toQfTQIw9tkE/Fk43cl6nFG06FFsaTz0Uf7YSs2ajeCPxImA1NI0qbvSQkDAEPMh+hCNJ5pT4YOqcWvTPXo3qcFkPseWjxSExQdh3RbJIi8I5M4A3TwbvPsQQTbMX2FHpbO603Zh6Mdh42od+hbPg4jExAJ6bnuW12Hk0UpvSvrCGd6DbwZ/SkDPm475rLXiqChejJjTgDf9LLOfWIa+6CaXoa59EyNIZzIhADY+a6rQ3iteJ2rkf4tU/nkjJtp70bkAVHPfZjTLjaJhz7ODAevWxY1Ew63ZCjCyV6ShDDMA6dgd4kfVLB5CHLDlgjHHYRWXxkVug9aY8IB3TiCIWrJV4QhqWipoepdliyg5HgLt4aUjs8kjeW1it1cjJYE89xuJqiBbnSQxx4oE+jjH17DlyqvwcYbXtberP2BNEE6hCjCQ3ZIqYaoZNQiKk9nXl951Hcx81u7PvMM0hBW6RlmpnfywHT7DIJtyOjtyTqgZBC+W5CzDjXpbnTTCcYQ4+StTGdaO1Ceji5HGVFlrXDskqq5kT/86ET18GFgBpfmYEO+8SCs4gaJM9hJ4qAA4miC7Djr8dECBE6wyWERDWqZ4B223flRQyn9DQfgqTaNsT9/JYpCCxjvXwZGnc+MXECA0HXNlpLB2FqppMHxiM0nSgbLXsG/WTgTn5ZZV0EiVsT4WlbtTqGg5DIHHaGPPFeEl4cTD0AcN5yT57vYkmfg07quT8YROTJHpmACBTlAVp4nP2hN2+zJTUeDMZFp+ZrHPu6Cf/qor++BFowOajxvX6bKY8DuhbuyBDJYtoQb44NJDkhrJmbHGtCANat+mf5vbs+ThWZxtETXr99COyZL3cc5g1EvreZVZHxYqKDVTfy2PRJWzD67Ebafth30/QtBtAltspd0XJLoTPYbXzgJscgDvI2X9n8MdDZmG8yFWQh9AHuT+4GPT3PdsLWbh152EWpYx4IvMnxUUBPh5BYZtmjTcKxRDWgaL3tztrzAcF83t51F6PIxcD1c+WWXS+afRETtCrYRK6XINdvx4EORMRsAxy+6yJI7/+C2bEAeHuSSymfHEGL7CpcUwluLoEDAZ5uvyLtsBdUOGLqXKxCHuXjaqL3K0Nn0N0AD8ilps6oQxjTBWSXMVt91WuvHOF8t54iuvZ8HyXwybRR+bOYDY6KQ//CiEWGPQwHrVn3cbJmmEwW3XZrkL7q+B8gXc7gOE/VGWecccYZZ5xxxhlnnHHGGWecccb/X/wfnE0zmt/yQEgAAAAASUVORK5CYII=" alt="APF" height="50px" width="50px">
                            <a class="navbar-brand" href="#">APF</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a data-toggle="tab" href="#tabla-posiciones">Tabla de Posiciones</a></li>
                            <li><a data-toggle="tab" href="#resultados">Resultados</a></li>
                            <li><a  href="https://docs.google.com/spreadsheets/d/1HKikMoNr5RR05IS9iNkqvIm7DU8Zcy0NcgQQVfTQlyI/edit?pli=1&gid=0#gid=0">Actualizar</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabla-posiciones">
                        <h1>Tabla de Posiciones</h1>
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nro°</th>
                                        <th>Equipo</th>
                                        <th style="text-align: center;">PJ</th>
                                        <th style="text-align: center;">V</th>
                                        <th style="text-align: center;">P</th>
                                        <th style="text-align: center;">E</th>
                                        <th style="text-align: center;">Puntos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($positions as $key => $position)
                                        <tr>
                                            <td width="5%" style="text-align: center;">{{ $count }}</td>
                                            <td class="text-left">{{ $position['team'] }}</td>
                                            <td class="text-center">{{ $position['played'] }}</td>
                                            <td class="text-center">{{ $position['won'] }}</td>
                                            <td class="text-center">{{ $position['lost'] }}</td>
                                            <td class="text-center">{{ $position['drawn'] }}</td>
                                            <td class="text-center">{{ $position['points'] }}</td>
                                        </tr>
                                        <td class="hide">{{$count++}}</td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="resultados">
                        <h1>Resultados</h1>
                        @foreach ($data as $item)
                            <div class="row">
                                <div class="col-md-12" style="text-align: center;">
                                    <table class="table table-bordered">
                                        <thead>
                                            @if($item[0] && !$item[3])
                                                <tr>
                                                    <td colspan="4">
                                                        <h1>{{ $item[0] }}</h1>
                                                    </td>
                                                </tr>
                                            @endif
                                        </thead>
                                        <tbody>
                                            @if($item[0] && $item[3])
                                                <tr>
                                                    <td class="text-left" width="25%">{{ $item[0] }}</td>
                                                    <td class="text-center" width="25%">{{ $item[1] }}</td>
                                                    <td class="text-center" width="25%">{{ $item[2] }}</td>
                                                    <td class="text-left" width="25%">{{ $item[3] }}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
