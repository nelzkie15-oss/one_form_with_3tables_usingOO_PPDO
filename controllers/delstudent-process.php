<?php
   // session_start();
    include_once('../Initialize/conn/db-connection.php');
    include_once('../Initialize/class/student_collegeinfo.php');
      $stud_stat = new Student_status();

        if(ISSET($_POST['student_id'])){
          $student_id = trim($_POST['student_id']);
                 
               $stud_stat->delete_student($student_id);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Delete Student  Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/insertinto3table_usingoneform/index.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>