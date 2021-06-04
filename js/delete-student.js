         $(document).ready(function() {   
               load_data();    
               var count = 1; 
               function load_data() {
                   $(document).on('click', '.delete', function() {
                        let student_id = $(this).attr("fetchingID");
                       getIDs_del(student_id); //argument    
                 
                   });
                }

                 function getIDs_del(student_id) {
                      $.ajax({
                          type: 'POST',
                          url: 'controllers/delstudent-process.php',
                          data: {
                              student_id: student_id
                          },

                          success: function(responses) {
                            $('#msg2').html(responses);

                       }
                    });
                 }
           
           });