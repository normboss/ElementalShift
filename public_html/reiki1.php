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
        <link href="./css/reiki1.css" media="screen" rel="stylesheet" type="text/css">
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
            <p>
                <img id="image-id" src="./images/reiki_symbol2.jpg">
                Reiki (pronounced ray-key) is a powerful, yet subtle and gentle form of energy healing. 
                The Japanese term is made up of Rei, meaning “Divine Intelligence”, and Ki, “Life Force Energy”, 
                and can be translated as “Divinely guided healing energy of the Universe.” 
                Reiki is essentially a method of concentrating this energy so that we can more directly 
                and effectively experience its’ benefits.
                <br>
                We all have the capacity to support our own healing. Reiki promotes healing on the 
                physical, mental, emotional, and spiritual levels by working with the body’s natural 
                inclination to heal. It can help us to release energy blockages as well as emotional 
                patterns that no longer serve us.
                <br>
            </p>

            <div class="block block3">
                <div class="heading">Reiki Can Help</div>
                <ul>
                    <li>Increase energy and sense of well-being</li>
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

            </div>

                <br>
            <div class="heading">The Five Reiki Principles</div>
            <ul>
                <li>Just for today, do not worry.</li>
                <li>Just for today, do not anger.</li>
                <li>Honor your parents, teachers, and elders.</li>
                <li>Earn your living honestly.</li>
                <li>Show gratitude for every living thing.</li>
            </ul>


        <div class="block block5">
            <div class="heading">Reiki Treatments</div>
            Reiki sessions begin with a discussion of the process and the current issues and goals for treatment. Lying on a massage table fully clothed (or it may be done in a seated position as needed); treatment is given with hands on or slightly above the body. Reiki energy may be focused upon the chakras with an intention to remove energy blockages and produce balancing, relaxation and grounding.
            Everyone’s healing process is unique. How one experiences a Reiki treatment can vary. Some people may not feel anything distinct; others may feel sensations of heat, coolness, or tingling. Some may experience an intense emotional release, while others may feel a deep sense of relaxation or even fall asleep.
            Reiki is not a substitute for medical or psychological treatment.
        </div>

                <?php require "./includes/appointment1.php" ?>
    </main>
    <br><br>
    <div class="quote2"> 
        May you know the joy of living your own true nature.
    </div>
    <br><br>
    <?php require 'footer.php' ?>

    <script>
        function myResize() {
            var size = $(window).width();
                if (size < 1000) {
                    $('#image-id').attr('src', './images/reiki_symbol3.jpg');
                } else if (size < 800) {
                    $('#image-id').attr('src', './images/reiki_symbol4.jpg');
                } else if (size < 600) {
                    $('#image-id').attr('src', './images/reiki_symbol5.jpg');
                } else {
                    $('#image-id').attr('src', './images/reiki_symbol2.jpg');
                }
        }
    </script>

</body>
</html>