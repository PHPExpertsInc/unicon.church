$(function() {

	$('#page-header nav > ul').dropotron({ 
		offsetY: -16
	});

	if (_5grid.isDesktop)
		_5grid.ready(function() {
			$(function() {
				var c = $('#content'), s = $('#sidebar'), p = 50;
				if (c.height() < (s.height() + p))
					c.height(s.height() + p + 100);
			});
		});

});