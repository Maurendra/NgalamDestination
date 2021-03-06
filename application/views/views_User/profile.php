<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "head.php"; ?>
</head>
<body>
    <div id="page">
        <!---header top-->

        <?php include "header.php"; ?>

        <!--end header-->

        <!--resort-overview -->
        <section class="resort-overview-block">
            <div class="container">
                <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                <div class="row">
                    <h2 style="padding-left: 10px; margin-bottom: 30px;">YOUR FAVORIT DESTINATION</h2>
                    <?php foreach ($data_wisata_favorite as $key) { ?>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right" >
                        <div class="side-A">
                            <div class="product-thumb">
                                <div class="image">
                                    <a><img width="228px" height="231px" src="<?php echo base_url('asset/css_web_user/images/tourism/' .$key->category .'/' .$key->foto_profil);?>" class="img-responsive" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-B" >
                            <div class="product-desc-side">
                                <h3><a href="<?php echo site_url('c_web/show_description/' .$key->id_data_wisata);?>"><?php echo $key->nama; ?></a></h3>
                                <p><?php echo $key->address; ?></p>
                                <p>Rp. <?php echo $key->htm; ?></p>
                                <div class="links"><a href="<?php echo site_url('c_web/show_description/' .$key->id_data_wisata);?>">Read more</a> <a href="<?php echo site_url('c_user/delete_favorite/' .$key->id_favorite);?>">Delete</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <?php include "footer.php";  ?>
    </div>
</body>
</html>