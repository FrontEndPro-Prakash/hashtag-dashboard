<?php require_once "header.php"; ?>
<div class="wrapper wrapper-content">

    <div class="page_breadcrumb">
        <p><a href="<?php echo $base_url ?>">Users</a><img src="<?php echo $base_url ?>img/arrow-point-to-right.svg">Edit User</p>
    </div>

    <form>
        <div class="ibox">
            <div class="ibox-content">
                <div class="form-box">
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0">NAME</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <input type="text" class="form-control" value="Nick Jonas">
                                <a href="javascript:void(0);" class="clear_input">
                                    <img src="<?php echo $base_url ?>img/remove-input.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center has-error">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0">USERNAME</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <input type="text" class="form-control" value="Nick_Jon">
                                <small class="has-error">Required Field</small>
                                <a href="javascript:void(0);" class="clear_input">
                                    <img src="<?php echo $base_url ?>img/remove-input.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0">EMAIL</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <input type="email" class="form-control" value="nick@hashtag.com">
                                <a href="javascript:void(0);" class="clear_input">
                                    <img src="<?php echo $base_url ?>img/remove-input.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0">PASSWORD</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <input type="password" class="form-control" value="sajkdf">
                                <a href="javascript:void(0);" class="clear_input">
                                    <img src="<?php echo $base_url ?>img/remove-input.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0 mt-md-2">BIO</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <textarea class="form-control" rows="5">I’m a fashion and interior design blogger based in New York City. Some of my favs: terrazzo, margaritas, travel and my new social media app, HASHTAG</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0">GENDER</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <label class="radio mb-0 mr-3" for="male">
                                    <input type="radio" name="gender" id="male" checked>
                                    <span>MALE</span>
                                </label>
                                <label class="radio mb-0 mr-3" for="female">
                                    <input type="radio" name="gender" id="female">
                                    <span>FEMALE</span>
                                </label>
                                <label class="radio mb-0 mr-3" for="pnts">
                                    <input type="radio" name="gender" id="pnts">
                                    <span>PREFER NOT TO SAY</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0">LOCATION</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <input type="text" class="form-control" value="nick@hashtag.com">
                                <a href="javascript:void(0);" class="clear_input">
                                    <img src="<?php echo $base_url ?>img/remove-input.svg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0">PHONE NUMBER</label>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input_outer">
                                <div class="input-group">
                                    <div class="input-group-prepend col-2 p-0">
                                        <select class="select2_demo_1 form-control pr-0">
                                            <option>+1</option>
                                            <option>+02</option>
                                            <option>+03</option>
                                        </select>
                                    </div>
                                    <input type="number" class="form-control" aria-label="Text input with dropdown button">
                                </div>
                                <a href="javascript:void(0);" class="clear_input">
                                    <img src="<?php echo $base_url ?>img/remove-input.svg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0 mt-md-2">PROFILE PICTURE</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input_outer">
                                <div class="upload-box-row">
                                    <span class="pic-placeholder round">
                                        <img class="profile-pic" src="<?php echo $base_url ?>img/upload-user.jpg">
                                        <a href="javascript:void(0);" class="remove_pic"><i class="fa fa-remove"></i></a>
                                    </span>
                                    <div class="upload-user-btn-box">
                                        <label class="cus-upload-file" for="upload-profile">
                                            <input type="file" id="upload-profile" class="d-none">
                                            <span class="btn btn-black">UPLOAD PHOTO</span>
                                        </label>
                                        <p class="mb-md-0">Only GIF, JPG, PNG, JPEG, SVG <br>files are allowed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-5">
                        <div class="col-lg-2 col-md-3 text-md-right">
                            <label class="mb-md-0 mt-md-2">COVER PHOTO</label>
                        </div>
                        <div class="col-lg-10 col-md-9">
                            <div class="input_outer cover-outer">
                                <div class="upload-box-row">
                                    <span class="cover_pic_otr">
                                        <img class="cover-pic" src="<?php echo $base_url ?>img/cover-pic.jpg">
                                        <a href="javascript:void(0);" class="remove_cov_pic"><i class="fa fa-remove"></i></a>
                                    </span>
                                    <div class="upload-user-btn-box">
                                        <label class="cus-upload-file" for="upload-profile">
                                            <input type="file" id="upload-profile" class="d-none">
                                            <span class="btn btn-black">UPLOAD PHOTO</span>
                                        </label>
                                        <p class="mb-md-0">Only GIF, JPG, PNG, JPEG, SVG <br>files are allowed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="ibox">
            <div class="ibox-content pl-md-5 pr-md-5">
                <label>SOCIAL MEDIA</label>
                <ul class="social-list">
                    <li class="connected">
                        <img src="<?php echo $base_url ?>img/facebook.svg">
                        <a href="javascript:void(0);">Nick_jonas <img src="<?php echo $base_url ?>img/s-arw.svg"></a>
                    </li>
                    <li>
                        <img src="<?php echo $base_url ?>img/instagram.svg">
                        <a href="javascript:void(0);">Connect <img src="<?php echo $base_url ?>img/s-arw.svg"></a>
                    </li>
                    <li>
                        <img src="<?php echo $base_url ?>img/twitter.svg">
                        <a href="javascript:void(0);">Connect <img src="<?php echo $base_url ?>img/s-arw.svg"></a>
                    </li>
                    <li>
                        <img src="<?php echo $base_url ?>img/youtube.svg">
                        <a href="javascript:void(0);">Connect <img src="<?php echo $base_url ?>img/s-arw.svg"></a>
                    </li>
                    <li>
                        <img src="<?php echo $base_url ?>img/tik-tok.svg">
                        <a href="javascript:void(0);">Connect <img src="<?php echo $base_url ?>img/s-arw.svg"></a>
                    </li>
                    <li>
                        <img src="<?php echo $base_url ?>img/twitch.svg">
                        <a href="javascript:void(0);">Connect <img src="<?php echo $base_url ?>img/s-arw.svg"></a>
                    </li>
                    <li>
                        <img src="<?php echo $base_url ?>img/pinterest.svg">
                        <a href="javascript:void(0);">Connect <img src="<?php echo $base_url ?>img/s-arw.svg"></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="form-action">
            <div class="row">
                <div class="col-md-3 col-sm-6 mx-auto">
                    <button class="btn btn-black w-100">SAVE</button>
                </div>
            </div>
        </div>

    </form>
</div>
<?php require_once "footer.php"; ?>