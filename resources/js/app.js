require('./bootstrap');

import { createApp } from 'vue';
import "bootstrap/dist/css/bootstrap.css"
import "bootstrap/dist/js/bootstrap.js"
import Navbar from "./components/layout/Navbar.vue"
import Foot from "./components/layout/Footer.vue"
import ExampleComponent from "./components/ExampleComponent.vue"
import router from "./router"

createApp({
    components:{
        ExampleComponent,
        Navbar,
        Foot
    }
}).use(router).mount("#app")
