<?php
  $championship = [
    [
      'Home' => 'Olimpia Milano',
      'Guest' => 'Cantu',
      'home_points' => '55',
      'guest_points' => '60'
    ],

    [
      'Home' => 'Maccabi Electra Tel Aviv',
      'Guest' => 'Panathīnaïkos',
      'home_points' => '86',
      'guest_points' => '72'
    ],

    [
      'Home' => 'Real Madrid',
      'Guest' => 'CSKA Moscow',
      'home_points' => '76',
      'guest_points' => '91'
    ],

  ];

  for ($i=0; $i < count($championship); $i++) {
   ?>

   <div class="">
     <?= $championship[$i]['Home']; ?> -
     <?= $championship[$i]['Guest']; ?> |
     <?= $championship[$i]['home_points']; ?> -
     <?= $championship[$i]['guest_points']; ?>
   </div>

<?php
} ?>
