<?php
  // Array
  $someArray = [
    [
      "user_id"   => "1ab",
      "lat" => "12.985387",
      "lng" => "77.483001"
    ],
    [
      "user_id"   => "2ab",
      "lat" => "12.984927",
      "lng" => "77.483634"
    ]
  ];

  // Convert Array to JSON String
  $someJSON = json_encode($someArray);
  echo $someJSON;
?>




