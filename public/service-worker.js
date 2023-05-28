/////////////////////////////////////////////////////////////////////////////
// You can find dozens of practical, detailed, and working examples of 
// service worker usage on https://github.com/mozilla/serviceworker-cookbook
/////////////////////////////////////////////////////////////////////////////

// Cache name
var CACHE_NAME = 'cache-version-1';

// '/resources/views/siswa/dashboard/index.blade.php',
// '/dashboard',
// Files required to make this app work offline
var REQUIRED_FILES = [
  'https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap',
  'https://unpkg.com/ionicons@5.0.0/dist/ionicons.js',
  '../public/siswa/assets/js/lib/jquery-3.4.1.min.js',
  '../public/siswa/assets/js/lib/popper.min.js',
  '../public/siswa/assets/js/lib/bootstrap.min.js',
  '../public/siswa/assets/js/plugins/owl-carousel/owl.carousel.min.js',
  '../public/siswa/assets/js/base.js',
  '../public/siswa/assets/css/inc/owl-carousel/owl.carousel.min.css',
  '../public/siswa/assets/css/inc/owl-carousel/owl.theme.default.css',
  '../public/siswa/assets/css/inc/bootstrap/bootstrap.min.css',
  '../public/siswa/assets/css/style.css'
];

self.addEventListener('install', function(event) {
  // Perform install step:  loading each required file into cache
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        // Add all offline dependencies to the cache
        return cache.addAll(REQUIRED_FILES);
      })
      .then(function() {
        return self.skipWaiting();
      })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Cache hit - return the response from the cached version
        if (response) {
          return response;
        }
        // Not in cache - return the result from the live server
        // `fetch` is essentially a "fallback"
        return fetch(event.request);
      }
    )
  );
});

self.addEventListener('activate', function(event) {
  // Calling claim() to force a "controllerchange" event on navigator.serviceWorker
  event.waitUntil(self.clients.claim());
});