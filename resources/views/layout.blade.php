<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Home')</title>

    </head>
    <body>
	@yield("content")
	<ul>
		<li><a href="/">Home.</a></li>
		<li><a href="/contact">Contact us.</a></li>
		<li><a href="/about">About us.</a></li>
	</ul>
    </body>
</html>
