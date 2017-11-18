
(function() {
	var body = document.getElementsByTagName('body')[0];

	function browserCheck() {
		if ( feature.cssTransform ) {
			body.classList.add('outdated_browser');

			window.setTimeout( function() {
				var card = body.querySelector('.card');
				card.classList.add('visible');
			}, 100);
		}
	}

	function init() {
		browserCheck();
	}

	window.addEventListener('load', init, false);
})();