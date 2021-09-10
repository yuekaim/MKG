<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="questions">
  <div class="question" id="question1">
    <br><?= page('home')->q1_de() ?><br><br><?= page('home')->q1_en() ?>
  </div>
</div>

<div class="comments">
  <?php snippet('komments/kommentform'); ?>
  <?php snippet('komments/webmention-splitted'); ?>
</div>


<?php snippet('footer') ?>
