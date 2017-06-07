$(document).foundation();

$(document).ready(function() {

    var heroBtnDownloadContract = $('#hero-btn-download-contract');
    var modalBtnSubmitEmail = $('#modal-btn-submit-email');
    var modalEmailContract = $('#modal-email-contract');
    var modalEmailConfirmation = $('#modal-email-confirmation');
    var modalConfirmationBtnDownload = $('#modal-confirmation-btn-download');
    var modalEmailBtnClose = $('#modal-email-btn-close');
    var modalDownloadBtnClose = $('#modal-download-btn-close');
    var mceEMAIL = $('#mce-EMAIL');
    var mcEmbeddedSubscribeForm = $('#mc-embedded-subscribe-form');
    var mcEmbeddedBetaSubscribeForm = $('#mc-embedded-beta-subscribe-form');
    var modalAdditionalInfo = $("#modal-additional-info");
    var signed = false;
    var btnNoSimpleContract = $("#btnNoSimpleContract");
    var btnContractButNoEmail = $('#btnContractButNoEmail');


    heroBtnDownloadContract.click(function(event) {
        ga('send',
            'event',
            'Hero Button Contract',
            'download',
            'FR WEBSITE 20/05', { nonInteraction: true });
    });


    modalEmailBtnClose.click(function(event) {

        ga('send',
            'event',
            'Modal Email closed',
            'download',
            'FR WEBSITE 20/05', { nonInteraction: true });

        if (!signed) {
            modalAdditionalInfo.foundation('open');
        }

    });

    modalDownloadBtnClose.click(function(event) {
        ga('send',
            'event',
            'Modal Download closed',
            'download',
            'FR WEBSITE 20/05', { nonInteraction: true });

    });

    mceEMAIL.click(function(event) {
        ga('send',
            'event',
            'Email input clicked',
            'download',
            'FR WEBSITE 20/05', { nonInteraction: true });

    });

    modalConfirmationBtnDownload.click(function(event) {
        ga('send',
            'event',
            'Download pdf contract',
            'download',
            'FR WEBSITE 20/05', { nonInteraction: true });
    });

    btnNoSimpleContract.click(function(event) {
        ga('send',
            'event',
            'No Simple Contract',
            'download',
            'FR WEBSITE 20/05', { nonInteraction: true });
        modalAdditionalInfo.foundation('close');

    });
    btnContractButNoEmail.click(function(event) {
        ga('send',
            'event',
            'Contract But No Email',
            'download',
            'FR WEBSITE 20/05', { nonInteraction: true });
        modalAdditionalInfo.foundation('close');
    });

    $('#modal-btn-submit-email').bind('click', function(event) {
        if (event) event.preventDefault();
        console.log('bouton clicked');
        onSignupComplete(mcEmbeddedSubscribeForm);
    });

    // $('#mc-embedded-beta-subscribe-form button[type="submit"]').bind('click', function(event) {
    //     if (event) event.preventDefault();
    //     console.log('beta');
    //     signup(mcEmbeddedBetaSubscribeForm);
    // });




    // function signup($form) {

    //     ga('send',
    //         'event',
    //         'Push on subscribe',
    //         'download',
    //         'FR WEBSITE 20/05', { nonInteraction: true });

    //     console.log('$form traité');
    //     $.ajax({
    //         type: $form.attr('method'),
    //         url: $form.attr('action'),
    //         data: $form.serialize(),
    //         cache: false,
    //         dataType: 'json',
    //         jsonp: 'c',
    //         contentType: "application/json; charset=utf-8",
    //         error: function(err) {
    //             if ($form[0].elements.LANG.value == "FR") {
    //                 alert("Il semble qu'il y aie une erreur, veuillez réessayer.");
    //             } else {
    //                 alert("Could not connect to the registration server. Please try again later.");
    //             }
    //         },
    //         success: function(data) {
    //             if (data.result != "success") {
    //             	console.log('data = pas ok');
    //             } else {

    //                 var myFirebaseRef = firebase.database().ref("contacts");
    //                 myFirebaseRef.push({
    //                     email: $form[0].elements.EMAIL.value,
    //                     lang: $form[0].elements.LANG.value,
    //                 }, onSignupComplete);

    //             }
    //         }
    //     });
    // }

    function onSignupComplete($form) {
        var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
        var theemail = $form[0].elements.EMAIL.value;

        if ($form[0].elements.EMAIL.value == "" || !regex.test(theemail)){
            if ($form[0].elements.LANG.value == "FR"){
                alert("Veuillez vérifier le champ E-mail");
            } else if ($form[0].elements.LANG.value == "NL"){
                alert("Please verifiy the E-mail field");
            }
        } else {
    		var myFirebaseRef = firebase.database().ref("contacts");
    		myFirebaseRef.push({
    		    email: $form[0].elements.EMAIL.value,
    		    lang: $form[0].elements.LANG.value,
    		});
            modalEmailContract.foundation('close');
            modalEmailConfirmation.foundation('open');
            signed = true;
            console.log('modale = ouverte');
        }
    }

});
