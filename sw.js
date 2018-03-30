
self.addEventListener('install', function(event) {
    console.log('[Service Worker] Installing Service Worker ...', event);
    event.waitUntil(
      caches.open('static')
        .then(function(cache) {
          console.log('[Service Worker] Precaching App Shell');
          cache.addAll([
            './',
            './index.php',
            './river.php',
            './login.php',
            './register.php',
            './js/app.js',
            './js/bootstrap.min.js',
            './js/jquery-3.2.1.min.js',
            './js/popper.min.js',
            './js/mdb.min.js',
            './css/bootstrap.min.css',
            './css/mdb.min.css',
            './css/style.css',
            './img/bg-1.jpg',
            './img/bg-2.jpg',
            './img/bg-3.jpg',
            './img/bg-4.jpg',
            './img/bg-5.jpg',
            './img/bg-6.jpg',
            'https://fonts.googleapis.com/css?family=Roboto:400,700',
            'https://fonts.googleapis.com/icon?family=Material+Icons',
            'https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.indigo-pink.min.css'
          ]);
        })
    )
  });
  
  self.addEventListener('activate', function(event) {
    console.log('[Service Worker] Activating Service Worker ....', event);
    return self.clients.claim();
  });
  
  self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.match(event.request)
        .then(function(response) {
          if (response) {
            return response;
          } else {
            return fetch(event.request)
              .then(function(res) {
                return caches.open('dynamic')
                  .then(function(cache) {
                    cache.put(event.request.url, res.clone());
                    return res;
                  })
              });
          }
        })
    );
  });