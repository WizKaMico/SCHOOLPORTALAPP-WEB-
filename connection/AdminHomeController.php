<?php 
include('connection/LoginSession.php');
require_once "connection/ApiController.php";
$portCont = new portalController();


$userSession = $portCont->getUserDetails($session_id);

if(!empty($_GET['uid'])){
    $uid = $_GET['uid'];
    $userSpecificDetails = $portCont->getSpecificDetails($uid);
    $grade = $userSpecificDetails[0]["level"];
    $subjectGrid = $portCont->subjectAssignedStudent($grade);
    $schoolAttendance = $portCont->schoolOverallAttendance($uid);
    $studentWhereabouts = $portCont->schoolOverallWhereAbout($uid);
   
    // include('api/get_user_specific_data.php');
}

if(!empty($_GET['list']))
{
    $list = $_GET['list'];
    $master = $portCont->schoolMasterList($list); 
}

if(!empty($_GET['view']))
{
    if($_GET['view'] == 'myclasses')
    {
        $uid = $userSession[0]["uid"]; 
        $grade = $userSpecificDetails[0]["level"];
        $userSpecificDetails = $portCont->getSpecificDetails($uid);
        $subjectGrid = $portCont->subjectAssignedStudent($grade);
        $schoolAttendance = $portCont->schoolOverallAttendance($uid);
        $studentWhereabouts = $portCont->schoolOverallWhereAbout($uid);
    }
}


