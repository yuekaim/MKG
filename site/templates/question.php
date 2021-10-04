<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('circle') ?>


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


  <svg width="364" height="363" viewBox="0 0 364 363" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M140.957 14C124.957 14 124.957 1.00024 87.9572 1C56.9574 0.999746 40.6096 24.5884 40.6096 50.5031C40.6096 76.4179 5.41338 68.8828 2.95739 99C0.501399 129.117 -2.04275 142 11.4573 149C19.2296 153.03 33.2416 164.24 40.6096 187.003C47.9775 209.766 31.0209 222.798 66.4573 227C101.894 231.202 100.047 227 124.957 227C149.868 227 178.304 251.809 201.11 242.003C223.915 232.198 202.608 214.48 222.957 207.826C243.307 201.172 246.652 200.685 256.457 173C264.957 149 255.117 148.516 249.854 120.5C244.591 92.484 268.854 95.0001 249.854 65.5C230.854 35.9999 223.042 26.1279 189.457 14C153.457 1 169.026 14 140.957 14Z" fill="black" stroke="white"/>
  </svg>
  <div id="answer_text">submit answer</div>
</div>


<div id="commentform">
  <?php snippet('komments/kommentform'); ?>
  <div id="commentform_bg"></div>
</div>

<div class="comments">
  <?php snippet('komments/webmention-splitted'); ?>
</div>


<?php snippet('footer') ?>
