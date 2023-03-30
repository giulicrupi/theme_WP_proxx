<?php get_header(); ?>
 <?php   $geo_query = null;
    if(get_query_var("location")){
        $geo_query = array(
            "location" => get_query_var("location")
        );
    }

    $s_query = null;
    if(get_query_var("search")){
        $s_query = get_query_var("search");
    }

    $services = new WP_Query(array(
        "s" => $s_query,
        "geo_query" => $geo_query,
        "orderby" => "geo"
    ));
?>

<pre style="margin-top: 20%;"><code><?php print_r($services->request); ?></code></pre>

<hr/>

<form method="get">
    <div>
        <div>
            <label for="search">
                Search by keyword
            </label>
            <input name="search" value="<?php echo stripslashes(urldecode(get_query_var("search"))) ?>"/>
        </div>

        <div>
            <label for="location">
                Near a town or postcode
            </label>
            <input name="location" placeholder="eg. Sheffield" value="<?php echo stripslashes(urldecode(get_query_var("location"))); ?>"/>
        </div>
        <button>Search</button>
    </div>
</form>

<p><?php echo $services->found_posts; ?> results</p>

<?php if($services->have_posts()): ?>
    <ol>
        <?php while($services->have_posts()): $services->the_post(); ?>
            <li>    
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <?php the_excerpt(); ?>
                <p><?php jhgs_the_distance(); ?></p>
            </li>
        <?php endwhile; ?>
    </ol>
<?php else: ?>     
    <p>Nothing to show</p>           
<?php endif; ?>
<?php get_footer(); ?>