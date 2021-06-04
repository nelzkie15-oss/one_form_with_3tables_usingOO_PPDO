
<?php
    include_once('Initialize/conn/db-connection.php');
    include_once('Initialize/class/student_collegeinfo.php');

    $stud = new Student_status();
    $fetch_students = $stud->fetch_student();
    $fetch_students1 = $stud->fetch_student1(); 
    $fetch_students2 = $stud->fetch_student2();  
?>
<?php include 'header/header.php';?>
<body>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h4 class="display-5">Student Information</h4>
                <hr style="border: 1px solid gray">
                </hr>
                <div class="" id="msg"></div>
                <div class="" id="msg2"></div>
                <div class="row">

                    <div class="col-4">
                        <!-- add  info here-->
                        <div class="card" style="border-top: 3px solid #ffc107">
                            <div class="card-body">
                                <form action="POST">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">LAST NAME</label>
                                                <input type="text" class="form-control" id="last_name" alt="last_name" required="true"  autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">FIRST NAME</label>
                                                <input type="text" class="form-control" id="first_name" alt="first_name" required="true"  autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">CONTACT NO.</label>
                                                <input type="text" class="form-control" id="contact_number" minlength="10" maxlength="11" alt="contact_number" required="true"  autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">GENDER</label>
                    
                                                <select type="text" class="form-control" id="gender" alt="gender" required="true"  autocomplete="off">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><hr style="border: 1px solid gray"></hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">COURSE</label>
                                                   <select type="text" class="form-control" id="course" alt="course" required="true"  autocomplete="off">
                                                    <option value="BS Computer Science">BS Computer Science</option>
                                                    <option value="BS Information Technology">BS Information Technology</option>
                                                    <option value="BS Accountancy">BS Accountancy</option>
                                                </select>
                                            </div>
                                        </div>
                                     <div class="col-6">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">TEACHER</label>                      
                                                <select type="text" class="form-control" id="teacher" alt="teacher" required="true"  autocomplete="off">
                                                    <option value="Sir John Doe">Sir John Doe</option>
                                                    <option value="Mam Maricar Bautista">Mam Maricar Bautista</option>
                                                </select>
                                            </div>
                                        </div>
     
                                    </div>
                                    <hr style="border: 1px solid gray"></hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">SUBJECT</label>                     
                                                 <select type="text" class="form-control" id="subject" alt="subject" required="true"  autocomplete="off">
                                                    <option value="Math201">Math201</option>
                                                    <option value="Eng301">Eng301</option>
                                                    <option value="Eng301">Fil205</option>
                                                </select>
                                            </div>
                                        </div>
                                     <div class="col-6">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">SECTION</label>
                                                   <select type="text" class="form-control" id="section" alt="section" required="true"  autocomplete="off">
                                                    <option value="B201">B201</option>
                                                    <option value="B203">B203</option>
                                                    <option value="B205">B205</option>
                                                </select>
                                            </div>
                                        </div>
     
                                    </div>
                                  
                                     <button type="button" class="btn btn-success btn-block" id="add-student" name="add-student" value="Add Student">Add Student</button>
                                      
     
                                    
                                </form>
                            </div>
                        </div>
                        <!-- end add info here-->
                    </div>

                    <div class="col-8">
                        <!-- add  info here-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="border-top: 3px solid #ffc107">
                                    <div class="card-body">
                                       <table class="table table-striped">
                                          <thead>
                                            <tr>
                                              <th scope="col">FIRST NAME</th>
                                              <th scope="col">LAST NAME</th>
                                              <th scope="col">CONTACT NO.</th>
                                              <th scope="col">GENDER</th>
                                              <th scope="col">ACTION</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                         <?php
                                            foreach($fetch_students as $stud){ ?>
                                            <tr>
                                              <td><?= ucfirst(htmlentities($stud['last_name'])); ?></td>
                                              <td><?= ucfirst(htmlentities($stud['first_name'])); ?></td>
                                              <td><?= ucfirst(htmlentities($stud['contact_number'])); ?></td>
                                              <td><?= ucfirst(htmlentities($stud['gender'])); ?></td>
                                              <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#students<?= htmlentities($stud['student_id']); ?>">Edit</button> | <button type="button" class="btn btn-danger btn-sm delete" fetchingID="<?= htmlentities($stud['student_id']); ?>"  value="Edit">Delete</button></td>

                                              <?php include('modal/edit-student.php'); ?>
                                            </tr>
                                              <?php } ?>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div><br>


                        <div class="row">
                            <div class="col-6">
                                <div class="card" style="border-top: 3px solid #ffc107">
                                    <div class="card-body">
                                    <table class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th scope="col">COURSE</th>
                                          <th scope="col">TEACHER</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                       <?php
                                            foreach($fetch_students1 as $stud1){ ?>
                                        <tr>
                                         <td><?= ucfirst(htmlentities($stud1['course'])); ?></td>
                                         <td><?= ucfirst(htmlentities($stud1['teacher'])); ?></td>
                                        </tr>
                                      <?php } ?>
                                      </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-6">
                                <div class="card" style="border-top: 3px solid #ffc107">
                                    <div class="card-body">
                                    <table class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th scope="col">SUBJECT</th>
                                          <th scope="col">SECTION</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                       <?php
                                            foreach($fetch_students2 as $stud2){ ?>
                                        <tr>
                                         <td><?= ucfirst(htmlentities($stud2['subject'])); ?></td>
                                         <td><?= ucfirst(htmlentities($stud2['section'])); ?></td>
                                        </tr>
                                      <?php } ?>
                                      </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- end add info here-->
                    </div>



                </div>
            </div>
        </div>
            <footer class="alert alert-info" align="center">All right Reserved © 2021 Created By:JunilToledo</footer>
    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="js/main-index.js"></script><script src="js/delete-student.js"></script>


</body>

</html>