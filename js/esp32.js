let potencia = document.getElementById('spanPotencia');
setInterval(() => {
    $.ajax
        ({
            type: "GET",
            url: "../php/getPotencia.php",
            success: function (res) {
                console.log("El valor obtenido es: "+res);
                potencia.innerText = res;
            }
        });
}, 1000);