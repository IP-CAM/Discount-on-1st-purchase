<!--
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
-->
<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-discount-on-1st-purchase" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-discount_on_1st_purchase" class="form-horizontal">
		  <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-discount"><?php echo $entry_discount; ?></label>
            <div class="col-sm-10">
              <input type="text" name="discount_on_1st_purchase_discount" value="<?php echo $discount_on_1st_purchase_discount; ?>" placeholder="<?php echo $entry_discount; ?>" id="input-discount" class="form-control" />
              <?php if ($error_discount_on_1st_purchase_discount) { ?>
              <div class="text-danger"><?php echo $error_discount_on_1st_purchase_discount; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-minimum-total"><?php echo $entry_minimum_total; ?></label>
            <div class="col-sm-10">
              <input type="number" name="discount_on_1st_purchase_minimum_total" value="<?php echo $discount_on_1st_purchase_minimum_total; ?>" placeholder="<?php echo $entry_minimum_total; ?>" id="input-minimum-total" class="form-control" />
              <?php if ($error_discount_on_1st_purchase_minimum_total) { ?>
              <div class="text-danger"><?php echo $error_discount_on_1st_purchase_minimum_total; ?></div>
              <?php } ?>
            </div>
          </div>	
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-module-publish-date"><?php echo $entry_module_publish_date; ?></label>
            <div class="col-sm-10">
              <div class="input-group discount_on_1st_purchase_module_publish_date">
				<input type="text" name="discount_on_1st_purchase_module_publish_date" value="<?php echo $discount_on_1st_purchase_module_publish_date;?>" data-date-format="YYYY-MM-DD"  class="form-control" placeholder="YYYY-MM-DD"/>
				<span class="input-group-btn">
				<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
				</span></div>
              <?php if ($error_discount_on_1st_purchase_module_publish_date) { ?>
              <div class="text-danger"><?php echo $error_discount_on_1st_purchase_module_publish_date; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module-end-date"><?php echo $entry_module_end_date; ?></label>
            <div class="col-sm-10">
              <div class="input-group discount_on_1st_purchase_module_end_date">
				<input type="text" name="discount_on_1st_purchase_module_end_date" value="<?php echo $discount_on_1st_purchase_module_end_date;?>" data-date-format="YYYY-MM-DD"  class="form-control" placeholder="YYYY-MM-DD"/>
				<span class="input-group-btn">
				<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
				</span></div>
             </div>
          </div>				
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
              <select name="discount_on_1st_purchase_status" id="input-status" class="form-control">
                <?php if ($discount_on_1st_purchase_status) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
           <div class="form-group">
            <label class="col-sm-2 control-label" for="input-sort-order"><?php echo $entry_sort_order; ?></label>
            <div class="col-sm-10">
              <input type="number" name="discount_on_1st_purchase_sort_order" min='0' value="<?php echo $discount_on_1st_purchase_sort_order; ?>" placeholder="<?php echo $entry_sort_order; ?>" id="input-sort-order" class="form-control" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>
<script>
	<!--
	$('.discount_on_1st_purchase_module_publish_date').datetimepicker({
			 pickTime: false,
			 useCurrent:true,
			 minDate: moment()
			
});
	$('.discount_on_1st_purchase_module_end_date').datetimepicker({
			 pickTime: false,
			 useCurrent:true,
			 minDate: moment()
			
});
	-->
</script>
