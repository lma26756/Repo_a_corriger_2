<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mon tableau</title>
	<style>table,td,th {border-style :solid}</style>
</head>
<body>
	<h1>Mon tableau</h1>

<table border="1">
	<tr><td>Réser</td><td>Paul</td><td>Julie</td></tr>
	<tr><td>AM</td><td rowspan="2">Non</td><td>Non</td></tr>
	<tr><td>AP</td><td>Oui</td></tr>
	<tr><td>Soir</td><td colspan="2">Oui</td></tr>
</table>

	<h2>Exercice tableau</h2>
<table>
	<tr><td colspan="2"></td><td colspan="2" align="center">Premier groupe</td><td colspan="2" align="center">Deuxieme groupe</td></tr>
	<tr><td></td><td>Personne</td><td>Singulier</td><td>Pluriel</td><td>Singulier</td><td>Pluriel</td></tr>
	<tr><td rowspan="3">présent</td><td align="center">1</td><td>je mange</td><td>nous mangeons</td><td>je finis</td><td>nous finissons</td></tr>
	<tr><td align="center">2</td><td>tu manges</td><td>vous mangez</td><td>tu finis</td><td>vous finissez</td></tr>
	<tr><td align="center">3</td><td>il mange</td><td>ils mangent</td><td>il finit</td><td>ils finissent</td></tr>
</table>

<h2>Mon formulaire</h2>

<form action="#">
	<p>Nom : <input type="text" name="A"></p>
	<p>Prénom : <input type="text" name="B"></p>
	<p>Mr <input type="radio" name="C" value="Mr"> Mme<input type="radio" name="C" value="Mme"></p>
	<p>
		chien <input type="checkbox" name="D" value="chien">
		chat <input type="checkbox" name="E" value="chat">
		poisson <input type="checkbox" name="F" value="poisson">
	</p>

	<p>
	<select name="G">
		<option>Pain</option>
		<option>Citron</option>
		<option>Orange</option>
	</select>
	</p>

	<p>
	<textarea rows="3" cols="50" name="H">
		laissez nous un commentaire
	</textarea>
	</p>

	<p>
	<input type="submit" name="">
	<input type="reset" name="">
	</p>

</form>


</body>
</html>