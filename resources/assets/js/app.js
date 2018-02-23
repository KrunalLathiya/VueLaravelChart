import VueAxios from 'vue-axios';
import axios from 'axios';

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueAxios, axios);

Vue.component('coin-add-component', require('./components/AddComponent.vue'));
Vue.component('chart-component', require('./components/ChartComponent.vue'));

const app = new Vue({
    el: '#app'
});
