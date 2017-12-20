var mymap = L.map('mapid').setView([-7.9602443,112.6314172], 15);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
    id: 'mapbox.streets'
}).addTo(mymap);

var sch_marker = L.icon({
    iconUrl: "data/img/school.png",

    iconSize:     [33, 44], // size of the icon
    iconAnchor:   [16.5, 44], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

//Educational Institution
var university = [
    [L.marker([-7.952567, 112.614460],{icon: sch_marker}).addTo(mymap).bindPopup("<table><tr><td>Nama Lokasi</td><td>&nbsp&nbsp</td><td>Universitas Brawijaya</td></tr><tr><td>Alamat</td><td>&nbsp&nbsp</td><td>Jl. Veteran</td></tr><tr><td></td><td></td></tr></table>")],
    [L.marker([-7.961202, 112.617535],{icon: sch_marker}).addTo(mymap).bindPopup("<table><tr><td>Nama Lokasi</td><td>&nbsp&nbsp</td><td>Universitas Negeri Malang</td></tr><tr><td>Alamat</td><td>&nbsp&nbsp</td><td>Jl. Veteran</td></tr><tr><td></td><td></td></tr></table>")]
    [L.marker([-7.936699, 112.607366],{icon: sch_marker}).addTo(mymap).bindPopup("<table><tr><td>Nama Lokasi</td><td>&nbsp&nbsp</td><td>Universitas Islam Malang</td></tr><tr><td>Alamat</td><td>&nbsp&nbsp</td><td>Jl. Veteran</td></tr><tr><td></td><td></td></tr></table>")]
];
//Computer Store
    //nama variabel
var computerstore = [
    //[koordinat lokasi(lihat google)],{nama icon(sesuai yng aku kasih)},                                                            nama lokasinya                                                               alamatnya                                                             jam operasionalnya                                                      kontaknya
    [L.marker([-7.939568, 112.607524],{icon: sch_marker}).addTo(mymap).bindPopup("<table><tr><td>Nama Lokasi</td><td>&nbsp&nbsp</td><td>Universitas Brawijaya</td></tr><tr><td>Alamat</td><td>&nbsp&nbsp</td><td>Jl. Veteran</td></tr><tr><td>Jam Operasional</td><td>&nbsp&nbsp</td><td>08.00-20.00</td></tr><tr><td>Kontak</td><td>&nbsp&nbsp</td><td>085578491554</td></tr></table>")],
];

