<?php
session_start();
$status = $_SESSION['status'] ?? '';
unset($_SESSION['status']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portfolio website showcasing illustrations, web development, and skills.">
    <meta name="author" content="DFSquid">
    <link rel="icon" href="/Personal_Portfolio/api/src/img/451306160_1311454363592515_8502308035295985978_n.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/Personal_Portfolio/api/src/css/style.css">
    <link rel="stylesheet" href="/Personal_Portfolio/api/src/css/media-queries.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/dheereshagrwal/coloured-icons@1.9.4/src/app/ci.min.css" />
    <title>DFSquiddd</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Short+Stack&display=swap');
    @import url('https://fonts.cdnfonts.com/css/andy-pro');

    /*
Fonts' CDN Imports
*/

    :root {
        --background-color: #0A000C;
        --button-hover-background-color: #1e0024;
        --border-radius: 40px;
        --card-contents-margin-left: 5rem;
    }

    * {
        font-family: 'Short Stack', Short-Stack;
    }

    html {
        scroll-behavior: smooth;
        /* overflow: hidden; */
        user-select: none;
    }

    body {
        background-color: var(--background-color);
        margin: 2rem 3rem 0rem 3rem;
    }

    .navbar-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar-contents {
        display: flex;
        gap: 40px;
    }

    .navbar-contents button {
        background: none;
        border: none;
    }

    .navbar-contents button:hover,
    .music-toggle-container button:hover {
        /*TODO: DO THIS*/
        animation: navbarIconHover 0.3s ease-in-out forwards;
    }

    @keyframes navbarIconHover {
        100% {
            cursor: pointer;
            transform: scale(1.1);
        }
    }

    #hours,
    #minutes,
    #colon {
        font-size: clamp(2rem, 4vw, 4rem);
    }

    #seconds {
        font-size: clamp(2rem, 2vw, 2rem);
    }

    .card-container {
        /**Positions the Card in the middle*/
        position: absolute;
        top: 50%;
        left: 50%;
        translate: -50% -50%;
    }

    .card {
        /**the card itself*/
        border: solid white 2px;
        border-radius: var(--border-radius);
        color: white;
        background-color: var(--background-color);
        width: clamp(1rem, 80vw, 1316px);
        height: clamp(1rem, 70vh, 654px);
        position: relative;
    }

    /* .card-contents-container {
} */

    .contact-container {
        display: flex;
        align-items: center;
        justify-content: end;
        margin: 1.5rem 2rem 0rem 0rem;
    }

    .contact-container button {
        padding: 5px 6px 4px 6px;
        border: 1px solid white;
        box-shadow: 2px 3px white;
        border-radius: 19px;
        background: none;
        cursor: pointer;
    }

    .contact-container button:active {
        box-shadow: none;
        transform: translate(2px, 3px);
    }

    .myname-container {
        display: flex;
        align-items: center;
        max-width: 40rem;
        /* margin: 0rem 35rem 0rem; */
        margin: 3rem 0rem 0rem var(--card-contents-margin-left);
        translate: 0px -45px;
        height: 100px;
    }

    .myname-container #hi {
        justify-content: center;
        font-family: Poppins, Poppins-Bold;
        font-weight: 700;
        /* font-size: 4.5rem; */
        font-size: clamp(3rem, 3.5vw, 4rem);
        font: clamp(1rem, );
        color: transparent;
        -webkit-text-stroke: 1px rgb(255, 255, 255);
    }

    .myname-container #name2 {
        font-size: clamp(3.5rem, 4vw, 5rem);
        font-family: 'Andy Pro';
        color: white;
        height: 100px;
    }

    .myname-container #aka-name,
    .myname-container a {
        /*container of aka DFSquid*/
        font-size: 20px;
        text-decoration: underline;
        text-underline-offset: 5px;
    }

    .myname-container #aka-name a,
    /*DFSquid w/ underline*/
    .myname-container a {
        text-decoration: none;
    }

    .skill-set-container {
        /* margin: 0rem 35.1rem 0rem; */
        max-width: 40rem;
        margin-left: var(--card-contents-margin-left);
        translate: 0.1rem -4rem;
    }

    .skill-set-container p {
        font-size: clamp(1rem, 1vw, 1.1rem);
    }

    .description-container {
        /* margin: 0rem 37.8rem 0rem; */
        max-width: 41rem;
        margin-left: var(--card-contents-margin-left);
        translate: 0rem -1.5rem;

    }

    .description-container p {
        font-size: clamp(1rem, 1.1vw, 1.2rem);
    }

    .my-skills-container {
        display: flex;
        gap: 20px;
        /* margin: 0rem 42.9rem 0rem; */
        margin-left: var(--card-contents-margin-left);
        /* translate: 0rem -4rem; */
    }

    .my-skills-container button {
        display: flex;
        gap: 10px;
        align-items: center;
        justify-content: center;
        background: none;
        font-size: clamp(.1rem, 1vw, 1rem);
        color: white;
        border: 1px solid white;
        border-radius: 50px;
        box-shadow: 2px 3px white;
        padding: .1em 1em .1em .8em;
        cursor: pointer;
    }

    /*every button hovering animations*/
    .my-skills-container button:hover,
    .contact-container button:hover,
    #close-contact-modal:hover,
    #email-done-button:hover,
    #close-development-modal:hover,
    #close-illustrations-modal:hover,
    #close-skills-modal:hover,
    .emailSentPopup-contents button:hover {
        animation-name: button-hover;
        animation-duration: 0.3s;
        animation-timing-function: ease-in-out;
        animation-fill-mode: forwards;
        background-color: var(--button-hover-background-color);
        cursor: pointer;
    }

    /*animation for buttons*/
    @keyframes button-hover {
        100% {
            transform: translate(0rem, -0.2rem);
        }
    }

    /*every button pressing animations*/
    .my-skills-container button:active,
    .contact-container button:active,
    #close-contact-modal:active,
    #email-done-button:active,
    #close-development-modal:active,
    #close-illustrations-modal:active,
    #close-skills-modal:active,
    .emailSentPopup-contents button:active {
        animation-name: active-animation;
        animation-duration: 0.1s;
    }

    /*animation when pressing buttons*/
    @keyframes active-animation {
        50% {
            box-shadow: none;
            transform: translate(2px, 3px);
        }
    }

    .profile-picture-container {
        position: fixed;
        margin: 0rem 5rem 0rem 50rem;
        display: span;
        align-items: center;
        justify-content: flex-end;
        translate: 0rem -26rem;
    }

    .profile-picture-container img {
        max-width: 100%;
        border: 5px solid white;
        border-radius: 50%;
        width: 425px;
        height: 425px;
    }

    .footer-container {
        display: flex;
        justify-content: center;
        align-items: center;
        translate: 0vw 81vh;
    }

    .footer-container i {
        color: white;
        font-weight: 100;
        font-family: Poppins;
        font-size: 13px;
    }

    .credit {
        color: white;
        font-weight: 200;
        font-family: Poppins;
        font-size: clamp(0.4rem, 0.8vw, 1rem);
    }

    .music-toggle-button {
        border: none;
        background: none;
        padding: 0.5%;
    }

    .music-toggle-button:active {
        background: none;
    }























    /*Modal Design Section*/

    .modal-container {
        display: flex;
        justify-content: center;
    }

    /* Put Message Me modal here */

    #contact-modal-card {
        display: none;
        /*default value - to hide the modal*/
        background-color: var(--background-color);
        border-radius: var(--border-radius);
        border: 2px solid white;
        box-shadow: 3px 3px rgba(255, 255, 255, 0.517);
        width: 900px;
        height: 777px;
    }

    .modal-card {
        display: none;
        /*default value - to hide the modal*/
        z-index: 10;
        background-color: var(--background-color);
        border-radius: var(--border-radius);
        border: 2px solid white;
        box-shadow: 3px 3px rgba(255, 255, 255, 0.517);
        width: 1090px;
        height: 725px;
        position: fixed;
    }

    .modal-card.show,
    .emailSentPopup.show {
        animation: scaleIn 0.3s ease forwards;
    }

    @keyframes scaleIn {

        /*opening animation for modal*/
        0% {
            transform: scale(0.5);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .modal-card.hide,
    .emailSentPopup.hide {
        animation: scaleOut 0.3s ease forwards;
    }

    @keyframes scaleOut {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        100% {
            transform: scale(0.1);
            opacity: 0;
        }
    }

    .modal-header-frame {
        /*Modal's Window Effect*/
        /*Modal Headers*/
        /* background-color: rgb(44, 0, 47); */
        border-bottom: 2px solid white;
        border-top-left-radius: 36px;
        border-top-right-radius: 36px;

    }

    .modal-heading-contents {
        color: rgb(255, 255, 255);
    }

    .modal-heading-contents h1 {
        font-size: 2rem;
        translate: 3rem 4px;
    }

    .modal-heading-contents button {
        /*the close button*/
        color: white;
        background: none;
        border-radius: 0.7rem;
        border: 1px solid white;
        box-shadow: 2px 3px;
        padding: 8px 20px 8px 20px;
        font-size: 1rem;
        font-family: Poppins;
        translate: -2rem -.1rem;
    }

    .modal-heading-contents button:active {
        animation-name: active-animation;
        /*this is an animation from above used by skillset-buttons*/
        animation-duration: 0.1s;
    }

    .modal-contents-container {
        /* ! do not edit (shared container among modals)*/

        /* 
        ! Modal Contents 'Margin' for all modal contents
    */

        margin: 1rem;
        color: white;
        /*Text color inside of all modals*/
    }

    .contact-fieldset {
        display: flex;
        flex-direction: column;
        gap: 1.2rem;
        border: none;
        /*fieldset element has a border, remove it before you lose your sanity*/
    }

    .contact-fieldset>div:last-child {
        /*only targets the textarea div (it's the 3rd child of the fieldset*/
        margin-top: 1.5rem;
    }

    .contact-contents label {
        font-size: 1.4rem;
    }

    .contact-contents input {
        padding: 0.5rem 0.5rem 0.5rem 1rem;
        border-radius: 10px;
        border: none;
        font-size: 1rem;
    }

    .contact-contents input:focus {
        outline: none;
        /*it's 'outline: none;' not 'border: none;'"*/
    }

    .contact-contents textarea {
        border-radius: 10px;
        padding: 0.5rem 0.5rem 0.5rem 1rem;
        font-size: 1rem;
        width: 51rem;
        height: 16rem;
        resize: none;
    }

    .contact-contents textarea:focus {
        outline: none;
    }

    .done-email-button-container {
        display: flex;
        justify-content: flex-end;
    }

    #email-done-button {
        color: white;
        padding: 0.7rem;
        border: 1px solid white;
        box-shadow: 2px 3px white;
        border-radius: 19px;
        background: none;
        cursor: pointer;
        font-size: 1rem;
        translate: -0.9em;
    }

    .emailSentPopup {
        /*the card itself*/

        display: none;
        flex-direction: column;
        gap: 0px;

        border: 2px solid white;
        border-radius: 36px;
        position: fixed;
        top: 0;
        left: 0;
        width: 30vw;
        height: 30vh;
        translate: 110% 110%;
        background: var(--background-color);
    }

    .emailSentPopup-contents {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 1.2em 0em 0em 0em;
    }

    .emailSentPopup-contents p,
    h1 {
        color: rgb(255, 255, 255);
        text-align: center;
    }

    .emailSentPopup-contents button {
        color: white;
        background: none;
        border-radius: 0.7rem;
        border: 1px solid white;
        box-shadow: 2px 3px;
        padding: 8px 20px 8px 20px;
        font-size: 1rem;
        font-family: Short Stack;
    }

    #drawings-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5em;
        overflow: auto;
        max-height: 37em;
        text-align: center;
    }

    #drawings-container img {
        border-radius: 15px;
    }

    ::-webkit-scrollbar {
        background: none;
        border: 2px solid white;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: none;
        border: 2px solid white;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: rgb(44, 44, 44);
    }
