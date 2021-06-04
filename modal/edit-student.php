<!-- Modal -->
<div class="modal fade" id="students<?= htmlentities($stud['student_id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div id="msg"></div>
                <form action="POST">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">LAST NAME</label>
                                <input type="text" class="form-control" id="last_name" alt="last_name2" value="<?= ucfirst(htmlentities($stud['last_name'])); ?>" required="true" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">FIRST NAME</label>
                                <input type="text" class="form-control" id="first_name" alt="first_name2" value="<?= ucfirst(htmlentities($stud['first_name'])); ?>" required="true" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">CONTACT NO.</label>
                                <input type="text" class="form-control" id="contact_number" minlength="10" maxlength="11" alt="contact_number2" value="<?= ucfirst(htmlentities($stud['contact_number'])); ?>" required="true" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">GENDER</label>

                                <select type="text" class="form-control" id="gender2" alt="gender2" value="<?= ucfirst(htmlentities($stud['gender'])); ?>" required="true" autocomplete="off">
                                   <option value="<?= ucfirst(htmlentities($stud['gender'])); ?>" hidden><?= ucfirst(htmlentities($stud['gender'])); ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr style="border: 1px solid gray">
                    </hr>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">COURSE</label>
                                <select type="text" class="form-control" id="course2" alt="course2" value="<?= ucfirst(htmlentities($stud['course'])); ?>" required="true" autocomplete="off">
                                    <option value="<?= ucfirst(htmlentities($stud['course'])); ?>" hidden><?= ucfirst(htmlentities($stud['course'])); ?></option>
                                    <option value="BS Computer Science">BS Computer Science</option>
                                    <option value="BS Information Technology">BS Information Technology</option>
                                    <option value="BS Accountancy">BS Accountancy</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">TEACHER</label>
                                <select type="text" class="form-control" id="teacher2" alt="teacher2"  value="<?= ucfirst(htmlentities($stud['teacher'])); ?>"  required="true" autocomplete="off">
                                   <option value="<?= ucfirst(htmlentities($stud['teacher'])); ?>" hidden><?= ucfirst(htmlentities($stud['teacher'])); ?></option>
                                    <option value="Sir John Doe">Sir John Doe</option>
                                    <option value="Mam Maricar Bautista">Mam Maricar Bautista</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <hr style="border: 1px solid gray">
                    </hr>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">SUBJECT</label>
                                <select type="text" class="form-control" id="subject2" alt="subject2" value="<?= ucfirst(htmlentities($stud['subject'])); ?>"  required="true" autocomplete="off">
                                    <option value="<?= ucfirst(htmlentities($stud['subject'])); ?>" hidden><?= ucfirst(htmlentities($stud['subject'])); ?></option>
                                    <option value="Math201">Math201</option>
                                    <option value="Eng301">Eng301</option>
                                    <option value="Eng301">Fil205</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formGroupExampleInput">SECTION</label>
                                <select type="text" class="form-control" id="section2" alt="section2" value="<?= ucfirst(htmlentities($stud['section'])); ?>"  required="true" autocomplete="off">
                                    <option value="<?= ucfirst(htmlentities($stud['section'])); ?>" hidden><?= ucfirst(htmlentities($stud['section'])); ?></option>
                                    <option value="B201">B201</option>
                                    <option value="B203">B203</option>
                                    <option value="B205">B205</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </form>

            </div>
            <div class="modal-footer">
              <input type="hidden" name="student_id" id="student_id" value="<?= htmlentities($stud['student_id']); ?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="update-student">Update</button>
            </div>
        </div>
    </div>
</div>


<script>
      document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#update-student');
        btn.addEventListener('click', () => {

         // alert('click');

            const last_name = document.querySelector('input[alt=last_name2]').value;
            const first_name = document.querySelector('input[alt=first_name2]').value;
            const contact_number = document.querySelector('input[alt=contact_number2]').value;
            const gender = $('#gender2 option:selected').val();
            const course = $('#course2 option:selected').val();
            const teacher = $('#teacher2 option:selected').val();
            const subject = $('#subject2 option:selected').val();
            const section = $('#section2 option:selected').val();
            const student_id = document.querySelector('input[id=student_id]').value;

            var data = new FormData(this.form);

            data.append('last_name', last_name);
            data.append('first_name', first_name);
            data.append('contact_number', contact_number);
            data.append('gender', gender);
            data.append('course', course);
            data.append('teacher', teacher);
            data.append('subject', subject);
            data.append('section', section);
            data.append('student_id', student_id);


            $.ajax({
                url: 'controllers/updatestudent-process.php',
                type: "POST",
                data: data,
                processData: false,
                contentType: false,

                async: false,
                cache: false,
                // headers: {
                //         'X-CSRF-TOKEN': '". csrf_token() ."'
                //         },
                success: function(data) {
                        $('#msg').html(data);
                //  setTimeout(location.reload.bind(location), 200);

                },
                error: function(data) {
                    console.log("Failed");
                }
            });

        });
    });
</script>