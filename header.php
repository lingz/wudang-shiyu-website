<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wudang-shiyu
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
<link href='http://fonts.googleapis.com/css?family=Martel|Open+Sans' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="layout" class="site-content">
  <?php 
    $frontpage_id = get_option('page_on_front');
  ?>
  <a href="<?php echo get_permalink($frontpage_id); ?>">
    <img id="header" src="<?php echo get_template_directory_uri(); ?>/images/header.jpg" alt="Wudang Traditional Martial Arts School">
  </a>
<div id="main">
  <?php get_sidebar(); ?>
  <div id="content">
