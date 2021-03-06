{literal}
	
<script type="text/javascript">
	$(document).ready(function() {
		$('#topbar').dropdown();
		$(".tab_content").hide(); //Esconde todo el contenido
		$("ul.tabs li:first").addClass("active").show(); //Activa la primera tab
		$(".tab_content:first").show(); //Muestra el contenido de la primera tab
		
		$("ul.tabs li").click(function() {


		$("ul.tabs li").removeClass("active"); //Elimina las clases activas
	
		$(this).addClass("active"); //Agrega la clase activa a la tab seleccionada
	
		$(".tab_content").hide(); //Esconde todo el contenido de la tab
	
		var activeTab = $(this).find("a").attr("href"); //Encuentra el valor del atributo href para identificar la tab activa + el contenido
		
		if(activeTab=='#profile'){
			ruta="profile";
		}
		else if(activeTab=='#general'){
			ruta="general";
		}

		$("#loading").show();	
		$.ajax({
			      type: "POST",
			      url: '{/literal}{$RUTA_WEB_ABSOLUTA}{literal}user/tabs/'+ruta,
		      	  success:function(data){
		      	  	var result = jQuery.parseJSON(data);
					$("#loading").hide();
					$(activeTab).html(result);
					$(activeTab).fadeIn(); //Agrega efecto de transición (fade) en el contenido activo
		      	  }
			});
			
			
		
			return false;
	
		});
	});
</script>

