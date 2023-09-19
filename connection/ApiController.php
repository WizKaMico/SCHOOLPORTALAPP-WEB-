<?php
require_once "DBController.php";

class portalController extends DBController
{
    function registerUser($uid, $email, $password, $designation, $code, $status)
    {
        $query = "INSERT INTO user_login (uid,email,password,designation,code,status,date_created) VALUES (?,?,?,?,?,?,?)"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $password
            ),
            array(
                "param_type" => "i",
                "param_value" => $designation
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )  
        );
        $this->insertDB($query, $params);
    }

    function userLogin($password, $uid)
    {
        $query = "SELECT * FROM user_login UL LEFT JOIN designation D ON UL.designation = D.id WHERE UL.password = ? AND UL.uid = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $password
            ),array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function userInformation($uid, $fname, $mname, $lname, $gender, $birthdate, $address, $contact, $level)
    {
        $query = "INSERT INTO user_information (uid, fname, mname, lname, gender, birthdate, address, contact, level) VALUES (?,?,?,?,?,?,?,?,?)";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $mname
            ),
            array(
                "param_type" => "s",
                "param_value" => $lname
            ),
            array(
                "param_type" => "s",
                "param_value" => $gender
            ),
            array(
                "param_type" => "s",
                "param_value" => $birthdate
            ),
            array(
                "param_type" => "s",
                "param_value" => $address
            ),
            array(
                "param_type" => "s",
                "param_value" => $contact
            ),
            array(
                "param_type" => "i",
                "param_value" => $level
            )
        );
        $this->insertDB($query, $params);
    }


    function userInformationUpdate($fname, $mname, $lname, $gender, $birthdate, $address, $contact, $level, $uid)
    {
        $query = "UPDATE user_information SET fname = ?, mname = ?, lname = ?, gender = ?, birthdate = ?,  address = ?, contact = ?, level = ? WHERE uid = ?";
        $params = array(  
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $mname
            ),
            array(
                "param_type" => "s",
                "param_value" => $lname
            ),
            array(
                "param_type" => "s",
                "param_value" => $gender
            ),
            array(
                "param_type" => "s",
                "param_value" => $birthdate
            ),
            array(
                "param_type" => "s",
                "param_value" => $address
            ),
            array(
                "param_type" => "s",
                "param_value" => $contact
            ),
            array(
                "param_type" => "i",
                "param_value" => $level
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );
        $this->updateDB($query, $params);
    }

    function getUserDetails($session_id){
         $query = "SELECT * FROM user_login UL LEFT JOIN designation D ON UL.designation = D.id WHERE UL.user_id = ?";

         $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $session_id
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;

    }

    function totalRegisteredAdmin()
    {
       
      $query = "SELECT COUNT(*) as total FROM user_login WHERE designation = 1";
      $registeredAdmin = $this->getDBResult($query);
      return $registeredAdmin;
       
    }

    function totalRegisteredTeacher()
    {
     
      $query = "SELECT COUNT(*) as total FROM user_login WHERE designation = 2";
      $registeredTeacher = $this->getDBResult($query);
      return $registeredTeacher;
    }

    function totalRegisteredStudent()
    {

       $query = "SELECT COUNT(*) as total FROM user_login WHERE designation = 3";
       $registeredStudent = $this->getDBResult($query);
       return $registeredStudent;

    }

    function RegisteredUser()
    {
         $query = "SELECT * FROM user_login UL LEFT JOIN designation D ON
          UL.designation = D.id  LEFT JOIN user_information UI ON UL.uid = UI.uid";        
         $overallUser = $this->getDBResult($query);
         return $overallUser;
        
    }


    function getSpecificDetails($uid){
        $query = "SELECT * FROM user_login UL LEFT JOIN designation D ON
        UL.designation = D.id  LEFT JOIN user_information UI ON UL.uid = UI.uid WHERE UL.uid = ?";

        $params = array(
           
           array(
               "param_type" => "s",
               "param_value" => $uid
           )
       );
       
       $userSpecs = $this->getDBResult($query, $params);
       return $userSpecs;

   }

   function subjectMatterAdd($grade, $subject, $subjcode, $time, $room)
    {
        $query = "INSERT INTO subject_matter (grade, subject, subjcode, time, room) VALUES (?,?,?,?,?)";
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $grade
            ),  
            array(
                "param_type" => "s",
                "param_value" => $subject
            ),
            array(
                "param_type" => "s",
                "param_value" => $subjcode
            ),
            array(
                "param_type" => "s",
                "param_value" => $time
            ),
            array(
                "param_type" => "s",
                "param_value" => $room
            )
        );
        $this->updateDB($query, $params);
    }

    function subjectAssignedStudent($grade)
    {
        $query = "SELECT * FROM subject_matter WHERE grade = ?"; 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $grade
            )
        );

       $subjectAssignedStudent = $this->getDBResult($query, $params);
       return $subjectAssignedStudent;

    }

    function schoolAttendanceTimeIn($uid)
    {

        date_default_timezone_set('Asia/Manila');

         $query = "INSERT INTO user_attendance (time_in, uid, date) VALUES (?,?,?)"; 
         
         $params = array(
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d h:i:s")
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )
        );

        $this->insertDB($query, $params);

    }


    function schoolAttendanceTimeOut($uid)
    {

        date_default_timezone_set('Asia/Manila');

        $query = "UPDATE user_attendance SET time_out = ? WHERE uid = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d h:i:s")
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );

        $this->updateDB($query, $params);
    }

    function schoolAttendanceValidation($uid)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "SELECT * FROM user_attendance WHERE uid = ? AND date = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )
        );

       $schoolVal = $this->getDBResult($query, $params);
       return $schoolVal;

    }

    function schoolOverallAttendance($uid)
    {
        $query = "SELECT * FROM user_attendance WHERE uid = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );

       $schoolAttendance = $this->getDBResult($query, $params);
       return $schoolAttendance;

    }

    function schoolWhereAboutTimeIn($uid, $room)
    {

        date_default_timezone_set('Asia/Manila');

         $query = "INSERT INTO school_whereabout (uid, time_in, room, date) VALUES (?,?,?,?)"; 
         
         $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d h:i:s")
            ),
            array(
                "param_type" => "s",
                "param_value" => $room
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )
        );

        $this->insertDB($query, $params);

    }

    function schoolWhereAboutTimeOut($uid, $room)
    {

        date_default_timezone_set('Asia/Manila');

        $query = "UPDATE school_whereabout SET time_out = ? WHERE uid = ? AND room = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d h:i:s")
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $room
            )
        );

        $this->updateDB($query, $params);
    }

    function schoolWhereAboutValidation($uid, $room)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "SELECT * FROM school_whereabout WHERE uid = ? AND date = ? AND room = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            ),
            array(
                "param_type" => "s",
                "param_value" => $room
            )
        );

       $schoolWhere = $this->getDBResult($query, $params);
       return $schoolWhere;

    }

    function schoolOverallWhereAbout($uid)
    {
        $query = "SELECT * FROM school_whereabout WHERE uid = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );

       $schoolWhere = $this->getDBResult($query, $params);
       return $schoolWhere;

    }

    function requestCreation($uid, $request)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO user_request (uid, request_type, date_requested, status) VALUES (?,?,?,?)";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $request
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            ),
            array(
                "param_type" => "s",
                "param_value" => 'OPEN'
            )
        );

        $this->insertDB($query, $params);
    }

    function getRequest()
    {
        $query = "SELECT * FROM user_request UR LEFT JOIN user_information UI ON UR.uid = UI.uid"; 
        $overallRequest = $this->getDBResult($query);
        return $overallRequest;
    }

    function getSection()
    {
        $query = "SELECT * FROM section_legen"; 
        $overallSection = $this->getDBResult($query);
        return $overallSection;
    }

    function StudentList()
    {
        $query = "SELECT * FROM user_login UL LEFT JOIN user_information UI ON UL.uid = UI.uid WHERE UL.designation = 3"; 
        $overallStudentListForRequest = $this->getDBResult($query);
        return $overallStudentListForRequest;
    }


    function validateRequest($rid)
    {
        $query = "SELECT * FROM user_request WHERE rid = ?";

        $params = array(      
            array(
                "param_type" => "i",
                "param_value" => $rid
            )
        );

        $validateRequest = $this->getDBResult($query, $params);
        return $validateRequest;

    }

    function checkEnrollee($eid)
    {
        $query = "SELECT * FROM enrollment WHERE eid = ?";

        $params = array(      
            array(
                "param_type" => "i",
                "param_value" => $eid
            )
        );

        $enrolleValidated = $this->getDBResult($query, $params);
        return $enrolleValidated;
    }

    function updateRequest($rid, $status)
    {
        $query = "UPDATE user_request SET status = ? WHERE rid = ?"; 

        
        $params = array(      
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "i",
                "param_value" => $rid
            )
        );
        
        $this->updateDB($query, $params);


    }

    function announcementCreation($title, $body, $start, $end, $photoPath)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO announcement (title, body, start, end, image_path, date_created) 
        VALUES (?, ?, ?, ?, ?, ?)";
        // $query = "INSERT INTO announcement (title, body, date_created) VALUES (?,?,?)";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $title
            ),
            array(
                "param_type" => "s",
                "param_value" => $body
            ),
            array(
                "param_type" => "s",
                "param_value" => $start
            ),
            array(
                "param_type" => "s",
                "param_value" => $end
            ),
            array(
                "param_type" => "s",
                "param_value" => $photoPath
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );

        $this->insertDB($query, $params);
    }

    function lostCreation($item, $foundby, $foundin, $status, $another, $photoPath)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO lostandfound (item, foundby, foundin, image_path, status, another, date) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $item
            ),
            array(
                "param_type" => "s",
                "param_value" => $foundby
            ),
            array(
                "param_type" => "s",
                "param_value" => $foundin
            ),
            array(
                "param_type" => "s",
                "param_value" => $photoPath
            ),
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "s",
                "param_value" => $another
            ),     
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );

        $this->insertDB($query, $params);

    }

    function getAnnouncement()
    {
        $query = "SELECT * FROM announcement"; 
        $overallAnnouncement = $this->getDBResult($query);
        return $overallAnnouncement;
    }


    // function lostCreation($item, $foundby, $foundin)
    // {
    //     date_default_timezone_set('Asia/Manila');

    //     $query = "INSERT INTO lostandfound (item, foundby, foundin, status, date) VALUES (?,?,?,?,?)";

    //     $params = array(
    //         array(
    //             "param_type" => "s",
    //             "param_value" => $item
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => $foundby
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => $foundin
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => 'OPEN'
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => date('Y-m-d')
    //         )
    //     );

    //     $this->insertDB($query, $params);
    // }


    function getFound()
    {
        $query = "SELECT * FROM lostandfound"; 
        $overallLost = $this->getDBResult($query);
        return $overallLost;
    }


    function totalLost()
    {
       
      $query = "SELECT COUNT(*) as total FROM lostandfound";
      $totalLost = $this->getDBResult($query);
      return $totalLost;
       
    }


    function totalAnnouncement()
    {
       
      $query = "SELECT COUNT(*) as total FROM announcement";
      $totalAnnouncement = $this->getDBResult($query);
      return $totalAnnouncement;
       
    }


    function totalRequest()
    {
       
      $query = "SELECT COUNT(*) as total FROM user_request";
      $totalRequest = $this->getDBResult($query);
      return $totalRequest;
       
    }
    

    function userMailValidation($email, $uid, $code)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO user_security (uid, email, code, status, date_created) VALUES (?,?,?,?,?)";
   
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => 'UNUSED'
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );

        $this->insertDB($query, $params);
    
    }


    
    function userValidatesEmail($uid, $email, $code)
    {
        $query = "SELECT * FROM user_security UL WHERE UL.uid = ? AND UL.email = ? AND UL.code = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function userhasBeenValidated($uid, $email, $code)
    {
        $query = "UPDATE user_security UL SET status = ? WHERE UL.uid = ? AND UL.email = ? AND UL.code = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => 'USED'
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),array(
                "param_type" => "s",
                "param_value" => $email
            ),array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $this->updateDB($query, $params);
    }


    function schoolMasterList($list)
    {
        $query = "SELECT * FROM user_login UL LEFT JOIN user_information UI ON UL.uid = UI.uid LEFT JOIN designation D ON UL.designation = D.id WHERE D.role = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $list
            )
        );


        $schoolList = $this->getDBResult($query, $params);
        return $schoolList;
    }

    function genderStatStudent()
    {
       
      $query = "SELECT COUNT(*) as total, UI.gender FROM user_login UL LEFT JOIN user_information UI ON UL.uid = UI.uid LEFT JOIN designation D ON UL.designation = D.id WHERE D.role = 'STUDENT' GROUP BY UI.gender";
      $totalStudentGenderPop = $this->getDBResult($query);
      return $totalStudentGenderPop;
       
    }

    function genderStatTeacher()
    {
       
      $query = "SELECT COUNT(*) as total, UI.gender FROM user_login UL LEFT JOIN user_information UI ON UL.uid = UI.uid LEFT JOIN designation D ON UL.designation = D.id WHERE D.role = 'TEACHER' GROUP BY UI.gender";
      $totalTeacherGenderPop = $this->getDBResult($query);
      return $totalTeacherGenderPop;
       
    }


    function createEnrolles($email, $fname,$mname,$lname,$dob,$address,$barangay,$city,$zip,$enrollment_type,$gwa,$level) 
    {
        $query = "INSERT INTO enrollment (email,fname,mname,lname,dob,address,barangay,city,zip,enrollment_type,gen_ave,level,status,date_created)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $mname
            ),array(
                "param_type" => "s",
                "param_value" => $lname
            ),array(
                "param_type" => "s",
                "param_value" => $dob
            ),
            array(
                "param_type" => "s",
                "param_value" => $address
            ),
            array(
                "param_type" => "s",
                "param_value" => $barangay
            ),
            array(
                "param_type" => "s",
                "param_value" => $city
            ),
            array(
                "param_type" => "s",
                "param_value" => $zip
            ),
            array(
                "param_type" => "s",
                "param_value" => $enrollment_type
            ),
            array(
                "param_type" => "i",
                "param_value" => $gwa
            ),
            array(
                "param_type" => "i",
                "param_value" => $level
            ),
            array(
                "param_type" => "s",
                "param_value" => 'NEW'
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        $this->insertDB($query, $params);
    }

    function insertLoginEnrolle($uid, $email, $password, $designation, $code)
    {
        $query = "INSERT INTO user_login (uid,email,password,designation,code,status,date_created)
        VALUES (?,?,?,?,?,?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $password
            ),array(
                "param_type" => "s",
                "param_value" => $designation
            ),array(
                "param_type" => "s",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => 'INVALID'
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        $this->insertDB($query, $params);
    }

    function insertUserInformation($uid, $fname, $mname, $lname, $birthdate, $address, $level, $section)
    {
        $query = "INSERT INTO user_information (uid,fname,mname,lname,birthdate,address,level,section)
        VALUES (?,?,?,?,?,?,?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $mname
            ),array(
                "param_type" => "s",
                "param_value" => $lname
            ),array(
                "param_type" => "s",
                "param_value" => $birthdate
            ),
            array(
                "param_type" => "s",
                "param_value" => $address
            ),
            array(
                "param_type" => "s",
                "param_value" => $level
            ),
            array(
                "param_type" => "s",
                "param_value" => $section
            )
        );
        $this->insertDB($query, $params);
    }

    function allEnrolledList()
    {
       
      $query = "SELECT * FROM enrollment";
      $allEnroll = $this->getDBResult($query);
      return $allEnroll;
       
    }

    function updateEnrollee($status,$eid)
    {
        $query = "UPDATE enrollment SET status = ? WHERE eid = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "i",
                "param_value" => $eid
            )
        );
        
        $this->updateDB($query, $params);
    }

    function checkSection($ave, $level)
    {
        $query = "SELECT * FROM section_legen  WHERE min >= ? AND level = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $ave
            ),
            array(
                "param_type" => "i",
                "param_value" => $level
            )
        );


        $sectionCheck = $this->getDBResult($query, $params);
        return $sectionCheck;
    }


    function personalInformation($uid)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT * FROM user_information UI LEFT JOIN user_attendance UA ON UI.uid = UA.uid WHERE UI.uid = ? AND UA.date = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );


        $schoolList = $this->getDBResult($query, $params);
        return $schoolList;
    }

    function genMap($mid)
    {
   
        $query = "SELECT * FROM map_direction WHERE mid = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $mid
            )
        );


        $schoolRoom = $this->getDBResult($query, $params);
        return $schoolRoom;
    }

    function getMapOverall()
    {
        $query = "SELECT * FROM map_direction";
        $allMap = $this->getDBResult($query);
        return $allMap;
    }

    function saveTokenToDatabase($user_id, $token)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO remember_me_tokens (user_id,token,expiration_date)
        VALUES (?,?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "i",
                "param_value" => $user_id
            ),
            array(
                "param_type" => "s",
                "param_value" => $token
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d H:i:s', strtotime('+30 days'))
            )
        );
        $this->insertDB($query, $params);
    }
    
    function checkExistence($uid, $email)
    {
        $query = "SELECT * FROM user_login WHERE uid = ? AND email = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            )
        );


        $forgotValid = $this->getDBResult($query, $params);
        return $forgotValid;
    }


    function insertForgotten($uids, $generate_code, $status)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO forgot_account (uid,code,status,date_generated)
        VALUES (?,?,?,?)"; 

        $params = array(       
            array(
                "param_type" => "s",
                "param_value" => $uids
            ),
            array(
                "param_type" => "i",
                "param_value" => $generate_code
            ),
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        $this->insertDB($query, $params);
    }

    function checkForgotten($uid)
    {
        $query = "SELECT ul.email, fa.code, ul.uid FROM forgot_account fa LEFT JOIN user_login ul ON fa.uid = ul.uid WHERE fa.uid = ?"; 

        $params = array(
             
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );

        
        $checkAccountForgot = $this->getDBResult($query, $params);
        return $checkAccountForgot;

    }


    function updatePassword($password, $uid, $email)
    {
        $query = "UPDATE user_login SET password = ? WHERE uid = ? AND email = ?"; 

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $password
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            )
        );
        
        $this->updateDB($query, $params);
    }


}