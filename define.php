<?php

  // This function grabs the definition of a word in JSON format.
  function grab_json_definition ($word, $ref, $key) {
    $uri = "https://dictionaryapi.com/api/v3/references/" . urlencode($ref) . "/json/" . urlencode($word) . "?key=" . urlencode($key);

    return file_get_contents($uri);
  };

  $jdef = grab_json_definition("test", "collegiate", "2959f990-5165-4a8c-808c-6cd30c1cd31c");

?>
