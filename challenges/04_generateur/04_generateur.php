<?php

$phrase = [
    'adjectif' => ['petit(e)', 'grand(e)', 'beau/belle', 'mignon(ne)', 'adorable', 'gentil(le)', 'amical(e)', 'heureux(se)', 'sympathique', 'épatant(e)', 'fort(e)', 'bon(ne)', 'poli(e)', 'sociable'],
    'name' => ['chat', 'développeur', 'professeur', 'ami', 'castor', 'girafe','ananas', 'kiwi', 'lavabo', 'licorne', 'koala'],
    'color' => ['rouge', 'orange', 'jaune', 'vert', 'bleu', 'violet', 'bordeaux', 'à pois', 'à rayures', 'tacheté'],
];

$adjectif = mt_rand(0, count($phrase['adjectif']) - 1);
$name = mt_rand(0, count($phrase['name']) - 1);
$color = mt_rand(0, count($phrase['color']) - 1);

print 'Tu es un(e) ' . $phrase['adjectif'][$adjectif] . ' ' . $phrase['name'][$name] . ' ' . $phrase['color'][$color] . " et je t'aime ! ❤️ \n";
?>
