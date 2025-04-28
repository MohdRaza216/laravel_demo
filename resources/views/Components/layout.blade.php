<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>
</head>
<body style="padding: 20px; background-color: #f0f0f0; font-family: Arial, sans-serif;">
    <header>
        <h1>{{ $header ?? 'Default Header' }}</h1>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>
</html>
