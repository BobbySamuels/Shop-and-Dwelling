<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <?php $page_date = $page->event() ?>
      <h2><?= $page_date ?><br><?= $page->starttime()->html() ?>–<?= $page->endtime()->html() ?></h2>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>