</style>

<body>

    <nav class="navbar-container">
        <div class="navbar-contents">

            <button id="sound-toggle-button">
                <img src="/Personal_Portfolio/api/src/img/volume_mute_48dp_EFEFEF_FILL0_wght400_GRAD0_opsz48.png" alt="" id="soundIcon">
            </button>

            <audio id="lofiMusic">
                <source src="/Personal_Portfolio/api/src/audios/Colorful-Flowers(chosic.com).mp3" type="audio/mp3">
            </audio>

        </div>

        <div style="color: white; font-family: 'Short Stack'; font-weight: 400">
            <!--digital clock-->
            <span id="hours">00</span>
            <span id="colon">:</span>
            <span id="minutes">00</span>
            <span id="seconds">00</span>
            <span id="session">AM</span>
        </div>
    </nav>






    <!--MODALS SECTION-->

    <div class="modal-container">
        <div id="contact-modal-card" class="modal-card">

            <div class="modal-header-frame"> <!--This is the Header Frame-->

                <div class="modal-heading-contents"
                    style="display: flex;  align-items:center; justify-content: space-between; gap: 20vw; ">

                    <h1> contact me (˶˃ ᵕ ˂˶)</h1>
                    <button id="close-contact-modal">CLOSE</button>

                </div>

            </div>

            <div class="modal-contents-container"> <!--Start of Modal Contents-->

                <div class="contact-contents">

                    <form action="sendmail.php" method="post">
                        <fieldset class="contact-fieldset">

                            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 25rem; gap: 5px;">
                                <label for="Name">Your Name:</label>
                                <input type="text" name="name" id="Name" placeholder="John Doe" autocomplete="off" required>
                            </div>

                            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 25rem; gap: 5px;">
                                <label for="Email">Email Address:</label>
                                <input type="email" name="email" id="Email" placeholder="example@gmail.com" autocomplete="on" required>
                            </div>

                            <div style="display: flex; flex-direction: column; justify-content: center; max-width: 25rem; gap: 5px;">
                                <label for="Message">Message: </label>
                                <textarea name="message" id="Message" placeholder="Enter your Message here..." autocomplete="off"
                                    required></textarea>
                            </div>

                        </fieldset>

                        <div class="done-email-button-container">
                            <button type="submit" name="submitEmail" id="email-done-button">Submit Email</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>







    <!-- Modal for Developments -->
    <div class="modal-container">
        <div id="developments-modal-card" class="modal-card">

            <div class="modal-header-frame"> <!--This is the Header Frame-->

                <div class="modal-heading-contents"
                    style="display: flex;  align-items:center;justify-content: space-between; gap: 20vw; ">

                    <h1> my developments :D</h1>
                    <button id="close-development-modal">CLOSE</button>

                </div>

            </div>

            <div class="modal-contents-container"> <!--Start of Modal Contents-->

                <div style="display:flex;justify-content:center; align-items: center;">
                    <p>this is the first website i have made for myself.</p>
                </div>

                <div style="display:flex; justify-content:center; align-items: center;">
                    <p>¯\_(ツ)_/¯</p>
                </div>



            </div>

        </div>
    </div>
    <!-- End of Modal for Developments -->









    <!--Modal for Illustrations-->
    <div class="modal-container">
        <div id="illustrations-modal-card" class="modal-card">

            <div class="modal-header-frame"> <!--This is the Header Frame-->
                <div class="modal-heading-contents"
                    style="display: flex;  align-items:center; justify-content: space-between; gap: 20vw; ">

                    <h1> my Illustrations ⸜(｡˃ ᵕ ˂ )⸝♡</h1>
                    <button id="close-illustrations-modal">CLOSE</button>

                </div>
            </div>

            <div class="modal-contents-container"> <!--Start of Modal Contents-->
                <!--TODO: This is the start of the Container for contents-->
                <div id="drawings-container"> <!--temporary image sizes-->

                    <div>
                        <h1>2023-2025</h1>
                        <p style="text-align: center; margin: 0em 1em 0em 1em; translate: 0em -1em;"> this section is just a
                            vault for my drawings
                            that i did
                            months
                            and years ago, not used in any professional sectors, pure personal interests. Not all of my digital
                            drawings are
                            here
                            as they are either Commissions or pure Ugly.</p>
                    </div>
                    <p>> i drew my girls in 2025</p>
                    <img src="/Personal_Portfolio/api/src/img/myGorls.png" alt="" style="width: 800px;  height: 500px;">
                    <br>
                    <p>> i drew this one for a greek mythology themed minecraft server</p>
                    <img src="/Personal_Portfolio/api/src/img/apollo.png" alt="Apollo Digital Artwork" style=" width: 800px; height: 500px;">
                    <br>
                    <p>> im proud of this one, this is a sample of my artstyle we are going to use for our game. im progressing
                        with my anatomy XD.
                        I drew this in 2025
                    </p>
                    <img src="/Personal_Portfolio/api/src/img/Kapre.png" alt="Digital artwork of a Kapre character" style=" width: 800px; height: 500px;">
                    <br>
                    <p>> one of my cutest one yet, and one of my oc's, her name is Cora, kid version, profile since i made her.
                        2024</p>
                    <img src="/Personal_Portfolio/api/src/img/451306160_1311454363592515_8502308035295985978_n.jpg" alt=""
                        style="width: 500px;  height: 500px;">
                    <br>
                    <p>> still my cora but, with our college uniform! 2023</p>
                    <img src="/Personal_Portfolio/api/src/img/Cora - Tdel Uniform.png" alt="My OC Cora in TDEL Uniform Digital Art" style="width: 500px;  height: 800px;">
                    <br>
                    <p>> the time i learnt how to do shading from <a style="color: white;"
                            href="https://www.youtube.com/@YTartschool">Marc Brunet</a>,
                        an awesome teacher for real. 2023
                    </p>
                    <img src="/Personal_Portfolio/api/src/img/destroyer of balls.png" alt="Shading Practice Digital Art" style="width: 500px;  height: 800px;">
                    <br>
                    <p>> more shading practice. 2023</p>
                    <img src="/Personal_Portfolio/api/src/img/ffffff.png" alt="Shading Practice Digital Art" style="width: 500px;  height: 800px;">
                    <br>
                    <p>> my advanced halloween special! 2023</p>
                    <img src="/Personal_Portfolio/api/src/img/RonalsMacDonald.png" alt="Halloween Special 2023 Digital Art" style="width: 500px;  height: 800px;">
                    <br>
                    <p>> my first drawing of my oc, Cora, gives me nostalgia everytime i look at it, makes me proud of myself.
                        2023</p>
                    <img src="/Personal_Portfolio/api/src/img/sit.png" alt="OC Cora Digital Art" style="width: 500px;  height: 800px;">

                    <br>

                    <p class="credit">2025 - Del Rosario, Ernest Angelo</p>

                </div>


            </div>

        </div>
    </div>
    <!-- End of Modal for Illustrations -->







    <!-- Modal for Skills -->
    <div class="modal-container">
        <div id="skills-modal-card" class="modal-card">

            <div class="modal-header-frame"> <!--This is the Header Frame-->

                <div class="modal-heading-contents"
                    style="display: flex;  align-items:center; justify-content: space-between; gap: 20vw; ">

                    <h1> my skills ᕙ( •̀ ᗜ •́ )ᕗ</h1>
                    <button id="close-skills-modal">CLOSE</button>

                </div>

            </div>

            <div class="modal-contents-container"> <!--Start of Modal Contents-->


                <div class="skills-contents>
          <h1 style=" display: flex; align-items: center; justify-content: center; font-size: 2.5rem;">MY TOOLS &
                    LANGUAGES
                    </h1>
                    <hr>
                    <p style="display:flex; font-size: 1.1rem; text-align:center;">well yeah, these are all the languages,
                        frameworks, source control i used along the way on learning Full Stack
                        Web Development.</p>


                    <div
                        style="display: flex;flex-direction: column ;justify-content: center; align-items: center; gap: 2.5em; translate: 0em 2em;">

                        <div style="display:flex; gap: 4em;">
                            <i class="ci ci-html ci-3x"></i>
                            <i class="ci ci-css-vertical ci-4x" style="translate: 0em -0.8em;"></i>
                            <i class="ci ci-javascript ci-3x"></i>
                            <i class="ci ci-bootstrap ci-3x"></i>
                        </div>

                        <div style="display:flex; gap: 4em;">
                            <i class="ci ci-php ci-3x"></i>
                            <i class="ci ci-git ci-3x"></i>
                            <i class="ci ci-github-light ci-3x"></i>
                            <i class=" ci ci-webpack ci-3x"></i>
                            <i class="ci ci-vscode ci-3x"></i>
                        </div>

                    </div>

                </div>


            </div>

        </div>
    </div>
    <!-- End of Modal for Skills -->









    <div class="card-container">
        <!--div that centered the card-->

        <div class="card">
            <!--the card itself-->
            <div class="card-contents-container"> <!--Move all of the Card's Contents here.-->

                <!--card content -->
                <div class="contact-container">
                    <!--contact me div-->

                    <button id="contact_button">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                                fill="#FFFFFF">
                                <path
                                    d="M140-160q-24 0-42-18t-18-42v-520q0-24 18-42t42-18h680q24 0 42 18t18 42v520q0 24-18 42t-42 18H140Zm340-302L140-685v465h680v-465L480-462Zm0-60 336-218H145l335 218ZM140-685v-55 520-465Z" />
                            </svg>
                        </i>
                    </button>

                </div>



                <div class="myname-container"> <!--Name-->
                    <p id="hi">hi!, i'm <span id="name2">Ernest</span><span id="aka-name"><a
                                href="https://www.facebook.com/DFSquid">DFSquid</a></span></p>
                </div>

                <div class="skill-set-container"> <!--skill set-->
                    <p>
                        Digital
                        Illustrator | Web Developer | UI Designer</p>
                </div>


                <div class="description-container"> <!--description-->
                    <p>A<span id="strike_through">Passionate</span> web developer but sometimes, a
                        Digital
                        Artist. I like doing <span id="encircle">Drawing-like</span> designs as website designs and
                        uhh...Character Designs.
                        <span id="crossed-off">I like</span> Love
                        learning new stuff (as long as it interests me) that helps me
                        grow,
                        and makes my Projects Comically Beautiful.
                    </p>
                    <p><span id="ps1">PS: This is a Personal Project only. Developed with Vanilla</span> <span id="ps2">HTML, CSS,
                            JS, PHP,
                            and Imported
                            Libraries</span></p>
                </div>

                <div class="my-skills-container"><!--my skills container-->
                    <button id="developments_button"><i><svg xmlns="http://www.w3.org/2000/svg" height="30px"
                                viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                                <path
                                    d="M320-242 80-482l242-242 43 43-199 199 197 197-43 43Zm318 2-43-43 199-199-197-197 43-43 240 240-242 242Z" />
                            </svg></i>Developments</button>

                    <button id="illustrations_button"><i><svg xmlns="http://www.w3.org/2000/svg" height="30px"
                                viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                                <path
                                    d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-85 32-158t87.5-127q55.5-54 130-84.5T489-880q79 0 150 26.5T763.5-780q53.5 47 85 111.5T880-527q0 108-63 170.5T650-294h-75q-18 0-31 14t-13 31q0 27 14.5 46t14.5 44q0 38-21 58.5T480-80Zm0-400Zm-233 26q20 0 35-15t15-35q0-20-15-35t-35-15q-20 0-35 15t-15 35q0 20 15 35t35 15Zm126-170q20 0 35-15t15-35q0-20-15-35t-35-15q-20 0-35 15t-15 35q0 20 15 35t35 15Zm214 0q20 0 35-15t15-35q0-20-15-35t-35-15q-20 0-35 15t-15 35q0 20 15 35t35 15Zm131 170q20 0 35-15t15-35q0-20-15-35t-35-15q-20 0-35 15t-15 35q0 20 15 35t35 15ZM480-140q11 0 15.5-4.5T500-159q0-14-14.5-26T471-238q0-46 30-81t76-35h73q76 0 123-44.5T820-527q0-132-100-212.5T489-820q-146 0-247.5 98.5T140-480q0 141 99.5 240.5T480-140Z" />
                            </svg></i>Illustrations</button>

                    <button id="skills_button"><i><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960"
                                width="30px" fill="#FFFFFF">
                                <path
                                    d="M317-160q-8 0-15-4t-11-11l-84-150h71l42 80h90v-30h-72l-42-80H191l-63-110q-2-4-3-7.5t-1-7.5q0-2 4-15l63-110h105l42-80h72v-30h-90l-42 80h-71l84-150q4-7 11-11t15-4h118q13 0 21.5 8.5T465-770v175h-85l-30 30h115v130h-98l-39-80h-98l-30 30h108l40 80h117v215q0 13-8.5 21.5T435-160H317Zm208 0q-13 0-21.5-8.5T495-190v-215h117l40-80h108l-30-30h-98l-39 80h-98v-130h115l-30-30h-85v-175q0-13 8.5-21.5T525-800h118q8 0 15 4t11 11l84 150h-71l-42-80h-90v30h72l42 80h105l63 110q2 4 3 7.5t1 7.5q0 2-4 15l-63 110H664l-42 80h-72v30h90l42-80h71l-84 150q-4 7-11 11t-15 4H525Z" />
                            </svg></i>Skills</button>
                </div>

            </div>

            <div class="profile-picture-container"> <!--Profile Picture-->
                <img src="/Personal_Portfolio/api/src/img/DFSquid-Profile.png" alt="DFSquid Profile Picture" title="Pen Profile Picture">
            </div>

        </div>
    </div>







    <footer class="footer-container">

        <div style="display: flex; align-items: center;">

            <i style="margin-top: 4px">
                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                    <path
                        d="M408-312h144q20.4 0 34.2-13.8Q600-339.6 600-360v-72h-72v48h-96v-192h96v48h72v-72q0-20.4-13.8-34.2Q572.4-648 552-648H408q-20.4 0-34.2 13.8Q360-620.4 360-600v240q0 20.4 13.8 34.2Q387.6-312 408-312Zm72.28 216Q401-96 331-126t-122.5-82.5Q156-261 126-330.96t-30-149.5Q96-560 126-629.5q30-69.5 82.5-122T330.96-834q69.96-30 149.5-30t149.04 30q69.5 30 122 82.5T834-629.28q30 69.73 30 149Q864-401 834-331t-82.5 122.5Q699-156 629.28-126q-69.73 30-149 30Zm-.28-72q130 0 221-91t91-221q0-130-91-221t-221-91q-130 0-221 91t-91 221q0 130 91 221t221 91Zm0-312Z" />
                </svg>
            </i>

            <p class="credit">2025 - Del Rosario, Ernest Angelo</p>
        </div>

    </footer>



    <div id="email-sent-modal-container"> <!--use this to move the whole modal around without affecting the elements-->
        <div id="emailSentPopupId" class="emailSentPopup"> <!--the modal card itself-->

            <div class="emailSentPopup-contents">

                <h1 style="font-size: 3rem; height: 5vh;">Email Sent!</h1>
                <p style="translate: 0em -0.5em">Your Email has been sent, I'll get to you as soon as I'm available!</p>
                <button id="close-btn-emailSentPopupId">Okay!</button>

            </div>

        </div>
    </div>


    <audio id="openClickSound">
        <source src="/Personal_Portfolio/api/src/audios/button-click-open.mp3">
    </audio>

    <audio id="closeClickSound">
        <source src="/Personal_Portfolio/api/src/audios/button-click-close.mp3">
    </audio>

    <audio id="emailSentSound">
        <source src="/Personal_Portfolio/api/src/audios/emailSentSound.mp3">
    </audio>

