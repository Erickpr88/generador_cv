<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Currículum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom Styles -->
    <style>
        :root {
            --primary-color: #2575fc;
            --secondary-color: #6a11cb;
            --light-color: #f8f9fa;
        }
        body {
            background-color: var(--light-color);
        }
        header {
            background: var(--primary-color);
            color: white;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
        }
        footer {
            background: var(--primary-color);
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="text-center py-5">
        <i class="fa fa-file-alt fa-5x mb-3"></i>
        <h1 class="animate__animated animate__fadeInDown">Generador de Currículum</h1>
        <p class="lead animate__animated animate__fadeInUp">Crea un currículum profesional en minutos.</p>
    </header>

 
        <!-- Cards for Login and Register -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-user-plus fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Curriculum</h5>
                        <p class="card-text">Generar tu currículum personalizado.</p>
                        <a href="{{ route('index') }}" class="btn btn-primary">Iniciar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5">
        <p>&copy; 2024 Generador de Currículum | Todos los derechos reservados</p>
        <div>
            <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
