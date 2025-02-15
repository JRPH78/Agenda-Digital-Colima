<!DOCTYPE html>
<html lang="es">

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>:: Gobierno del Estado de Colima ::</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Gobierno del Estado de Colima" name="description" />
    <meta content="ICSIC" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="<?php echo THEME_URL.'dist/assets/css/pages/login/login-1.css'?>" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->

    <link href="<?php echo THEME_URL.'dist/assets/plugins/global/plugins.bundle.min.css'?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo THEME_URL.'dist/assets/plugins/custom/prismjs/prismjs.bundle.min.css';?>" rel="stylesheet"
        type="text/css" />
    <link href=" <?php echo THEME_URL.'dist/assets/css/style.bundle.min.css';?>" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?php echo THEME_URL.'assets/Theme/src/media/logos/favicon.ico';?>" />


    @yield('css')

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        @yield('contenido')
    </div>
    <!--end::Main-->

    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#8A1D41",
                    "secondary": "#E5EAEE",
                    "success": "#8A1D41",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#D7F9EF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
    </script>
    <!--end::Global Config-->
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?php echo THEME_URL.'dist/assets/plugins/global/plugins.bundle.min.js'?>"></script>
    <script src="<?php echo THEME_URL.'dist/assets/plugins/custom/prismjs/prismjs.bundle.min.js'?>"></script>
    <script src="<?php echo THEME_URL.'dist/assets/js/scripts.bundle.min.js'?>"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?php echo THEME_URL.'dist/assets/js/pages/custom/login/login-general.js'?>"></script>
    <!--end::Page Scripts-->

    @yield('js')
</body>

</html>