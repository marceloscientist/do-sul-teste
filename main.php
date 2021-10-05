<?php
function cakes($recipe, $ingredients){
  if(count($recipe) > count($ingredients)) {
    return 0;
  }

  $temp = PHP_INT_MAX;
  foreach($recipe as $k_r => $v_r) {
    foreach($ingredients as $k_i => $v_i)
      if($k_r == $k_i) {
        $proportion = floor($v_i/$v_r);
        $smallest = min($proportion, $temp);
        $temp = $smallest;
      }
  }
  return (int) $smallest;
}


/*--------- NÃO ALTERAR A PARTIR DAQUI ---------*/
/*
  Pete gosta de fazer bolos. Ele tem algumas receitas e ingredientes, mas é péssimo em matemática. Você pode ajudá-lo?

  O primeiro parâmetro é a receita para um (1) bolo
  O segundo parâmetro é a quantidade de ingredientes que ele tem disponível
  Você consegue retornar quantos bolos(inteiros) ele pode fazer?

  Abaixo estão os casos de uso:
*/
var_dump(cakes(
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
  ['flour' => 1200, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) === 2 
  );

var_dump(cakes(
  ['apples' => 3, 'flour' => 300, 'sugar' => 150, 'milk' => 100, 'oil' => 100], ['sugar' => 500, 'flour' => 2000, 'milk' => 2000]) === 0
  );

var_dump(cakes(
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
  ['flour' => 1500, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) === 3
  ); 