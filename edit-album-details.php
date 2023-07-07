<?php require_once "header.php"; ?>
<div class="wrapper wrapper-content">

    <div class="page_breadcrumb">
        <p><a href="<?php echo $base_url ?>albums.php">Albums</a><img src="<?php echo $base_url ?>img/arrow-point-to-right.svg"><a href="<?php echo $base_url ?>albums-travel-itinerary.php">Travel Itinerary</a><img src="<?php echo $base_url ?>img/arrow-point-to-right.svg">Edit Album Detail</p>
    </div>

    <form>
        <div class="ibox">
            <div class="ibox-content">
                <div class="form-box">
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0">FOLDER NAME</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <input type="text" class="form-control" value="My Inspiration">
                                <a href="javascript:void(0);" class="clear_input">
                                    <img src="<?php echo $base_url ?>img/remove-input.svg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0 mt-md-2">DESCRIPTION</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <textarea class="form-control" rows="5">For those who dream of becoming trip-planning experts, here are all the tips and tactics necessary to plan a great travel itinerary.</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-action">
                        <div class="row">
                            <div class="col-lg-2 col-md-3"></div>
                            <div class="col-lg-4 col-md-6">
                                <button class="btn btn-black w-100">SAVE</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </form>
</div>
<?php require_once "footer.php"; ?>