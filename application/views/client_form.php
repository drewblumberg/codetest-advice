<?php echo validation_errors(); ?>
<?php
  $this->load->helper('form');
  echo form_open('clients/create');

  echo form_label("Name: ", "name");
  $namevalue = set_value('name') == false ? "" : set_value('name');
  $data = array(
    "name" => "name",
    "id" => "name",
    "value" => $namevalue
  );
  echo form_input($data);
  echo form_submit('submit', 'Submit')
  echo form_close();
?>