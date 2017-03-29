(function(){

	$(document).foundation();

	var heroBtnLearnMore = $('#hero-btn-learn-more');
	var heroBtnDownloadContract = $('#hero-btn-download-contract');

	heroBtnLearnMore.click(function(event) {
		console.log('test');
		// ga('send', 
		// 	'event',
		// 	'Hero-LearnMore',
		// 	'click',
		// 	'Landing Page Beta', 
		// 	{
		// 		nonInteraction: true
		// 	});
	});

	heroBtnDownloadContract.click(function(event) {
		console.log('test');
		// ga('send',
		// 	'event',
		// 	'Contract',
		// 	'download',
		// 	'Landing Page Beta',
		// 	{
  // 				nonInteraction: true
		// 	}
		// );
	});

})();


