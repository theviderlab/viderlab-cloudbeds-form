(function( $ ) {
	'use strict';

	
	$(document).ready(function() {
		$("#viderlab-checkin").change(function() {
			update_search_url();
		});
	
		$("#viderlab-checkout").change(function() {
			update_search_url();
		});
	});
	
	function update_search_url() {
		var url = $('#viderlab-cloudbeds-form').attr('action');
		var checkin = $('#viderlab-checkin').val();
		var checkout = $('#viderlab-checkout').val();
	
		url = url.split('#')[0]; // Eliminar cualquier fragmento existente en la URL
		url = url.split('?')[0]; // Eliminar cualquier parámetro existente en la URL
	
		url += '#checkin=' + encodeURIComponent(checkin) + '&checkout=' + encodeURIComponent(checkout);
	
		$('#viderlab-cloudbeds-form').attr('action', url);
	}

})( jQuery );
