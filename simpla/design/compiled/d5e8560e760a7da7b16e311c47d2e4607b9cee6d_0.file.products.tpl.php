<?php
/* Smarty version 3.1.32, created on 2018-05-02 15:51:02
  from '/Users/user/Documents/project/salte/simpla/design/html/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae9b4363edc22_92653207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5e8560e760a7da7b16e311c47d2e4607b9cee6d' => 
    array (
      0 => '/Users/user/Documents/project/salte/simpla/design/html/products.tpl',
      1 => 1429296654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 2,
  ),
),false)) {
function content_5ae9b4363edc22_92653207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/Users/user/Documents/project/salte/simpla/design/compiled/d5e8560e760a7da7b16e311c47d2e4607b9cee6d_0.file.products.tpl.php',
    'uid' => 'd5e8560e760a7da7b16e311c47d2e4607b9cee6d',
    'call_name' => 'smarty_template_function_category_select_11964647145ae9b435765e06_45328374',
  ),
  'categories_tree' => 
  array (
    'compiled_filepath' => '/Users/user/Documents/project/salte/simpla/design/compiled/d5e8560e760a7da7b16e311c47d2e4607b9cee6d_0.file.products.tpl.php',
    'uid' => 'd5e8560e760a7da7b16e311c47d2e4607b9cee6d',
    'call_name' => 'smarty_template_function_categories_tree_11964647145ae9b435765e06_45328374',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/user/Documents/project/salte/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'tabs', null, null);?>
	<li class="active"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('module'=>'ProductsAdmin','keyword'=>null,'category_id'=>null,'brand_id'=>null,'filter'=>null,'page'=>null),$_smarty_tpl ) );?>
">Товары</a></li>
	<?php if (in_array('categories',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=CategoriesAdmin">Категории</a></li><?php }?>
	<?php if (in_array('brands',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=BrandsAdmin">Бренды</a></li><?php }?>
	<?php if (in_array('features',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?><li><a href="index.php?module=FeaturesAdmin">Свойства</a></li><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
	<?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['category']->value->name ,false ,2);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('meta_title', 'Товары' ,false ,2);
}?>

<form method="get">
<div id="search">
	<input type="hidden" name="module" value="ProductsAdmin">
	<input class="search" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<input class="search_button" type="submit" value=""/>
</div>
</form>
	
<div id="header">	
	<?php if ($_smarty_tpl->tpl_vars['products_count']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['category']->value->name || $_smarty_tpl->tpl_vars['brand']->value->name) {?>
			<h1><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
 (<?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['products_count']->value,'товар','товаров','товара' ));?>
)</h1>
		<?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
			<h1><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['products_count']->value,'Найден','Найдено','Найдено' ));?>
 <?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['products_count']->value,'товар','товаров','товара' ));?>
</h1>
		<?php } else { ?>
			<h1><?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['products_count']->value,'товар','товаров','товара' ));?>
</h1>
		<?php }?>		
	<?php } else { ?>
		<h1>Нет товаров</h1>
	<?php }?>
	<a class="add" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('module'=>'ProductAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">Добавить товар</a>
</div>	

<div id="main_list">
	
	<!-- Листалка страниц -->
	<?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
	<!-- Листалка страниц (The End) -->
		
	<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

	<div id="expand">
	<!-- Свернуть/развернуть варианты -->
	<a href="#" class="dash_link" id="expand_all">Развернуть все варианты ↓</a>
	<a href="#" class="dash_link" id="roll_up_all" style="display:none;">Свернуть все варианты ↑</a>
	<!-- Свернуть/развернуть варианты (The End) -->
	</div>

		<form id="list_form" method="post">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	
		<div id="list">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
		<div class="<?php if (!$_smarty_tpl->tpl_vars['product']->value->visible) {?>invisible<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value->featured) {?>featured<?php }?> row">
			<input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->position;?>
">
			<div class="move cell"><div class="move_zone"></div></div>
	 		<div class="checkbox cell">
				<input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"/>				
			</div>
			<div class="image cell">
				<?php $_smarty_tpl->_assignInScope('image', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'first' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->images )));?>
				<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['product']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->filename, ENT_QUOTES, 'UTF-8', true),35,35 ));?>
" /></a>
				<?php }?>
			</div>
			<div class="name product_name cell">
			 	
			 	<div class="variants">
			 	<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->variants, 'variant');
$_smarty_tpl->tpl_vars['variant']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->index++;
$_smarty_tpl->tpl_vars['variant']->first = !$_smarty_tpl->tpl_vars['variant']->index;
$__foreach_variant_1_saved = $_smarty_tpl->tpl_vars['variant'];
?>
				<li <?php if (!$_smarty_tpl->tpl_vars['variant']->first) {?>class="variant" style="display:none;"<?php }?>>
					<i title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->name, ENT_QUOTES, 'UTF-8', true),30,'…',true,true);?>
</i>
					<input class="price <?php if ($_smarty_tpl->tpl_vars['variant']->value->compare_price > 0) {?>compare_price<?php }?>" type="text" name="price[<?php echo $_smarty_tpl->tpl_vars['variant']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['variant']->value->price;?>
" <?php if ($_smarty_tpl->tpl_vars['variant']->value->compare_price > 0) {?>title="Старая цена &mdash; <?php echo $_smarty_tpl->tpl_vars['variant']->value->compare_price;?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
  
					<input class="stock" type="text" name="stock[<?php echo $_smarty_tpl->tpl_vars['variant']->value->id;?>
]" value="<?php if ($_smarty_tpl->tpl_vars['variant']->value->infinity) {?>∞<?php } else {
echo $_smarty_tpl->tpl_vars['variant']->value->stock;
}?>" /><?php echo $_smarty_tpl->tpl_vars['settings']->value->units;?>

				</li>
				<?php
$_smarty_tpl->tpl_vars['variant'] = $__foreach_variant_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
	
				<?php $_smarty_tpl->_assignInScope('variants_num', count($_smarty_tpl->tpl_vars['product']->value->variants));?>
				<?php if ($_smarty_tpl->tpl_vars['variants_num']->value > 1) {?>
				<div class="expand_variant">
				<a class="dash_link expand_variant" href="#"><?php echo $_smarty_tpl->tpl_vars['variants_num']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['variants_num']->value,'вариант','вариантов','варианта' ));?>
 ↓</a>
				<a class="dash_link roll_up_variant" style="display:none;" href="#"><?php echo $_smarty_tpl->tpl_vars['variants_num']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['variants_num']->value,'вариант','вариантов','варианта' ));?>
 ↑</a>
				</div>
				<?php }?>
				</div>
				
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['product']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
	 			
			</div>
			<div class="icons cell">
				<a class="preview"   title="Предпросмотр в новом окне" href="../products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
" target="_blank"></a>			
				<a class="enable"    title="Активен"                 href="#"></a>
				<a class="featured"  title="Рекомендуемый"           href="#"></a>
				<a class="duplicate" title="Дублировать"             href="#"></a>
				<a class="delete"    title="Удалить"                 href="#"></a>
			</div>
			
			<div class="clear"></div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>

		<div id="action">
			<label id="check_all" class="dash_link">Выбрать все</label>
		
			<span id="select">
			<select name="action">
				<option value="enable">Сделать видимыми</option>
				<option value="disable">Сделать невидимыми</option>
				<option value="set_featured">Сделать рекомендуемым</option>
				<option value="unset_featured">Отменить рекомендуемый</option>
				<option value="duplicate">Создать дубликат</option>
				<?php if ($_smarty_tpl->tpl_vars['pages_count']->value > 1) {?>
				<option value="move_to_page">Переместить на страницу</option>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['categories']->value) > 1) {?>
				<option value="move_to_category">Переместить в категорию</option>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['brands']->value) > 0) {?>
				<option value="move_to_brand">Указать бренд</option>
				<?php }?>
				<option value="delete">Удалить</option>
			</select>
			</span>
		
			<span id="move_to_page">
			<select name="target_page">
				<?php
$__section_target_page_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages_count']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_target_page_0_total = $__section_target_page_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_target_page'] = new Smarty_Variable(array());
if ($__section_target_page_0_total !== 0) {
for ($__section_target_page_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index'] = 0; $__section_target_page_0_iteration <= $__section_target_page_0_total; $__section_target_page_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index']++){
?>
				<option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index'] : null)+1;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index'] : null)+1;?>
</option>
				<?php
}
}
?>
			</select> 
			</span>
		
			<span id="move_to_category">
			<select name="target_category">
				
				<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

			</select> 
			</span>
			
			<span id="move_to_brand">
			<select name="target_brand">
				<option value="0">Не указан</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_brands']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value->name;?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select> 
			</span>
		
			<input id="apply_action" class="button_green" type="submit" value="Применить">		
		</div>
		<?php }?>
	</form>

	<!-- Листалка страниц -->
	<?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>	
	<!-- Листалка страниц (The End) -->		
</div>


<!-- Меню -->
<div id="right_menu">
	
	<!-- Фильтры -->
	<ul>
		<li <?php if (!$_smarty_tpl->tpl_vars['filter']->value) {?>class="selected"<?php }?>><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('brand_id'=>null,'category_id'=>null,'keyword'=>null,'page'=>null,'filter'=>null),$_smarty_tpl ) );?>
">Все товары</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'featured') {?>class="selected"<?php }?>><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'filter'=>'featured'),$_smarty_tpl ) );?>
">Рекомендуемые</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'discounted') {?>class="selected"<?php }?>><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'filter'=>'discounted'),$_smarty_tpl ) );?>
">Со скидкой</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'visible') {?>class="selected"<?php }?>><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'filter'=>'visible'),$_smarty_tpl ) );?>
">Активные</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'hidden') {?>class="selected"<?php }?>><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'filter'=>'hidden'),$_smarty_tpl ) );?>
">Неактивные</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'outofstock') {?>class="selected"<?php }?>><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'filter'=>'outofstock'),$_smarty_tpl ) );?>
">Отсутствующие</a></li>
	</ul>
	<!-- Фильтры -->


	<!-- Категории товаров -->
	
	<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

	<!-- Категории товаров (The End)-->
	
	<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
	<!-- Бренды -->
	<ul>
		<li <?php if (!$_smarty_tpl->tpl_vars['brand']->value->id) {?>class="selected"<?php }?>><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('brand_id'=>null),$_smarty_tpl ) );?>
">Все бренды</a></li>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
		<li brand_id="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id) {?>class="selected"<?php } else { ?>class="droppable brand"<?php }?>><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'page'=>null,'brand_id'=>$_smarty_tpl->tpl_vars['b']->value->id),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value->name;?>
</a></li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<!-- Бренды (The End) -->
	<?php }?>
	
</div>
<!-- Меню  (The End) -->



<?php echo '<script'; ?>
>

$(function() {

	// Сортировка списка
	$("#list").sortable({
		items:             ".row",
		tolerance:         "pointer",
		handle:            ".move_zone",
		scrollSensitivity: 40,
		opacity:           0.7, 
		
		helper: function(event, ui){		
			if($('input[type="checkbox"][name*="check"]:checked').size()<1) return ui;
			var helper = $('<div/>');
			$('input[type="checkbox"][name*="check"]:checked').each(function(){
				var item = $(this).closest('.row');
				helper.height(helper.height()+item.innerHeight());
				if(item[0]!=ui[0]) {
					helper.append(item.clone());
					$(this).closest('.row').remove();
				}
				else {
					helper.append(ui.clone());
					item.find('input[type="checkbox"][name*="check"]').attr('checked', false);
				}
			});
			return helper;			
		},	
 		start: function(event, ui) {
  			if(ui.helper.children('.row').size()>0)
				$('.ui-sortable-placeholder').height(ui.helper.height());
		},
		beforeStop:function(event, ui){
			if(ui.helper.children('.row').size()>0){
				ui.helper.children('.row').each(function(){
					$(this).insertBefore(ui.item);
				});
				ui.item.remove();
			}
		},
		update:function(event, ui)
		{
			$("#list_form input[name*='check']").attr('checked', false);
			$("#list_form").ajaxSubmit(function() {
				colorize();
			});
		}
	});
	

	// Перенос товара на другую страницу
	$("#action select[name=action]").change(function() {
		if($(this).val() == 'move_to_page')
			$("span#move_to_page").show();
		else
			$("span#move_to_page").hide();
	});
	$("#pagination a.droppable").droppable({
		activeClass: "drop_active",
		hoverClass: "drop_hover",
		tolerance: "pointer",
		drop: function(event, ui){
			$(ui.helper).find('input[type="checkbox"][name*="check"]').attr('checked', true);
			$(ui.draggable).closest("form").find('select[name="action"] option[value=move_to_page]').attr("selected", "selected");		
			$(ui.draggable).closest("form").find('select[name=target_page] option[value='+$(this).html()+']').attr("selected", "selected");
			$(ui.draggable).closest("form").submit();
			return false;	
		}		
	});


	// Перенос товара в другую категорию
	$("#action select[name=action]").change(function() {
		if($(this).val() == 'move_to_category')
			$("span#move_to_category").show();
		else
			$("span#move_to_category").hide();
	});
	$("#right_menu .droppable.category").droppable({
		activeClass: "drop_active",
		hoverClass: "drop_hover",
		tolerance: "pointer",
		drop: function(event, ui){
			$(ui.helper).find('input[type="checkbox"][name*="check"]').attr('checked', true);
			$(ui.draggable).closest("form").find('select[name="action"] option[value=move_to_category]').attr("selected", "selected");	
			$(ui.draggable).closest("form").find('select[name=target_category] option[value='+$(this).attr('category_id')+']').attr("selected", "selected");
			$(ui.draggable).closest("form").submit();
			return false;			
		}
	});


	// Перенос товара в другой бренд
	$("#action select[name=action]").change(function() {
		if($(this).val() == 'move_to_brand')
			$("span#move_to_brand").show();
		else
			$("span#move_to_brand").hide();
	});
	$("#right_menu .droppable.brand").droppable({
		activeClass: "drop_active",
		hoverClass: "drop_hover",
		tolerance: "pointer",
		drop: function(event, ui){
			$(ui.helper).find('input[type="checkbox"][name*="check"]').attr('checked', true);
			$(ui.draggable).closest("form").find('select[name="action"] option[value=move_to_brand]').attr("selected", "selected");			
			$(ui.draggable).closest("form").find('select[name=target_brand] option[value='+$(this).attr('brand_id')+']').attr("selected", "selected");
			$(ui.draggable).closest("form").submit();
			return false;			
		}
	});


	// Если есть варианты, отображать ссылку на их разворачивание
	if($("li.variant").size()>0)
		$("#expand").show();


	// Раскраска строк
	function colorize()
	{
		$("#list div.row:even").addClass('even');
		$("#list div.row:odd").removeClass('even');
	}
	// Раскрасить строки сразу
	colorize();


	// Показать все варианты
	$("#expand_all").click(function() {
		$("a#expand_all").hide();
		$("a#roll_up_all").show();
		$("a.expand_variant").hide();
		$("a.roll_up_variant").show();
		$(".variants ul li.variant").fadeIn('fast');
		return false;
	});


	// Свернуть все варианты
	$("#roll_up_all").click(function() {
		$("a#roll_up_all").hide();
		$("a#expand_all").show();
		$("a.roll_up_variant").hide();
		$("a.expand_variant").show();
		$(".variants ul li.variant").fadeOut('fast');
		return false;
	});

 
	// Показать вариант
	$("a.expand_variant").click(function() {
		$(this).closest("div.cell").find("li.variant").fadeIn('fast');
		$(this).closest("div.cell").find("a.expand_variant").hide();
		$(this).closest("div.cell").find("a.roll_up_variant").show();
		return false;
	});

	// Свернуть вариант
	$("a.roll_up_variant").click(function() {
		$(this).closest("div.cell").find("li.variant").fadeOut('fast');
		$(this).closest("div.cell").find("a.roll_up_variant").hide();
		$(this).closest("div.cell").find("a.expand_variant").show();
		return false;
	});

	// Выделить все
	$("#check_all").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', $('#list input[type="checkbox"][name*="check"]:not(:checked)').length>0);
	});	

	// Удалить товар
	$("a.delete").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
		$(this).closest("div.row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
		$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
		$(this).closest("form").submit();
	});
	
	// Дублировать товар
	$("a.duplicate").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
		$(this).closest("div.row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
		$(this).closest("form").find('select[name="action"] option[value=duplicate]').attr('selected', true);
		$(this).closest("form").submit();
	});
	
	// Показать товар
	$("a.enable").click(function() {
		var icon        = $(this);
		var line        = icon.closest("div.row");
		var id          = line.find('input[type="checkbox"][name*="check"]').val();
		var state       = line.hasClass('invisible')?1:0;
		icon.addClass('loading_icon');
		$.ajax({
			type: 'POST',
			url: 'ajax/update_object.php',
			data: {'object': 'product', 'id': id, 'values': {'visible': state}, 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
				icon.removeClass('loading_icon');
				if(state)
					line.removeClass('invisible');
				else
					line.addClass('invisible');				
			},
			dataType: 'json'
		});	
		return false;	
	});

	// Сделать хитом
	$("a.featured").click(function() {
		var icon        = $(this);
		var line        = icon.closest("div.row");
		var id          = line.find('input[type="checkbox"][name*="check"]').val();
		var state       = line.hasClass('featured')?0:1;
		icon.addClass('loading_icon');
		$.ajax({
			type: 'POST',
			url: 'ajax/update_object.php',
			data: {'object': 'product', 'id': id, 'values': {'featured': state}, 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
				icon.removeClass('loading_icon');
				if(state)
					line.addClass('featured');				
				else
					line.removeClass('featured');
			},
			dataType: 'json'
		});	
		return false;	
	});


	// Подтверждение удаления
	$("form").submit(function() {
		if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
			return false;	
	});
	
	
	// Бесконечность на складе
	$("input[name*=stock]").focus(function() {
		if($(this).val() == '∞')
			$(this).val('');
		return false;
	});
	$("input[name*=stock]").blur(function() {
		if($(this).val() == '')
			$(this).val('∞');
	});
});

<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_category_select_11964647145ae9b435765e06_45328374 */
if (!function_exists('smarty_template_function_category_select_11964647145ae9b435765e06_45328374')) {
function smarty_template_function_category_select_11964647145ae9b435765e06_45328374(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
						<option value='<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
'><?php
$__section_sp_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_1_total = $__section_sp_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_1_total !== 0) {
for ($__section_sp_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_1_iteration <= $__section_sp_1_total; $__section_sp_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
}
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'selected_id'=>$_smarty_tpl->tpl_vars['selected_id']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}}
/*/ smarty_template_function_category_select_11964647145ae9b435765e06_45328374 */
/* smarty_template_function_categories_tree_11964647145ae9b435765e06_45328374 */
if (!function_exists('smarty_template_function_categories_tree_11964647145ae9b435765e06_45328374')) {
function smarty_template_function_categories_tree_11964647145ae9b435765e06_45328374(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

	<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['categories']->value[0]->parent_id == 0) {?>
		<li <?php if (!$_smarty_tpl->tpl_vars['category']->value->id) {?>class="selected"<?php }?>><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('category_id'=>null,'brand_id'=>null),$_smarty_tpl ) );?>
">Все категории</a></li>	
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
		<li category_id="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?>class="selected"<?php } else { ?>class="droppable category"<?php }?>><a href='<?php ob_start();
echo $_smarty_tpl->tpl_vars['c']->value->id;
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'page'=>null,'category_id'=>$_prefixVariable1),$_smarty_tpl ) );?>
'><?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
</a></li>
		<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree', array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories), true);?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<?php }?>
	<?php
}}
/*/ smarty_template_function_categories_tree_11964647145ae9b435765e06_45328374 */
}
