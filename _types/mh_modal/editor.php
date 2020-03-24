<?php 

defined('is_running') or die('Not an entry point...');

$editor_lang = self::$i18n['editor']['lang'];

$editor = array(
  'custom_scripts'  => false,
  'custom_css'      => false,
  'controls'        => array(
  
    // value 'link' --start
    'link' => array(
      'label' => '<i class="fa fa-font"></i> '.$editor_lang['Link'],
      'control_type' => 'text',
      'attributes' => array(
        // 'class' => '',
        'placeholder' => '',
        // 'pattern' => '', // regex for validation
      ),
      'on' => array(
      ),
    ),
    // value 'link' --end


    // value 'style' --start
    'style' => array(
      'label' => '<i class="fa fa-link"></i> '.$editor_lang['Style'],
      'control_type' => 'select',
      'options' => array(
        'link' => $editor_lang['link'],
        'button' => $editor_lang['button'],
      ),
      'attributes' => array(),
      'on' => array(),
    ), 
    // value 'style' --end


    // value 'add_icon' --start
    'add_icon' => array(
      'label' => '<i class="fa fa-external-link"></i> '.$editor_lang['Add_icon'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(),
    ), 
    // value 'add_icon' --end


    // value 'title' --start
    'title' => array(
      'label' => '<i class="fa fa-header"></i> '.$editor_lang['Title'],
      'control_type' => 'text',
      'attributes' => array(
        // 'class' => '',
        'placeholder' => '',
        // 'pattern' => '', // regex for validation
      ),
      'on' => array(
      ),
    ),
    // value 'title' --end


    // value 'content' --start
    'content' => array(
      'label' => '<i class="fa fa-align-left"></i> '.$editor_lang['Content'],
      'control_type' => 'ck_editor',
      'attributes' => array(
        // 'class' => '',
        // 'placeholder' => 'A short content',
      ),
      'on' => array(),
    ),
    // value 'content' --end


    // value 'md_size' --start
    'md_size' => array(
      'label' => '<i class="fa fa-arrows-h"></i> '.$editor_lang['md_Size'],
      'control_type' => 'select',
      'options' => array(
        'small' => $editor_lang['Small'],
        'default' => $editor_lang['Default'],
        'large' => $editor_lang['Large'],
        'extra' => $editor_lang['Extra'],
      ),
      'attributes' => array(),
      'on' => array(),
    ), 
    // value 'md_size' --end


    // value 'md_center' --start
    'md_center' => array(
      'label' => '<i class="fa fa-arrows"></i> '.$editor_lang['md_Center'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(),
    ), 
    // value 'md_center' --end


    // value 'md_scroll' --start
    'md_scroll' => array(
      'label' => '<i class="fa fa-arrows-v"></i> '.$editor_lang['md_Scroll'],
      'control_type' => 'checkbox',
      'attributes' => array(),
      'on' => array(),
    ), 
    // value 'md_scroll' --end

  ),
);
