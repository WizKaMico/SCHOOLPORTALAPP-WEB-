<?php 

require_once "../connection/ApiController.php";

$portCont = new portalController();

$userInformation = $portCont->RegisteredUser();

header('Content-Type: application/json');
echo json_encode($userInformation);

?>