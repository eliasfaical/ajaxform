(function(){

	/*
	 * Controla os inputs dos formulÃ¡rios
	 *
	 */
	$('form input:text, form input:password').each(function(){
		
		var default_value = $(this).attr('title');
		
		$(this).val(default_value);
		$(this).focus(function(){
			if(default_value == $(this).val())$(this).val("");
		}).blur(function(){
			if($(this).val() == ''){
			   $(this).val(default_value);
		}});
	});

	/* 
	 * Validação formulário de contato
	 *
	 */
	$('#formLogin').submit(function(){
	  
		//campos do form
		var username    = $('#username').val();
		var password    = $('#password').val();

		if( '' == username || 'Username' == username ){
			alert('O campo Username deve ser preenchido.');
			$('#username').val('').focus();
			return false;
		}
		
		if( '' == password || 'Password' == password ){
			alert('O campo Password deve ser preenchido.');
			$('#password').focus();
			return false;
		}

		var dataString = 'username=' + username + '&password=' + password;
		
			//enviando
			$.ajax({
				url:'ajaxForm.php',
				type:'POST',
				data: dataString,
				cache: 'false',
				success: function(html){
					$('.msgForm').html(html);
					$('#username').val('Username');
					$('#password').val('Password');
				}
			});		
			return false;
	});

})(jQuery);