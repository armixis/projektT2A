<?php $pageTitle = 'Košík | Čajový svět'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Header & Navigation -->
    <?php include 'partials/header.php'; ?>

    <div class="cart-container">
        <!-- Steps Indicator -->
        <div class="cart-steps">
            <div class="cart-step active">1. Košík</div>
            <div class="cart-step">2. Dodací údaje</div>
            <div class="cart-step">3. Doprava a platba</div>
            <div class="cart-step">4. Potvrzení</div>
        </div>

        <div class="cart-box">
            <h1>🛒 Tvůj výběr</h1>
            
            <div class="cart-items">
                <div class="cart-item">
                    <img src="assets/images/zeleny-a-jasmin.jpg" alt="Zelený & Jasmínový čaj">
                    <div class="item-info">
                        <span class="item-name"><strong>Zelený & Jasmínový čaj</strong></span>
                        <span class="item-variant">Varianta: 100g balení</span>
                    </div>
                    <div>
                        <input type="number" class="item-qty-input" value="1" min="1">
                    </div>
                    <span class="item-price">159 Kč</span>
                </div>
                
                <div class="cart-item">
                    <img src="assets/images/matcha.jpg" alt="Matcha čaj">
                    <div class="item-info">
                        <span class="item-name"><strong>Matcha čaj</strong></span>
                        <span class="item-variant">Varianta: Výběrová kvalita</span>
                    </div>
                    <div>
                        <input type="number" class="item-qty-input" value="2" min="1">
                    </div>
                    <span class="item-price">398 Kč</span>
                </div>
            </div>

            <div class="cart-total">
                <span>Celkem k úhradě:</span>
                <strong>557 Kč</strong>
            </div>

            <hr>

            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
                <a href="index.php" class="back-link" style="margin-top: 0;">← Zpět k výběru čajů</a>
                <a href="dodaci-udaje.php" class="order-btn" style="margin-top: 0; text-decoration: none;">Pokračovat k objednávce →</a>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    <?php include 'partials/footer.php'; ?>

</body>
</html>
