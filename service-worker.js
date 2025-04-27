self.addEventListener("install", function (e) {
    console.log("✅ Service Worker installed");
  });
  
  self.addEventListener("fetch", function (e) {
    e.respondWith(
      caches.match(e.request).then(function (response) {
        return response || fetch(e.request);
      })
    );
  });
  