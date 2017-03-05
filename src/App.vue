<template>
  <div id="app">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="#page-top">VIPO</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden">
              <a href="#page-top"></a>
            </li>
            <li class="page-scroll">
              <a href="#portfolio">Ceník</a>
            </li>
            <li class="page-scroll">
              <a href="#about">Kontakt</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <img class="img-responsive" src="./assets/img/IMG_1939.png" alt="">
            <div class="intro-text">
              <span class="name">VIPO - Autodoprava</span>
              <hr class="star-light">
              <span class="skills">Rychle - Bezpečně - Spolehlivě</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <router-view></router-view>
    </div>
    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Adresa</h3>
              <p>Autodoprava Postránecký<br>
                Vinohrady 227<br>
                68401 Kobeřice u Brna</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Around the Web</h3>
              <ul class="list-inline">
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                </li>
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>O nás</h3>
              <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Your Website 2016
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
      <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

  </div>
</template>

<script>
  require('bootstrap');
  require('./assets/startbootstrap-freelancer-gh-pages/js/freelancer')
</script>

<style>
  @import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
  @import url('./assets/startbootstrap-freelancer-gh-pages/css/freelancer.css');
  @import url('./assets/startbootstrap-freelancer-gh-pages/vendor/font-awesome/css/font-awesome.css');
  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
  @import url('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');

  body {
    padding-top: 50px;
  }
</style>
