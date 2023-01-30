import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import fs from "fs";
const host = "CashFlowPro.local";
export default defineConfig({
    server: {
        host,
        hmr: { host },
        https: {
            key: fs.readFileSync(`C:/laragon/etc/ssl/laragon.key`),
            cert: fs.readFileSync(`C:/laragon/etc/ssl/laragon.crt`),
        },
    },
    plugins: [
        // add css and js file
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        // auto refresh blade files
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
    ],
});
