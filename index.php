<?php
$title = 'Exercice3';
$age = 16;
$gender = 'Homme'
?>

<? include 'header.php';?>
<?php
if ($age >=18 && $gender == 'Homme')
{
    echo 'Vous etes un homme et vous etes majeur';
}
else if ($age >=18 && $gender == 'Femme')
{
    echo 'Vous etes une femme et vous etes majeure';
}
else if ($age <=18 && $gender == 'Homme')
{
    echo 'Vous etes un homme et vous etes mineur';
}
else if ($age <=18 && $gender == 'Femme')
{
    echo 'Vous etes une femme et vous etes mineur';
}
?>
<?include 'footer.php';?>