<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Encurtador de Links</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f0f2f5; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card { border: none; border-radius: 15px; }
    </style>"
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="card shadow-lg p-5 text-center">
                    <h1 class="mb-4">✂️ Encurtador</h1>
                    
                    <form action="processar.php" method="POST">
                        <div class="input-group input-group-lg mb-3">
                            <input type="url" name="url_original" class="form-control" placeholder="Cole seu link gigante aqui..." required>
                            <button class="btn btn-primary" type="submit">Encurtar</button>
                        </div>
                    </form>

                    <?php if(isset($_GET['codigo'])): ?>
                        <div class="alert alert-success mt-4">
                            Seu link curto: <br>
                            <a href="http://localhost/encurtador/r.php?c=<?= $_GET['codigo']; ?>" target="_blank" class="fw-bold fs-5">
                                localhost/encurtador/r.php?c=<?= $_GET['codigo']; ?>
                            </a>
                        </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</body>
</html>