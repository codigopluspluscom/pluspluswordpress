
<div class="sidebar">
        <a class="btn btn-social-icon btn-lg btn-github">
    <span class="fa fa-github"></span>
  </a>
        <a class="btn btn-social-icon btn-lg btn-pinterest">
    <span class="fa fa-youtube"></span>
  </a>
        <a class="btn btn-social-icon btn-lg btn-facebook">
    <span class="fa fa-facebook"></span>
  </a>
        <a class="btn btn-social-icon btn-lg btn-twitter">
    <span class="fa fa-twitter"></span>
  </a>
      <a class="btn btn-social-icon btn-lg btn-instagram">
    <span class="fa fa-instagram"></span>
  </a>
    <h2>Video Siguiente ></h2>
    <h3><?php next_post_link('%link','%title', TRUE); ?><br /></h3><?php $nextPost = get_next_post(true); $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(250,250) ); echo $nextthumbnail; ?>
    <br />
    <h2> < Video anterior</h2>
    <?php previous_post_link( '%link' ); ?><br />
<?php $prevPost = get_previous_post(true); $prevThumbnail = get_the_post_thumbnail($prevPost->ID, array(250,250) ); echo $nextthumbnail; ?>
<ul><!-- open whole list -->
<li>Title of Section One
     <ul>
      <li>Apple</li>
      <li>Orange</li>
      <li>Banana</li>
     </ul>
</li><!-- closing list under section one -->
<li>Title of Section Two
     <ul>
      <li>Beef</li>
      <li>Chicken</li>
      <li>Fish</li>
     </ul>
</li><!-- closing list under section two -->
<li>Title of Section Three
     <ul>
      <li>Carrot</li>
      <li>Celery</li>
     </ul>
</li><!-- closing list under section three -->
</ul><!-- closing whole list -->
</div>