{/literal}
<div class="topbar" data-dropdown="dropdown">
	<div class="topbar-inner">
		<span id="loading" class="label important right" style="display:none;margin-top: 7px;margin-right: 5px;">Loading...</span>
  		<div class="container" style="width:980px">
			<a id="brand" class="brand margin-top-1" href="{if $LOGUEADO}{$RUTA_WEB_ABSOLUTA}user/files{else}{$RUTA_WEB_ABSOLUTA}{/if}"><img src="{$IMAGES_URL}/logos/logo.png" /></a>
			{if $LOGUEADO}
			<ul class="nav">
				<li {if isset($menu_principal) && $menu_principal=='files'}class="active"{/if}>
					<a href="{$RUTA_WEB_ABSOLUTA}user/files" >{translate}tx_menu_fichero{/translate}</a>
				</li>
				<li {if isset($menu_principal) && $menu_principal=='contact'}class="active"{/if}>
						<a href="{$RUTA_WEB_ABSOLUTA}personal" {if isset($menu_principal) && $menu_principal=='contact'}class="seleccionado"{/if}>{translate}tx_menu_colaboradores{/translate}</a>
				</li>
			
				<li class="dropdown {if isset($menu_principal) && $menu_principal=='myaccount'} active {/if}">
						<a href="#" class="dropdown-toggle">{translate}tx_menu_mi_cuenta{/translate}</a>
						<ul class="dropdown-menu">
							<li>
								<a class="azul" href="{$RUTA_WEB_ABSOLUTA}user/profile">
									<div class="bd">
					        				<table>
					        					<tr>
					        						<td>
					        						{if $foto==""}
					        							<img style="border: 1px solid #CCC" src="{$RUTA_WEB_ABSOLUTA}libs/php/rescalado_imagen/image.php/{$RUTA_WEB_ABSOLUTA}images/iconos/icon_avatar_grande.png?width=30&amp;image={$RUTA_WEB_ABSOLUTA}images/iconos/icon_avatar_grande.png"  alt="avatar-grande" />
					        						{else}
					        							<img style="border: 1px solid #CCC" src="{$RUTA_WEB_ABSOLUTA}libs/php/rescalado_imagen/image.php/{$RUTA_WEB_ABSOLUTA}datas/users/{$id_usuario}/profile/{$foto}?width=30&amp;image={$RUTA_WEB_ABSOLUTA}datas/users/{$id_usuario}/profile/{$foto}"  alt="avatar-grande" />
					        						{/if}	
					        						</td>
					        						<td>
					        							<span class="azul" style="float:left;font-weight: bold;">{$nombre_usuario}</span>
					     				     			<span style="float:left;" class="azul margin-top-5" >{translate}tx_lat_izq_acceder_perfil{/translate}</span>
					        						</td>
				        					</tr>
				        				</table>
				        			</div>
								
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="azul" href="{$RUTA_WEB_ABSOLUTA}logout"><span class="azul" >{translate}tx_menu_desconectarse{/translate}</span></a>
							</li>
						</ul>
					</li>
			</ul>
			<ul class="nav secondary-nav" style="margin-right: 10px;">
           		<li class="menu" data-dropdown="menu">
           			{if $LOGUEADO}
						<form action="" class="pull-left">
			          	  <input type="text" placeholder="{translate}tx_search_file{/translate}">
			          	</form>
			          	
					{/if}
				</li>
			</ul>
			{else}
			<ul class="nav">
				<li {if isset($menu_principal) && $menu_principal=='inicio'}class="active"{/if}>
					<a href="{$RUTA_WEB_ABSOLUTA}" >{translate}tx_menu_inicio{/translate}</a>
				</li>
				<li {if isset($menu_principal) && $menu_principal=='como_funciona'}class="active"{/if}><a href="{$RUTA_WEB_ABSOLUTA}personal" {if isset($menu_principal) && $menu_principal=='pagina_personal'}class="seleccionado"{/if}>{translate}tx_menu_personal{/translate}</a></li>
				<li {if isset($menu_principal) && $menu_principal=='como_funciona'}class="active"{/if}><a href="{$RUTA_WEB_ABSOLUTA}empresas" {if isset($menu_principal) && $menu_principal=='pagina_empresa'}class="seleccionado"{/if}>{translate}tx_menu_empresa{/translate}</a></li>
				<li {if isset($menu_principal) && $menu_principal=='como_funciona'}class="active"{/if}><a href="{$RUTA_WEB_ABSOLUTA}como_funciona" {if isset($menu_principal) && $menu_principal=='como_funciona'}class="seleccionado"{/if}>{translate}tx_menu_planes_pago{/translate}</a></li>
				<li {if isset($menu_principal) && $menu_principal=='crea_tu_perfil'}class="active"{/if}><a href="{$RUTA_WEB_ABSOLUTA}planes_precios" {if isset($menu_principal) && $menu_principal=='pagina_precios'}class="seleccionado"{/if}>{translate}tx_menu_precios{/translate}</a></li>
				<li {if isset($menu_principal) && $menu_principal=='faqs'}class="active"{/if}><a href="{$RUTA_WEB_ABSOLUTA}faqs" >{translate}tx_menu_faqs{/translate}</a></li>
			</ul>
			<ul class="nav secondary-nav" style="margin-right: 10px;">
           		<li class="menu" data-dropdown="menu">
           			<button class="btn small primary margin-top-5" onclick="location.href='{$RUTA_WEB_ABSOLUTA}login'">{translate}tx_login{/translate}</button>
           			<ul class="dropdown-menu">
							<li><a href="{$RUTA_WEB_ABSOLUTA}user/profile">{translate}tx_menu_conf_perfil{/translate}</a></li>
							<li class="divider"></li>
							<li><a href="{$RUTA_WEB_ABSOLUTA}logout">{translate}tx_menu_desconectarse{/translate}</a></li>
					</ul>
				</li>
			</ul>
			{/if}
		</div>
	</div>
	{if $LOGUEADO}
	
	<div  class="page-header">
			<div class="wrapper-all">
					{if isset($menu_principal) && $menu_principal!='myaccount'}
		       		<a href="#" id="tree_collapse" onclick="$('#tree').toggle();" style="color:#3376A4;background: none"><img src="{$RUTA_WEB_ABSOLUTA}images/icons/icon_tree.png"/>{translate}tx_root_tree{/translate}</a>
		       		<div id="sub_root_tree" style="display:none;"></div>
					<div id="tree" style="color:#222; display: none;
									    left: 215px;
									    position: absolute;
									    top: 79px;
									    width: 325px;
									    z-index: 10;"><!-- When using initAjax, it may be nice to put a throbber here, that spins until the initial content is loaded: -->
				  	</div>
				  	{/if}
		          	<table class="page_table">
        					<tr>
        						<td>
        							<h1 id="title_root">{if isset($menu_principal) && $menu_principal=='files'}{translate}tx_sub_file{/translate}{elseif isset($menu_principal) && $menu_principal=='myaccount'}{translate}tx_sub_myaccount{/translate}{/if} <small>{if $menu_principal == 'files'}{translate}tx_sub_message{/translate}{/if}</small></h1>			
        							  <div id="tabs_menu" style="float:left;margin-bottom:-3px;">
        							    <ul class="tabs">
									    	<li style="background-color:#fff">
									    		<a href="#profile" style="line-height:10px; color:#545454;font-weight: bold;background-color:#fff;background-image: none;">{if isset($menu_principal) && $menu_principal=='files'}{translate}tx_sub_file{/translate}{elseif isset($menu_principal) && $menu_principal=='myaccount'}{translate}tx_tabs_profile{/translate}{/if}</a>
									    	</li>
									    	{if isset($menu_principal) && $menu_principal=='myaccount'}
									    	<li>
									    		<a href="#general" style="line-height:10px; color:#545454;font-weight: bold;background-image: none;">{if isset($menu_principal) && $menu_principal=='files'}{translate}tx_sub_file{/translate}{elseif isset($menu_principal) && $menu_principal=='myaccount'}{translate}tx_tabs_profile_general{/translate}{/if}</a>
									    	</li>
									    	{/if}
									    </ul>
									   </div>
        						</td>
        						<td>
        						
        						</td>
        						<td style="width:22%; ">
        							{if $foto==""}
        							<a href="{$RUTA_WEB_ABSOLUTA}user/profile">
        								<img style="float:left;border: 1px solid #CCC;padding:4px;" src="{$RUTA_WEB_ABSOLUTA}libs/php/rescalado_imagen/image.php/{$RUTA_WEB_ABSOLUTA}images/iconos/icon_avatar_grande.png?width=40&amp;image={$RUTA_WEB_ABSOLUTA}images/iconos/icon_avatar_grande.png"  alt="avatar-grande" />
	        						</a>
	        						{else}
	        						<a href="{$RUTA_WEB_ABSOLUTA}user/profile">
	        							<img style="float:left;border: 1px solid #CCC;padding:4px;" src="{$RUTA_WEB_ABSOLUTA}libs/php/rescalado_imagen/image.php/{$RUTA_WEB_ABSOLUTA}datas/users/{$id_usuario}/profile/{$foto}?width=40&amp;image={$RUTA_WEB_ABSOLUTA}datas/users/{$id_usuario}/profile/{$foto}"  alt="avatar-grande" />
	        						</a>
	        						{/if}	
	        						<div style="float:left;margin-top:30px;margin-left:4px;">
     				     				<a class="enlace-color" href="{$RUTA_WEB_ABSOLUTA}logout"><span class="azul" style="background-color:#F5F5F5;padding:2px;">{translate}tx_menu_desconectarse{/translate}</span></a>
     				     				<span class="label warning">Upgrade</span>
     				     			</div>
        						</td>
        					</tr>
        				</table>
		    </div>
	</div>
	{/if}
</div>

