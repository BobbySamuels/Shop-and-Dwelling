<?php
date_default_timezone_set('Australia/Melbourne');
echo page('calendar')->children()->visible()->flip()->feed(array(
    'title'       => $page->title(),
    'time'        => $page->time(),
    'description' => $page->text(),
    'link'        => 'calendar',
));
?>
