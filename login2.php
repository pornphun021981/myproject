<?php
if($_POST['username']=="pornphun" && $_POST['password']=="021981"){
echo "ยินดีต้อนรับคุณ" . $_POST['username'];
echo "<a href='http://www.huntra.bait.rmutsb.ac.th'>BIT Site </a>";
}
else {
  echo "คุณป้อนข้อมูลไม่ถูกต้อง";
  echo "<a href='loginform.php'>กลับหน้า loginform</a>";
}

 ?>
