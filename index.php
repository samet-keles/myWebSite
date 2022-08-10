<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samet Keleş</title>
    <!-- Primary Meta Tags -->
<title>Samet Keles</title>
<meta name="title" content="Samet Keles">
<meta name="description" content="Hi I’m Samet As a front-end developer, I focus on React, JavaScript, CSS and HTML as this specifically applies to the UI. Hard-working problem solver and critical thinker who will use creative solutions and attention to detail to improve your applications and development team overall.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Samet Keles">
<meta property="og:description" content="Hi I’m Samet As a front-end developer, I focus on React, JavaScript, CSS and HTML as this specifically applies to the UI. Hard-working problem solver and critical thinker who will use creative solutions and attention to detail to improve your applications and development team overall.">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Samet Keles">
<meta property="twitter:description" content="Hi I’m Samet As a front-end developer, I focus on React, JavaScript, CSS and HTML as this specifically applies to the UI. Hard-working problem solver and critical thinker who will use creative solutions and attention to detail to improve your applications and development team overall.">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
<meta name="keywords" content="front-end, developer, yazılım, geliştirici, web, programcı, önyüz, javascript,  software, samet, keleş, sametkeles, full-stack"/>
<meta name="copyright" content="Samet Keleş"/>
<meta name="author" content="Samet Keleş"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/styles/jquery.pagepiling.css" />
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Overpass:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="assets/scripts/typed.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TCZMDBTE3V"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-TCZMDBTE3V');
    </script>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyD0eO0lGJ-2TxotsQUZmugMjTDCpK0603Y",
    authDomain: "sametkeles-43adc.firebaseapp.com",
    projectId: "sametkeles-43adc",
    storageBucket: "sametkeles-43adc.appspot.com",
    messagingSenderId: "166331720621",
    appId: "1:166331720621:web:838ba379b3683ab7727724",
    measurementId: "G-VH48HRJKRK"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
  </head>
  <body>
    <div id="myMenu" class="container fixed-top"> <!-- !Head Start-->
      <header class="header d-flex flex-wrap justify-content-center py-3 mb-4">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
          <img src="assets/images/portfolio-logo.png" alt="Logo" width="56" height="56" class="logo"/>
        </a>
        <ul class="nav nav-pills">
          <li data-menuanchor="firstPage" class="nav-item"><a href="#firstPage" class="nav-link link-light" aria-current="page">Home</a></li>
          <li data-menuanchor="secondPage" class="nav-item"><a href="#secondPage" class="nav-link link-light">About Me</a></li>
          <li data-menuanchor="thirdPage" class="nav-item"><a href="#thirdPage" class="nav-link link-light">Projects</a></li>
          <li data-menuanchor="fourthPage" class="nav-item"><a href="#fourthPage" class="nav-link link-light">Contact</a></li>
        </ul>
      </header>
    </div>  <!-- !Header End-->
    <div id="pagepiling">
      <div class="section home"> <!-- !HOME START-->
            <div id="typed-strings">
            <p>MERH</p>
            <p>HI &#128075;, I'M SAMET!</p>
            </div>
            <span id="typed"></span>
            <div>
              <p class="homeStatic">I am a developer from Turkey specialized in Front-End.</p>
            </div>
            <a href="/pdf/sametkelesCv.pdf" download><button type="button" class="btn btn-home btn-lg px-4 me-lg-3 mt-5 mx-auto fw-bold">Download Cv</button></a>
        </div> <!-- !HOME END-->
        <div class="section about-me"> <!-- !ABOUT ME START-->
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h2 class="aboutTitle"> &#60;ABOUT ME&#62;</h2>
                <p class="aboutDesc mt-5">
                  Hi I’m Samet As a front-end developer, I focus on React, 
                  JavaScript, CSS and HTML as this specifically applies to the UI. 
                  Hard-working problem solver and critical thinker who will 
                  use creative solutions and attention to detail to improve 
                  your applications and development team overall.
                </p>
              </div>
              <div class="col-sm-6">
                <div class="card aboutCard">
                  <div class="tools">
                    <div class="circle">
                      <span class="red box"></span>
                    </div>
                    <div class="circle">
                      <span class="yellow box"></span>
                    </div>
                    <div class="circle">
                      <span class="green box"></span>
                    </div>
                  </div>
                  <div class="card__content">
                    <div class="row skills">
                      <div class="col-6"><i class='bx bxl-visual-studio animate__animated animate__bounce animate__infinite'></i></div>
                      <div class="col-6"><i class='bx bxl-git animate__animated animate__infinite animate__rubberBand'></i></div>
                    </div>
                    <div class="row skills">
                      <div class="col-6"><i class='bx bxl-javascript animate__animated animate__infinite animate__heartBeat'></i></div>
                      <div class="col-6"><i class='bx bxl-bootstrap animate__animated animate__infinite animate__wobble'></i></div>
                    </div>
                    <div class="row skills">
                      <div class="col-6"><i class='bx bxl-html5 animate__animated animate__infinite animate__jello'></i></div>
                      <div class="col-6"><i class='bx bxl-css3 animate__animated animate__infinite animate__tada'></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- !ABOUT ME END-->
        <div class="section portfolio"> <!-- ! PORTFOLIO START -->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> <!-- !CAROUSEL START-->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner"> <!-- !CAROUSEL INNER START -->
              <div class="carousel-item active" data-bs-interval="10000"> <!-- ? CAROUSEL ITEM 1 START-->
                <div class="px-4 pt-5 my-5 text-center border-bottom">
                  <h1 class="display-4 fw-bold">Medium Clone</h1>
                  <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Htlm Css Bootstrap Javascript.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                      <a href="https://samet-mediumclone.netlify.app/" target="_blank"><button type="button" class="btn btn-demo btn-primary btn-lg px-4 me-sm-3">Demo</button></a>
                      <a href="https://github.com/sametkeles06/Medium-clone" target="_blank"><button type="button" class="btn btn-outline-dark btn-lg px-4">Github</button></a>
                    </div>
                  </div>
                  <div class="overflow-hidden" style="max-height: 30vh;">
                    <div class="container px-5">
                      <img src="assets/images/medium-clone.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                    </div>
                  </div>
                </div>
              </div> <!-- ? CAROUSEL ITEM 1 END-->
              <div class="carousel-item" data-bs-interval="2000"> <!-- ? CAROUSEL ITEM 2 START-->
                <div class="px-4 pt-5 my-5 text-center border-bottom">
                  <h1 class="display-4 fw-bold">Digital Clock</h1>
                  <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Htlm Css Javascript.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                      <a href="https://sametkelesdigitalclock.netlify.app/" target="_blank"><button type="button" class="btn btn-demo btn-primary btn-lg px-4 me-sm-3">Demo</button></a>
                      <a href="#" target="_blank"><button type="button" class="btn btn-outline-dark btn-lg px-4">Github</button></a>
                    </div>
                  </div>
                  <div class="overflow-hidden" style="max-height: 30vh;">
                    <div class="container px-5">
                      <img src="assets/images/digital-clock.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                    </div>
                  </div>
                </div>
              </div> <!-- ? CAROUSEL ITEM 2 END-->
              <div class="carousel-item" data-bs-interval="2000"> <!-- ? CAROUSEL ITEM 3 START-->
                <div class="px-4 pt-5 my-5 text-center border-bottom">
                  <h1 class="display-4 fw-bold">Digital Clock</h1>
                  <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Htlm Css Javascript.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                      <a href="https://samet-calculator.netlify.app" target="_blank"><button type="button" class="btn btn-demo btn-primary btn-lg px-4 me-sm-3">Demo</button></a>
                      <a href="https://github.com/sametkeles06/vue-calculator" target="_blank"><button type="button" class="btn btn-outline-dark btn-lg px-4">Github</button></a>
                    </div>
                  </div>
                  <div class="overflow-hidden" style="max-height: 30vh;">
                    <div class="container px-5">
                      <img src="assets/images/vue-calculator.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                    </div>
                  </div>
                </div>
              </div> <!-- ? CAROUSEL ITEM 3 END-->
              <div class="carousel-item"> <!-- ? CAROUSEL ITEM 4 START-->
                    <div class="px-4 pt-5 my-5 text-center border-bottom">
                  <h1 class="display-4 fw-bold">TO Do List</h1>
                  <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Htlm Css Bootstrap Javascript.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                      <a href="https://sametkeles-todo.netlify.app/" target="_blank"><button type="button" class="btn btn-demo btn-primary btn-lg px-4 me-sm-3">Demo</button></a>
                      <a href="https://github.com/sametkeles06/JavaScrit-ToDoList" target="_blank"><button type="button" class="btn btn-outline-dark btn-lg px-4">Github</button></a>
                    </div>
                  </div>
                  <div class="overflow-hidden" style="max-height: 30vh;">
                    <div class="container px-5">
                      <img src="assets/images/todo.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                    </div>
                  </div>
                </div>
              </div> <!-- ? CAROUSEL ITEM 4 END-->
              <div class="carousel-item"> <!-- ? CAROUSEL ITEM 5 START-->
                <div class="px-4 pt-5 my-5 text-center border-bottom">
                  <h1 class="display-4 fw-bold">Bmi Calculator</h1>
                  <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Htlm Css Bootstrap Javascript.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                      <a href="https://sametkeles-bmi.netlify.app/" target="_blank"><button type="button" class="btn btn-demo btn-primary btn-lg px-4 me-sm-3">Demo</button></a>
                      <a href="#" target="_blank"><button type="button" class="btn btn-outline-dark btn-lg px-4">Github</button></a>
                    </div>
                  </div>
                  <div class="overflow-hidden" style="max-height: 30vh;">
                    <div class="container px-5">
                      <img src="assets/images/bmi.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                    </div>
                  </div>
                </div>
              </div> <!-- ? CAROUSEL ITEM 5 END-->
            </div>  <!-- !CAROUSEL INNER END -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> <!--!CAROUSEL END-->
         </div> <!-- ! PORTFOLIO END -->
        <div class="section contact"> <!-- !CONACT START-->
            <!-- ?CONTAINER START-->

            <div class="card contactCard">
              <div class="tools">
                <div class="circle">
                  <span class="red box"></span>
                </div>
                <div class="circle">
                  <span class="yellow box"></span>
                </div>
                <div class="circle">
                  <span class="green box"></span>
                </div>
              </div>

              <?php  if(isset($_SESSION["alert"])){ ; ?>
                <div class="alert alert-dismissible alert-<?php echo $_SESSION["alert"] ["type"]; ?>" role="alert">
                  <?php echo $_SESSION["alert"] ["message"]; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION["alert"]); ?>
              <?php } ?>

              <div class="card__content my-auto">
                <form class="formArea mx-auto my-auto" action="Mail_Test.php" method="post">
                  <div class="row mb-2">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="name" id="name" required>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="surname" id="surname" required>
                    </div>
                  </div>
                  <div class="mb-2">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" id="email" required>
                  </div>
                  <div class="mb-2">
                    <input type="text" class="form-control" placeholder="Subject" aria-label="Subject" name="subject" id="subject" required>
                  </div>
                  <div class="mb-2">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"  placeholder="Messages" name="message" id="message" required></textarea>
                  </div>
                  <div class="col-auto mt-2">
                    <button class="buttonSend" value="Send Email" id="Send" name="Send">
                      <div class="svg-wrapper-1">
                        <div class="svg-wrapper">
                          <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                          </svg>
                        </div>
                      </div>
                      <span>Send</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          <!-- ?CONTAINER END-->
          <div class="container"> <!-- ?FOOTER START-->
            <footer class="fixed-bottom d-flex flex-wrap justify-content-between align-items-center py-2 my-1 border-top">
              <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 footerText">© 2022 - 2023 All Rights Reserved.</span>
              </div>
              <ul class="nav col-md-4 justify-content-end list-unstyled d-flex footerUl">
                <li class="ms-3 me-3"><a class="text-muted" href="https://www.linkedin.com/in/samet-keles/" target="_blank"><i class='bx bxl-linkedin-square'></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://github.com/sametkeles06" target="_blank"><i class='bx bxl-github' ></i></a></li>
              </ul>
            </footer>
          </div> <!-- ?FOOTER END-->
        </div> <!-- !CONACT END-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/scripts/jquery.pagepiling.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
	$('#pagepiling').pagepiling({
        menu: null,
        direction: 'vertical',
        verticalCentered: true,
        sectionsColor: ['#0798ec', '#ff5f45', '#fec401', '#712cf9'],
        anchors: [],
        scrollingSpeed: 700,
        easing: 'swing',
        loopBottom: false,
        loopTop: false,
        css3: true,
        navigation: {
            'textColor': '#fff',
            'bulletsColor': '#fff',
            'position': 'right',
            'tooltips': ['Home', 'About Me', 'Portfolio', 'Contact']
        },
        anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage'],
        menu: '#myMenu'
    });
});
    </script>
  </body>
  <script>
    var typed = new Typed('#typed', {
      stringsElement: '#typed-strings',
    });
  </script>
</html>