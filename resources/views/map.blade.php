<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maps</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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
        
        <div id="map" style="height: 500px; width: 98%; margin: 2rem auto 0;"></div>
        <button id="getcurrentlocation">現在地取得</button>

        <!-- jqueryの読み込む -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCD7VneytgGyNjE8H_cvB9pKEo_98EEZRE&libraries=places"></script>
        <!-- js -->
        <script src="/js/map.js"></script>
    </body>
</html>
