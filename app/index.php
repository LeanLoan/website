<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leanloan Beta Application</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/foundation-datepicker.min.css">
    <!-- Start of Async Drift Code -->
    <script>
    !function() {
      var t;
      if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
      t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
      t.factory = function(e) {
        return function() {
          var n;
          return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
        };
      }, t.methods.forEach(function(e) {
        t[e] = t.factory(e);
      }), t.load = function(t) {
        var e, n, o, i;
        e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
        n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
      });
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.config({
      locale: "fr"
    });
    drift.load('szn65f4r6sr7');
    </script>
    <!-- End of Async Drift Code -->
    <!-- Hotjar Tracking Code for www.leanloan.be -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:484337,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
  </head>
  <body>

  <header data-sticky-container>
    <div class="top-bar" data-sticky data-options="marginTop:0;stickyOn: small" data-top-anchor="0">
      <div class="top-bar-title" data-magellan data-options="animationEasing:swing; animationDuration:1000">
        <a href="#hello" alt="LeanLoan.be"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 692.63 93.35"><defs><style></style></defs><title>LeanLoan.be</title><path class="a" d="M17.64,7.63H.21V97.75H58.44V83.16H17.64ZM91.81,59.24h31.07V44.79H91.81V22.23h39.45V7.63H74.38V97.75H132.2V83.16H91.81ZM174.75,7,140.84,97.75h17.29l7.3-20.27h34.86l7.3,20.27h17.7L191.37,7ZM170.57,63l12.29-34L195,63Zm130.77,8.11L257.43,7.63H239.87V97.75h17V34.65l43.77,63.09h17.7V7.63h-17Zm56.87-63.5H340.78V97.75H399V83.16h-40.8ZM458.18,6c-31.88,0-49.31,23.37-49.31,46.88,0,24.59,18.37,46.47,48.1,46.47,30.4,0,49.72-23.37,49.72-48.37C506.68,26.41,488.17,6,458.18,6Zm-.81,78.63c-20.13,0-30.26-16.89-30.26-32.29,0-16.21,10.81-31.61,30.8-31.61S488.58,36,488.58,52.08C488.58,68.57,477.23,84.64,457.37,84.64ZM549.23,7,515.32,97.75h17.29l7.29-20.27h34.86l7.3,20.27h17.7L565.85,7ZM545,63l12.29-34L569.5,63ZM675.82,7.63v63.5L631.91,7.63H614.35V97.75h17V34.65l43.77,63.09h17.7V7.63Z" transform="translate(-0.21 -6.01)"/></svg></a>
      </div>
  <!--     <a href="#" class="language-switcher"><img src="img/nl.svg" alt="Dutch"></a> -->
      <div class="float-right" data-responsive-toggle="responsive-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
      </div>
        <div class="top-bar-right">
          <div id="responsive-menu">
            <ul class="menu">
              <!-- <li><a class="button gris01"><i class="fa fa-floppy-o" aria-hidden="true"></i> Sauvegarder</a></li> -->
              <li><a class="button" id="apercu"><i class="fa fa-file-text-o" aria-hidden="true"></i>Aperçu</a></li>
              <!-- <li><a data-open="sharebymail" class="button bleuintermediaire"><i class="fa fa-external-link-square" aria-hidden="true"></i>Partager</a></li>
              <li><a class="button green" data-open="validation"><i class="fa fa-check-circle" aria-hidden="true"></i>Valider l'accord</a></li> -->
            </ul>
            </div>
          </div>
      </div>
    </div>
  </header>


