import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: 'localhost',
        port: 8080,
        strictPort: true,
        hmr: {
            protocol: 'ws',
            host: 'localhost',
            port: 8080
        },
        origin: 'http://localhost:8080/'
    }
});