</body>

<script src="/Personal_Portfolio/api/src/js/script.js"></script>
<script src="/Personal_Portfolio/api/src/js/clock.js"></script>
<script src="/Personal_Portfolio/api/srcc/js/drag-modals.js"></script>
<script src="https://unpkg.com/rough-notation/lib/rough-notation.iife.js"></script>

<script>
    let backgroundVideo = document.getElementById("backgroundVideo");

    let lofiMusic = document.getElementById("lofiMusic");
    let soundToggleButton = document.getElementById("sound-toggle-button");
    let icon = document.getElementById("soundIcon");

    soundToggleButton.onclick = function() {
        if (lofiMusic.paused) {
            lofiMusic.volume = 0.1;
            lofiMusic.play();
            icon.src = "/Personal_Portfolio/api/src/img/volume_up_48dp_EFEFEF_FILL0_wght400_GRAD0_opsz48.png";
        } else {
            lofiMusic.pause();
            icon.src = "/Personal_Portfolio/api/src/img/volume_mute_48dp_EFEFEF_FILL0_wght400_GRAD0_opsz48.png";
        }
    }
</script>

<script>
    const openClickSound = document.getElementById("openClickSound");
    const closeClickSound = document.getElementById("closeClickSound");
    let buttons = ["sound-toggle-button", "contact_button", "developments_button", "illustrations_button", "skills_button", "email-done-button"];
    let closeButtons = ["close-contact-modal", "close-development-modal", "close-illustrations-modal", "close-skills-modal", "close-btn-emailSentPopupId"];

    buttons.forEach(id => {
        let button = document.getElementById(id);
        button.addEventListener('click', () => {
            openClickSound.volume = 0.1;
            openClickSound.play();
        });
    });

    closeButtons.forEach(id => {
        let closeButton = document.getElementById(id);
        closeButton.addEventListener('click', () => {
            closeClickSound.volume = 0.1;
            closeClickSound.play();
        });
    });
