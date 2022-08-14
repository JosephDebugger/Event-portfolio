
function splitScroll(){
    const controller = new ScrollMagic.controller();

    new ScrollMagic.Scene({
        duration : '100%' ,
        triggerElement:'.aside',
        triggerHook: 1
    })
    .setPin('.aside')
    .addIndicators()
    .addTo(controller);
}

splitScroll();
