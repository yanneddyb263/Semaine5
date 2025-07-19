<?php
$produits = array( 
  'tomates'=> 15,
  'piments' => 20,
  'poivres' => 6,
  'poivrons'=> 19,
  'épices' => 8   
);
function mettreAjourStocks($produits, $produit, $kantité)
{
     if (array_key_exists($produit, $produits))
     {
        $produits[$produit] += $kantité;
     }
     else{
        echo "Ce produit n'existe pas dans votre stoks";
     }
     foreach ($produits as $produit => $kantité){
        echo "$produit : $kantité <br>";
     }
}
$inv = mettreAjourStocks($produits, 'tomates', 5);
echo $inv;
