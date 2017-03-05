import Vue from 'vue';
import Router from 'vue-router';
import index from '../components/index.vue';
import contact from '../components/contact.vue';
import pricing from '../components/pricing.vue';


Vue.use(Router);

export default new Router({
  routes: [
    {
      path: '/',
      name: 'index',
      component: index
    },
    {
      path: '/cenik',
      name: 'cenik',
      component: pricing
    },
    {
      path: '/kontakt',
      name: 'kontakt',
      component: contact
    }
  ]
});
