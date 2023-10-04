<div class="wrap">
    <h1>this is my Setting Page</h1>
    <form method="post" action="options.php" id="test_my_setting_option" enctype="multipart/form-data">
        <?php echo settings_fields("test_my_setting_option") ?>
        <?php echo do_settings_sections($this->_menuSlug) ?>
        <button type="submit" name="submit" class="button button-primary">Save change</button>
    </form>
</div>