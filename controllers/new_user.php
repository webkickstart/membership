<?php
include '../models/data.php';
include '../models/class.accounts.php';

     $data[] = $_POST[username];
     $data[] = $_POST[password];
     $data[] = "0";
     $data[] = $_POST[dealer];
     $data[] = $_POST[address];
     $data[] = $_POST[city];
     $data[] = $_POST[st];
     $data[] = $_POST[zip];
     $data[] = $_POST[phone];
     $data[] = "0";
     $data[] = md5(uniqid(mt_rand(), true));

$obj = new accounts();
$obj->addAccount($data);
?>
<script type="text/javascript">
  window.location="/";  
</script>
