<!DOCTYPE html>
<html>
	<head>
	
		<meta name="author" content="Dyuman Bulloni, Google Chrome">

		<meta name="date" content="01.09.2017 - 27.10.2017">

		<meta name="description" content="Progetto 1, Form PHP">

		<meta name="keywords" content="PHP, file csv, controlli, Javascript">
		
			<!--<link rel="shortcut icon" href="" type="image/x-icon">
			<link rel="icon" href="" type="image/x-icon">
			[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
			</script>
		<![endif]-->

		<meta charset="UTF-8">
		<style>
			* {
				box-sizing: border-box;
			}
			
			tr, td{
				width:20px;
				height: 20px;
				border-collapse: collapse;
			}
			
			table{
				border-collapse: collapse;		
			}
			
			.form{
				width:80%;
				padding: 15px;
			}
		</style>
	</head>
	<body onload="check()">

		<div class = "form">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<table style="width: 100%;">
				<tr>
					<th colspan="2" style="text-align:left;">Dati anagrafici</th>
				</tr>	
				<tr>
					<td id="nome">Nome</td>
					<td id="cognome">Cognome</td>
					<td id="dataNascita">Data Nascita</td>
					<td id="nazionalita">Nazionalità</td>
					<td id="genere">Genere</td>
				</tr>
				
				<tr>
					<td><input required onkeyup="controlData(this.value, 'text', 'nome')" autofocus type="text" name="nome" placeholder="Nome"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'cognome')" type="text" name="cognome" placeholder="Cognome"></td>
					<td><input required type="date" name="dataNascita" onChange="isMinorenne()" id="nascita"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'nazionalita')" type="text" name="nazionalita" placeholder="Nazionalità"></td>
					<td><select type="text" name="genere">
						<option>Maschio</option>
						<option>Femmina</option>
					</select></td>
				</tr>
				
				<tr>
					<td id="indirizzo">indirizzo e numero civico</td>
					<td id="cap">CAP</td>
					<td id="domicilio">Domicilio</td>
					<td id="cantone">Cantone</td>
					<td id="nazione">Nazione</td>
				</tr>
				
				<tr>
					<td><input required onkeyup="controlData(this.value, 'n&t', 'indirizzo')" type="text" name="indirizzo" placeholder="Indirizzo e numero civico"></td>
					<td><input required onkeyup="controlData(this.value, 'number', 'cap')" type="text" name="cap" placeholder="CAP"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'domicilio')" type="text" name="domicilio" placeholder="Domicilio"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'cantone')" type="text" name="cantone" placeholder="Cantone"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'nazione')" type="text" name="nazione" placeholder="Nazione"></td>
				</tr>
				
				<tr>
					<td id="telCel">Telefono cellulare</td>
					<td id="telCasa">Telefono di casa</td>
					<td id="email">Indirizzo email</td>
				</tr>
				
				<tr>
					<td><input onkeyup="controlData(this.value, 'number', 'telCel')" required type="text" name="telCel" placeholder="Telefono cellulare"></td>
					<td><input onkeyup="controlData(this.value, 'number', 'telCasa')" required type="text" name="telCasa" placeholder="Telefono di casa"></td>
					<td><input onkeyup="controlData(this.value, 'email', 'email')" required type="text" name="email" placeholder="Indirizzo di email"></td>
				</tr>
				
			</table>

			<div class="form" id="minorenne" style="width:100%;padding:0px;display:block;">
				<table style="width: 100%;">
				<tr></tr>
				<tr>
					<th colspan="2" style="text-align:left;">Dati Autorità Parentale</th>
				</tr>	
				<tr>
					<td id="pNome">Nome</td>
					<td id="pCognome">Cognome</td>
					<td id="pRuolo">Ruolo</td>
				</tr>
				
				<tr>
					<td><input required onkeyup="controlData(this.value, 'text', 'pNome')" type="text" id="pCampoNome" name="pNome" placeholder="Nome"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'pCognome')" type="text" id="pCampoCognome" name="pCognome" placeholder="Cognome"></td>
					<td><select required name="pRuolo">
						<option id="optionFirst">Padre</option>
						<option>Madre</option>
						<option>Tutore</option>
					</select></td>
				</tr>
				
				<tr>
					<td id="pIndirizzo">indirizzo e numero civico</td>
					<td id="pCap">CAP</td>
					<td id="pDomicilio">Domicilio</td>
					<td id="pCantone">Cantone</td>
					<td id="pNazione">Nazione</td>
				</tr>
				
				<tr>
					<td><input required onkeyup="controlData(this.value, 'n&t', 'pIndirizzo')" type="text" name="pIndirizzo" placeholder="Indirizzo e numero civico"></td>
					<td><input required onkeyup="controlData(this.value, 'number', 'pCap')" type="text" name="pCap" placeholder="CAP"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'pDomicilio')" type="text" name="pDomicilio" placeholder="Domicilio"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'pCantone')" type="text" name="pCantone" placeholder="Cantone"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'pNazione')" type="text" name="pNazione" placeholder="Nazione"></td>
				</tr>
				
				<tr>
					<td id="pTelCel">Telefono cellulare</td>
					<td id="pTelCasa">Telefono di casa</td>
					<td id="pEmail">indirizzo email</td>
				</tr>
				
				<tr>
					<td><input required onkeyup="controlData(this.value, 'number', 'pTelCel')" type="text" name="pTelCel" placeholder="Telefono cellulare"></td>
					<td><input required onkeyup="controlData(this.value, 'number', 'pTelCasa')" type="text" name="pTelCasa" placeholder="Telefono di casa"></td>
					<td><input required onkeyup="controlData(this.value, 'email', 'pEmail')" type="text" name="pEmail" placeholder="Indirizzo di email"></td>
				</tr>
			</table>
			</div>
			<table style="width:100%">
				<tr>
				<tr></tr>
					<th colspan="2" style="text-align:left;">Ultima Scuola Frequentata</th>	
				<tr>
					<td id="tipo">Tipo</td>
					<td id="denominazione">Denominazione</td>
					<td id="sede">Sede</td>
					<td id="anno">Anno</td>
					
				</tr>
				
				<tr>
					<td><select name="tipo">
						<option>Elementare</option>
						<option>Media</option>
						<option>Superiore</option>
					</select></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'denominazione')" type="text" name="denominazione" placeholder="Denominazione"></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'sede')" type="text" name="sede" placeholder="Sede"></td>
					<td><input required onkeyup="controlData(this.value, 'number', 'anno')" type="text" name="anno" placeholder="Anno"></td>
					<td><span style="visibility:hidden;"><input name="order" type="text"></span></td>
				</tr>
				<tr>
					<td><span style="visibility:hidden;"><input name="order2" type="text"></span></td>
				</tr>
				<tr></tr>
				<tr>
					<th colspan="2" style="text-align:left;">Situazione professionale attuale</th>
				</tr>
				
				<tr>
					<td id="lSit">Situazione professionale attuale</td>
					<td id="lOccupazione">Scuola</td>
					<td id="lSedeTipo">Sede</td>
					<td id="lAnno" >Anno</td>
				</tr>
				
				<tr>
					<td><select name="lOccupazione" onChange="studentOrWorker(this.value)">
						<option>Studente</option>
						<option>Lavoro</option>
					</select></td>
					<td><input required onkeyup="controlData(this.value, 'text', 'lOccupazione')" type="text" id="slCampoScuolaProf" name="lScuola" placeholder="Scuola"></td>
					<td id="cellaTipo"><input required onkeyup="controlData(this.value, 'text', 'lSedeTipo')" type="text" id="slCampoSede" name="lSedeTipo" placeholder="Sede"></td>
					<td><input required onkeyup="controlData(this.value, 'number', 'lAnno')" type="text" id="slCampoAnno" name="lAnno" placeholder="Anno"></td>
				</tr>
				<tr>
					<td id="osservazioni">Osservazioni</td>
				</tr>
				<tr>
					<td rowspan="3" colspan="5">
					<textarea maxlength="239" cols="5" rows="3" required style="width:100%;height:100%;resize:none;" name="osservazioni" placeholder="o Perché se venuto ad Espoprofessioni?&#10;o Che cosa ti ha interessato di più?&#10;o Che cosa ti aspettavi ma non hai trovato?"></textarea></td>
				</tr>
				<tr></tr><tr></tr>
				<tr></tr>
				<tr><td colspan="5" rowspan="2"><input disabled style="width:100%; height:100%" name="salva" type="submit" value="SALVA"></td></tr>
				<tr></tr>
			</table>
		</form>
		</div>
		
		<script>
		function isMinorenne(){
			birthday = new Date(document.getElementById("nascita").value);
			today = new Date();	
			tempo = new Date();	
			console.log(birthday);
			if(birthday != null){
				tempo.setFullYear(today.getYear() - birthday.getYear());
				tempo.setMonth(today.getMonth() - birthday.getMonth());
				tempo.setDate(today.getDate() - birthday.getDate());
				diff = tempo.getFullYear();
				console.log(diff);
					parente = [
						document.getElementsByName("pNome")[0],
						document.getElementsByName("pCognome")[0],
						document.getElementsByName("pRuolo")[0],
						document.getElementsByName("pIndirizzo")[0],
						document.getElementsByName("pCap")[0],
						document.getElementsByName("pDomicilio")[0],
						document.getElementsByName("pCantone")[0],
						document.getElementsByName("pNazione")[0],
						document.getElementsByName("pTelCel")[0],
						document.getElementsByName("pTelCasa")[0],
						document.getElementsByName("pEmail")[0]
					];
					console.log(parente);
					if(diff >= 18){
						document.getElementById("minorenne").style.display = "none";
						for(i = 0; i < parente.length; i++){
							parente[i].required = false;
							campi["pNome"] = true;
							campi["pCognome"] = true;
							campi["pIndirizzo"] = true;
							campi["pCap"] = true;
							campi["pDomicilio"] = true;
							campi["pCantone"] = true;
							campi["pNazione"] = true;
							campi["pTelCel"] = true;
							campi["pTelCasa"] = true;
							campi["pEmail"] = true;
							document.getElementById("optionFirst").innerHTML = "";
						}
					}else{
						document.getElementById("minorenne").style.display = "block";
						for(i = 0; i < parente.length; i++){
							parente[i].required = true;
							campi["pNome"] = false;
							campi["pCognome"] = false;
							campi["pIndirizzo"] = false;
							campi["pCap"] = false;
							campi["pDomicilio"] = false;
							campi["pCantone"] = false;
							campi["pNazione"] = false;
							campi["pTelCel"] = false;
							campi["pTelCasa"] = false;
							campi["pEmail"] = false;
							document.getElementById("optionFirst").innerHTML = "Padre";
							
						}
					}
					if(diff > 30 || diff < 8){
						document.getElementById("dataNascita").style.color = "red";
						campi["dataNascita"] = false;
					}else{
						document.getElementById("dataNascita").style.color = "black";
						campi["dataNascita"] = true;
					}
				
			}
		}
		
		var campi = [];
		campi["nome"] = false;
		campi["cognome"] = false;
		campi["dataNascita"] = false;
		campi["nazionalita"] = false;
		campi["indirizzo"] = false;
		campi["cap"] = false;
		campi["domicilio"] = false;
		campi["cantone"] = false;
		campi["nazione"] = false;
		campi["telCel"] = false;
		campi["telCasa"] = false;
		campi["email"] = false;
		
		campi["pNome"] = false;
		campi["pCognome"] = false;
		campi["pIndirizzo"] = false;
		campi["pCap"] = false;
		campi["pDomicilio"] = false;
		campi["pCantone"] = false;
		campi["pNazione"] = false;
		campi["pTelCel"] = false;
		campi["pTelCasa"] = false;
		campi["pEmail"] = false;
		
		campi["denominazione"] = false;
		campi["sede"] = false;
		campi["anno"] = false;
		campi["lOccupazione"] = false;
		campi["lSedeTipo"] = false;
		campi["lAnno"] = false;
		
		console.log(campi);

		function controlData(valore, mod, idLabel){
			if(mod == "email"){
				re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
			}else if(mod == "number"){
				re = /^[0-9]+$/g;
			}else if(mod == "n&t"){
				re = /^[0-9A-z ]+$/g;
			}else{
				re = /^[A-z]+$/g;
			}
			if(re.test(valore)){
				document.getElementById(idLabel).style.color = "black";
				campi[idLabel] = true;
			}else{
				document.getElementById(idLabel).style.color = "red";
				campi[idLabel] = false;
			}
			check();
		}
		
		function check(){
			console.log("sono dentro");
			for(var campo in campi){
				console.log(campi[campo]);
				console.log(campo);
				if(!campi[campo]){
					console.log(document.getElementsByName("salva")[0]);
					document.getElementsByName("salva")[0].disabled = true;
					return;
				}
			}
			document.getElementsByName("salva")[0].disabled = false;
		}

		
		function studentOrWorker(a){
			console.log(a);
			
			if(a == "Studente"){
				document.getElementById("lOccupazione").innerHTML = "Scuola";
				document.getElementById("slCampoScuolaProf").placeholder = "Scuola";
				document.getElementById("lSedeTipo").innerHTML = "Sede";
				
				cella = "<input required onkeyup='controlData(this.value, \"text\", \"lSedeTipo\")' type='text' id='slCampoSede' name='lSedeTipo' placeholder='Sede'>";
				document.getElementById("cellaTipo").innerHTML = cella;
			}else if(a == "Lavoro"){
				document.getElementById("lOccupazione").innerHTML = "Professione";
				document.getElementById("slCampoScuolaProf").placeholder = "Professione";
				document.getElementById("lSedeTipo").innerHTML = "Tipo";
				document.getElementById("cellaTipo").innerHTML = "<select name='lSedeTipo'><option>Apprendista</option><option>Professionista</option><option>Indipendente</option></select>";
			}
		}

		</script>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nome = $cognome = $dataNascita = $nazionalita = $genere = $indirizzo = $cap = $domicilio = $cantone = $nazione = $telCel = $telCasa = $email = "";
			$pNome = $pCognome = $pRuolo = $pIndirizzo = $pCap = $pDomicilio = $pCantone = $pNazione = $pTelCasa = $pEmail = "";
			$tipo = $denominazione = $sede = $anno = $lOccupazione = $lScuola = $lSedeTipo = $lAnno = $osservazioni = "";
			$nome = $_POST["nome"];
			$cognome = $_POST["cognome"];
			$dataNascita = $_POST["dataNascita"];
			$nazionalita = $_POST["nazionalita"];
			$genere = $_POST["genere"];
			$indirizzo = $_POST["indirizzo"];
			$cap = $_POST["cap"];
			$domicilio = $_POST["domicilio"];
			$cantone = $_POST["cantone"];
			$nazione = $_POST["nazione"];
			$telCel = $_POST["telCel"];
			$telCasa = $_POST["telCasa"];
			$email = $_POST["email"];
			
			$pNome = $_POST["pNome"];
			$pCognome = $_POST["pCognome"];
			$pRuolo = $_POST["pRuolo"];
			$pIndirizzo = $_POST["pIndirizzo"];
			$pCap = $_POST["pCap"];
			$pDomicilio = $_POST["pDomicilio"];
			$pCantone = $_POST["pCantone"];
			$pNazione = $_POST["pNazione"];
			$pTelCel = $_POST["pTelCel"];
			$pTelCasa = $_POST["pTelCasa"];
			$pEmail = $_POST["pEmail"];
			
			$tipo = $_POST["tipo"];
			$denominazione = $_POST["denominazione"];
			$sede = $_POST["sede"];
			$anno = $_POST["anno"];
			$lOccupazione = $_POST["lOccupazione"];
			$lScuola = $_POST["lScuola"];
			$lSedeTipo = $_POST["lSedeTipo"];
			$lAnno = $_POST["lAnno"];
			$osservazioni = $_POST["osservazioni"];
		  
		  $dati = array(array($nome, $cognome, $dataNascita, $nazionalita, $genere, 
			$indirizzo, $cap, $domicilio, $cantone, $nazione, $telCasa, $telCel, $email,
				$pNome, $pCognome, $pRuolo, $pIndirizzo, $pCap, $pDomicilio, $pCantone, $pNazione, $pTelCel, $pTelCasa, $pEmail,
				$denominazione, $sede, $anno, $lOccupazione, $lScuola, $lSedeTipo, $lAnno, $osservazioni));
		  $fp = fopen("dati.csv", "a");
		  fputcsv($fp, array(PHP_EOL));
		  foreach($dati as $obj){
			  fputcsv($fp, $obj);
		  }
		  
		  fclose($fp);
		}
		?>
	</body>
</html>