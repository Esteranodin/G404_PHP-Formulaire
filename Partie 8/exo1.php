<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations serveur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
        }

        p:nth-child(odd) {
            background-color: #e9f7fd;
        }

        p span {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>Utilisateur : <span><?php echo $_SERVER["HTTP_USER_AGENT"]; ?></span></p>
        <p>Adresse IP du serveur : <span><?php echo $_SERVER['SERVER_ADDR']; ?></span></p>
        <p>Nom du serveur : <span><?php echo $_SERVER['SERVER_NAME']; ?></span></p>
    </div>
</body>
</html>
