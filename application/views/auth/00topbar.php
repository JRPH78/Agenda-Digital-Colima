<!DOCTYPE html>

<html lang="es">

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Gobierno del Estado de Colima | ICSIC</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Gobierno del Estado de Colima" name="description" />
    <meta content="ICSIC" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="SHORTCUT ICON" href="https://openapis.col.gob.mx/API_PU/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?php echo THEME_URL.'dist/assets/plugins/global/plugins.bundle.css'?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo THEME_URL.'dist/assets/plugins/custom/prismjs/prismjs.bundle.css';?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo THEME_URL.'dist/assets/css/style.bundle.css';?>" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->

    <!--end::Layout Themes-->


</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed header-bottom-enabled subheader-enabled page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile header-mobile-fixed" style="background-color:#612233">
        <!--begin::Logo-->
        <a href="https://www.col.gob.mx/">
            <img alt="Logo" src="<?php echo THEME_URL.'dist/assets/media/logos/logo-gob.png';?>" class="max-h-50px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header flex-column header-fixed">
                    <!--begin::Top-->
                    <div class="header-top">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Left-->
                            <div class="d-none d-lg-flex align-items-center mr-3">
                                <!--begin::Logo-->
                                <a href="https://www.col.gob.mx/" class="mr-20">
                                    <img alt="Logo" src="<?php echo THEME_URL.'dist/assets/media/logos/logo-gob.png';?>"
                                        class="max-h-70px" />
                                </a>
                                <!--end::Logo-->
                                <!--begin::Tab Navs(for desktop mode)-->
                                <ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
                                    <!--begin::Item-->
                                    <?php if ($this->ion_auth->is_admin()) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link py-4 px-6 <?= ($this->uri->segment(2) == 'home' || $this->uri->segment(2) == 'create_user' || $this->uri->segment(2) == 'grupos' || $this->uri->segment(2) == 'edit_group') ? 'active' : '' ?>"
                                            data-toggle="tab" data-target="#kt_header_tab_1" role="tab"
                                            aria-selected="false">Usuarios</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mr-3">
                                        <a class="nav-link py-4 px-6 <?= ($this->uri->segment(2) == 'lineasDeAccion' || $this->uri->segment(2) == 'Metas' || $this->uri->segment(2) == 'Estrategias' || $this->uri->segment(2) == 'Habilitadores' ) ? 'active' : '' ?>"
                                            data-toggle="tab" data-target="#kt_header_tab_2" role="tab"
                                            aria-selected="false">Catalogos</a>
                                    </li>

                                    <?php } ?>

                                    <?php if (!$this->ion_auth->is_admin()) { ?>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link py-4 px-6 " data-toggle="tab"
                                            data-target="#kt_header_tab_3" role="tab">Inicio</a>
                                    </li>

                                    <?php } ?>

                                    <!--end::Item-->
                                </ul>
                                <!--begin::Tab Navs-->
                            </div>
                            <!--end::Left-->
                            <!--begin::Topbar-->
                            <div class="topbar " style="background-color:#7f2841">
                                <!--begin::User-->
                                <div class="topbar-item">
                                    <div class="btn btn-icon btn-hover-transparent-white w-sm-auto d-flex align-items-center btn-lg px-2"
                                        id="kt_quick_user_toggle">
                                        <div class="d-flex flex-column text-right pr-sm-3">
                                            <span
                                                class="text-white opacity-50 font-weight-bold font-size-sm d-none d-sm-inline"><?php echo $user_name; ?></span>
                                            <span
                                                class="text-white font-weight-bolder font-size-sm d-none d-sm-inline"><?php echo $user_company; ?></span>
                                        </div>
                                        <span class="symbol symbol-35">
                                            <span
                                                class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">P</span>
                                        </span>
                                    </div>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>

                    <!--end::Top-->
                    <!--begin::Bottom-->
                    <div class="header-bottom">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Header Menu Wrapper-->
                            <div class="header-navs header-navs-left" id="kt_header_navs">

                                <div class="tab-content">
                                    <!--begin::Tab Pane-->
                                    <?php if ($this->ion_auth->is_admin()) { ?>
                                    <div class="tab-pane py-5 p-lg-0 show <?= ($this->uri->segment(2) == 'home' || $this->uri->segment(2) == 'create_user'  || $this->uri->segment(2) == 'grupos' || $this->uri->segment(2) == 'edit_group') ? 'active' : '' ?>"
                                        id="kt_header_tab_1">
                                        <!--begin::Menu-->
                                        <div id="kt_header_menu"
                                            class="header-menu header-menu-mobile header-menu-layout-default">
                                            <!--begin::Nav-->
                                            <ul class="menu-nav">
                                                <li class="menu-item  menu-item-submenu menu-item-<?= ($this->uri->segment(2) == 'home') ? 'active' : 'home' ?>"
                                                    aria-haspopup="true">
                                                    <a href="<?= base_url() ?>auth/home" class="menu-link"><span
                                                            class="menu-text">
                                                            listado
                                                        </span></a>
                                                </li>
                                                <li class="menu-item menu-item-submenu menu-item-<?= ($this->uri->segment(2) == 'create_user' ) ? 'active' : '' ?>"
                                                    aria-haspopup="true">
                                                    <a href="<?= base_url() ?>auth/create_user" class="menu-link"><span
                                                            class="menu-text">
                                                            Agregar Usuarios
                                                        </span></a>
                                                </li>
                                                <li class="menu-item menu-item-submenu menu-item-<?= ($this->uri->segment(2) == 'grupos' ) ? 'active' : '' ?>"
                                                    aria-haspopup="true">
                                                    <a href="<?= base_url() ?>auth/grupos" class="menu-link"><span
                                                            class="menu-text">
                                                            Grupos de Usuarios
                                                        </span></a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane py-5 p-lg-0 show <?= ($this->uri->segment(2) == 'lineasDeAccion' || $this->uri->segment(2) == 'Metas' || $this->uri->segment(2) == 'Estrategias' || $this->uri->segment(2) == 'Habilitadores') ? 'active' : '' ?>"
                                        id="kt_header_tab_2">
                                        <!--begin::Menu-->
                                        <div id="kt_header_menu"
                                            class="header-menu header-menu-mobile header-menu-layout-default">
                                            <!--begin::Nav-->
                                            <ul class="menu-nav">
                                                <li class="menu-item menu-item-submenu menu-item-<?= ($this->uri->segment(2) == 'lineasDeAccion') ? 'active' : '' ?>"
                                                    aria-haspopup="true">

                                                    <a href="<?= base_url() ?>auth/lineasDeAccion"
                                                        class="menu-link"><span class="menu-text">
                                                            Lineas de accion
                                                        </span></a>
                                                </li>
                                                <li class="menu-item menu-item-submenu menu-item-<?= ($this->uri->segment(2) == 'Metas') ? 'active' : '' ?>"
                                                    aria-haspopup="true">

                                                    <a href="<?= base_url() ?>auth/Metas" class="menu-link"><span
                                                            class="menu-text">
                                                            Metas
                                                        </span></a>
                                                </li>
                                                <li class="menu-item menu-item-submenu menu-item-<?= ($this->uri->segment(2) == 'Estrategias') ? 'active' : '' ?>"
                                                    aria-haspopup="true">
                                                    <a href="<?= base_url() ?>auth/Estrategias" class="menu-link"><span
                                                            class="menu-text">
                                                            Estrategias
                                                        </span></a>
                                                </li>

                                                <li class="menu-item menu-item-submenu menu-item-<?= ($this->uri->segment(2) == 'Habilitadores') ? 'active' : '' ?>"
                                                    aria-haspopup="true">

                                                    <a href="<?= base_url() ?>auth/Habilitadores"
                                                        class="menu-link"><span class="menu-text">
                                                            Habilitadores
                                                        </span></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <?php } ?>

                                    <?php if (!$this->ion_auth->is_admin()) { ?>
                                    <div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_3">
                                        <!--begin::Menu-->
                                        <div id="kt_header_menu"
                                            class="header-menu header-menu-mobile header-menu-layout-default">
                                            <!--begin::Nav-->
                                            <ul class="menu-nav">
                                                <li class="menu-item menu-item-active" aria-haspopup="true">
                                                    <a href="<?= base_url() ?>" class="menu-link"><span
                                                            class="menu-text">Lineas de accion
                                                        </span></a>
                                                </li>


                                            </ul>
                                            <!--end::Nav-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>

                                    <?php } ?>
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Header Menu Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Bottom-->


                </div>