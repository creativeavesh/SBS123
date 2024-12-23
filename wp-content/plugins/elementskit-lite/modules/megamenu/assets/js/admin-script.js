jQuery(document).ready((function(e){"use strict";e(".elementskit-menu-wpcolor-picker").wpColorPicker();var t,n,i,a=e(".elementskit-menu-icon-picker").fontIconPicker(),m=window.elementskit_megamenu_nonce;e(document).on("click",".elementskit-menu-item-save",(function(){var t=e(this).parent().find(".spinner"),n={settings:{menu_id:e("#elementskit-menu-modal-menu-id").val(),menu_has_child:e("#elementskit-menu-modal-menu-has-child").val(),menu_enable:e("#elementskit-menu-item-enable:checked").val(),menu_icon:e("#elementskit-menu-icon-field").val(),menu_icon_color:e("#elementskit-menu-icon-color-field").val(),menu_badge_text:e("#elementskit-menu-badge-text-field").val(),menu_badge_color:e("#elementskit-menu-badge-color-field").val(),menu_badge_background:e("#elementskit-menu-badge-background-field").val(),vertical_menu_width:e("#elementskit-menu-vertical-menu-width-field").val(),mobile_submenu_content_type:e("#mobile_submenu_content_type input[name=content_type]:checked").val(),vertical_megamenu_position_type:e("#vertical_megamenu_position_type input[name=position_type]:checked").val(),megamenu_width_type:e("#xs_megamenu_width_type input[name=width_type]:checked").val(),megamenu_ajax_load:e("#enable_ajax_load input[name=megamenu_ajax_load]:checked").val()},nocache:Math.floor(Date.now()/1e3)};t.addClass("loading"),e.ajax({url:window.elementskit.resturl+"megamenu/save_menuitem_settings",type:"get",data:n,headers:{"X-WP-Nonce":window.elementskit_megamenu_nonce},dataType:"json",success:function(n){t.removeClass("loading"),e("#elementskit-menu-item-settings-modal").modal("hide")}})})),e("#elementskit-menu-builder-trigger").on("click",(async function(){let t=e("#elementskit-menu-modal-menu-id").val(),n=e("#elementskit-menu-builder-iframe"),i=window.elementskit.resturl+"dynamic-content/content_editor/megamenu/menuitem"+t;try{const e=await fetch(i,{method:"GET",headers:{"Content-Type":"application/json","X-WP-Nonce":m}});if(!e.ok)throw new Error(`HTTP error! status: ${e.status}`);n.attr("src",e.url),n.loading="lazy"}catch(a){console.error("Error:",a)}})),e("body").on("DOMSubtreeModified","#menu-to-edit",(function(){setTimeout((function(){e("#menu-to-edit li.menu-item").each((function(){var t=e(this);t.find(".elementskit_menu_trigger").length<1&&e(".item-title",t).append("<a data-attr-toggle='modal' data-target='#attr_menu_control_panel_modal' href='#' class='elementskit_menu_trigger'>Mega Menu</a> ")}))}),200)})),e("#menu-to-edit").trigger("DOMSubtreeModified"),e("#menu-to-edit").on("click",".elementskit_menu_trigger",(function(t){t.preventDefault();var n=e("#attr_menu_control_panel_modal"),i=e(this).parents("li.menu-item"),m=parseInt(i.attr("id").match(/[0-9]+/)[0],10);if(i.find(".menu-item-title").text(),i.attr("class").match(/\menu-item-depth-(\d+)\b/)[1],e(".ekit_menu_control_nav > li").removeClass("attr-active"),e(".attr-tab-pane").removeClass("attr-active"),e(this).parents(".menu-item").hasClass("menu-item-depth-0")){var l=0;n.removeClass("elementskit-menu-has-child"),e("#attr_content_nav").addClass("attr-active"),e("#attr_content_tab").addClass("attr-active")}else l=1,n.addClass("elementskit-menu-has-child"),e("#attr_icon_nav").addClass("attr-active"),e("#attr_icon_tab").addClass("attr-active");e("#elementskit-menu-modal-menu-id").val(m),e("#elementskit-menu-modal-menu-has-child").val(l);var o={menu_id:m,nocache:Math.floor(Date.now()/1e3)};e.ajax({url:window.elementskit.resturl+"megamenu/get_menuitem_settings",type:"get",data:o,headers:{"X-WP-Nonce":window.elementskit_megamenu_nonce},dataType:"json",success:function(t){e("#elementskit-menu-item-enable").prop("checked",!1),e("#elementskit-menu-icon-color-field").wpColorPicker("color",t.menu_icon_color),e("#elementskit-menu-icon-field").val(t.menu_icon),e("#elementskit-menu-badge-text-field").val(t.menu_badge_text),e("#elementskit-menu-badge-color-field").wpColorPicker("color",t.menu_badge_color),e("#elementskit-menu-badge-background-field").wpColorPicker("color",t.menu_badge_background),e("#elementskit-menu-vertical-menu-width-field").val(t.vertical_menu_width),"undefined"!=typeof t.menu_enable&&1==t.menu_enable?e("#elementskit-menu-item-enable").prop("checked",!0):e("#elementskit-menu-item-enable").prop("checked",!1),e("#mobile_submenu_content_type input").prop("checked",!1),"undefined"==typeof t.mobile_submenu_content_type||"builder_content"==t.mobile_submenu_content_type?e("#mobile_submenu_content_type input[value=builder_content]").prop("checked",!0):e("#mobile_submenu_content_type input[value=submenu_list]").prop("checked",!0),e("#vertical_megamenu_position_type input").prop("checked",!1),"undefined"==typeof t.vertical_megamenu_position_type||"relative_position"==t.vertical_megamenu_position_type?e("#vertical_megamenu_position_type input[value=relative_position]").prop("checked",!0):e("#vertical_megamenu_position_type input[value=top_position]").prop("checked",!0),e("#enable_ajax_load input").prop("checked",!1),"undefined"==typeof t.megamenu_ajax_load||"no"==t.megamenu_ajax_load?e("#enable_ajax_load input[value=no]").prop("checked",!0):e("#enable_ajax_load input[value=yes]").prop("checked",!0),e("#xs_megamenu_width_type input").removeAttr("checked"),"undefined"==typeof t.megamenu_width_type||"default_width"==t.megamenu_width_type?(e("#xs_megamenu_width_type input[value=default_width]").attr("checked","checked"),e("#xs_megamenu_width_type input[value=default_width]").prop("checked",!0)):"undefined"==typeof t.megamenu_width_type||"full_width"==t.megamenu_width_type?(e("#xs_megamenu_width_type input[value=full_width]").prop("checked",!0),e("#xs_megamenu_width_type input[value=full_width]").attr("checked","checked")):(e("#xs_megamenu_width_type input[value=custom_width]").prop("checked",!0),e("#xs_megamenu_width_type input[value=custom_width]").attr("checked","checked")),e("#attr_vertical_menu_setting_tab").on("change",'input[type="radio"]',(function(){e("#width_type_custom").is(":checked")?e(".menu-width-container").addClass("is_enabled"):e(".menu-width-container").removeClass("is_enabled")})).trigger("change"),e("#width_type_custom").is(":checked")?e(".menu-width-container").addClass("is_enabled"):e(".menu-width-container").removeClass("is_enabled"),e("#elementskit-menu-item-enable").trigger("change"),a.refreshPicker(),setTimeout((function(){n.removeClass("elementskit-menu-modal-loading")}),500)}})})),e("#elementskit-menu-item-enable").on("change",(function(){e(this).is(":checked")?(e("#elementskit-menu-builder-trigger").prop("disabled",!1),e("#elementskit-menu-builder-warper").addClass("is_enabled")):(e("#elementskit-menu-item-enable").prop("checked",!1),e("#elementskit-menu-builder-warper").removeClass("is_enabled"),e("#elementskit-menu-builder-trigger").prop("disabled",!0))})),e("#post-body-content").on("change.ekit","#elementskit-menu-metabox-input-is-enabled",(function(){e(this).is(":checked")?e("body").addClass("is_mega_enabled").removeClass("is_mega_disabled"):e("body").removeClass("is_mega_enabled").addClass("is_mega_disabled")})),e("#post-body-content").prepend(window.elementskit_options_megamenu_markup).find("#elementskit-menu-metabox-input-is-enabled").trigger("change.ekit"),t=e("#elementskit-menu-builder-modal"),n=document.getElementById("elementskit-menu-builder-iframe"),i=n.contentWindow||n.contentDocument,t.on("hide.bs.attr-modal",(function(e){i.jQuery("#elementor-panel-saver-button-publish").hasClass("elementor-disabled")||confirm("Changes you made may not be saved.")||e.preventDefault(),i.jQuery(i).off("beforeunload")}))}));