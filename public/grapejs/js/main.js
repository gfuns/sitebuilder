const editor = grapesjs.init({
    container: "#editor",
    
    fromElement: true,
    width: "auto",
    storageManager: false,    
    
    blockManager:{
        appendTo: "#blocks",
        
    },    
    styleManager:{
        appendTo: "#styles-block",
    },
    layerManager:{
        appendTo: "#layers-block",
    },
    traitManager:{
        appendTo: "#traits-block",
    },
    selectorManager:{
        appendTo: "#styles-block",
    }, 
    panels:{
        defaults: [
            {
                id: "basic-actions",
                el: ".panel_basic-actions",
                buttons:[
                    {
                        id: "visibility",
                        active: true,
                        className: "btn-toggle-borders",
                        label: "<i class='bi bi-border'></i>",
                        command: "sw-visibility",
                    }, 
                ],
            },
            {
                id: "panel-devices",
                el: ".panel_devices",
                buttons: [
                    {
                        id: 'device-desktop',
                        label: '<i class="bi bi-laptop"></i>',
                        command: 'set-device-desktop',
                        active: true,
                        togglable: false,
                    },                        
                    {
                        id: 'device-mobile',
                        label: '<i class="bi bi-phone"></i>',
                        command: "set-device-mobile",
                        togglable: false,
                    },
                ],
            },
        ],
        
    },
    deviceManager:{
        devices: [
            {
                name: "Desktop",
                width: "",
            },
            {
                name: "Mobile",
                width: "320px",
                widthMedia: "480px"
            },
        ],
    },

    plugins:[
        "gjs-blocks-basic", 
        "grapesjs-plugin-forms", 
        'grapesjs-tooltip', 
        "grapesjs-custom-code", 
        'grapesjs-lory-slider', 
        'gjs-navbar', 
        'grapesjs-tabs', 
        "gjs-component-countdown",
    ],
    pluginsOpts:{
        "gjs-blocks-basic":{},
        'grapesjs-plugin-forms':{},        
        'grapesjs-tooltip':{},
        "grapesjs-custom-code":{},
        'grapesjs-lory-slider':{},
        'gjs-navbar':{},
        'grapesjs-tabs':{},
        "gjs-component-countdown":{},
    },
});


/**
 * Command to switch view for Desktop/Large View
 */
editor.Commands.add("set-device-desktop", {
    run: (editor) => editor.setDevice("Desktop"),
});

/**
 * Command to switch view for Mobile View
 */

editor.Commands.add("set-device-mobile", {
    run: (editor) => editor.setDevice("Mobile"),
});