
; /* Start:"a:4:{s:4:"full";s:105:"/bitrix/templates/xml_catalog/components/bitrix/menu/horizontal_multilevel_silver/script.js?1495024569543";s:6:"source";s:91:"/bitrix/templates/xml_catalog/components/bitrix/menu/horizontal_multilevel_silver/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
var jshover = function() {
	var horizontalMultilevelMenu = document.getElementById("horizontal-multilevel-menu");
	if(horizontalMultilevelMenu){
		var sfEls = horizontalMultilevelMenu.getElementsByTagName("li");
		for (var i=0; i<sfEls.length; i++) 
		{
			sfEls[i].onmouseover=function()
			{
				this.className+=" jshover";
			}
			sfEls[i].onmouseout=function() 
			{
				this.className=this.className.replace(new RegExp(" jshover\\b"), "");
			}
		}
	}
}

if (window.attachEvent) 
	window.attachEvent("onload", jshover);
/* End */
;; /* /bitrix/templates/xml_catalog/components/bitrix/menu/horizontal_multilevel_silver/script.js?1495024569543*/
