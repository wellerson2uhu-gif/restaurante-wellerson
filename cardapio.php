<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Restaurante do Wellerson</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container my-5">
        <h1 class="text-center mb-4">🍽️ Nosso Cardápio</h1>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1601924582971-dbb6cf01f8a0" class="card-img-top" alt="Prato 1">
                    <div class="card-body">
                        <h5 class="card-title">Feijoada Completa</h5>
                        <p class="card-text">Acompanha arroz, farofa, couve e laranja. R$ 29,90</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1606755962773-0b3a5dbf2b81" class="card-img-top" alt="Prato 2">
                    <div class="card-body">
                        <h5 class="card-title">Lasanha à Bolonhesa</h5>
                        <p class="card-text">Feita com massa fresca e molho artesanal. R$ 24,90</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1606756790138-60b6a4ef7a03" class="card-img-top" alt="Prato 3">
                    <div class="card-body">
                        <h5 class="card-title">Filé de Frango Grelhado</h5>
                        <p class="card-text">Acompanha arroz, feijão e salada. R$ 22,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Restaurante do Wellerson</p>
    </footer>
</body>
</html>
