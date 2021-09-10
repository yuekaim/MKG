<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="questions">
  <?php $question = $page->title() ?>
  <?php switch($question):
    case "1": ?>
      <div class="question question_page" id="question1">
        <br><?= page('home')->q1_de() ?><br><br><?= page('home')->q1_en() ?>
      </div>
    <?php break; ?>
    <?php case "2": ?>
      <div class="question question_page" id="question2">
        <br><?= page('home')->q2_de() ?><br><br><?= page('home')->q2_en() ?>
      </div>
    <?php break; ?>
    <?php case "3": ?>
      <div class="question question_page" id="question3">
        <br><?= page('home')->q3_de() ?><br><br><?= page('home')->q3_en() ?>
      </div>
    <?php break; ?>
    <?php case "4": ?>
      <div class="question question_page" id="question4">
        <br><?= page('home')->q4_de() ?><br><br><?= page('home')->q4_en() ?>
      </div>
    <?php break; ?>
    <?php case "5": ?>
      <div class="question question_page" id="question5">
        <br><?= page('home')->q5_de() ?><br><br><?= page('home')->q5_en() ?>
      </div>
    <?php break; ?>
  <?php endswitch; ?>
</div>

<div id="answer">
  submit answer
</div>

<div id="commentform">
  <?php snippet('komments/kommentform'); ?>
  <div id="commentform_bg"></div>
</div>


<div class="comments">
  <?php snippet('komments/webmention-splitted'); ?>
</div>


<?php snippet('footer') ?>
