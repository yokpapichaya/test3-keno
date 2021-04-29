<?php
/* Template Name: Promotions */
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['page'] = $timber_post;
$context['options_pro_content'] = get_fields('options')['pro_content'];
$context['options_pro_slot'] = get_fields('options')['pro_slot'];
Timber::render('templates/page-promotion.twig', $context);

