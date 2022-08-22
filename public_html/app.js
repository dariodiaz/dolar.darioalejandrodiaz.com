// Getting the USD value for today using dolarsi API
fetch("https://www.dolarsi.com/api/api.php?type=valoresprincipales")
  .then((data) => {
    return data.json();
  })
  .then((completedata) => {
    let usdValues = "";
    completedata.map((values) => {
      usdValues += `<div class="values">
        <strong class="nombre">Nombre: ${values.casa.nombre}</strong>
        <p class="compra">Compra: ${values.casa.compra}</p>
        <p class="venta">Venta: ${values.casa.venta}</p>
        </div>`;
    });
    document.getElementById("usd-value").innerHTML = usdValues;
  })
  .catch((err) => {
    console.log(err);
  });
