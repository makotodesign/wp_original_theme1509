<?php
register_nav_menus(array(
	'mainnav'=>'メインナビゲーションです',
	'utilitynavi'=>'これは上部のナビゲーションです'
)); 


register_sidebar(array(
	'name'=>'toppage',
	'id'=>'toppage',
	'before_widget'=>'<div class="widget">',
	'after_widget'=>'</div>',
	'before_title'=>'<h3>',
	'after_title'=>'</h3>'
));




