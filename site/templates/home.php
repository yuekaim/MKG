<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('circle') ?>



<!-- below is info and questions -->

<div class="info">
    <div class="about_de">
      <?= $page->about_de() ?>
    </div>
    <!-- <div class="info_de">
      <?= $page->info_de() ?>
    </div> -->

    <div class="about_en">
      <?= $page->about_en() ?>
    </div>
    <!-- <div class="info_en">
      <?= $page->info_en() ?>
    </div> -->

</div>

<div class="questions">
  <a class="arrow-link" href="1"><div class="question" id="question1">
    1.<br><br><?= $page->q1_de() ?><br><br><?= $page->q1_en() ?>
  </div></a>
  <a class="arrow-link" href="2"><div class="question" id="question2">
    2.<br><br><?= $page->q2_de() ?><br><br><?= $page->q2_en() ?>
  </div></a>
  <a class="arrow-link" href="3"><div class="question" id="question3">
    3.<br><br><?= $page->q3_de() ?><br><br><?= $page->q3_en() ?>
  </div></a>
  <a class="arrow-link" href="4"><div class="question" id="question4">
    4.<br><br><?= $page->q4_de() ?><br><br><?= $page->q4_en() ?>
  </div></a>
  <a class="arrow-link" href="5"><div class="question" id="question5">
    5.<br><br><?= $page->q5_de() ?><br><br><?= $page->q5_en() ?>
  </div></a>

</div>

<?php snippet('footer') ?>
