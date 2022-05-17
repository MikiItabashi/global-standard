<?php get_header(); ?>

<div class="p-mv l-mv">
    <div class="p-mv__inner">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/mv1.jpg" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv-sp1.jpg" alt="会議の写真" />
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/mv2.jpg" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv-sp2.jpg" alt="スポーツの写真" />
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/mv3.jpg" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv-sp3.jpg" alt="国際交流の写真" />
                    </picture>
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
        <div class="p-mv__content">
            <p class="p-mv__main"><span>you can </span><br class="u-mobile"><span>change </span><br><span>the world</span></p><br>
            <p class="p-mv__lead"><span>世界で活躍できるグローバルな人材を育てる</span></p>
        </div>
    </div>
</div>

<section class="p-top-about l-top-about c-bg-skew">
    <div class="p-top-about__inner l-inner">
        <div class="p-top-about__heading">
            <div class="p-top-about__title c-title">
                <span class="c-title__en">about us</span>
                <h2 class="c-title__ja">当社について</h2>
            </div>
            <div class="p-top-about__link">
                <a href="<?php echo esc_url(home_url('about')) ?>" class="c-more-link">View more<span></span></a>
            </div>
        </div>
        <div class="p-top-about__body">
            <p class="p-top-about__text">急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。<br>
                <br>
                コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。<br>
                <br>
                文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
            </p>
            <div class="p-top-about__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-company.jpg" alt="会議の写真">
            </div>
        </div>
    </div>
</section>


<section class="p-top-service l-top-service c-bg-skew">
    <div class="p-top-service__inner l-inner">
        <div class="p-top-service__heading">
            <div class="p-top-service__title c-title">
                <span class="c-title__en">service</span>
                <h2 class="c-title__ja">サービス</h2>
            </div>
            <div class="p-top-service__link">
                <a href="<?php echo esc_url(home_url('service')) ?>" class="c-more-link c-more-link--rev">View more<span></span></a>
            </div>
        </div>
        <div class="p-top-service__body">
            <ul class="p-top-service__items">
                <li class="p-top-service__item">
                    <div class="p-top-service__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-service01.jpg" alt="研修の写真">
                        <h3 class="p-top-service___name"><span>ビジネス英語研修</span></h3>
                    </div>
                    <p class="p-top-service__text">ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。</p>
                    <div class="p-top-service__num">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/number01.svg" alt="01">
                    </div>
                </li>
                <li class="p-top-service__item">
                    <div class="p-top-service__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-service02.jpg" alt="異文化交流の写真">
                        <h3 class="p-top-service___name"><span>異文化</span><br><span>コミュニケーション研修</span></h3>
                    </div>
                    <p class="p-top-service__text">急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>
                        言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。</p>
                    <div class="p-top-service__num">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/number02.svg" alt="02">
                    </div>
                </li>
                <li class="p-top-service__item">
                    <div class="p-top-service__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-service03.jpg" alt="パソコンに向かっている写真">
                        <h3 class="p-top-service___name"><span>ビジネス留学</span><br><span>サポートプログラム</span></h3>
                    </div>
                    <p class="p-top-service__text">将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>
                        通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。</p>
                    <div class="p-top-service__num">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/number03.svg" alt="03">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="p-top-case l-top-case">
    <div class="p-top-case__inner l-inner">
        <div class="p-top-case__heading">
            <div class="p-top-case__title c-title">
                <span class="c-title__en">case study</span>
                <h2 class="c-title__ja">導入事例</h2>
            </div>
            <div class="p-top-case__link">
                <a href="<?php echo esc_url(home_url('case')) ?>" class="c-more-link">View more<span></span></a>
            </div>
        </div>
        <div class="p-top-case__body">
            <ul class="p-top-case__items">
                <?php
                $args = [
                    'post_type' => 'custom_case', // 投稿タイプのスラッグ
                    'posts_per_page' => '6', // 表示件数（変更不要）
                ];
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <li class="p-top-case__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="p-top-case__img">
                                    <?php $image = get_field('logo');
                                    if (!empty($image)) : ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="p-top-case__content">
                                    <h3 class="p-top-case__name"><?php the_field('name'); ?></h3>
                                    <?php
                                    $taxonomy_terms = get_the_terms($post->ID, 'plan');
                                    foreach ($taxonomy_terms as $taxonomy_term) {
                                        echo '<span class="p-top-case__category">' . $taxonomy_term->name . '</span>';
                                    }
                                    ?>
                                </div>
                            </a>
                        </li>

                    <?php endwhile;
                else : ?>
                    <p>登録されている事例がありません</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <!-- 記事のループ処理終了 -->
            </ul>
        </div>
    </div>
</section>

<section class="p-top-news l-top-news c-bg-skew">
    <div class="p-top-news__inner l-inner">
        <div class="p-top-news__heading">
            <div class="p-top-news__title c-title">
                <span class="c-title__en">news</span>
                <h2 class="c-title__ja">新着情報</h2>
            </div>
            <div class="p-top-news__link">
                <a href="<?php echo esc_url(home_url('news')) ?>" class="c-more-link c-more-link--rev">View more<span></span></a>
            </div>
        </div>
        <div class="p-top-news__body">
            <ul class="p-top-news__items">
                <?php $args = [
                    'post_type' => 'post', // 投稿タイプ
                    'posts_per_page' => '3', // 表示件数
                    'post_status' => 'publish', //公開のものを
                    'orderby' => 'DESC', // 新しい順に
                ];
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <li class="p-top-news__item">
                            <a href="<?php the_permalink(); ?>" class="p-top-news__item-link">
                                <div class="p-top-news__info">
                                    <?php
                                    $categories = get_the_category();
                                    echo '<span class="p-top-news__category">';
                                    foreach ($categories as $category) {
                                        echo $category->name;
                                    }
                                    echo '</span>';
                                    ?>
                                    <time class="p-top-news__date" datetime="<?php the_time('Y-m-d'); ?>">
                                        <?php the_time('Y年m月d日'); ?>
                                    </time>
                                </div>
                                <p class="p-top-news__title"><?php the_title(); ?></p>
                            </a>
                        </li>

                    <?php endwhile;
                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>