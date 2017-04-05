<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="mainCSS.css" rel="stylesheet" type="text/css"/>
        <title>jQuery animation</title>
    <script>                
        function animation() {
            var i = 0;
            for(i; i < 20; i++) {
                $("div").animate({top: '400', left: '1300'}, 0, function() {
                    $("div").animate({left: '-=1900'}, 10000)
                });
            }
        }
        
        $(document).ready(function() {
            $("#button").click(function() {
                $("#button").hide();
            });
        });
    </script>
    </head>  
    <body>
        <button id="button" onclick="animation()">Click me to move!</button>
        <div id="CarIMG">
            <img src="car.png" alt="" id="car"/>
        </div>
    </body>
</html>
