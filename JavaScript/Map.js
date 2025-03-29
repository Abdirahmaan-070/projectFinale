document.addEventListener("DOMContentLoaded", function () {
    const map = L.map('Map').setView([52.15688711781054, 4.44675453850636], 12); 

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    L.marker([52.15688711781054, 4.44675453850636]).addTo(map)
        .bindPopup('Vlam en Vlees, Promenade 12, 2711AB Zoetermeer')
        .openPopup();
});
