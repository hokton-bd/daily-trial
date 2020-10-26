<?php if(is_single()) : ?>
		<!-- footer-sns -->
		<div class="footer-sns">
			<div class="inner">

				<div class="footer-sns-head">この記事をシェアする</div>

				<nav class="footer-sns-buttons">
					<ul>
						<li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow" target="_blank" class="m_twitter"><img src="<?= esc_url(get_template_directory_uri()); ?>/img/icon-twitter.png" alt=""></a></li>
						<li><a href="https://facebook.com/share.php?u=<?php the_permalink(); ?>" rel="nofollow" target="_blank" class="m_facebook"><img src="<?= esc_url(get_template_directory_uri()); ?>/img/icon-facebook.png" alt=""></a></li>
						<li><a href="https://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" rel="nofollow" target="_blank" class="m_hatena"><img src="<?= esc_url(get_template_directory_uri()); ?>/img/icon-hatena.png" alt=""></a></li>
						<li><a href="https://social-plugins.line.me/line.me/lineit/share?url=<?php the_permalink(); ?>" rel="nofollow" target="_blank" class="m_line"><img src="<?= esc_url(get_template_directory_uri()); ?>/img/icon-line.png" alt=""></a></li>
						<li><a href="https://getpocket.com/edit?url=<?php the_permalink(); ?>" rel="nofollow" target="_blank" class="m_pocket"><img src="<?= esc_url(get_template_directory_uri()); ?>/img/icon-pocket.png" alt=""></a></li>
					</ul>
				</nav>

			</div><!--inner-->
		</div><!--footer-sns-->
	<?php endif ; ?>
