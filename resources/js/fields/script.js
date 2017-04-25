    $(document).ready(function() {
		var table = $('#settings-skills');
		var row = $(table).find('tfoot > tr');
		new Craft.DataTableSorter(table);
		$(table).on('click','.delete', function() {
			$(this).parents('tr').remove();
		});
		$(table).next('.btn.add').on('click',function(e) {
			e.preventDefault();
			var tmp = row.clone();
			$(tmp).find('.color-input').each( function( i, elem ) { var hueb = new Huebee( elem ); })
			$(table).find('tbody').append(tmp);
			new Craft.DataTableSorter(table);
		});	
	});