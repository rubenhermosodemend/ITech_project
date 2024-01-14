// Script para ajustar las opciones de número de box según la localidad
document.getElementById('localidad').addEventListener('change', function () {
    var localidad = this.value;
    var numeroBoxSelect = document.getElementById('numeroBox');
    numeroBoxSelect.innerHTML = '';
  
    // Ajusta las opciones según la localidad seleccionada
    var numeroBoxes = (localidad === 'Pamplona') ? 6 : 4;
  
    for (var i = 1; i <= numeroBoxes; i++) {
      var option = document.createElement('option');
      option.value = i;
      option.text = i;
      numeroBoxSelect.add(option);
    }
  });
  
  $(document).ready(function() {
    // Función para manejar cambios en el campo de selección de día de la semana
    $("#diaSemana").change(function() {
      var selectedDay = $(this).val();
      var disableHours = ["17:00", "18:00", "19:00", "20:00"];

      // Si el día seleccionado es "Sábado", deshabilita las horas específicas
      if (selectedDay === "Sábado") {
        disableSpecificHours(disableHours);
      } else {
        // Si no es sábado, restablece las horas a su estado original
        resetHours();
      }
    });

    // Función para deshabilitar horas específicas
    function disableSpecificHours(hoursToDisable) {
      $("#horaInicio option, #horaFin option").each(function() {
        var optionValue = $(this).val();
        if (hoursToDisable.includes(optionValue)) {
          $(this).prop("disabled", true);
        } else {
          $(this).prop("disabled", false);
        }
      });
    }

    // Función para restablecer todas las horas a su estado original
    function resetHours() {
      $("#horaInicio option, #horaFin option").prop("disabled", false);
    }
  });
  