<h1>All Projects</h1>
<p></p>
<a href="/index.php">Home</a>
<p></p>
<ul>
  <?php
    foreach($campaigns as $c) {
      echo '<li>'.$c->name;
      echo ' - '.$c->notes.'</li>';
    }
  ?>
</ul>
