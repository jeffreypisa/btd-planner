<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();

/* Load nieuws */
$args = array(
  'post_type'			  => 'post',
	'posts_per_page'  => 3
);

$context['nieuws'] = Timber::get_posts($args);

$today = date('Ymd');

$args2 = array(
  'post_type'			  => 'kalender',
	'posts_per_page'  => 3,
  'meta_query' => array(
    array(
      'key' => 'datum',
      'value' => $today,
      'type' => 'DATE',
      'compare' => '>='
    )
  ),
  'meta_key' => 'datum',
  'orderby' => 'meta_value_num',
  'order' => 'ASC',
);

$context['kalender'] = Timber::get_posts($args2);

$context['type'] = Timber::get_terms('type');


$context['topknoplink'] = get_field('top_knop_link');


$post = new TimberPost();

$context['post'] = $post;

Timber::render( array( 'page-' . $post->post_name . '.twig', 'page.twig' ), $context );