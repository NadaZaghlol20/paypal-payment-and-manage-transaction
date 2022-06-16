import VueRoute from 'vue-router'
import Vue from 'vue'
import Form from 'vform'
import {  HasError, AlertError } from 'vform/components/bootstrap5'


import home_page from './components/home_page.vue'
import show_transactions from './components/show_transactions.vue'


export const routes = [
    {  path: '/', component: home_page , name:'home_page' },
    {  path: '/show_transactions', component: show_transactions , name:'show_transactions' },

];


window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.use(VueRoute);

const router = new VueRoute({
    routes,
    mode:'history'
});

export default router
