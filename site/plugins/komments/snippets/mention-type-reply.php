<div <?php if($komment['authorurl'] !== "") echo  "class='linked-komment'"; ?>>
  <li class="single-komment komment-type-<?php echo strtolower($komment['kommenttype']); ?> <?php echo ($komment['verified'] == 'true') ? 'verified' : ''?> <?php if ($komment['imgUrl'] !== "") echo "komment-with-img" ?>" id="komment_<?php echo $komment['id']; ?>">
      <!-- <div class="type-of"><?php echo option('mauricerenck.komments.komment-icon-reply'); ?></div> -->
      <!-- <div class="author-avatar">
          <a href="<?php echo $komment['authorurl']; ?>" rel="nofollow" target="_blank">
              <img src="<?php echo $komment['avatar']; ?>" alt="<?php echo $komment['author']; ?>">
          </a>
      </div> -->
      <!-- <div class="author-action">
          <?php if ($komment['verified'] == 'true') : ?><span class="verified-badge"><?php echo option('mauricerenck.komments.komment-icon-verified', '✅'); ?></span><?php endif; ?>

          <?php echo t('mauricerenck.komments.replied'); ?>
      </div> -->
      <div class="mention-content">
          <?php if ($komment['quote']->quote()->isNotEmpty()): ?>
              <div class="quote"><p><?php echo $komment['quote']->quote()->html(); ?></p></div>
          <?php endif; ?>
          <?php if ($komment['komment']->komment()->isNotEmpty()): ?>
              <div class="komment-text">
                  <?php echo $komment['komment']->komment()->kirbytext(); ?>
                  <?php if($komment['authorurl'] !== "") echo "<a href='" . $komment['authorurl'] . "' target='_blank'>" . $komment['authorurl'] . "</a>"; ?>
                  <br><br>
                  <?php echo $komment['author']; ?> <?php echo $komment['author_age']; ?><br>

                  <span class="date" style="font-size: 0.6em"><?php echo $komment['published']->published()->toDate('d.m.Y'); ?></span>
              </div>
          <?php endif; ?>
          <!-- <a href="#kommentform" class="kommentReply <?php echo option('mauricerenck.komments.replyClassNames'); ?>" data-id="<?php echo $komment['id']; ?>" data-handle="<?php echo $komment['author']; ?>"><?php echo t('mauricerenck.komments.action.reply.text'); ?></a> -->
      </div>

      <div class="img-container" style="z-index: 3000;">
        <img src="<?php echo $komment['imgUrl'] ?>" alt="">
      </div>

  </li>
</div>
