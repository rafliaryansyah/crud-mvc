$(function() {
  
    $('.buttonAddData').on('click', function(){
        $('#formModalLabel').html('Add Student');
    });

    $('.showModalEdit').on('click', function() {

        $('#formModalLabel').html('Edit Student');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/crud-mvc/public/student/edit');

        const id = $(this).data('id');
       
        $.ajax({
            url: 'http://localhost/crud-mvc/public/student/getedit',
            data: {id : id},
            method: 'post', 
            dataType: 'json',
            success: function(data) {
 
                $('#name').val(data.name);
                $('#nipd').val(data.nipd);
                $('#email').val(data.email);
                $('#majors').val(data.majors);
                $('#id').val(data.id);

            }
        });
        
    });

});