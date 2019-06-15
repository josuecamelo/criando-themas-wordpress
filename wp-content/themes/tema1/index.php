<?php
    get_header();
    get_header('personalizado');
?>
<div class="container">
    <div class="row">
        <h3>Posts Recentes</h3>
        <div class="col-md-6">
            <?php
                if (have_posts()):
                    echo '<ul class="">';
                    while(have_posts()): the_post(); //$post atual
                        $image = 'Sem Imagem de Thumb';
                        if (has_post_thumbnail()) :
                            $image = sprintf('<div class=""><a href="%s">%s</a></div>', get_the_permalink(), get_the_post_thumbnail());
                        endif;

                        $body = sprintf('<div class=""><h3 class=""><p>%s</p>%s</h3></div>', get_the_title(), get_the_content('Continue Lendo...'));

                        printf('<li class="">%s%s</li>', $image, $body);
                    endwhile;
                    echo "</ul>";
                else:
                    echo "<p>Ainda não temos Posts.</p>";
                endif;
            ?>
        </div>
        <div class="col-md-3">
            <p>
                <?php
                    get_sidebar();
                ?>
            </p>
        </div>
        <div class="col-md-3">
            <p>
                <?php
                    get_sidebar('personalizado');
                ?>
            </p>
        </div>
    </div>
</div>
<?php
    get_footer('personalizado');
    get_footer();
?>
