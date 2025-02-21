<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>
<!DOCTYPE html>
<html>

<head>
    <title>Peta Leaflet</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-32 h-32" id="map"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-7.797068, 110.370529], 15);

        // Tambahkan tile layer OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Tambahkan marker
        L.marker([-7.797068, 110.370529])
            .addTo(map)
            .bindPopup('GG Suspension')
            .openPopup();
    </script>
</body>

</html>
