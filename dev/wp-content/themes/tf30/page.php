<?php get_header() ; ?>


	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

                <?php if(function_exists('bcn_display')) : ?>
				<!-- breadcrumb -->
				<div class="breadcrumb">
                    <?php bcn_display() ; //BreadcrumbNavXTのパンくずを表示するための記述?>
				</div><!-- /breadcrumb -->
                <?php endif ; ?>

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<!-- entry -->
				<article <?php post_class( array('entry') ) ; ?>>

					<!-- entry-header -->
					<div class="entry-header">
                            <?php 
                                $category = get_the_category();
                                if($category[0]) : ?>
                        <div class="entry-label"><a href="<?= esc_url(get_category_link( $category[0]->term_id )); ?>"><?= $category[0]->cat_name ; ?></a></div><!-- /entry-item-tag -->
                            <?php endif ; ?>
						<h1 class="entry-title"><?php the_title() ; ?></h1><!-- /entry-title -->

						<!-- entry-img -->
						<div class="entry-img">
                            <?php if(has_post_thumbnail()) {
                                the_post_thumbnail( 'large' );
                            } ;?>
						</div><!-- /entry-img -->

					</div><!-- /entry-header -->

					<!-- entry-body -->
					<div class="entry-body">
                        <?php the_content() ;//本文の表示 ?>
                        <?php wp_link_pages(
                            array(
                                'before' => '<nav class="entry-links">',
                                'after' => '</nav>',
                                'link_before' => '',
                                'link_after' => '',
                                'next_or_number' => 'number',
                                'separator' => '',
                            )
                        ); ?>

					</div><!-- /entry-body -->

                </article> <!-- /entry -->
            <?php endwhile; endif ; ?>
			</main><!-- /primary -->

		</div><!-- /inner -->
	</div><!-- /content -->

<?php get_footer() ; ?>