<?php
/*
 * Template Name: Collections
 * Description: The template to show an archive of all collections.
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['terms'] = Timber::get_terms('collection');
$context['cover_image'] = get_field('collections_cover_image', 'options');
$context['pinterest_prompt'] = get_field('pinterest_prompt', 'options');
Timber::render('pages/page-collections.twig', $context);