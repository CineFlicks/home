<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Películas y Series</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        
        h1 {
            margin: 0;
        }
        
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        .movie {
            display: flex;
            margin: 10px;
        }
        
        .movie img {
            width: 150px;
            height: 225px;
            margin-right: 20px;
        }
        
        .movie-info {
            flex: 1;
        }
        
        .movie-info h2 {
            font-size: 20px;
        }
        
        .action-buttons {
            margin-top: 10px;
        }
        
        .action-buttons button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 5px 10px;
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Películas y Series</h1>
    </header>

    <div class="container">
        <div class="movie">
            <img src="movie1.jpg" alt="Película 1">
            <div class="movie-info">
                <h2>Película 1</h2>
                <p>Descripción de la película 1.</p>
                <div class="action-buttons">
                    <button>Ver Detalles</button>
                    <button>Reproducir</button>
                </div>
            </div>
        </div>

        <div class="movie">
            <img src="movie2.jpg" alt="Película 2">
            <div class="movie-info">
                <h2>Película 2</h2>
                <p>Descripción de la película 2.</p>
                <div class="action-buttons">
                    <button>Ver Detalles</button>
                    <button>Reproducir</button>
                </div>
            </div>
        </div>
        
        <!-- Puedes agregar más películas y series aquí -->
    </div>
</body>
</html>
