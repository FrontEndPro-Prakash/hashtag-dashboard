<?php require_once "header.php"; ?>
<div class="wrapper wrapper-content">

    <div class="page_breadcrumb">
        <p><a href="<?php echo $base_url ?>gems-folder.php">Gems Folder</a><img src="<?php echo $base_url ?>img/arrow-point-to-right.svg">Travel Itinerary</p>
    </div>

    <div class="ibox page_title">
        <div class="ibox-content">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>Travel Itinerary</h3>
                </div>
                <div class="col-md-6">
                    <div class="action_row">
                        <a class="edit_icon" href="<?php echo $base_url ?>add-gem-folder.php"><?php echo $edit_icon ?></a>
                        <a class="delete_icon" href="javascript:void(0);"><?php echo $delete_icon ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery_row lightBoxGallery">
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g1.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g2.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g3.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g4.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g5.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g6.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g1.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g2.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g3.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g4.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g5.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div class="img_box">
            <a href="javascript:void(0);" class="remove_img">
                <img src="<?php echo $base_url ?>img/remove-icon.svg">
            </a>
            <img src="<?php echo $base_url ?>img/g6.jpg">
            <a href="<?php echo $base_url ?>img/sld1.jpg" class="view_img btn btn-black" data-gallery="">VIEW</a>
        </div>
        <div id="blueimp-gallery" class="blueimp-gallery">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev"><img src="<?php echo $base_url ?>img/left-s.svg"></a>
            <a class="next"><img src="<?php echo $base_url ?>img/right-s.svg"></a>
            <a class="close"><img src="<?php echo $base_url ?>img/close-s.svg"></a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
    </div>
    

</div>
<?php require_once "footer.php"; ?>