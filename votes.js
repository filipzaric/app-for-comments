//If page is loaded(Html, css, etc)
$(document).ready(function() {
	//Target to class(plus and minus), and use them on click
	$('.plus, .minus').on('click', function (e) {
		//E presents event(in this case click on plus or minus)
		e.preventDefault();

		// $('.loader').show();
		//CurrentTarget presents click on plus or minus with attribute href of that plus or minus(class)
		var url = $(e.currentTarget).attr('href');
		//Using ajax with parameter url 
		$.ajax(url, {
			success: function (data, textStatus, jqXHR) {
				// $('.loader').hide();
				$(e.currentTarget).prev('span').text(data);
			},

		});

	});
});