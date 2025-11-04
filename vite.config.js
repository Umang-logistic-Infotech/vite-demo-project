import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import '../resources/scss/adminlte.scss'; 

//,'resources/scss/adminlte.scss'
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/css/adminlte.css','resources/scss/_app-sidebar.scss','resources/js/adminlte.js'],
            refresh: true,
            // paths: ['resources/scss/**'],

        }),
    ],
});
