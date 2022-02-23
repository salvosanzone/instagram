/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



Vue.component('header-component', require('./components/Header.vue').default);
Vue.component('main-component', require('./components/Main.vue').default);
Vue.component('main_admin-component', require('./components/MainAdmin.vue').default);
Vue.component('carousel-component', require('./components/Carousel.vue').default);


const app = new Vue({
    el: '#app',
});
