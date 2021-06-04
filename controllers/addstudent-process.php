<?php
   // session_start();
    include_once('../Initialize/conn/db-connection.php');
    include_once('../Initialize/class/student_collegeinfo.php');
      $stud_stat = new Student_status();

      if(ISSET($_POST)){
               $last_name = trim($_POST['last_name']);
               $first_name = trim($_POST['first_name']);
               $contact_number = trim($_POST['contact_number']);
               $gender = trim($_POST['gender']);
               $course = trim($_POST['course']);
               $teacher = trim($_POST['teacher']);
               $subject = trim($_POST['subject']);
               $section = trim($_POST['section']);

               $stud_stat->add_student($last_name, $first_name, $contact_number, $gender, $course, $teacher, $subject,  $section);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Add Student Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/insertinto3table_usingoneform/index.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>