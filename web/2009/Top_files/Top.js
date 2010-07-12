// Created by iWeb 3.0.1 local-build-20100204

setTransparentGifURL('Media/transparent.gif');function applyEffects()
{var registry=IWCreateEffectRegistry();registry.registerEffects({reflection_1:new IWReflection({opacity:0.50,offset:1.00}),stroke_0:new IWStrokeParts([{rect:new IWRect(-1,1,2,18),url:'Top_files/stroke.png'},{rect:new IWRect(-1,-1,2,2),url:'Top_files/stroke_1.png'},{rect:new IWRect(1,-1,678,2),url:'Top_files/stroke_2.png'},{rect:new IWRect(679,-1,2,2),url:'Top_files/stroke_3.png'},{rect:new IWRect(679,1,2,18),url:'Top_files/stroke_4.png'},{rect:new IWRect(679,19,2,2),url:'Top_files/stroke_5.png'},{rect:new IWRect(1,19,678,2),url:'Top_files/stroke_6.png'},{rect:new IWRect(-1,19,2,2),url:'Top_files/stroke_7.png'}],new IWSize(680,20)),reflection_0:new IWReflection({opacity:0.50,offset:1.00})});registry.applyEffects();}
function hostedOnDM()
{return false;}
function onPageLoad()
{loadMozillaCSS('Top_files/TopMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');adjustLineHeightIfTooBig('id2');adjustFontSizeIfTooBig('id2');adjustLineHeightIfTooBig('id3');adjustFontSizeIfTooBig('id3');Widget.onload();fixupAllIEPNGBGs();fixAllIEPNGs('Media/transparent.gif');IMpreload('Top_files','shapeimage_2','0');IMpreload('Top_files','shapeimage_2','1');applyEffects()}
function onPageUnload()
{Widget.onunload();}
