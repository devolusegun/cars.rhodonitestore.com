<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-bars"></i><?php echo lang_key("Auto translator") ?> </h3>

                <div class="box-tool">
                    <a href="#" data-action="collapse"><i class="fa fa-chevron-up"></i></a>

                </div>
            </div>
            <div class="box-content">
				<?php echo $this->session->flashdata('msg');?>
				<form class="form-horizontal" action="<?php echo site_url('admin/system/translatelang');?>" method="post">

					<div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label"><?php echo lang_key('From lang'); ?></label>
                        <div class="col-sm-4 col-lg-5 controls">
							<select name="base_lang" id="base_lang" class="form-control input-sm">
								<?php foreach($all_langs->result() as $row){?>
								<option value="<?php echo $row->unique_id;?>"><?php echo $row->lang.' - '.$row->short_name;?></option>
								<?php }?>
							</select>                            
                            <span class="help-inline">&nbsp;</span>
                            <?php echo form_error('base_lang'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label"><?php echo lang_key('Target lang full name'); ?></label>
                        <div class="col-sm-4 col-lg-5 controls">
							<input type="text" name="target_lang_full_name" class="form-control" />                           
                            <span class="help-inline">&nbsp;</span>
                            <?php echo form_error('target_lang_full_name'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label"><?php echo lang_key('Target lang short name'); ?></label>
                        <div class="col-sm-4 col-lg-5 controls">
							<input type="text" name="target_lang_short_name" class="form-control" />                           
                            <span class="help-inline">&nbsp;</span>
                            <?php echo form_error('target_lang_short_name'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
                        <div class="col-sm-4 col-lg-5 controls">
                        	<button type="submit" class="btn btn-success">Save</button>
                            <span class="help-inline">&nbsp;</span>
                        </div>
                    </div>

				</form>
			</div>
		</div>
	</div>			
</div>
