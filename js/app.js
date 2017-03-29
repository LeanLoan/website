(function(){

	$(document).foundation();

	var heroBtnLearnMore = $('#hero-btn-learn-more');
	var heroBtnDownloadContract = $('#hero-btn-download-contract');

	heroBtnLearnMore.click(function(event) {
		ga('send', 
			'event',
			'Hero Button Learn More',
			'click',
			'Landing Page Beta', 
			{
				nonInteraction: true
			});
	});

	heroBtnDownloadContract.click(function(event) {
		ga('send',
			'event',
			'Hero Button Contract',
			'download',
			'Landing Page Beta',
			{
  				nonInteraction: true
			}
		);
	});

})();


