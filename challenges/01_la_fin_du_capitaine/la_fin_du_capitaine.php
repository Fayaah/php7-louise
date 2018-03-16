<?php
$captain = [
    "age" => 23,
    "name" => "Jack Sparrow",
    "is_dead" => true,
    "famous_last_words" => "Aaaaargh...",
];

if($captain["is_dead"] == true) {
    print "Le capitaine " . $captain["name"];
    print " est mort à l'âge de " . $captain["age"]. " ans.\n";
    print "Ses derniers mots étaient " . $captain["famous_last_words"]. " \n";
}

?>
