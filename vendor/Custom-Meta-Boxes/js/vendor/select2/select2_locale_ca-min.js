!function($){"use strict";$.fn.select2.locales.ca={formatNoMatches:function(){return"No s'ha trobat cap coincidència"},formatInputTooShort:function(t,n){var e=n-t.length;return"Introduïu "+e+" caràcter"+(1==e?"":"s")+" més"},formatInputTooLong:function(t,n){var e=t.length-n;return"Introduïu "+e+" caràcter"+(1==e?"":"s")+"menys"},formatSelectionTooBig:function(t){return"Només podeu seleccionar "+t+" element"+(1==t?"":"s")},formatLoadMore:function(t){return"S'estan carregant més resultats…"},formatSearching:function(){return"S'està cercant…"}},$.extend($.fn.select2.defaults,$.fn.select2.locales.ca)}(jQuery);