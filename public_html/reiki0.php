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
        <link href="./css/reiki0.css" media="screen" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
        <script>
            $(function () {
                //        $("#header").load("header.html");
                //        $("#footer").load("footer.html");
            });
        </script> 

    </head>
    <body onresize="myResize()">

        <?php require 'header.php' ?>

        <div class="heading">
            <span class="page-title-red">Reiki</span><span class="page-title-light">: Promoting Health and Wellness</span>
        </div>
        <br>

        <main>
            <!-- **************** beginning of column 1 ********************** -->

            <div class="column1">
                <div class="block block1">
                    <div class="paragraph"><span class="show-numbers">1</span>
                        <h2>Read More Read Less Button</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel
                            <span id="dots">...</span>
                            <span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. 
                                Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. 
                                Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
                        </p>
                        <button onclick="myFunction()" id="myBtn">Read more</button>                        

                        Reiki (pronounced ray-key) is a powerful, yet subtle and gentle form of energy healing. 
                        The Japanese term is made up of Rei, meaning “Divine Intelligence”, and Ki, “Life Force Energy”, 
                        and can be translated as “Divinely guided healing energy of the Universe.” 
                        Reiki is essentially a method of concentrating this energy so that we can more directly 
                        and effectively experience its’ benefits.
                    </div>
                </div>
                <br>
                <div class="block block3"><span class="show-numbers">3</span>
                    We all have the capacity to support our own healing. Reiki promotes healing on the 
                    physical, mental, emotional, and spiritual levels by working with the body’s natural 
                    inclination to heal. It can help us to release energy blockages as well as emotional 
                    patterns that no longer serve us.
                    <br><br>
                </div>
                <div class="block block5">
                    <div class="heading">
                        <span class="show-numbers">5</span>Reiki Can Help
                    </div>
                </div>
                <div class="block block7 ">
                    <ul>
                        <li><span class="show-numbers">7</span>Increase energy and sense of well-being</li>
                        <li>Encourage restful sleep</li>
                        <li>Relieve of aches and pains</li>
                        <li>Stimulate the immune system</li>
                        <li>Aid transition through intense emotional stress</li>
                        <li>Cope with major physical illness</li>
                        <li>Accelerate post-operative healing</li>
                        <li>Enhance your preventative health care regimen</li>
                        <li>Gain clarity and momentum to reach personal goals</li>
                        <li>Develop greater spiritual awareness</li>
                    </ul>
                    <br>
                </div>

                <div class="block block9"></div>

                <div class="block block11">
                    <div class="heading">
                        <span class="show-numbers">11</span>The Five Reiki Principles
                    </div>
                </div>

                <div class="block block13">
                    <ul class="paragraph">
                        <li><span class="show-numbers">13</span>Just for today, do not worry.</li>
                        <li>Just for today, do not anger.</li>
                        <li>Honor your parents, teachers, and elders.</li>
                        <li>Earn your living honestly.</li>
                        <li>Show gratitude for every living thing.</li>
                    </ul>
                </div>

                <div class="block block15"><span class="show-numbers">15</span>
                    <?php require "./includes/appointment.php" ?>
                </div>

                <!--<div class="block block17 heading"></div>-->
            </div>   <!-- end of column1 -->

            <!-- **************** beginning of column 2 ********************** -->

            <div class="column2">
                <div class="block block2">
                    <img id="image-id" src="./images/reiki_symbol2.jpg">
                </div>
                <div class="block block10">
                    <div class="heading">
                        <span class="show-numbers">10</span>Reiki Treatments
                    </div>
                </div>

                <div class="block block12 paragraph"><span class="show-numbers">12</span>
                    Reiki sessions begin with a discussion of the process and 
                    the current issues and goals for treatment. Lying on a massage 
                    table fully clothed (or it may be done in a seated position as needed); 
                    treatment is given with hands on or slightly above the body. 
                    Reiki energy may be focused upon the chakras with an intention
                    to remove energy blockages and produce balancing, relaxation 
                    and grounding.
                </div>

                <div class="block block14"><span class="show-numbers">14</span>
                    Everyone’s healing process is unique. How one experiences a
                    Reiki treatment can vary. Some people may not feel anything 
                    distinct; others may feel sensations of heat, coolness, or tingling. 
                    Some may experience an intense emotional release, while others 
                    may feel a deep sense of relaxation or even fall asleep.
                    Reiki is not a substitute for medical or psychological treatment.            
                </div>

                <div class="block block11">
                    <div class="heading">
                        <span class="show-numbers">11</span>The Five Reiki Principles
                    </div>
                </div>
                <div class="block block13">
                    <ul class="paragraph">
                        <li><span class="show-numbers">13</span>Just for today, do not worry.</li>
                        <li>Just for today, do not anger.</li>
                        <li>Honor your parents, teachers, and elders.</li>
                        <li>Earn your living honestly.</li>
                        <li>Show gratitude for every living thing.</li>
                    </ul>
                </div>

                <div class="block block16 heading"></div>
                <div class="block block18 heading"></div>
            </div>

            <div class="appointment-block">
                <?php require "./includes/appointment.php" ?>
            </div>
        </main>
        <br><br>
        <div class="quote2"> 
            May you know the joy of living your own true nature.
        </div>
        <br><br>
        <?php require 'footer.php' ?>

        <script>
            function myResize() {
//                var size = $(window).width();
//                if (size < 1000) {
//                    $('#image-id').attr('src', './images/reiki_symbol2.jpg');
//                } else if (size < 800) {
//                    $('#image-id').attr('src', './images/reiki_symbol3.jpg');
//                } else {
//                    $('#image-id').attr('src', './images/reiki_symbol1.jpg');
//                }
            }
        </script>
            <script>
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
            </script>

    </body>
</html>