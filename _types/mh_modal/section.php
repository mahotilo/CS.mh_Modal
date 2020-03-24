<?php 
defined('is_running') or die('Not an entry point...');

/* Link to open Bosststrap Dialog with given content*/


/* detect Bootstrap4 */
global $page, $config, $gpLayouts, $addonPathData;
$layout_arr = $gpLayouts[isset($page->TitleInfo['gpLayout']) ?  $page->TitleInfo['gpLayout'] :  $config['gpLayout']];
$Bootstrap4 = strtolower($layout_arr['framework']['name']) == 'bootstrap' &&
	  preg_replace('/[^0-9]/', '', explode('.', $layout_arr['framework']['version'])[0]) == 4;


$section = array();
$section['values'] = array_merge(array(
  'link'				=> 'Open in modal',
  'style'				=> 'link',
  'add_icon'			=> '0',
  'title'				=> 'Title',
  'content'				=> '<p>
								Sample <strong>description</strong> <em>here</em>.<br>
								Sample <strong>description</strong> <em>here</em>.<br>
								Sample <strong>description</strong> <em>here</em>.<br>
							</p>', // control_type = ck_editor,
 
  'md_size'				=> '',
  'md_center'			=> '1',
  'md_scroll'			=> '0',
), $sectionCurrentValues );

$section['attributes'] = array(
  'class' => '',
);

$UID = uniqid();
$modalID = 'mhm_'.$UID;

/************************************************************/

$section['content']  = '';

$section['content'] .= '
<div class="mh-modal">
';

$icon = $section['values']['add_icon'] ? '&nbsp;<i class="fa fa-external-link"></i>': '';

// link/button
if ( $section['values']['style'] == 'button' ) {
	$section['content'] .= '
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$modalID.'">
		{{link}}'.$icon.'
	</button>
	';
} else {
	$section['content'] .= '
	<a href="#" data-toggle="modal" data-target="#'.$modalID.'">
		{{link}}'.$icon.'
	</a>
	';
}


$modal_dialog_class = '';
$modal_dialog_class .= $section['values']['md_size'] == 'small' ? ' modal-sm' : '';
$modal_dialog_class .= $section['values']['md_size'] == 'large' ? ' modal-lg' : '';
$modal_dialog_class .= $section['values']['md_size'] == 'extra' ? ' modal-xl' : '';
$modal_dialog_class .= $section['values']['md_center'] == '1' ? ' modal-dialog-centered' : '';
$modal_dialog_class .= $section['values']['md_scroll'] == '1' ? ' modal-dialog-scrollable' : '';

$modal_close_button = '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';

// Modal dialog
$section['content'] .= '
    <div id="'.$modalID.'" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog'.$modal_dialog_class.'" role="document">
            <div class="modal-content">
                <div class="modal-header">
					'.($Bootstrap4 ? '' : $modal_close_button).'
                    <h4 class="item-modal-title">{{title}}</h4>
					'.($Bootstrap4 ? $modal_close_button : '').'
                </div>
				<div class="modal-body">
				{{content}}
				</div>
            </div>
        </div>
    </div>
';    

$section['content'] .= '
</div>
';


/************************************************************/
$section['gp_label'] = 'mh Modal dialog';
$section['gp_color'] = '#1EA076';

$section['always_process_values'] = false;

$components = '';

$css_files = array( 'style.css' );
// $style = 'body { background:red!important; }';
// $js_files = array( 'script.js', );
// $javascript = 'var hello_world = "Hello World!";';
// $jQueryCode = '$(".hello").on("click", function(){ alert("Click: " + hello_world); });';
