
    <?php
    $nom_produit = 't-shirt simple';
    $couleur = 'blanc';
    $prix = '10,50';
    $disponible ='true';
    $quantité ='10';
    ?>

<h3>
        <?php
            $nom_produit = " t-shirt simple ";
            echo ' le nom du produit est ';
            echo$nom_produit;
            ?>


<?php 
$quantité = '10';
echo' il reste ';
echo$quantité;
echo ' produit en stock ';
?>

<?php
$couleur = ' blanc ';
echo ' le produit ';
echo $nom_produit;
echo ' la couleur est ';
echo $couleur . PHP_EOL ;
?>
</h3>

<h4>
    <?php
    $prix ='10,50';
    echo'Acheter 3 produits couterait '; 
    echo$prix+$prix+$prix;
    ?>

<?php 
$prix= ' 10,50 ';
echo ' acheter la totalité des produits disponible couterait '; 
echo $prix*$quantité;
?>
<?php
$prix='10,5';
echo ' si 3 produits sont vendus, il reste ';
echo $quantité-3 ;
echo ' produits en stock ' . PHP_EOL ;
?>
    </h4>

<?php
$disponible = 'true';
$quantité ='10';
$nom_produit = ' t-shirt simple ';

if($quantité > 0)
{ 
    echo ' le produit ';
    echo$nom_produit;
    echo 'est disponible en ligne ';
    $disponible = 'true';
 } 
else 
{ 
    echo ' le produit ';
    echo$nom_produit;
    echo " n'est plus disponible ";
    $disponible = 'false';
 } 
?>

<?php
$disponible = ' true ';
$quantité = ' 3 ';
$nom_produit = 't-shirt simple';

if ($quantité > 5)
{ 
    echo ' il reste ';
    echo $quantité;
    echo " en magasin";
} 

elseif ($quantité < 5 )
 { 
    echo " il n'en reste plus que   " ;
    echo$quantité;
    echo " en magasin ";
 } 

 elseif ($quantité = 1 )
  { 
echo " il reste plus qu'un produit en magasin.";
 } 

 elseif ($quantité = 0 )
 { 
echo " il nreste plus de produit en magasin.";
} 
?>

