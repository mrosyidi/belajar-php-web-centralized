<?php

  if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="profile.php"');
    header('Content-Type: image/png');
    readfile(__DIR__ . '/file/profile.png');
    exit();
  }else
  {
    echo "Invalid Link";
    exit();
  }
