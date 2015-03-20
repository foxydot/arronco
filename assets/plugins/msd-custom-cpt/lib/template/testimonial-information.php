<?php global $wpalchemy_media_access; 
?>

<div class="meta_control">
    <div class="table">
    <div class="row">
        <div class="cell">
            <label>Quote</label>
            <div class="input_container">
                <?php 
                $mb->the_field('quote');
                $mb_content = html_entity_decode($mb->get_the_value(), ENT_QUOTES, 'UTF-8');
                $mb_editor_id = sanitize_key($mb->get_the_name());
                $mb_settings = array('textarea_name'=>$mb->get_the_name(),'textarea_rows' => '5','media_buttons' => false);
                wp_editor( $mb_content, $mb_editor_id, $mb_settings );
                ?>
           </div>
        </div>
    </div>

    <div class="row">
        <div class="cell">
        <?php $metabox->the_field('attribution'); ?>
            <label>Attribution Name</label>
            <div class="input_container">
                <input type="text" value="<?php $metabox->the_value(); ?>" id="<?php $metabox->the_name(); ?>" name="<?php $metabox->the_name(); ?>">
           </div>
        </div>
    </div>
    
    <div class="row">
        <div class="cell">
        <?php $metabox->the_field('position'); ?>
            <label>Attribution Position</label>
            <div class="input_container">
                <input type="text" value="<?php $metabox->the_value(); ?>" id="<?php $metabox->the_name(); ?>" name="<?php $metabox->the_name(); ?>">
           </div>
        </div>
    </div>
    
    <div class="row">
        <div class="cell">
        <?php $metabox->the_field('company'); ?>
            <label>Attribution Company</label>
            <div class="input_container">
                <input type="text" value="<?php $metabox->the_value(); ?>" id="<?php $metabox->the_name(); ?>" name="<?php $metabox->the_name(); ?>">
           </div>
        </div>
    </div>
    </div>
</div>
<script>
jQuery(function($){
    $("#postdivrich").after($("#_testimonial_info_metabox"));
});</script>
