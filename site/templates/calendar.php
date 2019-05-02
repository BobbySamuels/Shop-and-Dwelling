<?php snippet('header') ?>

<?php if($events->count() > 0): ?>
  <div id="calendar"></div>

    <!-- <ul class="events">
    <?php foreach($events as $event): ?>
        <li class="single-event">
            <h3><?php echo $event->title() ?></h3>
            <time><?php echo $event->date('d.m.Y') ?></time>
            <?php echo $event->text()->kirbytext() ?>
        </li>
    <?php endforeach; ?>
    </ul> -->

<?php else: ?>
    <p>No events found.</p>
<?php endif; ?>

<?php snippet('footer') ?>
