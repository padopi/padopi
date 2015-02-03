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
                        Protection des Droits de la Haute autorit� pour la 
                        diffusion des �uvres et la protection des droits sur 
                        Internet (Hadopi)</b></td></tr></tbody></table></td></tr>
              <tr>
                <td style="font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="98">Dossier <span style="color: rgb(57, 74, 88);">n�</span> <span style="color: rgb(0, 115, 207);">211 28 294 4 129 
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
                        votre acc�s � internet a �t� utilis� pour commettre des 
                        faits, constat�s par proc�s-verbal, qui peuvent 
                        constituer une infraction p�nale.</td>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf" height="34"><font face="Arial"><br></font></td></tr></tbody></table></td></tr>
              <tr>
                <td style="font-size: 0px;" valign="top" align="left" bgcolor="#0073cf" height="1"><font face="Arial"><br></font></td></tr>
              <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="219">En effet, votre 
                  acc�s internet a �t� utilis� pour mettre � disposition, 
                  reproduire ou acc�der � des �uvres culturelles prot�g�es par 
                  un droit d"auteur. Cette situation rend possible leur 
                  consultation ou leur reproduction sans autorisation des 
                  personnes titulaires des droits. De telles consultations ou 
                  reproductions, appel�es couramment � piratage �, constituent 
                  un d�lit sanctionn� par les tribunaux.<br><br>Cette 
                  utilisation a pu intervenir sans votre permission ou � votre 
                  insu, peut-�tre m�me par un usager non averti. Mais dans tous 
                  les cas, en tant que titulaire de l"abonnement � internet, 
                  vous �tes l�galement responsable de l"utilisation qui en est 
                  faite*.<br><br>Vous devez en effet veiller � ce que cet acc�s 
                  ne fasse pas l"objet d"un usage frauduleux, en prenant toute 
                  pr�caution pour le s�curiser. C"est une obligation l�gale, 
                  sanctionn�e par les tribunaux si elle n"est pas 
              observ�e**.</td></tr>
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
                  un manquement � votre obligation de 
                  surveillance.<br><br>Ainsi, dans votre cas :<br><br>� Des 
                  agents asserment�s ont constat� que le ';
		  $message .= $date;
		  $message .= '***, une ou plusieurs �uvres prot�g�es �taient 
                  reproduites, consult�es ou offertes en partage depuis l"acc�s 
                  � Internet correspondant � l"adresse IP n�';
	$message .= $ip;
	$message .= '.<br>� Cette adresse avait �t� attribu�e � ce moment par la soci�t� ';
		  $message .= $fai;
                  $message .= ', votre fournisseur d"acc�s � Internet, � :<br><br>';
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
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="115">Si, en d�pit de 
                  cette recommandation vous invitant � prendre, dans les 
                  meilleurs d�lais, toute mesure utile et faute de mettre en 
                  �uvre, de fa�on effective, un ou plusieurs moyens de 
                  s�curisation de votre acc�s � Internet, de nouveaux 
                  manquements � votre obligation de surveillance venaient � �tre 
                  constat�s, une contravention de n�gligence caract�ris�e 
                  pourrait �tre constitu�e � votre �gard. Le juge judiciaire, 
                  saisi par l"Hadopi, pourrait alors prononcer une suspension de 
                  cet acc�s ainsi que, le cas �ch�ant, une peine d"amende.</td></tr>

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
                  demander des pr�cisions sur les �uvres consult�es, offertes en 
                  partage ou reproduites � partir de votre acc�s internet et, le 
                  cas �ch�ant, formuler des observations, en contactant l"Hadopi 
                  :<br><br>� par voie �lectronique, en utilisant le formulaire 
                  accessible � l"adresse <span style="color: rgb(0, 115, 207);">www[.]hadopi[.]fr</span> ;<br>� 
                  par courrier postal, adress� � l"Hadopi, Commission de 
                  protection des droits, <span style="color: rgb(0, 115, 207);">4 
                  rue du Texel 75014 PARIS</span>, en utilisant le m�me 
                  formulaire ;<br>� par t�l�phone, au <span style="color: rgb(0, 115, 207);">09 69 32 90 90 (appel non 
                  surtax�)</span>.<br><br>Dans ce cas, vous devez 
                  obligatoirement rappeler le num�ro de dossier mentionn� au 
                  d�but de ce message.</td></tr>

              <tr>
                <td style="font-size: 0px;" valign="top" width="560" align="left">
                  <table style="color: rgb(0, 0, 0);" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>
                      <td style="font-family: arial; color: rgb(0, 115, 207); font-size: 12px;" valign="middle" width="239" align="center" height="13"><b>Pourquoi prot�ger le droit des auteurs 
                        ?</b></td>
                      <td style="font-size: 0px;" valign="top" width="1" align="left" bgcolor="#0073cf"><br></td>

                      <td style="font-size: 0px;" valign="top" width="319" align="left" bgcolor="#ffffff">&nbsp;</td></tr></tbody></table></td></tr>
              <tr>
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="117">Sous les 
                  apparences s�duisantes de la gratuit�, les pratiques qui ne 
                  respectent pas le droit des auteurs des �uvres privent, en 
                  effet, les cr�ateurs de leur juste r�tribution. Elles 
                  repr�sentent un grave danger pour l"�conomie du secteur 
                  culturel et c"est la survie de la cr�ation artistique, sous 
                  toutes ses formes, qui est en cause. Pour mieux concilier les 
                  avantages d"Internet et le respect de la cr�ation, nous vous 
                  rappelons que des services en ligne de plus en plus nombreux 
                  proposent aujourd"hui des offres l�gales attractives et 
                  respectueuses des droits des cr�ateurs.</td></tr>
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
                <td style="text-align: justify; font-family: arial; color: rgb(0, 0, 0); font-size: 12px;" valign="middle" width="560" align="left" height="244">� Le r�le de 
                  l"Hadopi n"est pas de sanctionner : lorsqu"un dossier le 
                  justifie, l"Hadopi le transmet au juge qui seul peut prononcer 
                  une sanction.<br>� En aucun cas l"Hadopi ne r�clame de somme 
                  d"argent. Toute demande en ce sens rel�verait d"une tentative 
                  d"escroquerie de personnes malveillantes.<br>� Vous pouvez 
                  consulter le site de l"Hadopi <span style="color: rgb(0, 115, 207);">www[.]hadopi[.]fr</span> pour 
                  obtenir des informations sur ses missions, sur le dispositif 
                  applicable, sur l"offre l�gale et sur les moyens de 
                  s�curisation.<br>� Vous pouvez �galement demander des 
                  informations sur les moyens de s�curisation � votre 
                  fournisseur d"acc�s internet.<br><br><br>Veuillez agr�er, 
                  Madame, Monsieur, l"expression de mes salutations 
                  distingu�es.<br><br>Mireille IMBERT-QUARETTA<br>Pr�sidente de 
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
                  propri�t� intellectuelle<br><br>*Article L. 336-3 du code de 
                  la propri�t� intellectuelle :<br>� La personne titulaire de 
                  l"acc�s � des services de communication au public en ligne a 
                  l"obligation de veiller � ce que cet acc�s ne fasse pas 
                  l"objet d"une utilisation a des fins de reproduction, de 
                  repr�sentation, de mise � disposition ou de communication au 
                  public d"�uvres ou d"objets prot�g�s par un droit d"auteur ou 
                  par un droit voisin sans l"autorisation des titulaires des 
                  droits pr�vus aux livres Ier et II lorsqu"elle est requise 
                  �.<br>� Le manquement de la personne titulaire de l"acc�s � 
                  l"obligation d�finie au premier alin�a n"a pas pour effet 
                  d"engager la responsabilit� p�nale de l"int�ress�, sous 
                  r�serve des articles L. 335-7 et L. 335-7-1 �.<br><br>** 
                  Article R. 335-5 du code de la propri�t� 
                  intellectuelle<br><br>I.-Constitue une n�gligence 
                  caract�ris�e, punie de l"amende pr�vue pour les contraventions 
                  de la cinqui�me classe, le fait, sans motif l�gitime, pour la 
                  personne titulaire d"un acc�s � des services de communication 
                  au public en ligne, lorsque se trouvent r�unies les conditions 
                  pr�vues au II :<br><br>1� Soit de ne pas avoir mis en place un 
                  moyen de s�curisation de cet acc�s ;<br><br>2� Soit d"avoir 
                  manqu� de diligence dans la mise en �uvre de ce 
                  moyen.<br><br>II.-Les dispositions du I ne sont applicables 
                  que lorsque se trouvent r�unies les deux conditions suivantes 
                  :<br><br>1� En application de l"article L. 331-25 et dans les 
                  formes pr�vues par cet article, le titulaire de l"acc�s s"est 
                  vu recommander par la commission de protection des droits de 
                  mettre en �uvre un moyen de s�curisation de son acc�s 
                  permettant de pr�venir le renouvellement d"une utilisation de 
                  celui-ci � des fins de reproduction, de repr�sentation ou de 
                  mise � disposition ou de communication au public d"�uvres ou 
                  d"objets prot�g�s par un droit d"auteur ou par un droit voisin 
                  sans l"autorisation des titulaires des droits pr�vus aux 
                  livres Ier et II lorsqu"elle est requise ;<br><br>2� Dans 
                  l"ann�e suivant la pr�sentation de cette recommandation, cet 
                  acc�s est � nouveau utilis� aux fins mentionn�es au 1� du 
                  pr�sent II.<br><br>III.-Les personnes coupables de la 
                  contravention d�finie au I peuvent, en outre, �tre condamn�es 
                  � la peine compl�mentaire de suspension de l"acc�s � un 
                  service de communication au public en ligne pour une dur�e 
                  maximale d"un mois, conform�ment aux dispositions de l"article 
                  L. 335-7-1.<br><br>Donn�es � caract�re personnel<br><br>Loi 
                  n�78-17 du 6 janvier 1978 relative � l"informatique, aux 
                  fichiers et aux libert�s (articles 39 et 40)<br><br>Les 
                  donn�es � caract�re personnel recueillies par la Commission de 
                  Protection des Droits de l"Hadopi sont enregistr�es dans 
                  le<br>� syst�me de gestion des mesures pour la protection des 
                  �uvres sur Internet �. Vous b�n�ficiez d"un droit d"acc�s et 
                  d"un droit de rectification de ces donn�es.<br>Si vous 
                  souhaitez exercer ces droits vous pouvez �crire � la 
                  pr�sidente de la Commission de Protection des Droits en 
                  joignant une copie d"une pi�ce d"identit� � l"adresse 
                  ci-dessus mentionn�e en pr�cisant sur l"enveloppe : � droit 
                  d"acc�s �.<br><br>*** horaire GMT</td></tr>
                  <tr>
                  
                  
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
  
	echo "Votre Mail a bien �t� envoy�";

?>
