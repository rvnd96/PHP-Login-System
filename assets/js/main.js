$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	//creating variable to store the entire form
	var _form = $(this);
	//creating variable to store error div inside _form
	var _error = $(".js-error", _form);
	//creating object to specify required HTML element
	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	//validate email & password
	if (dataObj.email.length < 6) {
		_error
			.text("Please enter a valid email address")
			.show();

		return false;
	} else if (dataObj.password.length < 11) {
		_error
			.text("Please enter a passphrase that is at least 11 charactors long.")
			.show();

		return false;
	}

	//Assuming the code gets this far, we can start the Ajax process
	_error.hide();

	$.ajax({
		type: 'POST',
		url: './ajax/register.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		console.log(data);
		if(data.redirect !== undefined) {
			//window.location = data.redirect;
		}

		//access the redirected array | name
		alert(data.name);
	})
	.fail(function ajaxFailed(e) {
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		console.log('Always');
	})

	//console.log(data);

	//alert('form was submitted.');*/

	return false;
})