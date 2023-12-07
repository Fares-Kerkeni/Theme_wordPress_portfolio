<?php
get_header();
?>

<div class="title_woks">
    <h1>Works</h1>
</div>

<?php
// Replace 'your_category_slug' with the slug of the category you want to display
query_posts('category_name=Project');

if (have_posts()): ?>

    <div class="all_posts">

        <?php
        $post_count = 0; // Counter variable

        while (have_posts() && $post_count < 4): the_post(); ?>

            <div class="post">
                <!-- Your existing post content -->

                <?php $post_count++; // Increment the counter ?>

                <div class="container_image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="container_title_view">
                    <div class="container_title">
                        <?php the_title(); ?>
                    </div>
                    <div class="container_tags">
                        <?php
                        $tags = get_the_tags();
                        if ($tags) {
                            foreach ($tags as $tag) {
                                echo '<p>'.esc_html($tag->name).'</p>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
<?php endif;

// Reset the query to the main loop
wp_reset_query();

get_footer();
?>
