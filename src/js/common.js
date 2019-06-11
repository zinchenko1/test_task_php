$(document).ready(function(){
    $('#send').click(function() {
      var name = $('#name').val();
      var phone = $('#phone').val();
      var email = $('#email').val();
      var comment = $('#comment').val();
      
      $.ajax({
        url: 'processing/form.php',
        type: 'POST',
        cache: false,
        data: {'name':name, 'phone':phone, 'email':email, 'comment':comment},
        dataType: 'html',
        success: function (data) {

            if(data == 'Done'){
                $('#form').hide();
                $('#done').show();

                setTimeout(function() {
                    $('#form').trigger('reset').fadeIn("slow");
                    $('#done').hide();
                    $('#error').hide();
                }, (3000));

            }  else{
                $('#done').hide();
                $('#error').show();
                $('#error').text(data);
          }
        }
      });
    });
});