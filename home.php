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

@media (max-width: 767px) {
      .row {
        --bs-gutter-x: -2rem; /* Gutter value for vertical small screens */
      }
    }

    @media (min-width: 1200px) {
      .row {
        --bs-gutter-x: -35rem; /* Gutter value for large PC screens */
      }
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

                <a href="home.php" class="nav-item nav-link active mx-5" style="color: #8b0000 !important;">Home</a>

                <a href="samples.php" class="nav-item nav-link mx-5" style="color: gray !important;">Samples</a>

                <a href="studio.php" class="nav-item nav-link mx-5" style="color: gray !important;">Studio</a>

               <a href="contact.php" class="nav-item nav-link mx-5" style="color: gray !important;">Contact</a>

            </div>

        </div>

    </div>

</nav>

<div style="height: 64.5vh; background-color: #8b0000;"></div>
<!-- <div style="height: 64.5vh; background-color: blue; background-image: url('Banner.png');"></div> -->

<h1 class="d-flex justify-content-center mt-5" style="font-family: 'Great Vibes', cursive; font-size: 19vmin; margin-bottom: 3rem;">About me</h1>

<div class="container text-center">
  <div class="row" style="">
    <div class="col-sm">
		<p class="d-flex justify-content-center" style="float: left; text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget sem eu leo placerat egestas sed vitae elit. Sed pellentesque nunc sit amet augue gravida, tincidunt pharetra leo viverra. Ut et tortor velit. Curabitur blandit elit eu nibh gravida semper. In sit amet nulla sed diam sodales fringilla. Vestibulum bibendum purus a interdum malesuada. Curabitur in nibh eu eros suscipit volutpat in et lectus. Suspendisse ultricies leo maximus, tempus enim in, tincidunt quam. Donec ornare nunc quis quam dictum bibendum. Curabitur eu dui nulla.</p>
    </div>
    <div class="col-sm" style="z-index: -8;">
		<img src="person.png" class="" alt="Me" style="width: auto;">
    </div>
  </div>
</div>

<div class="fixed--bottom" style="margin-top: 25rem;">
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