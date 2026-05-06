<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps Deployment</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color:white;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .container{
            text-align:center;
            background: rgba(255,255,255,0.05);
            padding:50px;
            border-radius:20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 30px rgba(0,0,0,0.3);
            max-width:700px;
            width:100%;
        }

        .badge{
            display:inline-block;
            background:#22c55e;
            color:white;
            padding:10px 20px;
            border-radius:999px;
            font-weight:bold;
            margin-bottom:25px;
        }

        h1{
            font-size:48px;
            margin-bottom:20px;
        }

        p{
            font-size:18px;
            line-height:1.7;
            color:#cbd5e1;
            margin-bottom:20px;
        }

        .stack{
            margin-top:30px;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
            gap:15px;
        }

        .tech{
            background:#1e293b;
            border:1px solid rgba(255,255,255,0.1);
            padding:12px 18px;
            border-radius:12px;
            font-size:14px;
        }

        .footer{
            margin-top:40px;
            color:#94a3b8;
            font-size:14px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="badge">
            🚀 Déploiement CI/CD Réussi
        </div>

        <h1>
            Laravel DevOps Project
        </h1>

        <p>
            Cette application Laravel a été déployée automatiquement
            sur un VPS public grâce à une pipeline CI/CD complète.
        </p>

        <p>
            Le workflow utilise GitHub Actions, Docker, Docker Hub
            et un serveur Linux Ubuntu hébergé sur Contabo.
        </p>

        <div class="stack">

            <div class="tech">Laravel</div>
            <div class="tech">Docker</div>
            <div class="tech">GitHub Actions</div>
            <div class="tech">CI/CD</div>
            <div class="tech">Ubuntu Server</div>
            <div class="tech">PostgreSQL</div>
            <div class="tech">Nginx</div>
            <div class="tech">DevOps</div>

        </div>

        <div class="footer">
            Projet DevOps — Déploiement Automatique en Production
        </div>

    </div>

</body>
</html>