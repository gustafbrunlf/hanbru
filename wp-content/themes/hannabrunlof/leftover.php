<div class="grid">
        <div class="row">
        <?php
            $i = 0;
            if( have_rows('gallery') ):
                while ( have_rows('gallery') ) : the_row();
                    $image = get_sub_field('image');
            ?>
                    <div class="grid-item col-md-3">
                        <div class="grid-item-content">
                            <!-- <a class="fancybox" href="<?//=$image?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"> -->
                                <!-- <img src="<?//=$image?>" alt=""> -->
                               <?= wp_get_attachment_image($image, 'medium'); ?>
                            <!-- </a> -->
                        </div>
                    </div>
            <?php
                $i++;
                endwhile;
            endif;
        ?>
        </div>
    </div>