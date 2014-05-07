$(document).ready(init);

function init(){
  $('#client_form').on('click', submitClientForm);
}

function submitClientForm(e){
  e.preventDefault();
  var form_data = {
    name: $('#name').val();
  }

  $.ajax({
    url: "<?php echo site_url('clients/add_client_record'); ?>",
    type: "POST",
    data: form_data,
    success: function(msg){
      var id = $('#dropdown option').length;
      $('#dropdown').append('<option value=' + id + '>' + name + '</option>');
      $('#dropdown').val(id);
    }
  });

}