import dataDosen from "./dataDosen.js";
const containerDosen = document.getElementById("container-card");

console.log(dataDosen);
let html = "";
dataDosen.forEach((e) => {
  let htmlPendidikan = "";
  e.pendidikan.forEach((el) => {
    htmlPendidikan += `<li class="card-text-me">${el}</li>`;
  });
  const dosen = `
  <div class="col-md-4 col-12 mb-3">
    <div class="px-3 pt-3 card card-dosen shadow border-0">
      <div class="row">
        <div class="col-4">
          <img src="assets/img/dosen/hrm.png" class="card-img-top rounded-circle img-profile" alt="...">
        </div>
        <div class="col">
          <h1 class="card-text text-dosen mb-0">${e.nama}</h1>
          <small class="text-muted card-text">${e.ttl}</small>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <p class="card-text-me"><span>Golongan/Jabatan</span> : ${e.golonganJabatan}</p>
          <p class="card-text-me"><span>Bidang Keahlian</span> : ${e.bidangKeahlian}</p>
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
