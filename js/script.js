import dataDosen from "./dataDosen.js";
const containerDosen = document.getElementById("container-card");

let html = "";
dataDosen.forEach((e, i) => {
  let htmlPendidikan = "";
  e.pendidikan.forEach((el) => {
    htmlPendidikan += `<li class="card-text-me">${el}</li>`;
  });
  const dosen = `
  <style>
    .animate-delay-${i} {
      --animate-duration: ${(i + 2) * 200 * 2}ms;
    }
  </style>
  <div class="col-md-4 col-12 mb-3 mt-3" id="container-card">
    <div  class="animate__animated animate-delay-${i} animate__fadeInDown px-3 pt-3 card card-dosen shadow border-0">
      <div class="row">
        <div class="col-4">
          <img src="assets/img/dosen/${
            e.imgUrl
          }" class="card-img-top rounded-circle img-profile" alt="${e.nama}">
        </div>
        <div class="col">
          <h1 class="card-text text-dosen mb-0">${e.nama}</h1>
          <small class="text-muted card-text">${e.ttl}</small>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <p class="card-text-me"><span>Golongan/Jabatan</span> : ${
            e.golonganJabatan
          }</p>
          <p class="card-text-me"><span>Bidang Keahlian</span> : ${
            e.bidangKeahlian
          }</p>
          <p class="card-text-me"><span>Pendidikan</span> :</p>
          <ul>
            ${htmlPendidikan}
          </ul>
        </div>
      </div>
    </div>
  </div>
  `;

  html += dosen;
});

containerDosen.innerHTML = html;
