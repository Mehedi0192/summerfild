<section class="about-top">
    <h2>About Us</h2>
</section>

<section class="about-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_about;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="glance-area">
                    <h1>At a Glance</h1>
                    <?php $glance_info=$this->admin_model->glance_info();?>
                    <p><?php echo $glance_info->glance_desc;?></p>
                </section>
            </div>
        </div>
    </div>
</section>