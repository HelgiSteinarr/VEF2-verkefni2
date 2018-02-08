<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css" />
    <title>Bókalisti</title>
</head>
<body class="home">
    <h1>Bókalisti</h1>
    <ul>
        @for ($i = 0; $i < count($books); $i++)
			<li><a href={{ "/book/".array_keys($books)[$i] }} >{{ $books[array_keys($books)[$i]]["name"] }}</a></li>
		@endfor
    </ul>
</body>
</html>