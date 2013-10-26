<?php get_header(); ?>

<!--
    <div id="photosWork">
        <div class="centerCol">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac ornare tortor, quis placerat leo. Nullam mauris urna, iaculis ac tortor quis, condimentum tincidunt augue. Nam eleifend in arcu in imperdiet. Proin eget arcu et mi vulputate sollicitudin. Sed ac nibh est. Nunc tristique nunc sit amet est tempus, in pharetra ligula aliquet. Duis dui sapien, condimentum et rhoncus a, vestibulum congue nulla. Praesent arcu diam, malesuada nec mollis ut, pellentesque sed justo. Nullam et convallis magna, sed porttitor diam. Morbi blandit tristique dolor, dictum ultricies massa dictum non. Ut pellentesque neque at pretium aliquet. Quisque molestie tempus nisl, ullamcorper pulvinar felis ultrices a. Curabitur ac hendrerit velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec elementum nisi nulla, in molestie nisi pharetra nec.
        </div>
    </div>
-->


    <div id="content">
        <div class="centerCol">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="post <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                    
                    <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

                    <!--
                    <span class="author"><?php the_author(); ?></span>
                    -->

                    <?php the_excerpt(); ?>
                    <?php edit_post_link(); ?> &nbsp; 
                    

                    <div class="post-footer">
                        <span class="meta">
                            <?php if(has_tag()): ?>
                            <i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?> 
                            <?php endif; ?>
                            
                            <i class="fa fa-calendar-o"></i> <?php the_time('j M Y'); ?>
                        </span>
                        
                    </div>
                    <div class="clear">&nbsp;</div>
                </div> <!-- /post -->
                
            <?php endwhile; ?>

            <div class="nextprevLinks">

            <!--
                <?php if ( get_previous_posts_link() ) : ?>
                <div class="alignleft"><?php previous_posts_link(); ?></div>
                <?php endif; ?>

                <?php if ( get_next_posts_link() ) : ?>
                <div class="alignright"><?php next_posts_link(); ?></div>
                <?php endif; ?>
            -->
            <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
            ?>
                    


            </div>
            <div class="clear">&nbsp;</div>

            <?php else : ?>

            <h1>Page not found</h1>
            Looks like you've come to the wrong URL - what we call the 404 page. Head back home to read other posts.
            <?php endif; ?>
        </div> <!-- /centerCol -->

    </div><!-- /content -->

<!--
    <div id="comments">
        <div class="centerCol">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac ornare tortor, quis placerat leo. Nullam mauris urna, iaculis ac tortor quis, condimentum tincidunt augue. Nam eleifend in arcu in imperdiet. Proin eget arcu et mi vulputate sollicitudin. Sed ac nibh est. Nunc tristique nunc sit amet est tempus, in pharetra ligula aliquet. Duis dui sapien, condimentum et rhoncus a, vestibulum congue nulla. Praesent arcu diam, malesuada nec mollis ut, pellentesque sed justo.
        </div>
    </div>
-->

<?php get_footer(); ?>