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
        <link href="./css/about.css" media="screen" rel="stylesheet" type="text/css">
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
            <br><br>
            <div class="top-section">

                <div class="header3 box">Kirsten Jettinghoff, LMHC</div>
                <div class="paragraph1 box">
                    Kirsten is a licensed mental health
                    counselor with twenty years experience.
                    She earned a Master’s in Counseling
                    Psychology from Lesley&nbsp;College
                    (now&nbsp;Lesley&nbsp;University).
                </div>

                <div class="image box">
                    <img id="kirsten-image" src="images/kirsten_head_pink.jpg" alt=""/>
                    <!--<img id="kirsten-image" src="./images/kirsten_j3.jpg">-->

                </div>
                <div class="header2 box">Holistic Approach</div>
                <div class="paragraph2 box">
                    <div class="my-experience">"My experience has drawn me to methods that focus on the relationship between mind and body.
                        My desire for a holistic, integrative approach to healing has led me to study and incorporate additional 
                        modalities.  I continue to explore and learn ways to improve and expand personally and professionally.”
                    </div>
                    <!--<br>-->
                    <div class="signature">Kirsten Jettinghoff, LMHC</div>
                </div>

            </div>

            <br>
            <br><br>
            <div class="bottom-section box">
                <div class="header2">Additional Qualifications</div>
                <br>
                <!--                <div class="paragraph2">
                                    <div><a href="https://www.reiki.org">Traditional Usui Reiki</a> Master since 2003 </div>
                                    <div>Karuna Reiki (R) Master <a href="https://www.reikiclasses.com">Komyo Reiki Shihan (Teacher)</a> </div>
                                    <div>NVC - Non – Violent Communication</div>
                                    <div>EFT -Emotional Freedom Technique</div>
                                    <div><a href="https://www.innersource.net">EEM CP – Eden Energy Medicine*</a> Certified Practitioner </div>
                                    <div><a href="https://www.psych-k.com">PSYCH–K Practitioner </a></div>
                                    <div>Certified Feng Sui Consultant, Black Tantric Buddhist School of Feng Shui (BTB)</div>
                                </div>-->
                <ul class="paragraph2">
                    <li><a href="https://www.reiki.org">Traditional Usui Reiki</a> Master&nbsp;since&nbsp;2003 </li>
                    <li>Karuna&nbsp;Reiki&nbsp;(R)&nbsp;Master <a href="https://www.reikiclasses.com">Komyo&nbsp;Reiki&nbsp;Shihan&nbsp;(Teacher)</a> </li>
                    <li>Nonviolent Communication (NVC)</li>
                    <li>Emotional Freedom Techniques (EFT)</li>
                    <li><a href="https://www.innersource.net">Eden Energy Medicine*</a> Certified&nbsp;Practitioner </li>
                    <li><a href="https://www.psych-k.com">PSYCH–K&nbsp;Practitioner </a></li>
                    <li>Certified Feng Sui Consultant, Black&nbsp;Tantric&nbsp;Buddhist School&nbsp;of&nbsp;Feng&nbsp;Shui&nbsp;(BTB)</li>
                </ul>
            </div>

            <br><br>

            <?php require './includes/issues.html'; ?>
            <br><br><br>

            <div class="appointment-block">
                <?php require './includes/appointment.php' ?>
            </div>

            <br><br><br>

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
