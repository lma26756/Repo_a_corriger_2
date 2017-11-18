<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="html5.css"/>
	<title>Cours 3</title>
</head>
<body>
<form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" />
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" />
    </div>
    <div>
        <label for="adresse">adresse :</label>
        <textarea id="adresse"></textarea>
    </div>
    <div>
    	<label for="Telephone">telephone :</label>
    	<textarea id="Telephone"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
<svg widht="200" height="200" style="background-color: rgba(200, 200, 200, 0.5);">
    <circle style="fill: none; stroke: red; stroke-width: 10px;" cx="100" cy="100" r="80"/>
</svg>
</body>
</html>