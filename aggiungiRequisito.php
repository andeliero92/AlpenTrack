<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Aggiungi - AlpenStock </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<meta charset="utf-8" />	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- BOOTSTRAP -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->	
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<!-- Include JavaScript for form control -->
		<script type="text/javascript" src="js/validate.js"></script>
	</head>
<body>
	<?php
		if (isset($_SESSION['authenticate']) == false)
			header('location:login.php');
	?>

	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="index.php">AlpenTrack</a>
    		</div>
    		<div>
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="index.php">Elenco Requisiti</a></li>
        			<li class="active"><a>Aggiungi Requisito</a></li>
        			<li><a href="latex.php">Latex</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>

	<div class="container">
		<h1>Aggiungi requisito <small>Crea il requisito</small></h1> 
		<p>Compila il form seguente per creare un requisito:</p> 
		<form role="form" class="form-horizontal">
			<div class="form-group" id="divCodice">
				<label for="CodiceReq" class="control-label">
					Codice univoco:
				</label>
				<div>
					<input type="text" class="form-control" name="CodiceReq" id="CodiceReq" placeholder="esempio: 1.1.1" onchange="removeError('divCodice')" autofocus required />
				</div>
			</div>
			<div class="form-group" id="divSistema">
				<label for="Sistema" class="control-label">
					Sistema:
				</label>
				<label class="radio-inline">
     				<input type="radio" name="Sistema" id="SistemaS" value="S" onchange="removeError('divSistema')"/>Smartwatch
    			</label>
    			<label class="radio-inline">
      				<input type="radio" name="Sistema" id="SistemaC" value="C" onchange="removeError('divSistema')" />Cloud
    			</label>
    			<label class="radio-inline">
    				<input type="radio" name="Sistema" id="SistemaN" value="N" onchange="removeError('divSistema')" />Nessun sistema
     			</label>
			</div>
			<div class="form-group">
				<label for="Importanza" class="control-label">
					Importanza:
				</label>
				<select class="form-control" name="Importanza" required>
        			<option value="0">Obbligatorio</option>
        			<option value="1">Desiderabile</option>
        			<option value="2">Opzionale</option>
      			</select>
			</div>
			<div class="form-group">
				<label for="Tipo" class="control-label">
					Tipo:
				</label>
				<select class="form-control" name="Tipo" required>
        			<option value="F">Funzionale</option>
        			<option value="Q">Qualità</option>
        			<option value="P">Prestazionale</option>
        			<option value="V">Vincolo</option>
      			</select>
			</div>
			<div class="form-group" id="divDesc">
				<label for="Descrizione" class="control-label">
					Descrizione:
				</label>
				<input type="text" name="Descrizione" id="Descrizione" class="form-control" placeholder="Inserire una breve descrizione del requisito (massimo 200 caratteri)" maxlength="200" onchange="removeError('divDesc')" required />
 			</div>
 			<div class="form-group">
 				<label for="Soddisfatto" class="control-label">
					Soddisfatto:
				</label>
				<label class="radio-inline">
     				<input type="radio" name="Soddisfatto" value="TRUE" />Sì
    			</label>
    			<label class="radio-inline">
      				<input type="radio" name="Soddisfatto" value="FALSE" />No
    			</label>
 			</div>
 			<div class="form-group">
      			<button type="submit" class="btn btn-success btn-block btn-lg" onclick="return validate();" formmethod="post" formaction="aggiungiFonte.php">
 			         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crea
				</button>
  			</div>
		</form>	
	</div>
</body>
</html>