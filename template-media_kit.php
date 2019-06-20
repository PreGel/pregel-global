<?php
/*
Template Name: Media Kit (No Sidebar)
*/
?>
<?php get_header(); ?>

<div id="content">
	<div class="row expanded lt-gray">
		<div class="column">
			   <?php the_field('top_banner'); ?>	
		</div>
	</div>
	<div class="row">
		<div class="column">
			   <h1><?php the_title(); ?></h1>
			   <p><?php the_field('intro_text'); ?></p>
		</div>
	</div>
	
	<div id="inner-content" class="row">
		<!-- start january card --> 
		<?php if (get_field('display_jan') == 'yes'): ?>
		<div class="large-6 small-12 columns">
			<div class="card-profile-stats">
				<div class="card-profile-stats-intro">
					<img class="card-profile-stats-intro-pic hide-for-small-only" src="<?php the_field('january_month_feature_image'); ?>" alt="month-image" />
					<div class="card-profile-stats-intro-content">
						<h2>January</h2>
						<p><?php the_field('january_month_feature_title'); ?></p>
					</div> <!-- /.card-profile-stats-intro-content -->
				</div> <!-- /.card-profile-stats-intro -->
				<hr />
				<div class="card-profile-stats-more">
					<p class="card-profile-stats-more-link panel-closed"><a class="button large" href="#"> See the Holidays! </a></p>
					<div class="card-profile-stats-more-content">
						<?php while( have_rows('january_holidays') ): the_row(); ?>
						<div class="row">
							<div class="large-9 columns">
							<h4><?php the_sub_field('date'); ?></h4>
							<p><strong><?php the_sub_field('name'); ?></strong></p>
						</div>
						<div class="large-3 columns">
							<a class="button hollow" href="<?php the_sub_field('recipes_link'); ?>" target="blank" >Recipe Inspiration</a>
						</div>
						</div>
						<hr />
					<?php endwhile; ?>
				</div> <!-- /.card-profile-stats-more-content -->
			</div> <!-- /.card-profile-stats-more -->
		</div> <!-- /.card-profile-stats -->
	</div>
<?php endif; ?>
<!-- end january card -->


<!-- start tabs -->
<div class="md-tabs">
  <div class="mobile-nav-bar title-bar">
    <div class="title-bar-left">
      <button class="menu-icon" type="button"></button>
    </div>
    <div class="title-bar-center">
      <span class="title-bar-text">Material Design Tabs</span>
    </div>
    <div class="title-bar-right">
      <button class="menu-icon" type="button"></button>
    </div>
  </div>

  <ul class="tabs" data-responsive-accordion-tabs="tabs small-accordion medium-tabs large-tabs" id="collapsing-tabs" data-allow-all-closed="true" data-multi-expand="true">
    <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Tab 1</a></li>
    <li class="tabs-title"><a href="#panel2c">Tab 2</a></li>
    <li class="tabs-title"><a href="#panel3c">Tab 3</a></li>
    <li class="tabs-title"><a href="#panel4c">Tab 4</a></li>
    <div class="slide"></div>
  </ul>

  <div class="tabs-content" data-tabs-content="collapsing-tabs">
    <div class="tabs-panel is-active" id="panel1c">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet pulvinar enim. Donec mattis metus a hendrerit aliquam. Nulla facilisi. Etiam facilisis, nisi eu varius gravida, tellus odio blandit mauris, et egestas neque sapien sit amet massa.
        Morbi ullamcorper, metus nec dictum faucibus, mauris dolor semper purus, quis tincidunt sapien nibh ut tellus. Suspendisse at lectus ac dolor commodo malesuada in non elit. Donec nibh nulla, vehicula a quam quis, luctus interdum est.
      </p>
    </div>
    <div class="tabs-panel" id="panel2c">
      <p>Nunc ipsum massa, venenatis sed fringilla ut, elementum eu sapien. In eget dolor volutpat, fringilla metus et, dignissim lectus. Proin interdum sit amet odio ut varius. Nam id quam lacus. Aenean et tellus a sapien pulvinar sollicitudin. Mauris posuere
        tellus urna, non fermentum urna scelerisque in. Nulla scelerisque est leo, non tempus purus laoreet in. Aliquam erat volutpat. Nunc nulla eros, blandit quis nunc vel, luctus fermentum nisi. Phasellus ullamcorper gravida facilisis.</p>
    </div>
    <div class="tabs-panel" id="panel3c">
      <p>Donec ornare, ex quis volutpat vulputate, dui eros fermentum tellus, id eleifend velit diam non leo. Aliquam convallis vestibulum elementum. Phasellus facilisis tempus nisi eget lobortis. Duis magna sem, placerat vel tellus sed, auctor laoreet enim.
        Integer sit amet libero rutrum, vestibulum massa at, volutpat leo. Proin id ex porta, hendrerit erat sed, fringilla urna. Phasellus hendrerit consequat arcu non pretium. Proin vel velit vitae nisl aliquet rutrum. Maecenas quis lectus sit amet
        mi fermentum pulvinar. Mauris fermentum tortor id ipsum tristique sollicitudin.</p>
    </div>
    <div class="tabs-panel" id="panel4c">
      <p>Fusce justo velit, pulvinar eu sem eu, fringilla sodales urna. Mauris mollis aliquet nibh. Suspendisse porttitor, nisi a egestas iaculis, augue metus semper tortor, eget tristique leo enim mollis libero. Integer et lacus non ipsum finibus pharetra
        sit amet quis ipsum. Mauris vitae elementum lorem. Quisque vel mauris magna. Duis non nisl neque. Suspendisse posuere magna id risus sodales bibendum.</p>
    </div>
  </div>
</div>

<!-- end tabs -->


<!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
