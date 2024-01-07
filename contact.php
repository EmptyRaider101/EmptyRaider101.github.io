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

                <a href="samples.php" class="nav-item nav-link active mx-5" style="color: gray !important;">Samples</a>

                <a href="studio.php" class="nav-item nav-link mx-5" style="color: gray !important;">Studio</a>

               <a href="contact.php" class="nav-item nav-link mx-5" style="color: #8b0000 !important;">Contact</a>

            </div>

        </div>

    </div>

</nav>
<!-- <div style="height: 64.5vh; background-color: blue; background-image: url('Banner.png');"></div> -->

<h1 class="d-flex justify-content-center mt-5" style="font-family: 'Great Vibes', cursive; font-size: 19vmin; margin-bottom: 0rem;">Contact</h1>
<div style="height: 64.5vh; background-color: #8b0000; padding: 2rem;">
<div class="container text-center d-flex justify-content-center mb-5"><a href="https://x.com/wil_code_va?s=21" target="_blank"><svg style="color: black; margin: 0.5rem; background-color: white; padding: 0.3rem; border-radius: 50%;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
</svg></a><a href="https://youtube.com/@Wil-CodeVA" target="_blank"><svg style="color: black; margin: 0.5rem; background-color: white; padding: 0.3rem; border-radius: 50%;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408z"/>
</svg></a><a href="https://discord.gg/wTxjATqM32" target="_blank"><svg style="color: black; margin: 0.5rem; background-color: white; padding: 0.3rem; border-radius: 50%;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
  <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612"/>
</svg></a><a href="https://www.tiktok.com/@wil.code?_t=8ihrj1fVV1i&_r=1" target="_blank"><svg style="color: black; margin: 0.5rem; background-color: white; padding: 0.3rem; border-radius: 50%;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
  <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
</svg></a><a href="https://x.com/codebugst?s=21" target="_blank"><svg style="color: black; margin: 0.5rem; background-color: white; padding: 0.3rem; border-radius: 50%;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
</svg></a></div>
<div class="d-flex justify-content-center">
<form class="" action="mail.php" method="post">
  <div style="display: flex;">
    <div style="width: 50%; margin: 0.5rem;">
      <input style="border-radius: 0rem;" type="text" class="form-control" name="name" placeholder="Name" required>
    </div>
    <div style="width: 50%; margin: 0.5rem">
      <input style="border-radius: 0rem;" type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
	</div>
	<div style="display: flex;">
  	<div style="width: 100%; margin: 0.5rem;">
      <input style="border-radius: 0rem;" type="number" class="form-control" name="number" placeholder="Number" required>
    </div>
	</div>
	<div style="display: flex;">
  	<div style="width: 100%; margin: 0.5rem; margin-bottom: 0rem; vertical-align: text-top !important;">
	  <textarea  style="border-radius: 0rem; height: 10rem;" type="text" class="form-control" name="message" placeholder="Enter your message here..." required></textarea>
    </div>
	</div>
  <div class="form-group form-check">
  </div>
  	<div class="d-flex justify-content-center">
  <button type="submit" style="margin: 0.5rem; margin-top: 0rem; border-radius: 0rem; background-color: black; border-color: black; margin-top: -0.7rem;" class="btn btn-primary w-100">Submit</button>
  </div>
</form>
</div>

<div class="container text-center d-flex justify-content-center">

<div class="row d-flex justify-content-center">

  
</div>
</div>

<div class="fixed-bottom" style="">
    <hr>

    <footer>

        <div class="row">

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