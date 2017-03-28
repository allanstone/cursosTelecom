<?php
if(isset($_POST['names']) && isset($_POST['lastnames'])) {
    $data = $_POST['names'] . '|' . $_POST['lastnames'] . '|' . $_POST['email'] . '|' . md5($_POST['password']) . "\n";
    $ret = file_put_contents($_POST['curso'].'.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('Error al escribir el archivo');
    }
    else {
        header("Location:index.html");
    }
}
else {
   die('No hay datos para registrar');
}
?>