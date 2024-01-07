<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Wil's Portfolio</title>
<link rel="shortcut icon" href="Logo.ico"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Varela Round' rel='stylesheet'>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">

</head>
<style>
* {font-family: Varela Round;}

::-webkit-scrollbar {
    width: 0px;
    height: 0px;
}

.audio-player {
    width: 20rem;
    margin: 1.5rem;
}

.controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
}

.progress {
    height: 1rem;
    background-color: white;
    margin-top: 1rem;
}

.progress-bar {
    width: 0;
    height: 100%;
    background-color: #8b0000;
}

#current-time, #total-time {
    margin-top: 0rem;
}


</style>
<body>

<nav class="navbar navbar-expand-lg py-3 navbar-dark" style="background-color: black;">

    <div class="container-fluid">

        <a href="#" class="navbar-brand p-0 px-5 mx-4" style="border: 2px solid white!important; font-size: 2rem !important; font-family: 'Kanit', sans-serif;">Wil-Code</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto">

                <a href="home.php" class="nav-item nav-link mx-5" style="color: gray !important;">Home</a>

                <a href="samples.php" class="nav-item nav-link active mx-5" style="color: #8b0000 !important;">Samples</a>

                <a href="studio.php" class="nav-item nav-link mx-5" style="color: gray !important;">Studio</a>

               <a href="contact.php" class="nav-item nav-link mx-5" style="color: gray !important;">Contact</a>

            </div>

        </div>

    </div>

</nav>
<!-- <div style="height: 64.5vh; background-color: blue; background-image: url('Banner.png');"></div> -->

<h1 class="d-flex justify-content-center mt-5" style="font-family: 'Great Vibes', cursive; font-size: 19vmin; margin-bottom: 3rem;">Samples</h1>
<div style="height: 64.5vh; background-color: #8b0000; padding: 2rem;">
<div class="container text-center d-flex justify-content-center" style="margin-top: 5rem;">

<div class="row d-flex justify-content-center">
  
<div class="fading-bg col-sm d-flex justify-content-center m-4 align-middle" style="height: 10rem;">
        <div class="audio-player" style="background-image: url(ftb.png); height: 100%; background-repeat: repeat-x; border-radius: 0.3rem; opacity: 0.9; border: solid white 0.1rem;">
            <audio class="audio" controls style="display:none">
                <source src="Audio1.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <div class="controls mb-5">
				<h5 class="mx-4" style="float: left; color: white; font-size: 0.9rem;">DVRST Close Eyes</h5>
                <button style="border: none; background-color: transparent; color: white; font-size: 1.3rem !important;" class="mx-4 mb-2 play-pause-button">⏵</button>
            </div>

            <div class="time-display-container">
                <div class="mx-4 time-display" style="float: left; color: white;">0:00</div>
                <div class="mx-4 time-display" style="float: right; color: white;">2:13</div>
            </div>
            <br>
            <div class="progress mx-4" style="height: 0.01rem;">
                <div class="progress-bar"></div>
            </div>
        </div>
    </div>

    <!-- Repeat the structure for other players -->

    <script src="script.js"></script>
	
<div class="fading-bg col-sm d-flex justify-content-center m-4" style="height: 10rem;">
        <div class="audio-player" style="background-image: url(ftb.png); height: 100%; background-repeat: repeat-x; border-radius: 0.3rem; opacity: 0.9; border: solid white 0.1rem;">
            <audio class="audio" controls style="display:none">
                <source src="Audio2.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <div class="controls mb-5">
				<h5 class="mx-4" style="float: left; color: white; font-size: 0.9rem;">Interworld Metamorphosis</h5>
                <button style="border: none; background-color: transparent; color: white; font-size: 1.3rem !important;" class="mx-4 mb-2 play-pause-button">⏵</button>
            </div>

            <div class="time-display-container">
                <div class="mx-4 time-display" style="float: left; color: white;">0:00</div>
                <div class="mx-4 time-display" style="float: right; color: white;">2:23</div>
            </div>
            <br>
            <div class="progress mx-4" style="height: 0.01rem;">
                <div class="progress-bar"></div>
            </div>
        </div>
    </div>

    <!-- Repeat the structure for other players -->

    <script src="script.js"></script>
	
<div class="fading-bg col-sm d-flex justify-content-center m-4" style="height: 10rem;">
        <div class="audio-player" style="background-image: url(ftb.png); height: 100%; background-repeat: repeat-x; border-radius: 0.3rem; opacity: 0.9; border: solid white 0.1rem;">
            <audio class="audio" controls style="display:none">
                <source src="Audio3.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <div class="controls mb-5">
				<h5 class="mx-4" style="float: left; color: white; font-size: 0.9rem;">thefatrat Xen</h5>
                <button style="border: none; background-color: transparent; color: white; font-size: 1.3rem !important;" class="mx-4 mb-2 play-pause-button">⏵</button>
            </div>

            <div class="time-display-container">
                <div class="mx-4 time-display" style="float: left; color: white;">0:00</div>
                <div class="mx-4 time-display" style="float: right; color: white;">3:52</div>
            </div>
            <br>
            <div class="progress mx-4" style="height: 0.01rem;">
                <div class="progress-bar"></div>
            </div>
        </div>
    </div>

    <!-- Repeat the structure for other players -->

    <script src="script.js"></script>
	
</div>

  
</div>

<div class="fixed-bottom" style="">
    <hr>

    <footer>

        <div class="row" style="--bs-gutter-x: 1.5rem !important;">

            <div class="col-md-6 px-5">

                <p>Copyright © 2023 EmptyRaider101</p>

            </div>

            <div class="col-md-6 text-md-end px-5">

                <a href="tou.php" class="text-dark">Terms of Use</a>

                <span class="text-muted mx-2">|</span>

                <a href="pp.php" class="text-dark">Privacy Policy</a>

            </div>

        </div>

    </footer>

</div>

</body>

</html>