if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        
        case "security": 
        if(isset($_POST['security'])){
             $uid = $userSession[0]['uid']; 
             $email = $userSession[0]['email']; 
             $code = $_POST['code'];
             if(!empty($uid) && !empty($email) && !empty($code))
             {
                $validation = $portCont->userValidatesEmail($uid, $email, $code);
                if(!empty($validation))
                {
                    $portCont->userhasBeenValidated($uid, $email, $code); 
                    header('Location: home.php');
                }
             }
        }
        break;   

        case "updaterequest":
            if(isset($_POST['update'])){
                $rid = $_POST['rid']; 
                $status = $_POST['status']; 
                if(!empty($rid) && !empty($status))
                {
                    $checkRequest = $portCont->validateRequest($rid); 
                    if(!empty($checkRequest))
                    {
                        $portCont->updateRequest($rid, $status); 
                        header('Location: home.php?view=request');
                    }
                }
            }
        break; 

        case "addrequest": 
            if(isset($_POST['add']))
            {
                $uid = $_POST['uid']; 
                $request = $_POST['request_type'];

                if(!empty($uid) && !empty($request))
                {
                    $portCont->requestCreation($uid, $request);
                    header('Location: home.php?view=request');
                }
            }

        break;

        case "addannouncement":
            if(isset($_POST['add']))
            {
                $title = $_POST['title'];
                $body = $_POST['body'];
                $start = $_POST['start'];
                $end = $_POST['end'];
                $photoName = $_FILES['photo']['name'];
                $photoTmpName = $_FILES['photo']['tmp_name'];


                if (!empty($title) && !empty($body) && !empty($start) && !empty($end) && !empty($photoName)) {
                    // Create a directory if it doesn't exist
                    $uploadDir = 'uploads'; // Set your desired upload directory
                    if (!file_exists($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
        
                    // Move the uploaded file to the directory
                    $photoPath = $uploadDir . '/' . $photoName;
                    move_uploaded_file($photoTmpName, $photoPath);
        
                    // Now you can use the $photoPath to store the image path in your database or further processing
                    // Perform any other necessary database operations
                    $portCont->announcementCreation($title, $body, $start, $end, $photoPath);
        
                    header('Location: home.php?view=announcement');
                }
            }
            break;

        case "addlost": 
            if(isset($_POST['add']))
            {
                $item = $_POST['item'];
                $foundby = $_POST['foundby'];
                $foundin = $_POST['foundin'];
                $status = $_POST['status'];
                $another = $_POST['another'];
                $photoName = $_FILES['photo']['name'];
                $photoTmpName = $_FILES['photo']['tmp_name'];

                if (!empty($item) && !empty($foundby) && !empty($foundin) && !empty($photoName) && !empty($status) && !empty($another)) {

                    $uploadDir = 'uploads'; // Set your desired upload directory
                    if (!file_exists($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
        
                    // Move the uploaded file to the directory
                    $photoPath = $uploadDir . '/' . $photoName;
                    move_uploaded_file($photoTmpName, $photoPath);
        
                    // Now you can use the $photoPath to store the image path in your database or further processing
                    // Perform any other necessary database operations
                    $portCont->lostCreation($item, $foundby, $foundin, $status, $another, $photoPath);
        
                    header('Location: home.php?view=lost');


                }
            }
            break;

            case "addenrollment": 
                if(isset($_POST['add']))
                {
                    $email = $_POST['email'];
                    $fname = $_POST['fname'];
                    $mname = $_POST['mname'];
                    $lname = $_POST['lname'];
                    $dob = $_POST['dob'];
                    $address = $_POST['address'];
                    $barangay = $_POST['barangay'];
                    $city = $_POST['city'];
                    $zip = $_POST['zip'];
                    $enrollment_type = $_POST['enrollment_type'];
                    $gwa = $_POST['gwa'];
                    $level = $_POST['level'];

                    if (!empty($email) && !empty($fname) && !empty($mname) && !empty($lname) && !empty($dob)
                    && !empty($address)  && !empty($barangay)  && !empty($city)
                    && !empty($zip)  && !empty($enrollment_type) && !empty($gwa)  && !empty($level)) 

                    {

                        $portCont->createEnrolles($email,$fname,$mname,$lname,$dob,$address,$barangay,$city,$zip,$enrollment_type,$gwa,$level);   
                        header('Location: home.php?view=enrollment');

                    }


                }
                break;

            case "updateEnrollment":
                if(isset($_POST['update']))
                {
                    $eid = $_POST['eid']; 
                    $status = $_POST['status']; 

                    if (!empty($eid) && !empty($status)) 
                    {
                        $checkingEnrollee = $portCont->checkEnrollee($eid);
                        if(!empty($checkingEnrollee)){
                        // $rand
                        $uid = rand(666666,999999);
                        $email = $checkingEnrollee[0]["email"]; 
                        $generate = $uid;
                        $password = md5($generate); 
                        $designation = 3;
                        $code = rand(6666,9999); 
                        $ave = $checkingEnrollee[0]["gen_ave"];
                        $level = $checkingEnrollee[0]["level"];
                        
                        $portCont->insertLoginEnrolle($uid, $email, $password, $designation, $code);
                        
                        $checkingOfSection = $portCont->checkSection($ave, $level); 

                            if(!empty($checkingOfSection)){
                            
                            $fname = $checkingEnrollee[0]["fname"]; 
                            $mname = $checkingEnrollee[0]["mname"]; 
                            $lname = $checkingEnrollee[0]["lname"]; 
                            $birthdate = $checkingEnrollee[0]["dob"]; 
                            $address = $checkingEnrollee[0]["address"] + ',' + $checkingEnrollee[0]["barangay"]  + ',' + $checkingEnrollee[0]["city"]; 
                            $level = $checkingEnrollee[0]["level"]; 
                            $section = $checkingOfSection[0]["section"];

                            $portCont->insertUserInformation($uid, $fname, $mname, $lname, $birthdate, $address, $level, $section);
                            $portCont->updateEnrollee($status,$eid);
                            header('Location: home.php?view=enrollment');
                            }
                        }
                    }

                }
                break;

            case "generatemap":
                if(isset($_POST['generate']))
                {
                    $mid = $_POST['pieceIdInput']; 
                    $checkMap = $portCont->genMap($mid);
                    if(!empty($checkMap))
                    {
                        header('Location: home.php?view=map&mid='.$checkMap[0]["mid"]);
                       
                    }else
                    {
                        header('Location: home.php?view=map');
                    }
                  

                }
                break;
      }
    }

if(!empty($_GET['mid']))
{
    $mid = $_GET['mid'];
    $mapSpecificCall = $portCont->genMap($mid);
}

$oua = $portCont->totalRegisteredAdmin();
$out = $portCont->totalRegisteredTeacher();
$ous = $portCont->totalRegisteredStudent();

$studChart = $portCont->genderStatStudent();
$teachChart = $portCont->genderStatTeacher();

$requestStudentList = $portCont->StudentList();
$announcementInfor = $portCont->getAnnouncement(); 
$lostItem = $portCont->getFound();


$tl = $portCont->totalLost();
$ta = $portCont->totalAnnouncement();
$tr = $portCont->totalRequest();


?>