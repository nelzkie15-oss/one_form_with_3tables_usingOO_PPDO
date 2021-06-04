<?php
class Student_status
{
    public function add_student($last_name, $first_name, $contact_number, $gender, $course, $teacher, $subject,  $section){
           global $db;

            $stmt = $db->prepare("INSERT INTO student_info(`last_name`, `first_name`, `contact_number`, `gender`) VALUES(?,?,?,?)");
            $true = $stmt->execute([$last_name, $first_name, $contact_number, $gender]);
            $id = $db->lastInsertId();

           $stmt = $db->prepare("INSERT INTO student_info1(`course`, `teacher`,`student_id`) VALUES(?,?,?)");
            $true = $stmt->execute([$course, $teacher, $id]);
            $id = $db->lastInsertId();

           $stmt = $db->prepare("INSERT INTO student_info2(`subject`, `section`,`student_id`) VALUES(?,?,?)");
            $true = $stmt->execute([$subject, $section, $id]);
            $id = $db->lastInsertId();


        if ($true == true) {
                return true;
            } else {
                return false;
            }
        }


    public function fetch_student() {
        global $db;
        $query = $db->prepare("SELECT * FROM student_info INNER JOIN student_info1 ON student_info.student_id = student_info1.student_id INNER JOIN student_info2 ON student_info.student_id = student_info2.student_id");
        $query->execute(array());
        return $query->fetchAll();
    }

    public function fetch_student1() {
        global $db;
        $query = $db->prepare("SELECT * FROM student_info1");
        $query->execute(array());
        return $query->fetchAll();
    }
    

     public function fetch_student2() {
        global $db;
        $query = $db->prepare("SELECT * FROM student_info2");
        $query->execute(array());
        return $query->fetchAll();
    }
    

     public function delete_student($student_id){

        global $db;

        $sql = "DELETE FROM `student_info` WHERE student_id = ?";
        $delete = $db->prepare($sql)->execute([$student_id]);
        if ($delete == true) {
            return true;
        } else {
            return false;
        }
    }

     public function update_student($last_name, $first_name, $contact_number, $gender, $course, $teacher, $subject,  $section, $student_id){
         
            global $db;

            $sql = "UPDATE `student_info` SET `last_name` = ?,  `first_name` = ?, `contact_number` = ?, `gender` = ?  WHERE student_id = ?";
            $update = $db->prepare($sql)->execute([$last_name, $first_name, $contact_number, $gender, $student_id]);

            $sql = "UPDATE `student_info1` SET  `course` = ?, `teacher` = ? WHERE student_id = ?";
            $update = $db->prepare($sql)->execute([$course, $teacher, $student_id]);

            $sql = "UPDATE `student_info2` SET  `subject` = ?, `section` = ? WHERE student_id = ?";
            $update = $db->prepare($sql)->execute([$subject,  $section, $student_id]);

            if ($update == true) {
                return true;
            } else {
                return false;
           } 

        }

 }
?>


