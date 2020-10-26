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

                            <div class="entry-label">
                                    <?php my_the_post_category(true) ; ?>
                            </div>
						<h1 class="entry-title"><?php the_title() ; ?></h1><!-- /entry-title -->

						<!-- entry-meta -->
						<div class="entry-meta">
                            <time class="entry-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j') ; ?></time>
                            <?php if(get_the_modified_time( 'Y-m-d' ) !== get_the_time('Y-m-d')) : ?>
                                <time class="entry-updated" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time( 'Y/n/j' ) ; ?></time>
                            <?php endif ; ?>
						</div><!-- /entry-meta -->

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
                        
                       <?= do_shortcode('[btn link="https://google.com"]お問い合わせ[/btn]') ;?>
                    </div><!-- /entry-body -->
                    

                    <!-- entry-tag-items -->
                    <div class="entry-tag-items">
                        <div class="entry-tag-head">タグ</div><!-- /entry-tag-head -->
                        <?php my_get_the_tags() ; ?>
                    </div><!-- /entry-tag-items -->

                    <?php get_template_part( 'template-parts/related') ; ?>

                </article> <!-- /entry -->
            <?php endwhile; endif ; ?>
			</main><!-- /primary -->

<?php get_sidebar() ; ?>


		</div><!-- /inner -->
	</div><!-- /content -->

<?php get_footer() ; ?>