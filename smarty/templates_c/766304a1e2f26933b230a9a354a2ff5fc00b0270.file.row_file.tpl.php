<?php /* Smarty version Smarty-3.0.8, created on 2012-01-15 23:36:24
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/uptobox/templates/private/user/files/row_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12598998244f1362f81190d9-91759151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '766304a1e2f26933b230a9a354a2ff5fc00b0270' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/uptobox/templates/private/user/files/row_file.tpl',
      1 => 1326670574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12598998244f1362f81190d9-91759151',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/XAMPP/xamppfiles/htdocs/uptobox/smarty/libs/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->getVariable('aFile',null,true,false)->value)&&$_smarty_tpl->getVariable('aFile')->value==''){?>
	<div class="alert-message block-message warning">
        <p><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_init_message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong> <?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_init_message2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
        <div class="alert-actions">
          <a id="bnew" onclick="createFolder('<?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_options_create_new_folder<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');" href="#" class="btn small">
          	<img style="width:20px;vertical-align:bottom" src="<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
imagenes/iconos/icon_button_folder.png"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_options_new_folder<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

          </a> 
          
          <a href="#" class="btn small">
          	<img style="width:20px;vertical-align:bottom" src="<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
imagenes/iconos/icon_button_upload.png"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_options_upload_file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

          </a>
        </div>
      </div>
 <?php }else{ ?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aFile')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<tr style="border-bottom: 1px solid  #DDDDDD;" id="more_options_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
">
		<td>
			<div id="sprite_file" style="float:left;width:42px;margin-bottom: 5px;margin-top: 5px;">
				 <img style="vertical-align:bottom" src="<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
images/icons/icon_folder.png"/>
		    </div>
		    <div id="data_file" style="margin-bottom: 5px;margin-top: 5px;">     
		         <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</h3>
		         <span class="gris"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_update_name_file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span class="gris"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['fecha'],"%d/%m/%Y");?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_update_name_file2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></span>
		         <?php if ($_smarty_tpl->tpl_vars['item']->value['id_usuario']!=$_smarty_tpl->getVariable('id_usuario')->value){?>
		         	 <a class="azul" style=" clear:right;" href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['apellidos_usuario'];?>
</a>
		        <?php }else{ ?>
		         <a class="azul" style=" clear:right;" href="<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
user/profile"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_options_you<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></a>
				<ul class="options_list right">
					<li class="op_more">
					 	<a id="more_options_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
" data-placement="above" rel='twipsy'  href="#" data-original-title='More Options'></a>
					 	<script>
					 		$("#more_options_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
").contextMenu({
									menu: 'myMenu',
									leftButton: false
								}, function(action, el, pos) {
									
									if (action == 'open'){
											
											cambiarUrl('/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
');
											
											$.ajax({
										            type: 'POST',
										            url: '<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
user/path/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
',
										            data: '',
										            // before: mostrarVentanaCargando(),
										            // complete: ocultarVentanaCargando(), 
										            success: function(data) {
											        	var result = jQuery.parseJSON(data);
															$("#loading").toggle();
															$('#loading').delay(2000).fadeOut(400);
															$('#row_file').html(result[0]);
															$('#id_padre').val(result[1]);
														
										            }
										        });
										
									}else if (action == 'settings_folder'){
										displaySettingsFolder(tx_titulo_display,<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
);
									}else if (action == 'new_tab'){
										window.open('<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
user/files/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
');
									}
									
								});
					 		
					 	</script>
					</li>
				</ul>
			</div>
			  <!-- The Modal Dialog Folder Property-->
			  <div id="modal-folder-property_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
" class="modal hide fade" style="width:500px;">
			  	<form  method="post" id="form_ver_carpeta_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
" name="form_ver_carpeta_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
" class="form_mensaje">
				    <div class="modal-header">
				    	<img style="vertical-align:bottom" src="<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
imagenes/iconos/icon_folder.png"/>
					    <span style="font-size:22px;color:#525252;font-weight: bold;" id="titulo_archivo"></span>
					    <a href="#" class="close">&times;</a><br/>
				    </div>
				    <div class="modal-body">
				    	<div id="mensaje" style="display:none">
							<div id="error" class="alert-message">
							    <p id="retorno_usuario"></p>
						    </div>
					 	</div>
				    	<h4 style="color: #666666"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h4>
						<input type="text" class="span8 required" id="nombre" name="nombre" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_name_placeholder<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
				      <p id="textoobj"></p>
				    </div>
				    <div class="modal-footer" style="text-align:right;">
				    	<input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $_smarty_tpl->getVariable('id_usuario')->value;?>
"/> 
				    	<input type="button" href="#" class="btn small close bold azul" style="margin-top: 0px;opacity: 1;" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_button_cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
						<input type="submit" id="baceptar" name="baceptar" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_button_accept<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn small bold azul"/>
						
			  		</div>
		  		</form>
			  </div>
		</td>
	</tr>
	<?php }} ?>
<?php }?>
