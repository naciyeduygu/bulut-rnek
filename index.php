<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Tanıtım Demosu</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            text-align:center;
            padding:50px;
        }

        .kutu{
            background:white;
            max-width:600px;
            margin:auto;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
        }

        h1{
            color:#24292e;
        }

        p{
            font-size:18px;
        }

        .tarih{
            color:#666;
            margin-top:20px;
        }
    </style>
</head>
<body>

<div class="kutu">

    <h1>🚀 GitHub Tanıtım Demosu</h1>

    <p>
        Bu sayfa PHP kullanılarak oluşturulmuştur.
    </p>

    <p>
        GitHub projelerin güvenli şekilde saklanmasını,
        sürüm kontrolünün yapılmasını ve ekip çalışmasını
        kolaylaştıran bir platformdur.
    </p>

    <div class="tarih">
        <?php
        echo "Sunucu Tarihi: " . date("d.m.Y H:i:s");
        ?>
    </div>

</div>

</body>
</html>
