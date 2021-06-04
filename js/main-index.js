    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#add-student');
        btn.addEventListener('click', () => {

            const last_name = document.querySelector('input[alt=last_name]').value;
            const first_name = document.querySelector('input[alt=first_name]').value;
            const contact_number = document.querySelector('input[alt=contact_number]').value;
            const gender = $('#gender option:selected').val();
            const course = $('#course option:selected').val();
            const teacher = $('#teacher option:selected').val();
            const subject = $('#subject option:selected').val();
            const section = $('#section option:selected').val();

            var data = new FormData(this.form);

            data.append('last_name', last_name);
            data.append('first_name', first_name);
            data.append('contact_number', contact_number);
            data.append('gender', gender);
            data.append('course', course);
            data.append('teacher', teacher);
            data.append('subject', subject);
            data.append('section', section);


            $.ajax({
                url: 'controllers/addstudent-process.php',
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