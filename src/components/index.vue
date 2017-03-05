<template>
  <div>
    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>Co odvezeme</h2>
            <hr class="star-primary">
          </div>
        </div>
        <div class="row row-graphics">
          <div class="col-sm-4 portfolio-item text-center">
            <img src="../assets/img/euro-pallet-161949_960_720.png" class="img-responsive" alt="">
            <h3>7 Europalet</h3>
          </div>
          <div class="col-sm-4 portfolio-item text-center">
            <img src="../assets/img/weight-tool-pink.png" class="img-responsive" alt="">
            <h3>1,2 tuny</h3>
          </div>
          <div class="col-sm-4 portfolio-item text-center">
            <img src="../assets/img/ruler.png" class="img-responsive" alt="">
            <h3>4,5m na délku</h3>
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
              Klademe velký důraz na spolehlivost naší firmy, takže se nemusíte obávat případných selhání nebo zanedbání našich závazků. Vážíme si každého klienta.</p>
          </div>
          <div class="col-lg-4">
            <p>Pokud Vám není něco jasné a potřebujete ohedně dopravy poradit. Rádi Vám na Vaše otázky odpovíme.
              Kontaktovat nás můžete e-mailem nebo telefonicky.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>


<style>
  .portfolio-item img {
    max-height: 239px;
    margin: 0 auto;
  }

  .row-graphics {
    display: table-row;
  }

  .portfolio-item {
    height: 290px;
    display: table-cell;
  }

  .portfolio-item h3 {
    position: absolute;
    width: 100%;
    bottom: 0;
    text-align: center;
  }
</style>
