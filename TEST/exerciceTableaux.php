<?php

$films = [
 [
     'name' => 'Kiss Kiss Bang Bang',
     'actor' => 'Robert Downey Jr',
 ],
 [
     'name' => 'Men In Black',
     'actor' => ['Tommy Lee Jones', 'Will Smith'],
 ],
];
    unset($films[1]['actor'][1]);
    $films[1]['actor'][] = 'Shakira';
    var_dump($films);


?>
