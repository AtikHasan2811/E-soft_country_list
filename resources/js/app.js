
require('./bootstrap');
// window.Vue = require('vue');
import Vue from 'vue'
// .................vue router setup.........................
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import {routes} from './routes';

const router = new VueRouter({
    routes,
    mode: 'history'
})
// .................vue router setup end.........................




// .................v-from setup.........................

import { Form, HasError, AlertError } from 'vform'
window.Form = Form
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

// .................v-from setup end.........................


//.....................snotify start .............................

import Snotify, { SnotifyPosition } from 'vue-snotify'

const options = {
    toast: {
        position: SnotifyPosition.rightTop
    }
}

Vue.use(Snotify, options)

//.....................snotify start end.............................

//.....................sweet alart...................................
// ES6 Modules or TypeScript
import Swal from 'sweetalert2'
window.Swal = Swal;


const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
window.Toast=Toast;

//.....................sweet alart end...................................



Vue.component('example-component', require('./components/admin/AdminMaster.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
    el: '#app',
    router
});
