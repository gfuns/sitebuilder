<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Funnelium Project</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

        <script src="{{asset('js/popper.min.js')}}"></script>

        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <script src="{{asset('grapejs/js/grapes.min.js')}}"></script>

        <link rel="stylesheet" href="{{asset('grapejs/css/grapes.min.css')}}" />

        <link rel="stylesheet" href="{{asset('grapejs/css/grapes-code-editor.min.css')}}" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

        <script src="{{asset('grapejs/js/grapesjs-blocks-basic.min.js')}}"></script> 

        <script src="{{asset('grapejs/js/grapesjs-plugin-forms.min.js')}}"></script>

        <script src="{{asset('grapejs/js/grapesjs-component-countdown.min.js')}}"></script>

        <script src="{{asset('grapejs/js/grapesjs-custom-code.min.js')}}"></script>

        <script src="{{asset('grapejs/js/grapesjs-lory-slider.min.js')}}"></script>

        <script src="{{asset('grapejs/js/grapesjs-navbar.min.js')}}"></script>

        <script src="{{asset('grapejs/js/grapesjs-tabs.min.js')}}"></script>

        <script src="{{asset('grapejs/js/grapesjs-tooltip.min.js')}}"></script>

        <!-- Style and Script for Preset Webpage Builder -->
        <!-- <link rel="stylesheet" href="{{asset('grapejs/css/grapesjs-preset-webpage.min.css')}}" />
        <script src="{{asset('grapejs/js/grapesjs-preset-webpage.min.js')}}"></script> -->
        <link rel="stylesheet" href="{{asset('grapejs/css/main.css')}}" />
    </head>
    <body>
       


        <div id="navbar" class="sidenav d-flex flex-column overflow-scroll">
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h3 logo">Funnelium Logo</span>
                </div>
            </nav>
            <div class="my-2 d-flex flex-column">
                <button type="button" class="btn btn-outline-secondary btn-sm mx-2"
                data-bs-toggle="modal"
                data-bs-target="#addPageModal">
                    <i class="bi bi-file-earmark-plus"></i> Add Page
                </button>
                <ul class="list-group pages">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Home
                        <div class="m-2">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>                          
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">About Us
                    <div class="m-2">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button> 
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Contact Us
                    <div class="m-2">
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button> 
                        </div>
                    </li>
                </ul>            
            </div>
            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button 
                            class="nav-link active" 
                            id="block-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#block"
                            aria-selected="true" 
                            aria-controls="block"> 
                            <i class="bi bi-grid-fill" style="color: black"></i>
                        </button>

                    </li>
                    <li class="nav-item" role="presentation">
                        <button 
                            class="nav-link" 
                            id="layer-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#layer"
                            aria-selected="true" 
                            aria-controls="layer"> 
                            <i class="bi bi-layers-fill" style="color: black"></i>
                        </button>

                    </li>
                    <li class="nav-item" role="presentation">
                        <button 
                            class="nav-link" 
                            id="style-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#style"
                            aria-selected="true" 
                            aria-controls="style"> 
                            <i class="bi bi-palette-fill" style="color: black"></i>
                        </button>

                    </li>
                    <li class="nav-item" role="presentation">
                        <button 
                            class="nav-link" 
                            id="trait-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#trait"
                            aria-selected="true" 
                            aria-controls="trait"> 
                            <i class="bi bi-gear-fill" style="color: black"></i>
                        </button>

                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="block" role="tabpanel" arial-labelledby="block-tab">
                        <div id="blocks"></div>
                    </div>

                    <div class="tab-pane fade" id="layer" role="tabpanel" arial-labelledby="layer-tab">
                        <div id="layers-block"></div>     
                    </div>

                    <div class="tab-pane fade" id="style" role="tabpanel" arial-labelledby="style-tab">
                        <div id="styles-block"></div>
                    </div>

                    <div class="tab-pane fade" id="trait" role="tabpanel" arial-labelledby="trait-tab">
                        <div id="traits-block"></div>
                    </div>

                </div>

            </div>
        </div>
        <div class="main-content">
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <div class="panel_devices"></div>
                    <div class="panel_basic-actions"></div>
                </div>
            </nav>

             <div id="editor"></div>

             <div class="modal fade" id="addPageModal" tabindex="-1" aria-labelledby="addPageModalLabel" aria-hidden="true"
             data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="create-page" novalidate onsubmit="return validateForm(event)">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPageModalLabel">Create Page</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close" onclick="clearForm()"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-auto">
                                <label class="form-label" for="name">Name:</label>
                                <input type="text" id="name" class="form-control form-control-sm" placeholder="Name of page" required/>
                                <div class="invalid-feedback">Pleasse provide a valid name</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal" onclick="clearForm()">Close</button>
                            <button id="submit" type="submit" class="btn btn-primary btn-sm">Save</button>
                        </div>
                        </form>
                    </div>
                </div>

             </div>
        </div>

        <script src="{{asset('grapejs/js/custom.js')}}"></script>
        <script src="{{asset('grapejs/js/main.js')}}"></script>
    </body>
</html>
