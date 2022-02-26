import {createRouter, createWebHistory} from "vue-router";
import ExampleComponent from '../components/ExampleComponent.vue'

const routes = [
    {
        path : "/test",
        name: "index",
        component: ExampleComponent
    }
]

export default createRouter({
    history : createWebHistory(process.env.BASE_URL),
    routes
})
