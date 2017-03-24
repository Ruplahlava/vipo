<template>
  <div id="app">
    <vipoMenu></vipoMenu>
    <router-view></router-view>
    <vipoFooter></vipoFooter>
  </div>
</template>

<script>
  import menu from './components/menu.vue'
  import footer from './components/footer.vue'
  import 'bootstrap'
  import './assets/startbootstrap-freelancer-gh-pages/js/freelancer'
  export default{
    components: {
      vipoMenu: menu,
      vipoFooter: footer
    }
  }
</script>

<style>
  @import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
  @import url('./assets/startbootstrap-freelancer-gh-pages/css/freelancer.css');
  @import url('./assets/startbootstrap-freelancer-gh-pages/vendor/font-awesome/css/font-awesome.css');
  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
  @import url('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');

  @media only screen and (min-width: 1024px) {
    html {
      position: relative;
      min-height: 100%;
    }

    body {
      margin-bottom: 270px;
    }

    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
    }
    .row-eq-height {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }
  }
</style>
