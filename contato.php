<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Restaurante do Wellerson</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container my-5">
        <h1 class="text-center mb-4">📞 Fale Conosco</h1>
        <p class="text-center mb-5">
            Tem alguma dúvida, sugestão ou quer fazer uma reserva?  
            Envie uma mensagem para o <strong>Restaurante do Wellerson</strong> e retornaremos o quanto antes!
        </p>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem:</label>
                        <textarea class="form-control" id="mensagem" rows="4" placeholder="Escreva sua mensagem" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Enviar Mensagem</button>
                </form>
            </div>
        </div>

        <hr class="my-5">

        <div class="text-center">
            <h3>📍 Nosso Endereço</h3>
            <p>Rua dos Sabores, 123 - Açude - Volta Redonda, RJ</p>
            <p><strong>Telefone:</strong> (24) 99974-1056</p>
            <p><strong>E-mail:</strong> contato@restaurantewellerson.com</p>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Restaurante do Wellerson</p>
    </footer>
</body>
</html>
