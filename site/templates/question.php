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
  <path d="M179.978 64.6807C151.91 64.6807 173.312 5.49702 105.246 5.49702C77.1775 12.1508 105.246 76.5875 105.246 102.502C105.246 128.417 3.49776 87.4437 1.04177 117.561C-1.41422 147.678 105.246 151.18 105.246 159.935C105.246 168.69 5.6029 236.629 12.9709 259.392C20.3388 282.155 105.246 207.562 140.682 211.764C176.119 215.967 155.067 362 179.978 362C204.889 362 189.451 246.434 212.257 236.629C235.062 226.823 305.584 333.984 325.934 327.33C346.284 320.676 288.042 255.89 283.831 226.823C279.621 197.756 368.037 187.951 362.774 159.935C357.511 131.919 295.76 209.663 268.745 151.18C241.729 92.6967 294.708 30.011 268.745 5.49702C242.781 -19.0169 208.047 64.6807 179.978 64.6807Z" fill="black" stroke="white"/>
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
