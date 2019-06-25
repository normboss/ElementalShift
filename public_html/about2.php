<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Elemental Shift</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/about2.css" media="screen" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
       <script>
//            $(function () {
//                $("#header").load("header.html");
//                $("#footer").load("footer.html");
//            });
        </script> 

    </head>
    <body onresize="myResize()">

        <!--<header id="header"></header>-->
        <?php require 'header.php' ?>
        

        <main>

            <div class="top-section">
                <div class="header3 box">Kirsten Jettinghoff, LMHC</div>
                <div class="paragraph1 box">
                    Kirsten is a licensed mental health
                    counselor with twenty years experience.
                    She earned a Master’s in Counseling
                    Psychology from Lesley College
                    (now Lesley University).
                </div>

                <div class="image box">
                    <img id="kirsten-image" src="images/kirsten_head_pink2.jpg" alt=""/>
                    <!--<img id="kirsten-image" src="./images/kirsten_j3.jpg">-->
                </div>
            </div>
            <br>
            <div class="middle-section box">
                <div class="header2">Holistic Approach</div>
                <div class="paragraph2">
                    <div>My experience has drawn me to methods that focus on the relationship between mind and body.
                        My desire for a holistic, integrative approach to healing has led me to study and incorporate additional 
                        modalities.  I continue to explore and learn ways to improve and expand personally and professionally.”</div>
                    <!--<br>-->
                    <span class="signature">Kirsten Jettinghoff, LMHC</span>
                </div>
            </div>
            <br><br>
            <div class="bottom-section box">
                <div class="header2">Additional Qualifications</div>
                <div class="paragraph2">
                    <div>Traditional Usui Reiki Master since 2003 <a href="https://www.reiki.org">www.reiki.org</a></div>
                    <div>Karuna Reiki (R) Master <a href="https://www.reikiclasses.com">www.reikiclasses.com</a> Komyo Reiki Shihan (Teacher)</div>
                    <div>NVC - Non – Violent Communication</div>
                    <div>EFT -Emotional Freedom Technique</div>
                    <div>EEM CP – Eden Energy Medicine* Certified Practitioner www.innersource.net</div>
                    <div>PSYCH – K Practitioner <a href="https://www.psych-k.com"> www.psych-k.com</a></div>
                    <div>Certified Feng Sui Consultant, Black Tantric Buddhist School of Feng Shui (BTB)</div>

            </div>

            <br>

            <?php require './includes/issues.html'; ?>
            <br>

            <?php require './includes/appointment.php' ?>
            
            </div>
            <br><br>

        </main>

        <!--<footer id="footer"></footer>-->
        <?php require 'footer.php' ?>
        <script>
            function myResize() {
//                var size = $(window).width();
//                if (size < 500) {
//                    $('#kirsten-image').attr('src', './images/kirsten_j2.jpg');
//                } else {
//                    $('#kirsten-image').attr('src', './images/kirsten_j3.jpg');
//                }
            }
        </script>

    </body>
</html>
