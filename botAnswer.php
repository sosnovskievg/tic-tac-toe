<?php
$data = [
    $Xes = $_POST['Xes'],
    $id = $_POST['id']
    ];
while(true)
{
    $id2= random_int(0,8);
    if ($id!=$id2)
    {
        echo json_encode(array("id2"=>$id2));
        break;
    }

}
