<!DOCTYPE html>

<!--/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/-->
<html>
    <head>
        <title>About</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/appointmentGrid.css" media="screen" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            //      $(function () {
            //        $("#header").load("header.html");
            //        $("#footer").load("footer.html");
            //      });
        </script> 

    </head>
    <body>

        <div class="appointment-wide">
            <div id="quote-id1" class="quote2"> 
                Please contact Kirsten for more information
                or to make an appointment.
            </div>
            <br>
            <div class="appointment-button">
                <a href="contact.php"><img src="./images/contact_button.png"></a>
            </div>
            <div id="quote-id2" class="quote2">
            </div>
        </div>
        
        <div class="appointment-narrow">
            <div id="quote-id1" class="quote2"> 
                Contact Kirsten
            </div>
            <br>
            <div class="appointment-button">
                <a href="contact.php"><img src="./images/contact_button.png"></a>
            </div>
<!--            <div id="quote-id2" class="quote2">
                For information or to make an appointment.
            </div>-->
        </div>
        
        
        <script>
//        var old_size = 0;
//        function appointmentResize() {
//                var size = $(window).width();
//                if (size < 800 && old_size >= 800 ) {
//                    old_size = size;
//                    document.getElementById("quote-id1").innerHTML = "Contact Kirsten"
//                    document.getElementById("quote-id2").innerHTML = "For more information or an appointment";
//                } else if (size >= 800 && old_size < 800 ) {
//                    old_size = size;
//                    document.getElementById("quote-id1").innerHTML = "Please contact Kirsten for more information or to make an appointment."
//                    document.getElementById("quote-id2").innerHTML = none;
//                }
//            }
        </script>

    </body>
</html>