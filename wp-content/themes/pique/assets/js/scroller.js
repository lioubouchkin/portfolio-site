// Manage sidemenu on the "Compétences Techniques" page
jQuery(function( $ ){
    var $primaryMenu = $( '#primary-menu' );
    var $adminBar = $( '#wpadminbar' );

    var yCoord = ( 1 === $adminBar.length && $( window ).outerWidth() > 480 ) ? $adminBar.outerHeight() : 0;
    var offset = $( window ).outerWidth() > 768 ? $primaryMenu.outerHeight() : 0;
//    $('#menu-item-97:eq(0)').click(function(){
    $('#menu-item-97:eq(0)').click(function(){
        $.scrollTo( $('#section1'), {
            duration: 1000,
            offset: { 'top': -1 * ( yCoord + offset ) }
        });
    });
//    $('#menu-item-98:eq(0)').click(function(){
    $('#menu-item-98:eq(0)').click(function(){
        $.scrollTo( $('#section2'), {
            duration: 1000,
            offset: { 'top': -1 * ( yCoord + offset ) }
        });
    });
//    $('#menu-item-99:eq(0)').click(function(){
    $('#menu-item-99:eq(0)').click(function(){
        $.scrollTo( $('#section3'), {
            duration: 1000,
            offset: { 'top': -1 * ( yCoord + offset ) }
        });
    });
});

// Manage sidemenu on the "Compétences Relationnelles et Organisationnelles" page
jQuery(function( $ ){
    var $primaryMenu = $( '#primary-menu' );
    var $adminBar = $( '#wpadminbar' );

    var yCoord = ( 1 === $adminBar.length && $( window ).outerWidth() > 480 ) ? $adminBar.outerHeight() : 0;
    var offset = $( window ).outerWidth() > 768 ? $primaryMenu.outerHeight() : 0;
    $('#menu-item-140:eq(0)').click(function(){
        $.scrollTo( $('#section1'), {
            duration: 1000,
            offset: { 'top': -1 * ( yCoord + offset ) }
        });
    });
    $('#menu-item-141:eq(0)').click(function(){
        $.scrollTo( $('#section2'), {
            duration: 1000,
            offset: { 'top': -1 * ( yCoord + offset ) }
        });
    });
    $('#menu-item-142:eq(0)').click(function(){
        $.scrollTo( $('#section3'), {
            duration: 1000,
            offset: { 'top': -1 * ( yCoord + offset ) }
        });
    });
});