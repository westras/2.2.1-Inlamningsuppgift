<?php
if (isset($_POST['namn']) && isset($_POST['alder'])) {
    $namn = htmlspecialchars($_POST['namn']);
    $alder = intval($_POST['alder']);
    
    if ($alder < 18) {
        $message = "Hej $namn! Du är för ung för att använda den här webbplatsen.";
    } else {
        $message = "Hej $namn! Välkommen till vår webbplats.";
    }
} else {
    $message = "";
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="result-box">
        <?php if ($message): ?>
            <p><?php echo $message; ?></p>
            <div class="back-link">
                <a href="index.html">Tillbaka till Början</a>
            </div>
        <?php else: ?>
            <p>Ingen data mottagen. Vänligen fyll i formuläret.</p>
            <div class="back-link">
                <a href="index.html">Gå till formuläret</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
