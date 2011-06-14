<?php
  
  // Send Mail ! :D

     $destinataire=$_POST["dest"];
     $fai=$_POST["fai"];
     $nom=$_POST["nom"];
     $prenom=$_POST["prenom"];
     $ip = $_POST["ip"];
     $addr1 = $_POST["address1"];
     $addr2 = $_POST["address2"];
     $date = $_POST["date"];


     setlocale (LC_TIME, 'fr_FR','fra');
     $post_date = strftime("%d / %m / %Y");

     
     $sujet = "Recommandation Hadopi";

	 $split = "-----=".md5(uniqid(rand()));


	 
     $headers ='From: "Hadopi "<cpd-hadopi@hadopi.com>'."\n";
     $headers .='Reply-To: <cpd-hadopi@hadopi.com>'."\n";
//     $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
//     $headers .='Content-Transfer-Encoding: 8bit'; 
     $headers .= "MIME-Version: 1.0\r\n";
     $headers .= "Content-Type: multipart/related; boundary=\"$split\"\r\n";
  
     $message = "--$split\r\n";
     $message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n";
     $message .= "Content-Transfer-Encoding:8bit\r\n";
     $message .= "\r\n";

  //---------------------------------

  
  $message .= '<html><tbody>
              <tr>
                <td style="font-size: 0px;" valign="top" align="left"><font face="Arial"><img src="cid:image1" width="468" border="0" height="137"></font></td></tr>
              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left" height="50">
                  <table style="color: rgb(0, 0, 0);" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td style="font-size: 0px;" colspan="3" height="14"><font face="Arial">&nbsp;</font></td></tr>

                    <tr>
                      <td width="2" bgcolor="#0073cf"><font face="Arial">&nbsp;</font></td>
                      <td style="font-size: 0px;" width="6" height="36"><font face="Arial">&nbsp;</font></td>
                      <td style="font-family: arial; color: rgb(0, 115, 207); font-size: 13px;" valign="bottom" width="552" align="left" height="36"><b>Recommandation de la Commission de la 
                        Protection des Droits de la Haute autorité pour la 
                        diffusion des œuvres et la protection des droits sur 
                        Internet (Hadopi)</b></td></tr></tbody></table></td></tr>
              <tr>
                <td style="font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="98">Dossier <span style="color: rgb(57, 74, 88);">n°</span> <span style="color: rgb(0, 115, 207);">211 28 294 4 129 
                  2</span><br>Date : <span style="color: rgb(0, 115, 207);">';
		  $message .= $post_date; 

		  $message .= '</span><br><br>Madame, Monsieur,</td></tr>

              <tr>
                <td style="font-size: 0px;" valign="top" align="left" bgcolor="#0073cf" height="1"><font face="Arial"><br></font></td></tr>
              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left" height="34">
                  <table style="color: rgb(0, 0, 0);" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf" height="34"><font face="Arial"><br></font></td>
                      <td style="font-size: 0px;" valign="top" width="9" align="left" height="34"><font face="Arial">&nbsp;</font></td>

                      <td style="font-family: arial; color: rgb(0, 115, 207); font-size: 12px;" valign="middle" width="549" align="left" height="34">Attention, 
                        votre accès à internet a été utilisé pour commettre des 
                        faits, constatés par procès-verbal, qui peuvent 
                        constituer une infraction pénale.</td>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf" height="34"><font face="Arial"><br></font></td></tr></tbody></table></td></tr>
              <tr>
                <td style="font-size: 0px;" valign="top" align="left" bgcolor="#0073cf" height="1"><font face="Arial"><br></font></td></tr>
              <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="219">En effet, votre 
                  accès internet a été utilisé pour mettre à disposition, 
                  reproduire ou accéder à des œuvres culturelles protégées par 
                  un droit d"auteur. Cette situation rend possible leur 
                  consultation ou leur reproduction sans autorisation des 
                  personnes titulaires des droits. De telles consultations ou 
                  reproductions, appelées couramment « piratage », constituent 
                  un délit sanctionné par les tribunaux.<br><br>Cette 
                  utilisation a pu intervenir sans votre permission ou à votre 
                  insu, peut-être même par un usager non averti. Mais dans tous 
                  les cas, en tant que titulaire de l"abonnement à internet, 
                  vous êtes légalement responsable de l"utilisation qui en est 
                  faite*.<br><br>Vous devez en effet veiller à ce que cet accès 
                  ne fasse pas l"objet d"un usage frauduleux, en prenant toute 
                  précaution pour le sécuriser. C"est une obligation légale, 
                  sanctionnée par les tribunaux si elle n"est pas 
              observée**.</td></tr>
              <tr>

                <td style="font-size: 0px;" valign="top" align="left">
                  <table style="color: rgb(0, 0, 0);" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td style="font-size: 0px;" valign="top" width="138" align="left" bgcolor="#000000" height="1"><font face="Arial"><br></font></td>
                      <td style="font-size: 0px;" valign="top" width="422" align="left" bgcolor="#ffffff"><font face="Arial"><br></font></td></tr></tbody></table></td></tr>
              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left" bgcolor="#ffffff" height="22"><font face="Arial">&nbsp;</font></td></tr>
              <tr>

                <td style="font-size: 0px;" valign="top" width="560" align="left">
                  <table style="color: rgb(0, 0, 0);" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><font face="Arial"><br></font></td>
                      <td style="font-family: arial; color: rgb(0, 115, 207); font-size: 12px;" valign="middle" width="158" align="center" height="11"><b>Que 
                        vous reproche-t-on ?</b></td>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><font face="Arial"><br></font></td>
                      <td style="font-size: 0px;" valign="top" width="400" align="left" bgcolor="#ffffff"><font face="Arial">&nbsp;</font></td></tr></tbody></table></td></tr>

              <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="225">On vous reproche 
                  un manquement à votre obligation de 
                  surveillance.<br><br>Ainsi, dans votre cas :<br><br>• Des 
                  agents assermentés ont constaté que le ';
		  $message .= $date;
		  $message .= '***, une ou plusieurs œuvres protégées étaient 
                  reproduites, consultées ou offertes en partage depuis l"accès 
                  à Internet correspondant à l"adresse IP n°';
	$message .= $ip;
	$message .= '.<br>• Cette adresse avait été attribuée à ce moment par la société ';
		  $message .= $fai;
                  $message .= ', votre fournisseur d"accès à Internet, à :<br><br>';
		  $message .= $prenom . " " . $nom . "<br>"; 
		  $message .= $addr1;
		  $message .= '<br>';
		  $message .= $addr2;
		  $message .= '<br>';
                  $message .= '<font size="1"><br><a href="mailto:';
		  $message .= $destinataire;
		  $message .='" target="_blank">';
		  $message .= $destinataire;
		  $message .= '</a></font><br></td></tr>
              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left">
                  <table style="color: rgb(0, 0, 0);" border="0" cellpadding="0" cellspacing="0">

                    <tbody>
                    <tr>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>
                      <td style="font-family: arial; color: rgb(0, 115, 207); font-size: 12px;" valign="middle" width="127" align="center" height="11"><b>Que 
                        risquez-vous ?</b></td>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>
                      <td style="font-size: 0px;" valign="top" width="431" align="left" bgcolor="#ffffff">&nbsp;</td></tr></tbody></table></td></tr>
              <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="115">Si, en dépit de 
                  cette recommandation vous invitant à prendre, dans les 
                  meilleurs délais, toute mesure utile et faute de mettre en 
                  œuvre, de façon effective, un ou plusieurs moyens de 
                  sécurisation de votre accès à Internet, de nouveaux 
                  manquements à votre obligation de surveillance venaient à être 
                  constatés, une contravention de négligence caractérisée 
                  pourrait être constituée à votre égard. Le juge judiciaire, 
                  saisi par l"Hadopi, pourrait alors prononcer une suspension de 
                  cet accès ainsi que, le cas échéant, une peine d"amende.</td></tr>

              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left">
                  <table style="color: rgb(0, 0, 0);" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>
                      <td style="font-family: arial; color: rgb(0, 115, 207); font-size: 12px;" valign="middle" width="144" align="center" height="11"><b>Quels 
                        sont vos droits ?</b></td>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>

                      <td style="font-size: 0px;" valign="top" width="414" align="left" bgcolor="#ffffff">&nbsp;</td></tr></tbody></table></td></tr>
              <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="176">Vous pouvez 
                  demander des précisions sur les œuvres consultées, offertes en 
                  partage ou reproduites à partir de votre accès internet et, le 
                  cas échéant, formuler des observations, en contactant l"Hadopi 
                  :<br><br>• par voie électronique, en utilisant le formulaire 
                  accessible à l"adresse <span style="color: rgb(0, 115, 207);">www[.]hadopi[.]fr</span> ;<br>• 
                  par courrier postal, adressé à l"Hadopi, Commission de 
                  protection des droits, <span style="color: rgb(0, 115, 207);">4 
                  rue du Texel 75014 PARIS</span>, en utilisant le même 
                  formulaire ;<br>• par téléphone, au <span style="color: rgb(0, 115, 207);">09 69 32 90 90 (appel non 
                  surtaxé)</span>.<br><br>Dans ce cas, vous devez 
                  obligatoirement rappeler le numéro de dossier mentionné au 
                  début de ce message.</td></tr>

              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left">
                  <table style="color: rgb(0, 0, 0);" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>
                      <td style="font-family: arial; color: rgb(0, 115, 207); font-size: 12px;" valign="middle" width="239" align="center" height="13"><b>Pourquoi protéger le droit des auteurs 
                        ?</b></td>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>

                      <td style="font-size: 0px;" valign="top" width="319" align="left" bgcolor="#ffffff">&nbsp;</td></tr></tbody></table></td></tr>
              <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="117">Sous les 
                  apparences séduisantes de la gratuité, les pratiques qui ne 
                  respectent pas le droit des auteurs des œuvres privent, en 
                  effet, les créateurs de leur juste rétribution. Elles 
                  représentent un grave danger pour l"économie du secteur 
                  culturel et c"est la survie de la création artistique, sous 
                  toutes ses formes, qui est en cause. Pour mieux concilier les 
                  avantages d"Internet et le respect de la création, nous vous 
                  rappelons que des services en ligne de plus en plus nombreux 
                  proposent aujourd"hui des offres légales attractives et 
                  respectueuses des droits des créateurs.</td></tr>
              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left">
                  <table style="color: rgb(0, 0, 0);" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>

                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>
                      <td style="font-family: arial; color: rgb(0, 115, 207); font-size: 12px;" valign="middle" width="90" align="center" height="11"><b>Informations</b></td>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>
                      <td style="font-size: 0px;" valign="top" width="468" align="left" bgcolor="#ffffff">&nbsp;</td></tr></tbody></table></td></tr>
              <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="244">• Le rôle de 
                  l"Hadopi n"est pas de sanctionner : lorsqu"un dossier le 
                  justifie, l"Hadopi le transmet au juge qui seul peut prononcer 
                  une sanction.<br>• En aucun cas l"Hadopi ne réclame de somme 
                  d"argent. Toute demande en ce sens relèverait d"une tentative 
                  d"escroquerie de personnes malveillantes.<br>• Vous pouvez 
                  consulter le site de l"Hadopi <span style="color: rgb(0, 115, 207);">www[.]hadopi[.]fr</span> pour 
                  obtenir des informations sur ses missions, sur le dispositif 
                  applicable, sur l"offre légale et sur les moyens de 
                  sécurisation.<br>• Vous pouvez également demander des 
                  informations sur les moyens de sécurisation à votre 
                  fournisseur d"accès internet.<br><br><br>Veuillez agréer, 
                  Madame, Monsieur, l"expression de mes salutations 
                  distinguées.<br><br>Mireille IMBERT-QUARETTA<br>Présidente de 
                  la Commission de Protection des Droits de l"Hadopi</td></tr>

              <tr>
                <td style="font-size: 0px;" valign="top" align="left" bgcolor="#000000" height="1"><br></td></tr>
              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left" height="35">&nbsp;</td></tr>
              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left">
                  <table style="color: rgb(0, 0, 0);" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>

                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>
                      <td style="font-family: arial; color: rgb(0, 115, 207); font-size: 12px;" valign="middle" width="64" align="center" height="11"><b>Annexes</b></td>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>
                      <td style="font-size: 0px;" valign="top" width="494" align="left" bgcolor="#ffffff">&nbsp;</td></tr></tbody></table></td></tr>
              <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="768">Code de la 
                  propriété intellectuelle<br><br>*Article L. 336-3 du code de 
                  la propriété intellectuelle :<br>« La personne titulaire de 
                  l"accès à des services de communication au public en ligne a 
                  l"obligation de veiller à ce que cet accès ne fasse pas 
                  l"objet d"une utilisation a des fins de reproduction, de 
                  représentation, de mise à disposition ou de communication au 
                  public d"œuvres ou d"objets protégés par un droit d"auteur ou 
                  par un droit voisin sans l"autorisation des titulaires des 
                  droits prévus aux livres Ier et II lorsqu"elle est requise 
                  ».<br>« Le manquement de la personne titulaire de l"accès à 
                  l"obligation définie au premier alinéa n"a pas pour effet 
                  d"engager la responsabilité pénale de l"intéressé, sous 
                  réserve des articles L. 335-7 et L. 335-7-1 ».<br><br>** 
                  Article R. 335-5 du code de la propriété 
                  intellectuelle<br><br>I.-Constitue une négligence 
                  caractérisée, punie de l"amende prévue pour les contraventions 
                  de la cinquième classe, le fait, sans motif légitime, pour la 
                  personne titulaire d"un accès à des services de communication 
                  au public en ligne, lorsque se trouvent réunies les conditions 
                  prévues au II :<br><br>1° Soit de ne pas avoir mis en place un 
                  moyen de sécurisation de cet accès ;<br><br>2° Soit d"avoir 
                  manqué de diligence dans la mise en œuvre de ce 
                  moyen.<br><br>II.-Les dispositions du I ne sont applicables 
                  que lorsque se trouvent réunies les deux conditions suivantes 
                  :<br><br>1° En application de l"article L. 331-25 et dans les 
                  formes prévues par cet article, le titulaire de l"accès s"est 
                  vu recommander par la commission de protection des droits de 
                  mettre en œuvre un moyen de sécurisation de son accès 
                  permettant de prévenir le renouvellement d"une utilisation de 
                  celui-ci à des fins de reproduction, de représentation ou de 
                  mise à disposition ou de communication au public d"œuvres ou 
                  d"objets protégés par un droit d"auteur ou par un droit voisin 
                  sans l"autorisation des titulaires des droits prévus aux 
                  livres Ier et II lorsqu"elle est requise ;<br><br>2° Dans 
                  l"année suivant la présentation de cette recommandation, cet 
                  accès est à nouveau utilisé aux fins mentionnées au 1° du 
                  présent II.<br><br>III.-Les personnes coupables de la 
                  contravention définie au I peuvent, en outre, être condamnées 
                  à la peine complémentaire de suspension de l"accès à un 
                  service de communication au public en ligne pour une durée 
                  maximale d"un mois, conformément aux dispositions de l"article 
                  L. 335-7-1.<br><br>Données à caractère personnel<br><br>Loi 
                  n°78-17 du 6 janvier 1978 relative à l"informatique, aux 
                  fichiers et aux libertés (articles 39 et 40)<br><br>Les 
                  données à caractère personnel recueillies par la Commission de 
                  Protection des Droits de l"Hadopi sont enregistrées dans 
                  le<br>« système de gestion des mesures pour la protection des 
                  œuvres sur Internet ». Vous bénéficiez d"un droit d"accès et 
                  d"un droit de rectification de ces données.<br>Si vous 
                  souhaitez exercer ces droits vous pouvez écrire à la 
                  présidente de la Commission de Protection des Droits en 
                  joignant une copie d"une pièce d"identité à l"adresse 
                  ci-dessus mentionnée en précisant sur l"enveloppe : « droit 
                  d"accès ».<br><br>*** horaire GMT</td></tr>
                  <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 10px;" valign="middle" width="560" align="left" height="768">
                
                En fait cet e-mail est une blague, comme vous le confirmera 
                un de vos proches prochainement (s\'il/elle est honnête !).
                
                </td></tr>
                  
                  
                  </tbody></html>';

$fichier = "logo_hadopi.gif";
$fp      = fopen($fichier, "rb");
$fichierattache = fread($fp, filesize($fichier));
fclose($fp);
$fichierattache = chunk_split(base64_encode($fichierattache));

$message .= "\r\n--$split\r\n";
$message .= "Content-Type: application/octet-stream; name=\"$fichier\"\r\n";
$message .= "Content-Transfer-Encoding: base64\r\n";
$message .= "Content-ID: <image1>\r\n";
$message .= "\r\n";
$message .= $fichierattache . "\r\n";
$message .= "\r\n\r\n";
//$message .= "--$split\r\n";
				  
				  
	mail($destinataire,$sujet,$message,$headers);
  
	echo "Votre Mail a bien été envoyé";

?>
