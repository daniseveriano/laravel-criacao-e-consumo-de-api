<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consumindo Api do Github</title>
</head>

<body>
    <div>
        @foreach ($apiArray as $apiShow)
            <ul>
                <li>{{ $apiArray['name'] }}</li>
                <li>{{ $apiArray['bio'] }}</li>
                <li>{{ $apiArray['public_repos'] }}</li>
                <li>{{ $apiArray['followers'] }}</li>
                <li>{{ $apiArray['following'] }}</li>
            </ul>
        @endforeach
    </div>
</body>

</html>
