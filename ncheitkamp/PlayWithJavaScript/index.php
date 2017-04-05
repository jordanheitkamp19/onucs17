<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>NOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO</title>
        <link rel="stylesheet" type="text/css" href="mainCSS.css">
    </head>
    <body>
        First Name:<input type="text" id="firstName"><br>
        Last Name:<input type="text" id="lastName"><br>
        Email:<input type="text" id="Email"><br>
        Favorite Number:<input type="number" id="favNum"><br>
        <button type="button" id="button" onclick="runApp()">Submit</button>
        <script>
            function runApp() {
                firstname = document.getElementById("firstName").value;
                lastname = document.getElementById("lastName").value;
                email = document.getElementById("Email").value;
                favnum = document.getElementById("favNum").value;
                if(firstname.value !== " ") {
                    alert("First Name: " + firstname);
                }
                if(lastname.value !== " ") {
                    alert("Last Name: " + lastname);
                }
                if(email.value !== " ") {
                    alert("Email: " + email);
                }
                if(favnum.value !== " ") {
                    alert("Favorite Number: " + favnum)
                }
            }           
        </script>
        <?php
        // put your code here
        ?>
    </body>
</html>
