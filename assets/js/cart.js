var valueArray = [];
var nameArray = [];
var i = 1;
$('.incrementa').click(function () {
       var nombre = $(this).parent().parent().find("h5").find("b").text()
       // tiene valores el array de name?

       if (nameArray.length == 0) {
              // no tiene valores
              valueArray.push(1)
              nameArray.push(nombre) //azul
       } else {
              find = false
              for (let index = 0; index < valueArray.length; index++) {
                     if (nombre == nameArray[index]) {
                            // SIG VALUEARRAY[INDEDX]++ //azul
                            find = true
                            valueArray[index]++
                     }
              }
              if (!find) {
                     valueArray.push(1)
                     nameArray.push(nombre) //azul
              }
       }
       /*
       for (let checker = 0; checker < valueArray.length; checker++) {
              if (valueArray[checker] !== 1) { }
              if (nombre == nameArray[checker]) {
                     valueArray[checker]++
                     console.log(valueArray[checker])
              }
       }
       */


       /* var element = nameArray.indexOf(nombre);
 
        if (element === -1) {
               nameArray.push(nombre);
               valueArray.push(1);
        } else {
               valueArray[element]++;
        } */
       innercontent = ""
       for (let printer = 0; printer < nameArray.length; printer++) {
              if (valueArray[printer] == 0) {
              } else {
                     content = '<li>' + nameArray[printer] + ":" + valueArray[printer] + '</li>'
                     innercontent = innercontent + content
                     console.log(innercontent)
                     document.getElementById("carrito").innerHTML = innercontent;
              }
       }


})


$('.disminuye').click(function () {
       var nombre = $(this).parent().parent().find("h5").find("b").text()

       for (let index = 0; index < valueArray.length; index++) {
              if (nombre == nameArray[index]) {
                     // SIG VALUEARRAY[INDEDX]++ //azul
                     if (valueArray[index] > 0) {
                            valueArray[index]--
                     }
              }
       }

       innercontent = ""
       document.getElementById("carrito").innerHTML = innercontent;
       for (let printer = 0; printer < nameArray.length; printer++) {
              if (valueArray[printer] == 0) {
              } else {
                     content = '<li>' + nameArray[printer] + ":" + valueArray[printer] + '</li>'
                     innercontent = innercontent + content
                     console.log(innercontent)
                     document.getElementById("carrito").innerHTML = innercontent;
              }

       }


})