</script>

<script>
    // Rought-notations

    const annotate = RoughNotation.annotate;
    const annotationGroup = RoughNotation.annotationGroup;

    const underline1 = document.querySelector('#ps1');
    const underline2 = document.querySelector('#ps2');
    const strike_through = document.querySelector('#strike_through');
    const circle = document.querySelector('#encircle');
    const crossed = document.querySelector('#crossed-off');

    const ps1 = annotate(underline1, {
        type: 'underline',
        color: 'white',
        padding: -1,
        animationDuration: 1600
    });
    const ps2 = annotate(underline2, {
        type: 'underline',
        color: 'white',
        padding: -1,
        animationDuration: 1600
    });
    const psGroup = annotationGroup([ps1, ps2]);
    const Dedicated = RoughNotation.annotate(strike_through, {
        type: 'strike-through',
        color: 'white',
        padding: -1,
        animationDuration: 1500
    });
    const Drawing_like = RoughNotation.annotate(circle, {
        type: 'circle',
        color: 'white',
        animationDuration: 2000
    });
    const crossed_off = RoughNotation.annotate(crossed, {
        type: 'crossed-off',
        color: 'white',
        padding: 7,
        animationDuration: 3000
    });

    psGroup.show();
    Dedicated.show();
    Drawing_like.show();
    crossed_off.show();
</script>


<script>
    let emailSentSound = document.getElementById("emailSentSound");
    const status = <?= json_encode($status) ?>; // the message variable is from the php at the top of this file

    const emailSentPopupId = document.getElementById("emailSentPopupId");

    if (status !== '') {
        setTimeout(() => {
            emailSentSound.volume = 0.1;
            emailSentSound.play();
            emailSentPopupId.style.display = "block";
            emailSentPopupId.classList.add("show");
        }, 100);
    }

    document.getElementById("close-btn-emailSentPopupId").addEventListener('click', function(e) {
        e.preventDefault();

        emailSentPopupId.classList.remove("show");
        emailSentPopupId.classList.add("hide");

        setTimeout(() => {
            emailSentPopupId.style.display = "none";
            emailSentPopupId.classList.remove("hide");
        }, 400);

    });
</script>

</html>