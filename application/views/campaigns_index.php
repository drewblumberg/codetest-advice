<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Campaign Log</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap.css">
  <style>
    #form {
      width:210px;
    }
  </style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets/main.js"></script>
</head>
<body>

<div id="container">
  <h1>Welcome to the Campaign Log!</h1>
  <h2><a href="/index.php/campaigns/all">See all campaigns</a></h2>

  <div id="body">
    <div id="form">
      <?php echo validation_errors(); ?>
      <?php
        $this->load->helper('form');
        echo form_open('campaigns/create');

        echo form_label("Name: ", "name");
        $namevalue = set_value('name') == false ? "" : set_value('name');
        $data = array(
          "name" => "name",
          "id" => "name",
          "value" => $namevalue
        );
        echo form_input($data);

        echo form_label("Client name: ", "clientid");
        $options = array();
        foreach($clients as $client){
          $array = array($client->id => $client->name);
          $options = array_merge($options, $array);
        }
        echo form_dropdown('clientid', $options, set_value('clientid'),'id="dropdown"'); ?>
        <button id="client_form">Add Client</button>
        <?php
        echo form_label("Notes: ", "notes");
        $notesvalue = set_value('notes') == false ? "" : set_value('notes');
        $text = array(
          "name" => "notes",
          "id" => "notes"
        );
        echo form_textarea($text); ?>

        <input type="submit" value="Submit" />

      <?php
        echo form_close();
      ?>
    </div>
  </div>

  <!--
  <div id="client_form">
    <?php
      /*
      echo form_open('clients/create');

      echo form_label("Name: ", "name");
      $data2 = array(
        "name" => "name",
        "id" => "name",
        "value" => ""
      );
      echo form_input($data2);
      echo form_submit('submit2', 'Submit')
      echo form_close(); */
    ?>
  -->
  </div>

  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>