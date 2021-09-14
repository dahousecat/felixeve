const version = '1.0.4';
const cacheName = 'felix_eve';
const filesToCache = [
    '/',
    '/index.html',
    '/cv/index.html',
    '/img/felix/felix-420.jpg',
    '/img/icons/favicon.ico',
    '/js/script.js'
];

/* Start the service worker and cache all of the app's content */
self.addEventListener('install', function(e) {
    e.waitUntil(
        caches.open(cacheName).then(function(cache) {
            return cache.addAll(filesToCache);
        })
    );
});

/* Serve cached content when offline */
self.addEventListener('fetch', function(e) {
    e.respondWith(
        caches.match(e.request).then(function(response) {
            return response || fetch(e.request);
        })
    );
});