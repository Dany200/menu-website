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

// Current year for footer
$currentYear = date('Y');
?>