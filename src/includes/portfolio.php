<?php

/**
 * Build array of portfolio items.
 *
 * @return array[]
 *   The portfolio items.
 */
function portfolio_items(): array {
  $items = [
    [
      'title'       => 'Swarco E.Connect',
      'key'         => 'se',
      'description' => <<<EOT
<p>A Drupal 8 site using to manage electric car charging sessions with many APIs.</p>
<p>I was responsible for:</p>
<ul class="list">
  <li>Building a fault ticket management system.</li>
  <li>Extending and maintaining the rest of the site.</li>
  <li>Setting an ELK stack to allow super fast access, reporting and alleviating load from the main system.</li>
</ul>
EOT,
      'image'       => 'econnect',
      'image2'      => 'econnect2',
      'link'        => 'https://account.swarcoeconnect.org/',
      'tags'        => [
        'Drupal 8',
        ['ELK', 'Elastic search and Kibana'],
        ['APIs', 'Many many APIs!'],
      ],
    ],
    [
      'title'       => 'Zoos Victoria',
      'key'         => 'zv',
      'description' => <<<EOT

<p>This is a Drupal 7 multisite with five different frontends: Main Site, Members, Tickets, Donate and Shop.</p>
<p>The main challenges I've been involved with were:</p>
<ul class="list">
<li>Changing the ticketing system backend API to a new vendor. This meant re-writing most of the backend of the members site.</li>
<li>Maintaining the main site as it's a long running project and has seen many different developers work on it over the years.</li>
<li>Managing and organising shared resources across so many different themes and front-ends.</li>
</ul>

EOT,
      'image'       => 'zoos-victoria',
      'image2'      => 'zoos-victoria2',
      'link'        => 'https://www.zoo.org.au/',
      'tags'        => ['Drupal 7', 'E-commerce'],
    ],
    [
      'title'       => 'Taronga Zoo Shop',
      'key'         => 'tzs',
      'description' => <<<EOT
<p>This is a Drupal 7 commerce site using the Drupal Commerce module.</p>
<p>This site integrates with the shop backend system using a Jitterbit API. This API is used to populate and update the products and also every time a sale is completed.</p>
<p>It also integrates with the payment gateway Securepay using a module I wrote.</p>
<p>I build the backend of this site and also helped with the frontend.</p>
EOT,
      'image'       => 'taronga',
      'image2'      => 'taronga2',
      'link'        => 'https://zooshop.taronga.org.au/',
      'tags'        => ['Drupal 7', 'E-commerce'],
    ],
    [
      'title'       => 'Australian Print Workshop',
      'key'         => 'apw',
      'description' => <<<EOT
<p>Drupal 7 e-commerce site using Drupal Commerce.</p>
<p>I was the lead developer responsible for the whole backend.</p>
<p>We came up with the idea to use a mapping plugin to provide high resolution zoomable images which worked really well.</p>
EOT,
      'image'       => 'australian-print-workshop',
      'image2'      => 'australian-print-workshop2',
      'link'        => 'https://www.australianprintworkshop.com/',
      'tags'        => ['Drupal 7', 'E-commerce'],
    ],
    [
      'title'       => 'SQLServerCentral',
      'key'         => 'sqlsc',
      'description' => <<<EOT
<p>A Wordpress site build with a MSSQL backend and a very active forum with over 20,000 users.</p>
<p>Using an MSSQL backend proved to be a challenge due to compatibility issues with WP core and third party plugins but found solutions too all these issues.</p>
EOT,
      'image'       => 'sql-server-central',
      'image2'      => 'sql-server-central2',
      'link'        => 'https://www.sqlservercentral.com/',
      'tags'        => ['Wordpress', 'MSSQL'],
    ],
  ];

  foreach ($items as &$item) {
    [
      $width,
      $height,
    ] = getimagesize('www/src/img/portfolio/smaller/' . $item['image'] . '.jpg');
    $item['image_w'] = $width;
    $item['image_h'] = $height;
    [
      $width,
      $height,
    ] = getimagesize('www/src/img/portfolio/smaller/' . $item['image2'] . '.jpg');
    $item['image2_w'] = $width;
    $item['image2_h'] = $height;
  }

  return $items;
}

/**
 * Calculate image height.
 *
 * @param string $path
 *   The image path.
 *
 * @return int|null
 *   The image height or null on failure.
 */
function image_height(string $path): ?int {
  [$width, $height] = getimagesize($path);
  return $height ?? NULL;
}
