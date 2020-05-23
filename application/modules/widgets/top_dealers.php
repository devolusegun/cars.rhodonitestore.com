<?php 
$total = 6;
$CI = get_instance();
$CI->load->database();
$CI->db->order_by('id','asc');
$topusers = $CI->db->get_where('users',array('status'=>1),$total,0);
if($topusers->num_rows() <= 0 ){ ?>
    <div class="alert alert-info"><?php lang_key('no_dealers_found') ?></div>
<?php
} else {
?>
<div class="widget our-agents" id="agents_widget-2">
    <h2 class="widget-title"><i class="fa fa-user"></i> <?php echo lang_key('dealers'); ?></h2>
    <div class="content">
        <?php foreach ($topusers->result() as $user) {
        
        if(get_settings('autocon_settings','show_admin_agent','Yes')=='No' && $user->user_type==1)
                    continue;
        ?>
        <div class="agent clearfix">
            <div class="image">
                <a href="#">
                    <img width="140" height="141" alt="Dealer" class="attachment-post-thumbnail wp-post-image" src="<?php echo get_profile_photo_by_id($user->id,'thumb');?>">
                </a>
            </div>
            <!-- /.image -->

            <div class="name">
                <a href="#"><?php echo get_user_fullname_by_id($user->id);?></a><span></span>
            </div>
            <!-- /.name -->
         <!--    <div class="phone"><?php echo get_user_meta($user->id,'phone');?></div>-->
            <!-- /.phone -->
          <!--  <div class="email" style="width:100%"><a href="mailto:<?php echo $user->user_email;?>"><?php echo $user->user_email;?></a>
            </div>-->
            <!-- /.email -->
        </div><!-- /.agent -->
        <?php }?>

    </div><!-- /.content -->

</div>
<div class="view-more"><a class="" href="#"><?php echo lang_key('view_all');?></a></div>
<div class="clearfix"></div>
<?php } ?>