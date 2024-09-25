<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <title><?php wp_title('|', true, 'right'); ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header>

        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>

        <p><?php bloginfo('description'); ?></p>

    </header>

footer.php: File ini berisi bagian bawah halaman. Contoh:

<footer>

    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>

</footer>

<?php wp_footer(); ?>

</body>

</html>

sidebar.php: File ini untuk sidebar. Contoh:

<aside>

    <?php if (is_active_sidebar('main-sidebar')) : ?>

        <?php dynamic_sidebar('main-sidebar'); ?>

    <?php endif; ?>

</aside>