window.onload = function () {
  fetch(
    `https://hijrahassalam.github.io/api-wilayah-indonesia/api/provinces.json`
  )
    .then((response) => response.json())
    .then((provinces) => {
      addOptionsToSelect("provinsi", provinces);
    });
};

function updateKota(selectObj) {
  id = getDataId(selectObj);
  fetch(
    `https://hijrahassalam.github.io/api-wilayah-indonesia/api/regencies/` +
      id +
      `.json`
  )
    .then((response) => response.json())
    .then((regencies) => {
      addOptionsToSelect("kota", regencies);
    });
}

function updateKecamatan(selectObj) {
  id = getDataId(selectObj);
  fetch(
    `https://hijrahassalam.github.io/api-wilayah-indonesia/api/districts/` +
      id +
      `.json`
  )
    .then((response) => response.json())
    .then((districts) => {
      addOptionsToSelect("kecamatan", districts);
    });
}

function updateKelurahan(selectObj) {
  id = getDataId(selectObj);
  fetch(
    `https://hijrahassalam.github.io/api-wilayah-indonesia/api/villages/` +
      id +
      `.json`
  )
    .then((response) => response.json())
    .then((villages) => {
      addOptionsToSelect("kelurahan", villages);
    });
}

function addOptionsToSelect(selectId, data) {
  selectObj = document.getElementById(selectId);
  setDefaultOption(selectObj);
  for (let d in data) {
    val = data[d]["name"];
    opt = document.createElement("option");
    opt.value = val;
    opt.text = val;
    opt.setAttribute("data-id", data[d]["id"]);
    selectObj.add(opt);
  }
  selectObj.disabled = false;
}

function setDefaultOption(element) {
  element.innerHTML = "";
  defaultOpt = document.createElement("option");
  defaultOpt.value = "";
  defaultOpt.selected = true;
  defaultOpt.style.display = "none";
  defaultOpt.text = "-- Pilih --";
  element.add(defaultOpt);
}

function getDataId(selectObj) {
  return selectObj.options[selectObj.selectedIndex].getAttribute("data-id");
}
