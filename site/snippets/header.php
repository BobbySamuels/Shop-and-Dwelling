<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/index.css') ?>

  <?php
echo js(array(
    'assets/js/jquery-3.3.1.min.js',
    'assets/js/moment.min.js',
    'assets/js/fullcalendar.min.js',
    'assets/js/calendar.js'
));
echo css('assets/css/fullcalendar.min.css');
?>

</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="grid">

      <div class="branding column">
        <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
      </div>

      <?php snippet('menu') ?>

    </div>
  </header>
