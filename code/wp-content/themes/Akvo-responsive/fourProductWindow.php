<?php
	/*
		Template Name: fourProductWindow
	*/
?>

<section id="productWindow" class="floats-in">
  <div class="fourColumns wrapper">
    <div id="rsrBucket"> <a href="http://akvo.org/products/rsr/" class="tagLine"> <img src="<?php the_field('rsr_bucket_text'); ?>" title="rsrImg" /> </a> <a href="http://akvo.org/products/rsr/" class="moreLink">find out more</a>
      <hgroup> <a href="http://akvo.org/products/rsr/">
        <h1>Akvo RSR</h1>
        </a>
        <h2>
          <?php the_field('rsr_bucket_sub'); ?>
        </h2>
      </hgroup>
    </div>
    <div id="flowBucket"> <a href="http://akvo.org/products/akvoflow/" class="tagLine"><img src="<?php the_field('flow_bucket_text'); ?>" title="flowImg" /> </a> <a href="http://akvo.org/products/akvoflow/" class="moreLink">find out more</a>
      <hgroup> <a href="http://akvo.org/products/akvoflow/">
        <h1>Akvo Flow</h1>
        </a>
        <h2>
          <?php the_field('flow_bucket_sub'); ?>
        </h2>
      </hgroup>
    </div>
    <div id="openaidBucket"> <a href="http://akvo.org/products/akvoopenaid/" class="tagLine"> <img src="<?php the_field('openaid_bucket_text'); ?>" title="openaidImg" /> </a> <a href="http://akvo.org/products/akvoopenaid/" class="moreLink">find out more</a>
      <hgroup> <a href="http://akvo.org/products/akvoopenaid/">
        <h1>Akvo OpenAid</h1>
        </a>
        <h2>
          <?php the_field('openaid_bucket_sub'); ?>
        </h2>
      </hgroup>
    </div>
    <div id="akvopedia"> <a href="http://akvopedia.org/" class="tagLine"> <img src="<?php the_field('akvopedia_bucket_text'); ?>" title="akvopediaImg" /> </a> <a href="http://akvopedia.org/" class="moreLink">find out more</a>
      <hgroup> <a href="http://akvopedia.org/">
        <h1>Akvopedia</h1>
        </a>
        <h2>
          <?php the_field('akvopedia_bucket_sub'); ?>
        </h2>
      </hgroup>
    </div>
  </div>
</section>