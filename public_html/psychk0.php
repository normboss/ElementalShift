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
        <link href="./css/psychk0.css" media="screen" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
        <script>
            //      $(function () {
            //        $("#header").load("header.html");
            //        $("#footer").load("footer.html");
            //      });
        </script> 

    </head>
    <body>

        <!--<header id="header"></header>-->
        <?php require 'header.php' ?>

        <main>

            <!--      <div class="header">
                    PSYCH-K a way to wholeness
                  </div>-->
            <div class="header-image">
                <!--<img src="./images/psych_header2.jpg">-->
            </div>

            <div class="decisions-and-struggle">
                <div class="header">
                    Are you making decisions that seem opposed to what&nbsp;you&nbsp;want?
                </div>
                <br>
                <div class="paragraph">
                    Research indicates that it is our subconscious beliefs that can hold us back from reaching our goals and lead to self-sabotaging behaviors. PSYCH-K works
                    with the power of the subconscious for tangible results.
                </div>
                <br>
                <!--</div>-->

                <!--<div class="struggle">-->
                <div class="struggle-header header">
                    Do you struggle with goals related&nbsp;to&nbsp;health, prosperity, relationships,&nbsp;self-esteem or&nbsp;weight?
                </div>
                <br>
                <div class="paragraph">
                    Stop sabotaging yourself around these issues and more. Kirsten is a skilled PSYCH-K practitioner and licensed therapist who can help you establish new, healthier patterns.
                </div>
            </div>


            <div class="trees">
                <img src="./images/tree_line.jpg">
            </div>
            
            <div class="beliefs-section"> 
                <div class="beliefs">
                    <div class="beliefs-header header">
                        Change your beliefs about what is&nbsp;possible&nbsp;for&nbsp;you. 
                    </div>
                    <div class="beliefs-body paragraph">
                        PSYCH-K uses a whole brain integration process that helps change belief
                    </div>
                </div>

                <div class="create">
                    <div class="create-header header">
                        Create new life-serving beliefs and make&nbsp;self-supporting&nbsp;choices
                    </div>
                    <div class="create-body paragraph">
                        PSYCH-K facilitates the shifting of old, unwanted patterns that have been holding you back so you can make self-supporting choices.
                    </div>
                </div>

                <div class="skill">                
                    <div class="skill-header header">
                        Let Kirsten’s skill as a therapist&nbsp;help&nbsp;you
                        </div>
                    <div class="header">
                        zero in on your goals.
                    </div>
                    <div class="skill-body paragraph">
                        <span>Kirsten’s training and experience as a PSYCH-K practitioner aids in cutting through</span>
                        <span>limiting beliefs and creating shifts in behavior. She is able to coordinate PSYCH-K with other therapies to fit your needs.</span>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="appointment-container">
                <?php require './includes/appointment1.php' ?>
            </div>
            <br><br>
            
            <div class="testimonials">
                <div class="testimonial-header header6">Testimonial</div>
                <br>
                <div class="testimonial">
                    <div class="testimonial paragraph8">
                        ”Kirsten has a holistic approach that I found refreshing and very beneficial. Kirsten primarily
                        used a blend of PSYCH-K and Feng Shui that moved me beyond a limiting belief, which had
                        been a sticking point for years while helping me to redesign my personal space to be more
                        energizing.
                    </div>
                    <div class="testimonial paragraph8">
                        I recently read Bruce Lipton’s book the Biology of Belief and was amazed to find PSYCH-K
                        was one of his preferred methods for dealing with his own limiting beliefs.” .
                        <!--<div class="signature">Gale M.</div>-->
                    </div>
                </div>
            </div>
        </main>
        <br><br><br>


        <!--<footer id="footer"></footer>-->
        <?php
        require 'footer.php'
        ?>

    </body>
</html>