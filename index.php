<?php require_once "header.php"; ?>
<div class="wrapper wrapper-content">

    <div class="ibox page_title">
        <div class="ibox-content">
            <h3><img src="<?php echo $base_url ?>/img/user-title.svg">Users(40)</h3>
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
                        <a href="<?php echo $base_url ?>edit-user.php" class="btn btn-black">ADD USER</a>
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
                            <th>User Type</th>
                            <th>Full Name<br>Username</th>
                            <th>Email/Phone No.</th>
                            <th>Gender</th>
                            <th>IG Handle</th>
                            <th>Business Url</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>General</td>
                            <td>Prince Pal<br><span class="user_name">Prince_Pal</span></td>
                            <td>princepal@gmail.com<br><span class="user_name">+1-234-5678</span></td>
                            <td>Male</td>
                            <td>@prince</td>
                            <td>hshtgofficial.com</td>
                            <td>Active</td>
                            <td class="text-right">
                                <div class="action_row">
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-user.php" title="Edit"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);" title="Delete"><?php echo $delete_icon ?></a>
                                    <a class="block_icon" title="Block" href="javascript:void(0);"><?php echo $block_icon ?></a>
                                    <a class="view_icon" href="<?php echo $base_url ?>user-details.php" title="View"><?php echo $view_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Influencer</td>
                            <td>Sanchit Sharma<br><span class="user_name">Sanchit009</span></td>
                            <td>sanchit.think@gmail.com<br><span class="user_name">+1-234-5678</span></td>
                            <td>Male</td>
                            <td>@sanchez</td>
                            <td>hshtgofficial.com</td>
                            <td>Blocked</td>
                            <td class="text-right">
                                <div class="action_row">
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-user.php" title="Edit"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);" title="Delete"><?php echo $delete_icon ?></a>
                                    <a class="block_icon blocked" href="javascript:void(0);" title="Unblock"><?php echo $block_icon ?></a>
                                    <a class="view_icon" href="<?php echo $base_url ?>user-details.php" title="View"><?php echo $view_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>General</td>
                            <td>Tushar Rana<br><span class="user_name">Tushar23</span></td>
                            <td>tushar.think@gmail.com<br><span class="user_name">+1-234-5678</span></td>
                            <td>Male</td>
                            <td>@tush_09</td>
                            <td>hshtgofficial.com</td>
                            <td>Pending</td>
                            <td class="text-right">
                                <div class="action_row">
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-user.php" title="Edit"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);" title="Delete"><?php echo $delete_icon ?></a>
                                    <a class="view_icon" href="<?php echo $base_url ?>user-details.php" title="View"><?php echo $view_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>General</td>
                            <td>Prince Pal<br><span class="user_name">Prince_Pal</span></td>
                            <td>princepal@gmail.com<br><span class="user_name">+1-234-5678</span></td>
                            <td>Male</td>
                            <td>@prince</td>
                            <td>hshtgofficial.com</td>
                            <td>Pending</td>
                            <td class="text-right">
                                <div class="action_row">
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-user.php" title="Edit"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);" title="Delete"><?php echo $delete_icon ?></a>
                                    <a class="view_icon" href="<?php echo $base_url ?>user-details.php" title="View"><?php echo $view_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Influencer</td>
                            <td>Sanchit Sharma<br><span class="user_name">Sanchit009</span></td>
                            <td>sanchit.think@gmail.com<br><span class="user_name">+1-234-5678</span></td>
                            <td>Male</td>
                            <td>@sanchez</td>
                            <td>hshtgofficial.com</td>
                            <td>Pending</td>
                            <td class="text-right">
                                <div class="action_row">
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-user.php" title="Edit"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);" title="Delete"><?php echo $delete_icon ?></a>
                                    <a class="view_icon" href="<?php echo $base_url ?>user-details.php" title="View"><?php echo $view_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>General</td>
                            <td>Tushar Rana<br><span class="user_name">Tushar23</span></td>
                            <td>tushar.think@gmail.com<br><span class="user_name">+1-234-5678</span></td>
                            <td>Male</td>
                            <td>@tush_09</td>
                            <td>hshtgofficial.com</td>
                            <td>Pending</td>
                            <td class="text-right">
                                <div class="action_row">
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-user.php" title="Edit"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);" title="Delete"><?php echo $delete_icon ?></a>
                                    <a class="view_icon" href="<?php echo $base_url ?>user-details.php" title="View"><?php echo $view_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Influencer</td>
                            <td>Sanchit Sharma<br><span class="user_name">Sanchit009</span></td>
                            <td>sanchit.think@gmail.com<br><span class="user_name">+1-234-5678</span></td>
                            <td>Male</td>
                            <td>@sanchez</td>
                            <td>hshtgofficial.com</td>
                            <td>Active</td>
                            <td class="text-right">
                                <div class="action_row">
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-user.php" title="Edit"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);" title="Delete"><?php echo $delete_icon ?></a>
                                    <a class="block_icon" title="Block" href="javascript:void(0);"><?php echo $block_icon ?></a>
                                    <a class="view_icon" href="<?php echo $base_url ?>user-details.php" title="View"><?php echo $view_icon ?></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td>General</td>
                            <td>Tushar Rana<br><span class="user_name">Tushar23</span></td>
                            <td>tushar.think@gmail.com<br><span class="user_name">+1-234-5678</span></td>
                            <td>Male</td>
                            <td>@tush_09</td>
                            <td>hshtgofficial.com</td>
                            <td>Active</td>
                            <td class="text-right">
                                <div class="action_row">
                                    <a class="edit_icon" href="<?php echo $base_url ?>edit-user.php" title="Edit"><?php echo $edit_icon ?></a>
                                    <a class="delete_icon" href="javascript:void(0);" title="Delete"><?php echo $delete_icon ?></a>
                                    <a class="block_icon" title="Block" href="javascript:void(0);"><?php echo $block_icon ?></a>
                                    <a class="view_icon" href="<?php echo $base_url ?>user-details.php" title="View"><?php echo $view_icon ?></a>
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