<?php include('00topbar.php'); ?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    <?php echo isset($title) ? $title : "Desactivar usuario";?>
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
                            <h1><?php echo lang('deactivate_heading');?></h1>
                            <p><?php echo sprintf(lang('deactivate_subheading'), $user->{$identity}); ?></p>


                        </div>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">


                        <div class="container">


                            <?php echo form_open("auth/deactivate/".$user->id);?>

                            <p>
                                <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                                <input type="radio" name="confirm" value="yes" checked="checked" />
                                <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                                <input type="radio" name="confirm" value="no" />
                            </p>

                            <?php echo form_hidden($csrf); ?>
                            <?php echo form_hidden(['id' => $user->id]); ?>

                            <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('01footer.php'); ?>