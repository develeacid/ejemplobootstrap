import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.scss",
                "resources/js/app.js",
                "resources/js/lib/counterup.min",
                "resources/js/lib/easing",
                "resources/js/lib/owl.carousel",
                "resources/js/lib/waypoints.min",
                "resources/js/lib/wow",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            $: "jquery",
        },
    },
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '@import "bootstrap/scss/bootstrap";', // importa bootstrap
            },
        },
    },
});
