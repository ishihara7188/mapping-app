<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maps</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

        <!-- CSS / Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css">

        <style>
            #map {
                height: 100%;
            }
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1 class="my-3">Cafe  Search</h1>
            </div>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn" id="getcurrentlocation">
                    周辺のカフェを探す
                </button>
            </div>
            <div id="map" style="height: 500px; width: 98%; margin: 2rem auto 0;"></div>

        </div>
        <!-- jqueryの読み込む -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCD7VneytgGyNjE8H_cvB9pKEo_98EEZRE&libraries=places"></script>
        <!-- js -->
        <script src="/js/map.js"></script>
    </body>
</html>
