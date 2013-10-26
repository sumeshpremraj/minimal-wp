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
                    
                    <h1 class="post-title"><?php the_title(); ?></h1>

                    <!--
                    <span class="author"><?php the_author(); ?></span>
                    -->

                    <?php the_content(); ?>
                    
                    <?php wp_link_pages(); ?>
                    
                    <?php edit_post_link(); ?> 
                    
                    <div class="post-footer">
                        <span class="meta">
                            <?php if(has_tag()): ?>
                            <i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?> 
                            <?php endif; ?>
                            
                            <i class="fa fa-calendar-o"></i> <?php the_time('j M Y'); ?>
                        </span>
                        <span class="social-widgets">
                        
                        <?php $url = get_permalink(); ?> 
                        
                        <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fsumeshp.com%2F&amp;width=200&amp;height=35&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:35px;" allowTransparency="true"></iframe>
                        


                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink()?>" data-text="Now reading: <?php the_title(); ?>" data-via="sumesh" data-size="large">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </span>                        

                    </div>
                    <div class="clear">&nbsp;</div>
                </div> <!-- /post -->


                <?php comments_template(); ?>



                
            <?php endwhile; ?>

            <div class="nextprevLinks">
                
                <?php if(get_next_post() ): ?>

                <div class="alignright"><i class="fa fa-chevron-circle-right fa-3x"></i><?php next_post('%', '', 'yes'); ?></div>
                <?php endif; ?>

                <?php if(get_previous_post()): ?>
                <div class="alignleft"><i class="fa fa-chevron-circle-left fa-3x"></i><?php previous_post('%', '', 'yes'); ?></div>
                <?php endif; ?>
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