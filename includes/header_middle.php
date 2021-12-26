<div class="header-middle biolife-sticky-object ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                <a href="index.php" class="biolife-logo"><img src="assets/images/organic-3-green.png" alt="biolife logo"
                        width="135" height="36"></a>
            </div>
            <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                <div class="primary-menu">
                    <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                        data-menuname="main menu">
                        <?php 
            foreach($ctgDatas as $ctgData){
            ?>

                        <li class="menu-item"><a
                                href="category.php?status=catView&&id=<?php echo $ctgData['ctg_id']; ?>"><?php echo $ctgData['ctg_name'];?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                <div class="biolife-cart-info">
                    <div class="mobile-search">
                        <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                        <div class="mobile-search-content">
                            <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                <select name="category">
                                    <option value="-1" selected>All Categories</option>
                                    <option value="vegetables">Vegetables</option>
                                    <option value="fresh_berries">Fresh Berries</option>
                                    <option value="ocean_foods">Ocean Foods</option>
                                    <option value="butter_eggs">Butter & Eggs</option>
                                    <option value="fastfood">Fastfood</option>
                                    <option value="fresh_meat">Fresh Meat</option>
                                    <option value="fresh_onion">Fresh Onion</option>
                                    <option value="papaya_crisps">Papaya & Crisps</option>
                                    <option value="oatmeal">Oatmeal</option>
                                </select>
                                <button type="submit" class="btn-submit">go</button>
                            </form>
                        </div>
                    </div>
                    <div class="mobile-menu-toggle">
                        <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>