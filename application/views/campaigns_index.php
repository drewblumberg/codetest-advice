<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Campaign Log</title>
  <style>
    #form {
      width:210px;
    }
  </style>
</head>
<body>

<div id="container">
  <h1>Welcome to the Campaign Log!</h1>
  <h2><a href="/index.php/campaigns/all">See all campaigns</a></h2>

  <div id="body">
    <div id="form">
      <?php
        $this->load->helper('form');
        echo form_open('campaigns/create');

        echo form_label("Name: ", "name");
        $data = array(
          "name" => "name",
          "id" => "name",
          "value" => ""
        );
        echo form_input($data);

        echo form_label("Client name: ", "clientid");
        $options = array();
        foreach($clients as $client){
          $array = array($client->id => $client->name);
          $options = array_merge($options, $array);
        }
        echo form_dropdown('clientid', $options);

        echo form_label("Notes: ", "notes");
        $text = array(
          "name" => "notes",
          "id" => "notes",
          "value" => ""
        );
        echo form_textarea($text); ?>

        <input type="submit" value="Submit" />
      <?php
        echo form_close();
      ?>
    </div>
  </div>

  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>