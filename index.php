<?php

include("lib/Auto.php");
include("lib/AutoOverzicht.php");



$ao = new AutoOverzicht();
$ao->add(new Auto("BMW", "318i", "4590", "rood", "cars/bmw-318-l-04.jpg"));
$ao->add(new Auto("Audi", "A8", "34666", "champagne", "cars/laatste-audi-a8-twaalfcilinder-2020-970-9.jpg"));
$ao->add(new Auto("Audi", "A3", "7888", "groen", "cars/audiuk00018591.jpg"));
$ao->add(new Auto("Audi", "A1", "12355", "blauw", "cars/2109-audi-a1-sportback-04.webp"));
$ao->add(new Auto("Ferrari", "GTS", "102435", "rood", "cars/ue0yoi1bcv9k_800.jpg"));
$ao->add(new Auto("Ferrari", "Enzo", "98955", "rood", "cars/1280px-Orange_Enzo_Ferrari_(7191948164).jpg"));
$ao->add(new Auto("Ferrari", "Testarossa", "133299", "rood", "cars/1991_Ferrari_Testarossa_4.9.jpg"));
$ao->add(new Auto("Fiat", "500", "11288", "wit", "!cars/elektrische-fiat-500-wordt-in-2020-geintroduceerd.webp"));
$ao->add(new Auto("Fiat", "Punto", "12388", "blauw", "cars/m1by0m4bbwiv.jpg"));
$ao->add(new Auto("Ford", "Fiesta", "7888", "wit", "cars/ford-fiesta-2022-specs-01.jpg"));
$ao->add(new Auto("Ford", "focus", "34566", "wit", "cars/original.webp"));

if(isset($_POST['submit'])) {
    $autos = $ao->filterByMerk($_POST['merk']);
} else {
    $autos = $ao->autos;
}
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auto Bedrijf</title>
    <link rel="stylesheet" href="auto.css">
    <header>
        <nav>
            <a href="index.php" class="logo"><h2>Mr.Wheeler</h2></a>
            <a href="about.php">about us</a>
        </nav>
    </header>
</head>
<body>

<br></br>

<div class="Auto">
    <form action="index.php" method="post">
        <select name="merk">
            <option value="alle">Alle</option>
            <?php foreach($ao->getMerken() as $merk) { ?>
                <option><?= $merk ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="submit">
    </form>
    <table>
        <?php foreach ($autos as $auto) { ?>
            <tr>
                <td><?= $auto->merk ?></td>
                <td><?= $auto->type ?></td>
                <td><?= $auto->kleur ?></td>
                <td><?= $auto->prijs ?></td>
                <td><?= $auto->image?></td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>