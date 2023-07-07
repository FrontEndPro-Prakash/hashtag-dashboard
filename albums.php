<?php require_once "header.php"; ?>
<div class="wrapper wrapper-content">

    <div class="ibox page_title">
        <div class="ibox-content">
            <h3><img src="<?php echo $base_url ?>/img/albm.svg">Albums</h3>
        </div>
    </div>

    <div class="fillter-box">
        <form>
            <div class="row align-items-end">
                <div class="col-md-4">
                    <div class="form-group search_box">
                        <label>SEARCH</label>
                        <input type="search" class="form-control" placeholder="Search by username, name">
                        <button type="search"><img class="search_icon" src="<?php echo $base_url ?>img/search-icon.svg" alt="Search"></button>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="form-group">
                        <label class="w-100">USER TYPE</label>
                        <select class="select2_demo_1 form-control">
                            <option>General</option>
                            <option>User type 1</option>
                            <option>User type 2</option>
                            <option>User type 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-6 text-right">
                    <div class="form-group">
                        <a href="<?php echo $base_url ?>edit-album-details.php" class="btn btn-black">ADD ALBUM</a>
                    </div>
                </div>

            </div>
        </form>
    </div>

    <div class="ibox">
        <div class="ibox-content p-0">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Username</th>
                            <th>User Type</th>
                            <th>Album Name</th>
                            <th class="text-center">Images Count</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Prince_Pal</td>
                            <td>General</td>
                            <td>Travel Iternary</td>
                            <td class="text-center"><a href="<?php echo $base_url ?>albums-travel-itinerary.php">5</a></td>
                            <td>For those who dream of becoming trip-planning…</td>
                            <td>Active</td>
                            <td>
                                <div class="action_row">
                                    <a class="view_icon" href="<?php echo $base_url ?>albums-travel-itinerary.php"><?php echo $view_icon ?></a>
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-album-details.php"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);"><?php echo $delete_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Sanchit009</td>
                            <td>Influencer</td>
                            <td>Fashion Inspiration</td>
                            <td class="text-center"><a href="<?php echo $base_url ?>albums-travel-itinerary.php">7</a></td>
                            <td>-</td>
                            <td>Active</td>
                            <td>
                                <div class="action_row">
                                    <a class="view_icon" href="<?php echo $base_url ?>albums-travel-itinerary.php"><?php echo $view_icon ?></a>
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-album-details.php"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);"><?php echo $delete_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Tushar23</td>
                            <td>General</td>
                            <td>Trends 2020</td>
                            <td class="text-center"><a href="<?php echo $base_url ?>albums-travel-itinerary.php">12</a></td>
                            <td>For those who dream of becoming trip-planning…</td>
                            <td>Active</td>
                            <td>
                                <div class="action_row">
                                    <a class="view_icon" href="<?php echo $base_url ?>albums-travel-itinerary.php"><?php echo $view_icon ?></a>
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-album-details.php"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);"><?php echo $delete_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Komal_kk</td>
                            <td>Brand</td>
                            <td>Beaches</td>
                            <td class="text-center"><a href="<?php echo $base_url ?>albums-travel-itinerary.php">5</a></td>
                            <td>-</td>
                            <td>Active</td>
                            <td>
                                <div class="action_row">
                                    <a class="view_icon" href="<?php echo $base_url ?>albums-travel-itinerary.php"><?php echo $view_icon ?></a>
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-album-details.php"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);"><?php echo $delete_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Rajinder987</td>
                            <td>General</td>
                            <td>Luxury Lifestyle</td>
                            <td class="text-center"><a href="<?php echo $base_url ?>albums-travel-itinerary.php">13</a></td>
                            <td>For those who dream of becoming trip-planning…</td>
                            <td>Active</td>
                            <td>
                                <div class="action_row">
                                    <a class="view_icon" href="<?php echo $base_url ?>albums-travel-itinerary.php"><?php echo $view_icon ?></a>
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-album-details.php"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);"><?php echo $delete_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Shivani_adi</td>
                            <td>General</td>
                            <td>Tips & Tricks</td>
                            <td class="text-center"><a href="<?php echo $base_url ?>albums-travel-itinerary.php">22</a></td>
                            <td>-</td>
                            <td>Active</td>
                            <td>
                                <div class="action_row">
                                    <a class="view_icon" href="<?php echo $base_url ?>albums-travel-itinerary.php"><?php echo $view_icon ?></a>
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-album-details.php"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);"><?php echo $delete_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Sameer_bb</td>
                            <td>Influencer</td>
                            <td>Lounges</td>
                            <td class="text-center"><a href="<?php echo $base_url ?>albums-travel-itinerary.php">67</a></td>
                            <td>For those who dream of becoming trip-planning…</td>
                            <td>Active</td>
                            <td>
                                <div class="action_row">
                                    <a class="view_icon" href="<?php echo $base_url ?>albums-travel-itinerary.php"><?php echo $view_icon ?></a>
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-album-details.php"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);"><?php echo $delete_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>Arvind_rpf</td>
                            <td>General</td>
                            <td>Lifestyle</td>
                            <td class="text-center"><a href="<?php echo $base_url ?>albums-travel-itinerary.php">78</a></td>
                            <td>-</td>
                            <td>Active</td>
                            <td>
                                <div class="action_row">
                                    <a class="view_icon" href="<?php echo $base_url ?>albums-travel-itinerary.php"><?php echo $view_icon ?></a>
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-album-details.php"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);"><?php echo $delete_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="table_bottom_pagination">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="pagination_pr_page">
                    <label class="mb-md-0">RESULT PER PAGE</label>
                    <select class="form-control">
                        <option selected value="1">1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main_pagination">
                    <ul>
                        <li class="btnn pre_page disable"><a href="javascript:void(0);">PREVIOUS</a></li>
                        <li class="enable active"><a href="javascript:void(0);">1</a></li>
                        <li class="enable"><a href="javascript:void(0);">2</a></li>
                        <li class="enable"><a href="javascript:void(0);">3</a></li>
                        <li class="btnn next_page enable"><a href="javascript:void(0);">NEXT</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>

</div>
<?php require_once "footer.php"; ?>