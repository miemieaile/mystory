<?php
include '../controllers/apicontrollers.php';
$apicontroller=new Apicontrollers();

$homebanner=$apicontroller->gethomebanner();
if($homebanner)
{
    $result['data']['success']=1;
    $result['data']['homebanner']=$homebanner;
    $result['data']['error']="";
}
else
{
    $result['data']['success']=0;
    $result['data']['homebanner']=array();
    $result['data']['error']="Please Try Again";
}

echo json_encode($result);
?>