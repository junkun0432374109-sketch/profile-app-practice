<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>プロフィール</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            margin: 0;
            padding-top: 80px;
            font-family: sans-serif;
        }

        .container {
            width: 400px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .blue-line {
            border: none;
            border-top: 2px solid #4a77d4;
            margin-bottom: 20px;
        }

        ul {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>プロフィール</h1>
        <hr class="blue-line">
        <p><strong>名前:</strong> {{ $profile['name'] }}</p>
        <p><strong>年齢:</strong> {{ $profile['age'] }}歳</p>
        <p><strong>趣味:</strong></p>
        <ul>
            @foreach ($profile['hobbies'] as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>