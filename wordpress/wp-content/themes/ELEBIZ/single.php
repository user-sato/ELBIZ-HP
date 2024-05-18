<?php get_header(); ?>

<h2 class="pageTitle">お知らせ</h2>

    <div class="flex h-screen">
        <!-- サイドバー　将来用 -->
        <!-- <div class="sidebar w-64">
            <div class="sidebar-innder">
                <div class="p-5 text-xl font-semibold border-b">カテゴリ 一覧</div>
                <a href="#" class="sidebar-link">お知らせ</a>
                <a href="#" class="sidebar-link">コラム</a>
            </div>
            <div class="sidebar-innder">
                <div class="p-5 text-xl font-semibold border-b">月別アーカイブ</div>
                <a href="#" class="sidebar-link">2019年4月</a>
                <a href="#" class="sidebar-link">2019年5月</a>
            </div>
        </div> -->

        <!-- Main content -->
        <div class="flex-1 p-10">
        <div class="container mx-auto px-4 py-8">
        <div class="bg-white p-6 rounded-lg shadow-md card">
            <?php if (have_posts()): ?>
                <?php while (have_posts()):the_post(); ?>
                    <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
                    <div class="article_meta">
                        <div class="news_meta">
                            <?php the_category(); ?>
                        </div>
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                    </div>
                    <div class="content">
                                    <?php the_content(); ?>
                    </div>
                    <div class="postLinks">
                        <div class="postLink postLink-prev">
                            <?php previous_post_link('<i class="fas fa-chevron-left"></i>%link') ?>
                        </div>
                        <div class="postLink postLink-next">
                            <?php next_post_link('%link<i class="fas fa-chevron-right"></i>') ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </div>
        </div>
    </div>
<?php get_footer(); ?>