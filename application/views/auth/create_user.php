<?php include('00topbar.php'); ?>


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    <?php echo isset($title) ? $title : "";?>
                </h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
                </div>
                <!--end::Separator-->
                <!--begin::Search Form-->

                <!--end::Search Form-->

            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card-deck">
                <div class="card border-light  ">
                    <!--begin::Header-->
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h1><?php echo lang('create_user_heading');?></h1>
                            <p><?php echo lang('create_user_subheading');?></p>


                        </div>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">

                        <div class="container">


                            <div id="infoMessage"><?php echo $message;?></div>

                            <?php echo form_open("auth/create_user");?>

                            <p>
                                <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                                <?php echo form_input($first_name);?>
                            </p>

                            <p>
                                <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                                <?php echo form_input($last_name);?>
                            </p>

                            <?php if($identity_column!=='email') {
                                echo '<p>';
                                echo lang('create_user_identity_label', 'identity');
                                echo '<br />';
                                echo form_error('identity');
                                echo form_input($identity);
                                echo '</p>';
                            }
                            ?>


                            <p>
                                <?php echo lang('create_user_company_label', 'company');?> <br />
                                <?php echo form_input($company);?>
                            </p>

                            <p>
                                <?php echo lang('create_user_email_label', 'email');?> <br />
                                <?php echo form_input($email);?>
                            </p>

                            <p>
                                <?php echo lang('create_user_phone_label', 'phone');?> <br />
                                <?php echo form_input($phone);?>
                            </p>

                            <p>
                                <?php echo lang('create_user_password_label', 'password');?> <br />
                                <?php echo form_input($password);?>
                            </p>

                            <p>
                                <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                                <?php echo form_input($password_confirm);?>
                            </p>


                            <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

                            <?php echo form_close();?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('01footer.php'); ?>