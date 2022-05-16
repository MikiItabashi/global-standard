<footer class="p-footer">
    <div class="p-footer__blocks">
        <div class="p-footer__block p-footer__block--download">
            <div class="p-footer__inner l-inner">
                <div class="p-footer__title c-title">
                    <span class="c-title__en">download</span>
                    <h2 class="c-title__ja">資料ダウンロード</h2>
                </div>
                <div class="p-footer__btn">
                    <a href="<?php echo esc_url(home_url('download')) ?>" class="c-btn c-btn--accent">View more</a>
                </div>
            </div>
        </div>
        <div class="p-footer__block p-footer__block--contact">
            <div class="p-footer__inner l-inner">
                <div class="p-footer__title c-title">
                    <span class="c-title__en">contact</span>
                    <h2 class="c-title__ja">お問い合わせ</h2>
                </div>
                <div class="p-footer__btn">
                    <a href="<?php echo esc_url(home_url('contact')) ?>" class="c-btn c-btn--accent">View more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="p-footer__bottom">
        <div class="p-footer__logo">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-white.svg" alt="Global Standard">
        </div>
        <div class="p-footer__info">〒550-1000　大阪市西区土佐堀9-5-5<br>
            TEL　06-123-4567<br>
            FAX　06-123-4568</div>
        <small class="p-footer__copyright">&copy; 2021 Global Standard. All Rights Reserved.</small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>