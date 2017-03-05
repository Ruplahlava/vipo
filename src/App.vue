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

  body {
    padding-top: 50px;
  }
</style>
