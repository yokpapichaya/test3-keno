<?php
/* Template Name: Keno */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;
$context['options_keno_content'] = get_fields('options')['keno_content'];
$context['options_keno_block'] = get_fields('options')['keno_block'];
Timber::render('templates/page-keno.twig', $context);

