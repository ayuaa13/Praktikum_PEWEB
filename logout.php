<?php
session_start();
session_destroy();
header("Location: beranda.php?logout=success");
exit;
?>
