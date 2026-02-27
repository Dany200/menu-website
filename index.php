<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>🍽️ Delicious Bites</h1>
        <p>Fresh food, great taste</p>
    </header>

    <main>
        <?php
        // Menu data - you can easily add more items here
        $menuCategories = [
            "Appetizers" => [
                ["name" => "Garlic Bread", "price" => 5.99, "desc" => "Crispy bread with garlic butter and herbs"],
                ["name" => "Caesar Salad", "price" => 8.99, "desc" => "Fresh romaine with croutons and parmesan"],
                ["name" => "Mozzarella Sticks", "price" => 7.99, "desc" => "Golden fried with marinara sauce"]
            ],
            "Main Courses" => [
                ["name" => "Grilled Chicken", "price" => 14.99, "desc" => "Marinated chicken with roasted vegetables"],
                ["name" => "Beef Burger", "price" => 12.99, "desc" => "Juicy patty with cheese and fresh toppings"],
                ["name" => "Pasta Alfredo", "price" => 13.99, "desc" => "Creamy fettuccine with parmesan sauce"]
            ],
            "Desserts" => [
                ["name" => "Chocolate Cake", "price" => 6.99, "desc" => "Rich and moist with ganache topping"],
                ["name" => "Ice Cream", "price" => 4.99, "desc" => "Three scoops - vanilla, chocolate, strawberry"]
            ],
            "Drinks" => [
                ["name" => "Fresh Lemonade", "price" => 3.99, "desc" => "Squeezed daily, served ice cold"],
                ["name" => "Iced Coffee", "price" => 4.49, "desc" => "Cold brew with your choice of milk"],
                ["name" => "Soda", "price" => 2.99, "desc" => "Coke, Sprite, or Fanta"]
            ]
        ];

        // Loop through each category
        foreach ($menuCategories as $category => $items): ?>
            <section class="menu-section">
                <h2><?php echo $category; ?></h2>
                <div class="menu-items">
                    <?php foreach ($items as $item): ?>
                        <div class="menu-item">
                            <div class="item-header">
                                <span class="item-name"><?php echo $item['name']; ?></span>
                                <span class="item-price">$<?php echo number_format($item['price'], 2); ?></span>
                            </div>
                            <p class="item-desc"><?php echo $item['desc']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Delicious Bites. All rights reserved.</p>
    </footer>
</body>
</html>
