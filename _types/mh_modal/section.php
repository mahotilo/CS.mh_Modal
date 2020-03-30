<?php 
defined('is_running') or die('Not an entry point...');

/* Link to open Bosststrap Dialog with given content*/

$section = array();
$section['values'] = array_merge(array(
  'link'				=> 'open in modal',
  'style'				=> 'link',
  'color'				=> 'success',
  'icon'				=> 'fa-file-text-o',
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

$iconS = $section['values']['icon'] ? '<i class="fa {{icon}}"></i>&nbsp;': '';
$iconE = $section['values']['add_icon'] ? '&nbsp;<i class="fa fa-external-link"></i>': '';

// link/button
if ( $section['values']['style'] == 'button' ) {
	$section['content'] .= '
	<button type="button" class="btn btn-{{color}}" data-toggle="modal" data-target="#'.$modalID.'">
		'.$iconS.'{{link}}'.$iconE.'
	</button>
	';
} else {
	$section['content'] .= '
	<a href="#" data-toggle="modal" data-target="#'.$modalID.'" class="text-{{color}}">
		'.$iconS.'{{link}}'.$iconE.'
	</a>
	';
}


$modal_dialog_class = '';
$modal_dialog_class .= $section['values']['md_size'] == 'small' ? ' modal-sm' : '';
$modal_dialog_class .= $section['values']['md_size'] == 'large' ? ' modal-lg' : '';
$modal_dialog_class .= $section['values']['md_size'] == 'extra' ? ' modal-xl' : '';
$modal_dialog_class .= $section['values']['md_center'] == '1' ? ' modal-dialog-centered' : '';
$modal_dialog_class .= $section['values']['md_scroll'] == '1' ? ' modal-dialog-scrollable' : '';

// Modal dialog
$section['content'] .= '
    <div id="'.$modalID.'" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog'.$modal_dialog_class.'" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="item-modal-title">{{title}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
