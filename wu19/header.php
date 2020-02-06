<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-light bg-light">

            <a class="navbar-brand list-group-item <?php echo ($_SERVER['QUERY_STRING'] === NULL) ? "active" : "" ?>" href="/index.php">Home</a>

            <?php foreach (get_pages() as $page) : ?>
                <a class="navbar-brand list-group-item <?php echo ($_SERVER['QUERY_STRING'] === "page_id=$page->ID") ? 'active' : '' ?>" href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?></a>
            <?php endforeach; ?>

        </nav>