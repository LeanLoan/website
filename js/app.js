$(document).foundation();

$(document).ready(function(){
	
	var heroBtnDownloadContract = $('#hero-btn-download-contract');
	var modalBtnSubmitEmail = $('#modal-btn-submit-email');
	var modalEmailContract = $('#modal-email-contract');
	var modalEmailConfirmation = $('#modal-email-confirmation');
	var modalConfirmationBtnDownload = $('#modal-confirmation-btn-download');
	var modalEmailBtnClose = $('#modal-email-btn-close');
	var modalDownloadBtnClose = $('#modal-download-btn-close')
	var mceEMAIL = $('#mce-EMAIL');
	var mcEmbeddedSubscribeForm = $('#mc-embedded-subscribe-form');
	var modalAdditionalInfo = $("#modal-additional-info");
	var signed = false;	
	var btnNoSimpleContract = $("#btnNoSimpleContract");
	var btnContractButNoEmail = $('#btnContractButNoEmail');


	heroBtnDownloadContract.click(function(event) {
		ga(	'send',
			'event',
			'Hero Button Contract',
			'download',
			'FR WEBSITE 20/05',
			{nonInteraction: true});	
		});


	modalEmailBtnClose.click(function(event) {

		ga(	'send',
			'event',
			'Modal Email closed',
			'download',
			'FR WEBSITE 20/05',
			{nonInteraction: true});

		if(!signed) {
			modalAdditionalInfo.foundation('open');		
		}

	});

	modalDownloadBtnClose.click(function(event) {
		ga(	'send',
			'event',
			'Modal Download closed',
			'download',
			'FR WEBSITE 20/05',
			{nonInteraction: true});		

	});

	mceEMAIL.click(function(event) {
		ga(	'send',
			'event',
			'Email input clicked',
			'download',
			'FR WEBSITE 20/05',
			{nonInteraction: true});		

	});

	modalConfirmationBtnDownload.click(function(event) {
		ga(	'send',
			'event',
			'Download pdf contract',
			'download',
			'FR WEBSITE 20/05',
			{nonInteraction: true});
	});

	btnNoSimpleContract.click(function(event) {
		ga(	'send',
			'event',
			'No Simple Contract',
			'download',
			'FR WEBSITE 20/05',
			{nonInteraction: true});
		modalAdditionalInfo.foundation('close');

	});
	btnContractButNoEmail.click(function(event) {
		ga(	'send',
			'event',
			'Contract But No Email',
			'download',
			'FR WEBSITE 20/05',
			{nonInteraction: true});
		modalAdditionalInfo.foundation('close');
	});

    $('#mc-embedded-subscribe-form input[type="submit"]').bind('click', function ( event ) {
        if ( event ) event.preventDefault();
        signup(mcEmbeddedSubscribeForm);
    });


	function signup($form) {
	  
		ga(	'send',
			'event',
			'Push on subscribe',
			'download',
			'FR WEBSITE 20/05',
			{nonInteraction: true});		


		$.ajax({
		type: $form.attr('method'),
		url: $form.attr('action'),
		data: $form.serialize(),
		cache       : false,
		dataType    : 'jsonp',
		jsonp       : 'c',
		contentType: "application/json; charset=utf-8",
		error       : function(err) { alert("Could not connect to the registration server. Please try again later."); },
		success     : function(data) {
		    if (data.result != "success") {
		        

		    } else {
		        
		        var myFirebaseRef = firebase.database().ref("contacts");
		        myFirebaseRef.push({
		          email: $form[0].elements.EMAIL.value,
		        }, onSignupComplete);
		       
		    }
		}
	  });
	}

	function onSignupComplete() {
		modalEmailContract.foundation('close');
		modalEmailConfirmation.foundation('open');
		signed = true;	

	}

});


