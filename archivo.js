function btnSubmit() { 
  const options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  }
  navigator.geolocation.getCurrentPosition(success, error, options);
 

  // //Funciona con https
  // if (navigator.geolocation) {
  //     //Callback bien:obligatorio, error, parametros

  //     // alert('si puedes');
  // } else {
  //     console.log('Pailangas rangas');
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

  // $.ajax({
  //   type: "POST",
  //   url: "register.php",
  //   data: {"latitude": latitud},
  //   success: function (data) {
  //   $('#resultado').html(data)
  //     console.log("Enviandoooooooooooooooooooo" + data);
  //   },
  // });



}

function error(error) {
  console.warn(error);

  // alert('Algo ha salido mal');
}

// function createCookie(name, value, days) {
//   var expires;
//   if (days) {
//     var date = new Date();
//     date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
//     expires = "; expires=" + date.toGMTString();
//   }
//   else {
//     expires = "";
//   }
//   document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
// }
