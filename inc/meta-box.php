<?php

add_filter( 'rwmb_meta_boxes', 'embutidos_register_meta_boxes' );

function embutidos_register_meta_boxes( $meta_boxes )
{

  $prefix = 'embutidos_';

// 1st meta box
  $meta_boxes[] = array(
    'id'       => 'standard',
    'title'    => __( 'Galeria de Fotos', 'rwmb' ),
    'pages'    => array( 'galeria' ),
    'context'  => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
      array(
        'name'             => __( 'Cargar fotos', 'rwmb' ),
        'id'               => "{$prefix}imgadv",
        'type'             => 'image_advanced',
        'max_file_uploads' => 60,
        )
      )
    );

  return $meta_boxes;
}

