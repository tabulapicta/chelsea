 <div class="content-pane-wrapper <?php if($page->template() == 'exhibition'): ?>show<?php endif ?>">
 <section class="content-pane <?php if($page->template() == 'exhibition'): ?>show<?php endif ?>" style="<?php if($page->template() == 'exhibition'): ?><?php else: ?>display:none<?php endif ?>">
    <span class="content-pane-close">
       <svg class="close-icon" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22 0 L0 22" stroke="var(--home)" />
          <path d="M0 0 L22 22" stroke="var(--home)" />
       </svg>
    </span>
    <div class="content-pane-text" id="content-pane-text" >

   <?php if($page->template() == 'exhibition'): ?>
      <meta name="keywords" content="<?php if($page->template() == 'exhibition'): ?> <?= $page->author() ?>, <?= $page->venue() ?>, <?= $page->artists() ?>,<?php endif ?>">
      <div class="content-pane-text-outer" style="background-color:<?= $page->theme() ?>;color:<?= $page->font() ?>">
       <div class="content-pane-text-inner">
          <article>
             <div class="text-block" data-content-type="<?= $page->template() ?>" data-title="<?= $page->title() ?>" data-author="<?= $page->author() ?>">
             <!-- title -->
                <div class="title" >
                   <h1><?= $page->title() ?></h2>
                </div>
               <div class="info" style="border-bottom: 1px solid <?= $page->font() ?>; border-top: 1px solid <?= $page->font() ?>">
                  <div class="times">
                     <?php if($page->curator()->isNotEmpty()): ?>
                        <span>Curated by <span><?= $page->curator() ?></span></span>
                     <?php endif ?>
                     <br/>
                     <?php if($page->location()->isNotEmpty()): ?>
                        <span><?= $page->location() ?></span>
                     <?php endif ?>
                     <?php if($page->open()->isNotEmpty()): ?>
                        <span><?= $page->open()->toDate('d M') ?></span><?php endif ?><?php if($page->open()->isNotEmpty()): ?><span>—<?= $page->close()->toDate('d M Y') ?></span><?php endif ?> 
                  </div>
                  <br/>
                 <div class="artists">
                  <?php if($page->artists()->isNotEmpty()): ?><?= $page->artists() ?><?php endif ?>
                 </div>
               </div>
               <div class="carousel">
                     <!-- <?php if($image = $page->image()): ?>
                     <img src="<?= $image->url() ?>" alt="" srcset="<?= $image->srcset('default') ?>">
                     <?php endif ?> -->

                  <div class="embla">
                  <div class="embla__container">
                  <?php $images = $page->images()->sortBy('sort') ?>
                     <?php foreach($images as $image): ?>
                     <div class="embla__slide">
                        <img src="<?= $image->url() ?>" alt="" srcset="<?= $image->srcset('default') ?>">
                     </div>
                     <?php endforeach ?>
                  </div>
                  </div>
                   <!-- Dots -->
                  <div class="embla__dots"></div>
                  <script type="text/javascript">
                  var emblaNode = document.querySelector('.embla')
                  var options = { loop: true,  }

                  var embla = EmblaCarousel(emblaNode, options)
                  </script>
                        


               </div>
               <div class="content" >
                  <?= $page->text()->kirbyText() ?>
               </div>
               <div class="calendar" style="background-color: <?= $page->font() ?>; color: <?= $page->theme() ?>">
                  Add THE BODY SPEAKS BEFORE IT BEGINS TO TALK as an event reminder to your iCal
               </div>
               <div class="footer"></div>
             </div>
          </article>
       </div>
    </div>
   <?php endif ?>
 </section>

 </div>
