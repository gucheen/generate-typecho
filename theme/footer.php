<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/prettify.js"></script>
<script>addEventListener('load', function(event) { PR.prettyPrint(); }, false);</script>
</body>
</html>
