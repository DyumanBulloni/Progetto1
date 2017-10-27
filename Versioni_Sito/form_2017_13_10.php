<!DOCTYPE html>
<html>
	<head>
		<style>
			* {
				box-sizing: border-box;
			}
			
			tr, td{
				width:40px; 
				height: 30px; 
				<!--border: 1px solid black;
				border-collapse: collapse;-->
			}
			
			table{
				
				<!--border: 1px solid black; 
				border-collapse: collapse;	-->			
			}

			
			.dati{
				width: 30%;
				float:left;
				padding: 15px;
			}
			
			.form{
				width: 70%;
				float: left;
				padding: 15px;
			}
		</style>
	</head>
	<body>
		<header>
			<h1></h1>
			<h1></h1>
		</header>
		<div class = "form">
			<form>
			<table style="width: 100%;">
				<tr>
					<th colspan="2" style="text-align:left;">Dati anagrafici</th>
				</tr>	
				<tr>
					<td>Nome</td>
					<td>Cognome</td>
					<td>Data Nascita</td>
					<td>Nazionalità</td>
					<td>Genere</td>
				</tr>
				
				<tr>
					<td><input type="text" name="nome" placeholder="Nome"></td>
					<td><input type="text" name="cognome" placeholder="Cognome"></td>
					<td><input type="date" name="dataNascita" placeholder=""></td>
					<td><input type="text" name="nazionalita" placeholder="Nazionalità"></td>
					<td><select type="text" name="genere">
						<option>Maschio</option>
						<option>Femmina</option>
					</select></td>
				</tr>
				
				<tr>
					<td>indirizzo e numero civico</td>
					<td>CAP</td>
					<td>Domicilio</td>
					<td>Cantone</td>
					<td>Nazione</td>
				</tr>
				
				<tr>
					<td><input type="text" name="indirizzo" placeholder="Indirizzo e numero civico"></td>
					<td><input type="text" name="cap" placeholder="CAP"></td>
					<td><input type="text" name="domicilio" placeholder="Domicilio"></td>
					<td><input type="text" name="cantone" placeholder="Cantone"></td>
					<td><input type="text" name="nazione" placeholder="Nazione"></td>
				</tr>
				
				<tr>
					<td>Telefono cellulare</td>
					<td>Telefono di casa</td>
					<td>indirizzo email</td>
				</tr>
				
				<tr>
					<td><input type="text" name="telCel" placeholder="Telefono cellulare"></td>
					<td><input type="text" name="telCasa" placeholder="Telefono di casa"></td>
					<td><input type="email" name="email" placeholder="Indirizzo di email"></td>
				</tr>
			</table>
			<br><br>
			<!--style="display:none;"-->
			<div class="form" style="width:100%;padding:0px;display:block;">
				<table style="width: 100%;">
				<tr>
					<th  colspan="2" style="text-align:left;">Dati Autorità Parentale</th>
				</tr>	
				<tr>
					<td>Nome</td>
					<td>Cognome</td>
					<td>Ruolo</td>
				</tr>
				
				<tr>
					<td><input type="text" name="nome" placeholder="Nome"></td>
					<td><input type="text" name="cognome" placeholder="Cognome"></td>
					<td><select name="ruolo">
						<option>Padre</option>
						<option>Madre</option>
						<option>Tutore</option>
					</select></td>
				</tr>
				
				<tr>
					<td>indirizzo e numero civico</td>
					<td>CAP</td>
					<td>Domicilio</td>
					<td>Cantone</td>
					<td>Nazione</td>
				</tr>
				
				<tr>
					<td><input type="text" name="indirizzo" placeholder="Indirizzo e numero civico"></td>
					<td><input type="text" name="cap" placeholder="CAP"></td>
					<td><input type="text" name="domicilio" placeholder="Domicilio"></td>
					<td><input type="text" name="cantone" placeholder="Cantone"></td>
					<td><input type="text" name="nazione" placeholder="Nazione"></td>
				</tr>
				
				<tr>
					<td>Telefono cellulare</td>
					<td>Telefono di casa</td>
					<td>indirizzo email</td>
				</tr>
				
				<tr>
					<td><input type="text" name="telCel" placeholder="Telefono cellulare"></td>
					<td><input type="text" name="telCasa" placeholder="Telefono di casa"></td>
					<td><input type="email" name="email" placeholder="Indirizzo di email"></td>
				</tr>
			</div>
			<!--</table>
			
			<br><br>
				<table style="width: 100%;">-->
				<tr>
				<tr></tr>
					<th colspan="2" style="text-align:left;">Ultima Scuola Frequentata</th>
				</tr>	
				<tr>
					<td>Tipo</td>
					<td>Denominazione</td>
					<td>Sede</td>
					<td>Anno</td>
					
				</tr>
				
				<tr>
					<td><select name="tipo">
						<option>Elementare</option>
						<option>Media</option>
						<option>Superiore</option>
					</select></td>
					<td><input type="text" name="denominazione" placeholder="Denominazione"></td>
					<td><input type="text" name="sede" placeholder="Sede"></td>
					<td><input type="text" name="anno" placeholder="Anno"></td>
					<td><span style="visibility:hidden;"><input type="text" name="denominazione" placeholder="Denominazione"></span></td>
				</tr>
				<tr>
					<td><span style="visibility:hidden;"><input type="text" name="denominazione" placeholder="Denominazione"></span></td>
				</tr>
				<tr></tr>
				<tr>
					<th colspan="2" style="text-align:left;">Situazione professionale attuale</th>
				</tr>
				
				<tr>
					<td>Telefono cellulare</td>
					<td>Scuola/Professione</td>
					<td>Sede</td>
					<td>Anno</td>
				</tr>
				
				<tr>
					<td><select name="occupazione">
						<option>Studente</option>
						<option>Lavoro</option>
					</select></td>
					<td><input type="text" name="scuolaProf" placeholder="Scuola/Professione"></td>
					<td><input type="text" name="sede" placeholder="Sede"></td>
					<td><input type="text" name="anno" placeholder="Anno"></td>
				</tr>
				<tr>
					<td>Osservazioni</td>
				</tr>
				<tr>
					<td colspan="5" rowspan="3">
					<textarea style="width:100%;height:100%;" name="osservazioni" placeholder="o Perché se venuto ad Espoprofessioni?
o Che cosa ti ha interessato di più?
o Che cosa ti aspettavi ma non hai trovato?"></textarea></td>
				</tr>
				<tr></tr><tr></tr>
			</table>
		</form>
		</div>
		<div class="dati">
			<table style="width: 100%;">
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>	
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
	</body>
</html>