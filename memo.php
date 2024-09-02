<?php
while($str = fgets($file)){
    $array = explode(",",$str);
    echo count($array);
    var_dump($array);

    for($i = 0; $i<count($array); $i++){?>
        <td><?php echo $array[$i] ?></td>
        <?php
    };
};
?>