!function($){"use strict";$.fn.select2.locales.no={formatNoMatches:function(){return"Ingen treff"},formatInputTooShort:function(e,n){var t=n-e.length;return"Vennligst skriv inn "+t+(t>1?" flere tegn":" tegn til")},formatInputTooLong:function(e,n){return"Vennligst fjern "+(e.length-n)+" tegn"},formatSelectionTooBig:function(e){return"Du kan velge maks "+e+" elementer"},formatLoadMore:function(e){return"Laster flere resultater…"},formatSearching:function(){return"Søker…"}},$.extend($.fn.select2.defaults,$.fn.select2.locales.no)}(jQuery);