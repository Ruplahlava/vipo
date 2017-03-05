<template>
  <div>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <img class="img-responsive" src="../assets/img/IMG_1939.png" alt="">
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
      <section id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2>Co odvezeme</h2>
              <hr class="star-primary">
            </div>
          </div>
          <div class="row row-graphics row-eq-height">
            <div class="col-sm-4 portfolio-item text-center">
              <img src="../assets/img/euro-pallet-161949_960_720.png" class="img-responsive  center-block" alt="">
              <div class="portfolio-text"><h3>7 Europalet</h3></div>
            </div>
            <div class="col-sm-4 portfolio-item text-center">
              <img src="../assets/img/weight-tool-pink.png" class="img-responsive center-block" alt="">
              <div class="portfolio-text"><h3>1,2 tuny</h3></div>
            </div>
            <div class="col-sm-4 portfolio-item text-center">
              <img src="../assets/img/ruler.png" class="img-responsive  center-block" alt="">
              <div class="portfolio-text"><h3>4,5m na délku</h3></div>
            </div>
          </div>
        </div>
      </section>
      <!-- About Section -->
      <section class="success" id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2>O nás</h2>
              <hr class="star-light">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
              <p>Nabízíme Vám vnitrostátní kvalitní, rychlou a spolehlivou dopravu čehokoliv a kamkoliv.<br>
                Klademe velký důraz na spolehlivost naší firmy, takže se nemusíte obávat případných selhání nebo
                zanedbání našich závazků. Vážíme si každého klienta.</p>
            </div>
            <div class="col-lg-4">
              <p>Pokud Vám není něco jasné a potřebujete ohedně dopravy poradit. Rádi Vám na Vaše otázky odpovíme.
                Kontaktovat nás můžete e-mailem nebo telefonicky.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>
<script>

  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-92999099-1', 'auto');
  ga('send', 'pageview');


</script>

<style>
  @media only screen and (min-width: 1024px) {
    .portfolio-item img {
      max-height: 80%;
      max-width: 80%;
      padding-bottom: 50px;
    }
    .portfolio-item {
      position: relative;
    }

    .portfolio-text {
      position: absolute;
      margin-left: auto;
      margin-right: auto;
      bottom: 0;
      left: 0;
      right: 0;
    }

    .portfolio-text h3 {
      margin-top: 30px;
    }
  }


</style>
