<?php 

    $data =  file_get_contents('test.json');

    $pelajar = json_decode($data, true);

    // var_dump($pelajar);

    echo $pelajar[0]["hobby"][1];

?>