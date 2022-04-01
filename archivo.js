function btnSubmit() {
  const options = {
    // enableHighAccuracy: true,
    // timeout: 5000, Tiempo para buscar la posicion
    maximumAge: 0,
  };

  navigator.geolocation.getCurrentPosition(success, error, options);

  // // //Funciona con https
  // if (navigator.geolocation) {
  //   //Callback bien:obligatorio, error, parametros

  //   console.log("si puedes");
  // } else {
  //   alert("¡Pailangas rangas!, habilite la Ubicación");
  // }

}

function success(position) {
  // console.log(position);

  let coords = position.coords;
  let latitud = coords.latitude;
  let longitud = coords.longitude;

  document.cookie = "latitud =" + latitud;
  document.cookie = "longitud = " + longitud;

  console.log(latitud, longitud);
}

function error(error) {
  console.warn(error);

  // alert('Algo ha salido mal');
}
