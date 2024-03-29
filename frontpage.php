<?php
/**
 * Template Name: Frontpage
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page-template-frontpage.twig' ), $context );
