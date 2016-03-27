<?php
$title = __('Browse Items by Subject');
echo head(array(
    'title' => $title,
    'bodyclass' => 'reference browse list',
)); ?>
<div id="primary" class="reference">
    <h1><?php echo __('Browse Items By Subject (%d Headings)', count($subjects)); ?></h1>
    <nav class="items-nav navigation secondary-nav">
        <?php echo public_nav_items(); ?>
    </nav>
    <?php
    if (count($subjects)) :
        echo $this->reference($subjects, array('mode' => 'list'));
    else:
        echo '<p>' . __('There is no subjects.') . '</p>';
    endif;
    ?>
</div>
<?php echo foot();
