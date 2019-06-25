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
    <link href="./css/chakra.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
    <script>
      //      $(function () {
      //        $("#header").load("header.html");
      //        $("#footer").load("footer.html");
      //      });
    </script> 

  </head>
  <body onresize="myResize()">


    <!--<header id="header"></header>-->
    <?php require 'header.php' ?>

    <div class="header-image">
      <div class="chakra-page">
        <br>
        <span>Clear </span><span> & </span><span>Balance</span>
        <span>Your</span>
        <span>Chakras</span>
      </div>
    </div>

    <main>
      <div class="lone-section">
        <div class="chakras-paragraph">
          <span class="chakras-word">Chakras </span>are spinning energy vortexes responsible for 
          processing and storing significant emotional life experiences. When balanced they can optimally 
          support our health and be a reservoir of information about how we move through life.
        </div>
      </div>

      <div class="upper-section">
        <div class="chakras-header">
          Chakra balancing sessions
        </div>        
        <div class="chakras-paragraph">
          Chakra Clearing and Balancing is a technique developed by Donna Eden,
          creator of <a href="http://www.innersource.net/innersource/">Eden Energy Medicine</a>.
        </div>
        <div class="chakras-paragraph">
          Sessions are sixty minutes experienced lying on a massage table, fully clothed. 
          A discussion to discern any health or emotional stressors, and any specific goals begins the session. 
          This is followed by a gentle energy balance that is designed to move you into a state of deep 
          relaxation and allow your body to open to transformation in a harmonious way.
        </div>
        <div class="chakras-paragraph">
          The experience may be simply peaceful and relaxing, it can also be highly symbolic 
          and stimulating of creativity. In order to integrate changes, simple exercises to practice 
          at home may be recommended.
        </div>            
        <div class="relaxation chakras-header">Promote health</div>
        <div class="chakras-paragraph">
          Chakras help influence different hormones. They also serve to energize the vital organs. 
          Clearing and balancing helps with regulation of body chemistry and strengthens overall health.
        </div>
        <div class="chakras-header">
          Deepen awareness
        </div>
        <div class="chakras-paragraph">
          Chakras hold and process energy related to major life themes. Connecting into our chakras 
          can help identify patterns that may be holding us back form living our fullest potential. 
          Bringing these patterns to conscious awareness can help us gently let them go. 
          Chakra clearing provides an opportunity to reconnect with parts of ourselves that
          because of outworn habits may have been closed off to us.
        </div>            
        <br>
      </div>            
      <br>

      <div class="lone-section">
        <div class="chakras-header">Themes of the seven major chakras
        </div>
        <div class="chakras-paragraph">
          When we tune into the energy of our Chakras we may uncover new vital understanding
          of the course of our journey through life.
        </div>
      </div>
      <br>

      <div class="lower-section">
        <div class="mandala-image">
          <img src="./images/mandala3.jpg">
        </div>
        <div class="copy">
          <span class="root-chakra">Root Chakra: </span> <span>instinct, the urge for life</span>
          <span class="womb-chakra">Womb Chakra: </span><span>creativity, joy, intuition</span>
          <span class="solar-plexus-chakra">Solar Plexus Chakra: </span><span> identity and power</span>
          <span class="heart-chakra">Heart Chakra: </span><span> love and connection</span>
          <span class="throat-chakra">Throat Chakra: </span><span> integration of information and expression</span>
          <span class="third-eye-chakra">Third Eye Chakra: </span><span> insight, vision, extra sensory perception</span>
          <span class="crown-chakra">Crown Chakra: </span><span> spiritual connection</span>
        </div>
      </div>

    </main>
    <br><br>
    <?php require "./includes/appointment.php" ?>
    <br>
    <?php require 'footer.php' ?>

    <script>
//            const i1 = document.getElementById("chakra-image1");
//            const i2 = document.getElementById("chakra-image2");
//            const i3 = document.getElementById("chakra-image3");
//            const i4 = document.getElementById("chakra-image4");
//            const i5 = document.getElementById("chakra-image5");
//            const i6 = document.getElementById("chakra-image6");
//            i1.style.display = "block";
//            i2.style.display = "none";
//            i3.style.display = "none";
//            i4.style.display = "none";
//            i5.style.display = "none";
//            i6.style.display = "none";
//            var lastState = 0;
//            var state = 1;
//
//            function myResize() {
//                var size = $(window).width();
//                if (size >= 1400) {
//                    state = 1;
//                } else if (size < 1400 && size >= 1000) {
//                    state = 2;
//                } else if (size < 1000 && size >= 750) {
//                    state = 3;
//                } else if (size < 750 && size >= 500) {
//                    state = 4;
//                } else if (size < 500 && size >= 400) {
//                    state = 5;
//                } else if (size < 400) {
//                    state = 6;
//                } else {
//                    state = 6;
//                }
//                if (state == lastState)
//                    return;
//
//                i1.style.display = "none";
//                i2.style.display = "none";
//                i3.style.display = "none";
//                i4.style.display = "none";
//                i5.style.display = "none";
//                i6.style.display = "none";
//                switch (state) {
//                    case 1:
//                        i1.style.display = "block";
//                        break;
//                    case 2:
//                        i2.style.display = "block";
//                        break;
//                    case 3:
//                        i3.style.display = "block";
//                        break;
//                    case 4:
//                        i4.style.display = "block";
//                        break;
//                    case 5:
//                        i5.style.display = "block";
//                        break;
//                    case 6:
//                        i6.style.display = "block";
//                        break;
//                }
//            }
    </script>

  </body>
</html>
