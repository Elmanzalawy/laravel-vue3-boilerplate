require('./bootstrap');

import { createApp } from 'vue';
import ExampleComponent from "./components/ExampleComponent.vue"
import router from "./router"
import 'bootstrap'

createApp({
    components:{
        ExampleComponent
    }
}).use(router).mount("#app")
