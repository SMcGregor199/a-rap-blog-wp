<?php
$context = [];
$context['site_title'] = get_bloginfo( 'name' );
Timber::render('home.twig', $context);

