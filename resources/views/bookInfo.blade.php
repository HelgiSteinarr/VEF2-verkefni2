<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/app.css" />
    <title>Um bók</title>
</head>
<body class="bookInfo">
    <h1>{{ $bookInfo["name"] }}</h1>
	<ul>
		<li><p class="first">Útgefandi: {{ $bookInfo["publisher"] }}</p></li>
		<li><p>Útgáfuár: {{ $bookInfo["releaseYear"] }}</p></li>
		<li><a href="/">Til baka</a></li>
	</ul>
</body>
</html>