<?php /* Smarty version Smarty-3.0.8, created on 2012-01-18 00:39:24
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/uptobox/templates/private/user/files/row_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16294373604f1614bc535593-97655852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '766304a1e2f26933b230a9a354a2ff5fc00b0270' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/uptobox/templates/private/user/files/row_file.tpl',
      1 => 1326846575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16294373604f1614bc535593-97655852',
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
	<tr style="border-bottom: 1px solid  #DDDDDD;" id="more_options_row_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
">
		<td>
			<div id="sprite_file" style="float:left;width:42px;margin-bottom: 5px;margin-top: 5px;">
				 <img style="vertical-align:bottom" src="<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
images/icons/icon_folder.png"/>
		    </div>
		    <div id="data_file" style="margin-bottom: 5px;margin-top: 5px;">     
		         <h3><a style="font-size:13px;color:#000;" href="#" onclick="loadPath('<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
' ,'<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
user/path/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
');"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</a></h3>
		         <span class="gris"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_update_name_file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span class="gris"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['fecha_update']);?>
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
									leftButton: true
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
															$('#title_root').html(result[3]);
														
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
								
								
								$("#more_options_row<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
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
															$('#title_root').html(result[3]);
															
														
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
			  	<form  method="post" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
"  name="form-ver-carpeta_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
" class="edit_submit">
				    <div class="modal-header">
				    	<img style="vertical-align:bottom" src="<?php echo $_smarty_tpl->getVariable('RUTA_WEB_ABSOLUTA')->value;?>
imagenes/iconos/icon_folder.png"/>
					    <span style="font-size:22px;color:#525252;font-weight: bold;" id="titulo_archivo"></span>
					    <a href="#" class="close">&times;</a><br/>
				    </div>
				    <div class="modal-body">
				    	<div id="mensaje_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
" style="display:none">
							<div id="error" class="alert-message">
							    <p id="retorno_usuario"></p>
						    </div>
					 	</div>
					 	<fieldset>
					 	<div class="clearfix">
				 			<label for="tx_form_name"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label>
				    		<div class="input">
				    			<div class="inline-inputs">
									<input type="text" class="span6 required" style="padding-left:4px;" id="nombre" name="nombre" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_name_placeholder<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_tmp1)){?><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
<?php }?>">
				      				<p id="textoobj"></p>
				      			</div>
				      		</div>
				      	</div>
				      	<div class="clearfix">
				      			<label for="tx_form_description"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_name_optional<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
				    			<div class="input">
				    				<div class="inline-inputs">
										<textarea  rows="3" class="span6 required" id="descripcion" name="descripcion" style="width: 331px; height: 88px;padding-left:4px"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_tmp2)){?><?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>
<?php }?></textarea>
				      					<p id="textoobj"></p>
				      				</div>
				      			</div>
				      	</div>
				      	<div class="clearfix">
				      			<label for="tx_form_location"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_location<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label>
				    			<div class="input">
				    				<div class="inline-inputs">
										<label for="form_location" class="span6 font-weight-normal"><?php if (isset($_smarty_tpl->getVariable('name_parent_folder',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('name_parent_folder')->value;?>
<?php }?></label>
				      					<p id="textoobj"></p>
				      				</div>
				      			</div>
				      	</div>
				      	<div class="clearfix">
				      			<label for="tx_form_owner"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_owner<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label>
				    			<div class="input">
				    				<div class="inline-inputs">
										<label for="form_owner" class="span6 font-weight-normal"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['nombre_usuario'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre_usuario'];?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['item']->value['apellidos_usuario'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['apellidos_usuario'];?>
<?php }?></label>
				      					<p id="textoobj"></p>
				      				</div>
				      			</div>
				      	</div>
				      	<div class="clearfix">
				      			<label for="tx_form_size"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_size<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label>
				    			<div class="input">
				    				<div class="inline-inputs">
										<label for="form_size" class="span6 font-weight-normal"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['max_size'])){?><?php echo Settings::getByteSize($_smarty_tpl->tpl_vars['item']->value['max_size']);?>
<?php }?></label>
				      					<p id="textoobj"></p>
				      				</div>
				      			</div>
				      	</div>
				      	<div class="clearfix">
				      			<label for="tx_form_created"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label>
				    			<div class="input">
				    				<div class="inline-inputs">
										<label for="form_created" class="span6 font-weight-normal"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['fecha'])){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['fecha']);?>
<?php }?></label>
				      					<p id="textoobj"></p>
				      				</div>
				      			</div>
				      	</div>
				      	<div class="clearfix">
				      			<label for="tx_form_update"><?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_form_update<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label>
				    			<div class="input">
				    				<div class="inline-inputs">
										<label for="form_update" class="span6 font-weight-normal"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['fecha_update'])){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['fecha_update']);?>
<?php }?></label>
				      					<p id="textoobj"></p>
				      				</div>
				      			</div>
				      	</div>
				      </fieldset>
				    </div>
				    <div class="modal-footer" style="text-align:center;">
				    	<input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $_smarty_tpl->getVariable('id_usuario')->value;?>
"/> 
				    	<input type="hidden" name="id_archivo" id="id_archivo" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
"/> 
				    	<input type="hidden" name="id_padre" id="id_padre" value="<?php echo $_smarty_tpl->getVariable('id_padre')->value;?>
"/> 
						<input  type="submit"  id="baceptar_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_archivo'];?>
" name="baceptar" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_button_accept<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn small bold azul "/>
						<input type="button" href="#"  class="btn small close bold azul" style="margin-top: 0px;opacity: 1;float:none;" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('translate', array()); $_block_repeat=true; Localizer::translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tx_button_cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Localizer::translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
						
			  		</div>
		  		</form>
			  </div>
		</td>
	</tr>
	<?php }} ?>
<?php }?>