<form method="get" action="preview.php" id="contract">
  <section id="intro">
    <div class="row">
      <div class="small-12 columns">
        <h1 class="text-center">Configurez votre accord de prêt simplement avec LeanLoan</h1>
        <h2><span>1</span><strong>Objet du prêt : </strong>le définissez le montant et la raison de votre prêt.</h2>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-4 columns">
        <legend>Montant :</legend>
        <input type="number" id="amount" name="amount" value="<?php echo $_GET['amount']; ?>" placeholder="€">
        <input id="moneyreceived" type="checkbox" value="yes" name="sommeversee" <?php if ($_GET['sommeversee'] == yes ) echo 'checked' ; ?>><label for="moneyreceived">La somme à déjà été versée à l'emprunteur</label>
        <legend>Numéro de téléphone :</legend>
        <input type="tel" id="phonenumber" placeholder="Votre numéro de téléphone">
      </div>
      <div class="small-12 medium-8 columns">
        <legend>Raison du prêt :</legend>
        <input type="text" id="why" placeholder="Acheter une voiture,..." name="why" value="<?php echo $_GET['why']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <hr>
        <legend>A qui souhaitez-vous prêter ou emprunter ?</legend>
      </div>
      <div class="small-12 medium-4 columns">
        <select id="relationship">
          <option value="rel-friend" class="initial" selected>Ami(e)</option>
          <option value="rel-family">Membre de la famille</option>
          <option value="rel-professional">Relation professionnelle</option>
        </select>
      </div>
      <div class="rel-family-type rel-family">
        <div class="small-12 medium-5 columns text-center">
          <input type="radio" name="relationship" value="rel-family-type-parents" id="rel-family-type-parents" required><label for="rel-family-type-parents">Parent / Enfant</label>
          <input type="radio" name="relationship" value="rel-family-type-brothersister" id="rel-family-type-brothersister" required><label for="rel-family-type-brothersister">Frère / Soeur</label>
          <input type="radio" name="relationship" value="rel-family-type-other" id="rel-family-type-other" required><label for="rel-family-type-other">Autre</label>
        </div>
        <div class="small-12 medium-3 columns">
          <input type="text" class="selectedfield rel-family-type-other" id="rel-family-type-other-text" placeholder="Cousin, oncle, ..." style="display:none;"></input>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="small-12 columns" data-magellan data-options="animationEasing:swing; animationDuration:1000">
          <a href="#refund" class="button large endsection"><i class="material-icons">arrow_downward</i>Passer aux modalités de paiements</a>
        </div>
    </div>
  </section>
  <section id="refund">
  <div class="row">
    <div class="small-12 columns">
      <h2><span>2</span><strong>Modalités de reboursement : </strong>choisissez le type de reboursement qui convient aux deux parties.</h2>

      <div class="row">
        <div class="small-12 medium-4 columns refund-method">
          <select id="refundchoice" name="refund">
            <option <?php if ($_GET['refund'] == refundrecurrent ) echo 'selected' ; ?> value="refundrecurrent">Basé sur des tranches</option>
            <option <?php if ($_GET['refund'] == refunddate ) echo 'selected' ; ?> value="refunddate">Basé sur une échéance</option>
            <option <?php if ($_GET['refund'] == refundother ) echo 'selected' ; ?> value="refundother">Autre</option>
          </select>
        </div>
      </div>

      <div class="refundrecurrent selected callout">
        <div class="row">
          <div class="small-6 medium-3 columns">
            <legend>Valeur (€)</legend>
            <input type="number" class="" id="refund-number" placeholder="€" name="refund-number" value="<?php echo $_GET['refund-number']; ?>">
          </div>
          <div class="small-6 medium-3 columns">
            <legend>par</legend>
            <select id="refund-frequency" name="refund-frequency">
              <option <?php if ($_GET['refund-frequency'] == refundfreqweekly ) echo 'selected' ; ?> value="refundfreqweekly" class="initial">Semaines</option>
              <option <?php if ($_GET['refund-frequency'] == refundfreqmonthly ) echo 'selected' ; ?> value="refundfreqmonthly">Mois</option>
              <option <?php if ($_GET['refund-frequency'] == refundfreqannualy ) echo 'selected' ; ?> value="refundfreqannualy">Ans</option>
            </select>
          </div>
          <div class="small-12 medium-6 columns">
            <legend>A partir du :</legend>
            <input type="text" class="dating" id="refund-start" placeholder="Date de début" name="refund-start" value="<?php echo $_GET['refund-start']; ?>">
          </div>
        </div>
        </div>
      <div class="refunddate selected callout">
        <div class="row">
          <div class="small-6 medium-4 columns">
            <legend for="refund-start">Date de fin:</legend>
            <input type="text" class="dating" id="refund-end" placeholder="Date de fin" name="refund-end" value="<?php echo $_GET['refund-end']; ?>">
          </div>
        </div>
        </div>
      <div class="refundother selected callout">
        <div class="row">
          <div class="small-12 columns">
            <legend for="refund-other">Autre engagement:</legend>
            <textarea id="refund-other" placeholder="Ex: Quand l'emprunteur aura un job, ..." name="refund-other" value="<?php echo $_GET['refund-other']; ?>"></textarea>
            <p class="help-text">pour des raisons juridiques nous vous recommandons d’indiquer une date butoir pour la fin du remboursement</p>
          </div>
        </div>
        </div>
      <div class="row">
          <div class="small-12 columns" data-magellan data-options="animationEasing:swing; animationDuration:1000">
            <a href="#informations" class="button large endsection"><i class="material-icons">arrow_downward</i>Remplir les informations du prêteur et emprunteur</a>
          </div>
      </div>
    </div>
  </div>
  </section>

  <section id="informations" data-magellan-targer="informations">
    <div class="row">
    <div class="columns">
      <h2><span>3</span><strong>Informations personnelles : </strong>Remplissez les informations des deux parties.</h2>
    </div>
    </div>
    <div class="row">
    <div class="small-12 medium-6 columns bordered-right">
      <legend>Informations civiles de l’emprunteur:</legend>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <select id="empr-genre" name="empr-genre">
            <option <?php if ($_GET['empr-genre'] == Monsieur ) echo 'selected' ; ?> value="Monsieur">Monsieur</option>
            <option <?php if ($_GET['empr-genre'] == Madame ) echo 'selected' ; ?> value="Madame">Madame</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <input type="text" id="empr-lname" placeholder="Nom" name="empr-lname" value="<?php echo $_GET['empr-lname']; ?>">
        </div>
        <div class="small-12 medium-6 columns">
          <input type="text" id="empr-fname" placeholder="Prénom" name="empr-fname" value="<?php echo $_GET['empr-fname']; ?>">
        </div>

        <div class="small-12 medium-6 columns">
          <input type="text" id="empr-nationality" placeholder="Nationalité" name="empr-nationality" value="<?php echo $_GET['empr-nationality']; ?>">
        </div>
        <div class="small-12 medium-6 columns">
          <input type="text" class="dating" id="empr-birthday" placeholder="Date de naissance" name="empr-birthday" value="<?php echo $_GET['empr-birthday']; ?>">
        </div>

        <div class="small-12 medium-6 end columns">
          <input type="text" id="empr-birdthplace" placeholder="Lieu de naissance" name="empr-birdthplace" value="<?php echo $_GET['empr-birdthplace']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="small-12 medium-6 end columns">
          <select id="empr-maried-civility" name="empr-maried-civility">
            <option <?php if ($_GET['empr-maried-civility'] == Célibataire ) echo 'selected' ; ?> value="Célibataire">Célibataire</option>
            <option <?php if ($_GET['empr-maried-civility'] == Marié ) echo 'selected' ; ?> value="Marié">Marié(e)</option>
            <option <?php if ($_GET['empr-maried-civility'] == Cohabitant ) echo 'selected' ; ?> value="Cohabitant">Cohabitant</option>
            <option <?php if ($_GET['empr-maried-civility'] == CohabitantLégal ) echo 'selected' ; ?> value="CohabitantLégal">Cohabitant Légal</option>
          </select>
        </div>
      </div>

      <div class="emprMarié empr-civility callout">
        <div class="row">
          <div class="small-12 columns">
            <legend>Informations civiles de l'épouse ou époux de l'emprunteur:</legend>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-6 columns">
            <select id="empr-maried-genre" name="empr-maried-genre">
              <option <?php if ($_GET['empr-maried-genre'] == Monsieur ) echo 'selected' ; ?> value="Monsieur">Monsieur</option>
              <option <?php if ($_GET['empr-maried-genre'] == Madame ) echo 'selected' ; ?> value="Madame">Madame</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-6 columns">
            <input type="text" id="empr-maried-lname" placeholder="Nom" name="empr-maried-lname" value="<?php echo $_GET['empr-maried-lname']; ?>">
          </div>
          <div class="small-12 medium-6 columns">
            <input type="text" id="empr-maried-fname" placeholder="Prénom" name="empr-maried-fname" value="<?php echo $_GET['empr-maried-fname']; ?>">
          </div>

          <div class="small-12 medium-6 columns">
            <input type="text" id="empr-maried-nationality" placeholder="Nationalité" name="empr-maried-nationality" value="<?php echo $_GET['empr-maried-nationality']; ?>">
          </div>
          <div class="small-12 medium-6 columns">
            <input type="text" class="dating" id="empr-maried-birthday" placeholder="Date de naissance" name="empr-maried-birthday" value="<?php echo $_GET['empr-maried-birthday']; ?>">
          </div>

          <div class="small-12 medium-6 end columns">
            <input type="text" id="empr-maried-birdthplace" placeholder="Lieu de naissance" name="empr-maried-birdthplace" value="<?php echo $_GET['empr-maried-birdthplace']; ?>">
          </div>
        </div>
        <div class="row">
          <div class="small-12 columns">
            <legend>Adresse du domicile de l'épouse ou époux de l'emprunteur:</legend>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-6 columns">
            <input type="text" id="empr-maried-adr-street" placeholder="Rue" name="empr-maried-adr-street" value="<?php echo $_GET['empr-maried-adr-street']; ?>">
          </div>
          <div class="small-12 medium-6 columns end">
            <input type="text" id="empr-maried-adr-city" placeholder="Ville" name="empr-maried-adr-city" value="<?php echo $_GET['empr-maried-adr-city']; ?>">
          </div>
          <div class="small-12 medium-6 columns">
            <input type="text" id="empr-maried-adr-postalcode" placeholder="Code postal" name="empr-maried-adr-postalcode" value="<?php echo $_GET['empr-maried-adr-postalcode']; ?>">
          </div>
          <div class="small-12 medium-6 columns end">
            <input type="text" id="empr-maried-country" placeholder="Pays" name="empr-maried-adr-country" value="<?php echo $_GET['empr-maried-adr-country']; ?>">
          </div>
        </div>
      </div>

      <legend>Adresse du domicile de l'emprunteur :</legend>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <input type="text" id="empr-adr-street" placeholder="Rue" name="empr-adr-street" value="<?php echo $_GET['empr-adr-street']; ?>">
        </div>
        <div class="small-12 medium-6 columns end">
          <input type="text" id="empr-adr-city" placeholder="Ville" name="empr-adr-city" value="<?php echo $_GET['empr-adr-city']; ?>">
        </div>
        <div class="small-12 medium-6 columns">
          <input type="text" id="empr-adr-postalcode" placeholder="Code postal" name="empr-adr-postalcode" value="<?php echo $_GET['empr-adr-postalcode']; ?>">
        </div>
        <div class="small-12 medium-6 columns end">
          <input type="text" id="empr-country" placeholder="Pays" name="empr-country" value="<?php echo $_GET['empr-country']; ?>">
        </div>
      </div>
      <legend>Informations bancaires de l'emprunteur :</legend>
      <input type="text" id="empr-iban" placeholder="Compte IBAN" name="empr-iban" value="<?php echo $_GET['empr-iban']; ?>">
      <legend>Adresse email de l'emprunteur :</legend>
      <input type="email" id="empr-email" placeholder="Adresse e-mail" name="empr-email" value="<?php echo $_GET['empr-email']; ?>">
    </div>
  
    <div class="small-12 medium-6 columns">
      <legend>Informations civiles du prêteur :</legend>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <select id="pretr-genre" name="pretr-genre">
            <option <?php if ($_GET['pretr-genre'] == Monsieur ) echo 'selected' ; ?> value="Monsieur">Monsieur</option>
            <option <?php if ($_GET['pretr-genre'] == Madame ) echo 'selected' ; ?> value="Madame">Madame</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <input type="text" id="pretr-lname" placeholder="Nom" name="pretr-lname" value="<?php echo $_GET['pretr-lname']; ?>">
        </div>
        <div class="small-12 medium-6 columns">
          <input type="text" id="pretr-fname" placeholder="Prénom" name="pretr-fname" value="<?php echo $_GET['pretr-fname']; ?>">
        </div>

        <div class="small-12 medium-6 columns">
          <input type="text" id="pretr-nationality" placeholder="Nationalité" name="pretr-nationality" value="<?php echo $_GET['pretr-nationality']; ?>">
        </div>
        <div class="small-12 medium-6 columns">
          <input type="text" class="dating" id="pretr-birthday" placeholder="Date de naissance" name="pretr-birthday" value="<?php echo $_GET['pretr-birthday']; ?>">
        </div>

        <div class="small-12 medium-6 end columns">
          <input type="text" id="pretr-birdthplace" placeholder="Lieu de naissance" name="pretr-birdthplace" value="<?php echo $_GET['pretr-birdthplace']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="small-12 medium-6 end columns">
          <select id="pretr-maried-civility" name="pretr-maried-civility">
            <option <?php if ($_GET['pretr-maried-civility'] == Célibataire ) echo 'selected' ; ?> value="Célibataire">Célibataire</option>
            <option <?php if ($_GET['pretr-maried-civility'] == Marié ) echo 'selected' ; ?> value="Marié">Marié(e)</option>
            <option <?php if ($_GET['pretr-maried-civility'] == Cohabitant ) echo 'selected' ; ?> value="Cohabitant">Cohabitant</option>
            <option <?php if ($_GET['pretr-maried-civility'] == CohabitantLégal ) echo 'selected' ; ?> value="CohabitantLégal">Cohabitant Légal</option>
          </select>
        </div>
      </div>

      <div class="pretrMarié pretr-civility callout">
        <div class="row">
          <div class="small-12 columns">
            <legend>Informations civiles de l'épouse ou époux du prêteur:</legend>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-6 columns">
            <select id="pretr-maried-genre" name="pretr-maried-genre">
              <option <?php if ($_GET['pretr-maried-genre'] == Monsieur ) echo 'selected' ; ?> value="Monsieur">Monsieur</option>
              <option <?php if ($_GET['pretr-maried-genre'] == Madame ) echo 'selected' ; ?> value="Madame">Madame</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-6 columns">
            <input type="text" id="pretr-maried-lname" placeholder="Nom" name="pretr-maried-lname" value="<?php echo $_GET['pretr-maried-lname']; ?>">
          </div>
          <div class="small-12 medium-6 columns">
            <input type="text" id="pretr-maried-fname" placeholder="Prénom" name="pretr-maried-fname" value="<?php echo $_GET['pretr-maried-fname']; ?>">
          </div>

          <div class="small-12 medium-6 columns">
            <input type="text" id="pretr-maried-nationality" placeholder="Nationalité" name="pretr-maried-nationality" value="<?php echo $_GET['pretr-maried-nationality']; ?>">
          </div>
          <div class="small-12 medium-6 columns">
            <input type="text" class="dating" id="pretr-maried-birthday" placeholder="Date de naissance" name="pretr-maried-birthday" value="<?php echo $_GET['pretr-maried-birthday']; ?>">
          </div>

          <div class="small-12 medium-6 end columns">
            <input type="text" id="pretr-maried-birdthplace" placeholder="Lieu de naissance" name="pretr-maried-birdthplace" value="<?php echo $_GET['pretr-maried-birdthplace']; ?>">
          </div>
        </div>
        <div class="row">
          <div class="small-12 columns">
            <legend>Adresse du domicile de l'épouse ou époux du prêteur:</legend>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-6 columns">
            <input type="text" id="pretr-maried-adr-street" placeholder="Rue" name="pretr-maried-adr-street" value="<?php echo $_GET['pretr-maried-adr-street']; ?>">
          </div>
          <div class="small-12 medium-6 columns end">
            <input type="text" id="pretr-maried-adr-city" placeholder="Ville" name="pretr-maried-adr-city" value="<?php echo $_GET['pretr-maried-adr-city']; ?>">
          </div>
          <div class="small-12 medium-6 columns">
            <input type="text" id="pretr-maried-adr-postalcode" placeholder="Code postal" name="pretr-maried-adr-postalcode" value="<?php echo $_GET['pretr-maried-adr-postalcode']; ?>">
          </div>
          <div class="small-12 medium-6 columns end">
            <input type="text" id="pretr-maried-country" placeholder="Pays" name="pretr-maried-country" value="<?php echo $_GET['pretr-maried-country']; ?>">
          </div>
        </div>
      </div>

      <legend>Adresse du domicile du prêteur :</legend>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <input type="text" id="pretr-adr-street" placeholder="Rue" name="pretr-adr-street" value="<?php echo $_GET['pretr-adr-street']; ?>">
        </div>
        <div class="small-12 medium-6 columns end">
          <input type="text" id="pretr-adr-city" placeholder="Ville" name="pretr-adr-city" value="<?php echo $_GET['pretr-adr-city']; ?>">
        </div>
        <div class="small-12 medium-6 columns">
          <input type="text" id="pretr-adr-postalcode" placeholder="Code postal" name="pretr-adr-postalcode" value="<?php echo $_GET['pretr-adr-postalcode']; ?>">
        </div>
        <div class="small-12 medium-6 columns end">
          <input type="text" id="pretr-country" placeholder="Pays" name="pretr-country" value="<?php echo $_GET['pretr-country']; ?>">
        </div>
      </div>
      <legend>Informations bancaires du prêteur :</legend>
      <input type="text" id="pretr-iban" placeholder="Compte IBAN" name="pretr-iban" value="<?php echo $_GET['pretr-iban']; ?>">
      <legend>Adresse email du prêteur :</legend>
      <input type="email" id="pretr-email" placeholder="Adresse e-mail" name="pretr-email" value="<?php echo $_GET['pretr-email']; ?>">
    </div>
    </div>
  </section>
</form>

    <script src="https://use.fontawesome.com/802c8bb387.js"></script>
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/foundation-datepicker.js"></script>
  </body>
</html>
