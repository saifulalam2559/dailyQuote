<?php

$quotes = [
    "Believe in yourself and all that you are.",
    "Small daily improvements lead to big results.",
    "Your only limit is your mindset.",
    "Consistency beats motivation.",
    "Dream it. Plan it. Do it."
];

// Select random quote
$dailyQuote = $quotes[array_rand($quotes)];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daily Inspiration</title>
</head>
<body>

<h2>💡 Daily Inspirational Quote</h2>
<p><?= htmlspecialchars($dailyQuote) ?></p>

</body>
</html>
