<?php
/**
 * Template part for displaying blog posts in archives
 * Custom for Astra Child Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('custom-blog-card'); ?>>

    <!-- Featured Image -->
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large', ['class' => 'featured-img']); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-thumb.jpg"
                    alt="<?php the_title(); ?>" />
            <?php endif; ?>
        </a>

        <!-- Category Badges -->
        <div class="post-categories">
            <?php
            $categories = get_the_category();
            foreach ($categories as $cat) {
                echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '" class="cat-badge">' . esc_html($cat->name) . '</a>';
            }
            ?>
        </div>
    </div>

    <!-- Post Content -->
    <div class="post-content">

        <!-- Meta Info -->
        <div class="post-meta">
            <span class="meta-date"><?php echo get_the_date(); ?></span>
            <span class="meta-author"><?php echo get_the_author(); ?></span>
            <span class="meta-reading-time">
                <?php
                $word_count = str_word_count(strip_tags(get_the_content()));
                $reading_time = ceil($word_count / 200);
                echo $reading_time . ' min read';
                ?>
            </span>
        </div>

        <!-- Title -->
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <!-- Excerpt -->
        <p class="post-excerpt">
            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
        </p>

        <!-- Read More Button -->
        <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More →</a>
    </div>

</article>