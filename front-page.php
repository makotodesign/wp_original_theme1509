<?php get_header(); ?>
	<main>
		<div class="gloval_main clearfix">
			<section class="contents">
				<article class="content_sentence">
					<?php if(have_posts()):while(have_posts()):the_post();?>
						
						<h2 class="content_title"><?php the_title(); ?></h2>					
						<div class="content_detail"><?php the_content(); ?></div>
							
					<?php endwhile; endif; ?>
					
					
					
					
					
					
							
					<!--
					<h2 class="content_title">ダミータイトル</h2>
					<div class="content_detail">
						<img src="<?php echo get_template_directory_uri( ); ?>/img/animals.jpg" class="img_left" width="200px">吾輩は猫である。名前はまだ無い。
　どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始であろう。この時妙なものだと思った感じが今でも残っている。第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。その後猫にもだいぶ逢ったがこんな片輪には一度も出会わした事がない。のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙を吹く。どうも咽せぽくて実に弱った。これが人間の飲む煙草というものである事はようやくこの頃知った。
　この書生の掌の裏でしばらくはよい心持に坐っておったが、しばらくすると非常な速力で運転し始めた。<img src="<?php echo get_template_directory_uri( ); ?>/img/animals.jpg" class="img_right" width="200px">書生が動くのか自分だけが動くのか分らないが無暗に眼が廻る。胸が悪くなる。到底助からないと思っていると、どさりと音がして眼から火が出た。それまでは記憶しているがあとは何の事やらいくら考え出そうとしても分らない。
					</div>
					-->
				</article>		

			</section>

			<?php get_sidebar(); ?>

		</div>
		<section class="content_fullwidth clearfix">
			<h2 class="contnt_title">新着記事</h2>
			<ul>				
			<li class="post_prev"></li>
			<li class="post_prev"></li>
			<li class="post_prev"></li>
			<li class="post_prev"></li>
			</ul>
		</section>
		<section class="content_fullwidth">
			<h2 class="contnt_title">固定記事</h2>
			<article class="content_sentence_fullwidth">

				
			</article>			
		</section>
	</main>
<?php get_footer(); ?>

