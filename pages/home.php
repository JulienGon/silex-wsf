<?php
$data = array();

$data['articles'] = $app['sql']->query('SELECT * FROM articles'); 

return $app['twig']->render('home.twig', $data);

