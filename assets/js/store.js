$(function () {
       $('#alllink').on('click', function (event) {
              $('.chasis_store').show();
              $('.cooling_store').show();
              $('.processor_store').show();
              $('.RAM_store').show();
              $('.graphic_store').show();
              $('.storage_store').show();
              $('.motherboard_store').show();
              $('.power_store').show();
              $('.peripheral_store').show();
              $('.screen_store').show();
       })
       $('#processorlink').on('click', function (event) {
              $('main .chasis_store').hide();
              $('main .cooling_store').hide();
              $('main .processor_store').show();
              $('main .RAM_store').hide();
              $('main .graphic_store').hide();
              $('.storage_store').hide();
              $('.motherboard_store').hide();
              $('.power_store').hide();
              $('.peripheral_store').hide();
              $('.screen_store').hide();
       })
       $('#graphiclink').on('click', function (event) {
              $('.chasis_store').hide();
              $('.cooling_store').hide();
              $('.processor_store').hide();
              $('.RAM_store').hide();
              $('.graphic_store').show();
              $('.storage_store').hide();
              $('.motherboard_store').hide();
              $('.power_store').hide();
              $('.peripheral_store').hide();
              $('.screen_store').hide();
       })
       $('#ramlink').on('click', function (event) {
              $('.chasis_store').hide();
              $('.cooling_store').hide();
              $('.processor_store').hide();
              $('.RAM_store').show();
              $('.graphic_store').hide();
              $('.storage_store').hide();
              $('.motherboard_store').hide();
              $('.power_store').hide();
              $('.peripheral_store').hide();
              $('.screen_store').hide();
       })
       $('#coolinglink').on('click', function (event) {
              $('.chasis_store').hide();
              $('.cooling_store').show();
              $('.processor_store').hide();
              $('.RAM_store').hide();
              $('.graphic_store').hide();
              $('.storage_store').hide();
              $('.motherboard_store').hide();
              $('.power_store').hide();
              $('.peripheral_store').hide();
              $('.screen_store').hide();
       })
       $('#storagelink').on('click', function (event) {
              $('.chasis_store').hide();
              $('.cooling_store').hide();
              $('.processor_store').hide();
              $('.RAM_store').hide();
              $('.graphic_store').hide();
              $('.storage_store').show();
              $('.motherboard_store').hide();
              $('.power_store').hide();
              $('.peripheral_store').hide();
              $('.screen_store').hide();
       })
       $('#chasislink').on('click', function (event) {
              $('.chasis_store').show();
              $('.cooling_store').hide();
              $('.processor_store').hide();
              $('.RAM_store').hide();
              $('.graphic_store').hide();
              $('.storage_store').hide();
              $('.motherboard_store').hide();
              $('.power_store').hide();
              $('.peripheral_store').hide();
              $('.screen_store').hide();
       })
       $('#powerlink').on('click', function (event) {
              $('.chasis_store').hide();
              $('.cooling_store').hide();
              $('.processor_store').hide();
              $('.RAM_store').hide();
              $('.graphic_store').hide();
              $('.storage_store').hide();
              $('.motherboard_store').hide();
              $('.power_store').show();
              $('.peripheral_store').hide();
              $('.screen_store').hide();
       })
       $('#screenlink').on('click', function (event) {
              $('.chasis_store').hide();
              $('.cooling_store').hide();
              $('.processor_store').hide();
              $('.RAM_store').hide();
              $('.graphic_store').hide();
              $('.storage_store').hide();
              $('.motherboard_store').hide();
              $('.power_store').hide();
              $('.peripheral_store').hide();
              $('.screen_store').show();
       })
       $('#peripheralink').on('click', function (event) {
              $('.chasis_store').hide();
              $('.cooling_store').hide();
              $('.processor_store').hide();
              $('.RAM_store').hide();
              $('.graphic_store').hide();
              $('.storage_store').hide();
              $('.motherboard_store').hide();
              $('.power_store').hide();
              $('.peripheral_store').show();
              $('.screen_store').hide();
       })
       $('#motherboardlink').on('click', function (event) {
              $('.chasis_store').hide();
              $('.cooling_store').hide();
              $('.processor_store').hide();
              $('.RAM_store').hide();
              $('.graphic_store').hide();
              $('.storage_store').hide();
              $('.motherboard_store').show();
              $('.power_store').hide();
              $('.peripheral_store').hide();
              $('.screen_store').hide();
       })
})