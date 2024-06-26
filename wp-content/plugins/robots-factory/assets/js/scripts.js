jQuery( document ).ready(function($) {

    $('.robots-upvote').on('click', function(e){
        e.preventDefault();

        let post_id = jQuery(this).attr('id');

        console.log( post_id );

        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url, // wp_localize_script
            data: {
                action: 'robots_like_button', // PHP function
                post_id: post_id,
            },
            success: function(msg){
                console.log(msg);
            }
        });
    });

});


/** in the AJAX url the object and the param must be the same as
 * - my_ajax_object;
 * - ajax_url
 * 
 * in functions.php
 * 
 *  wp_localize_script( 'robots-assets-plugin', 'my_ajax_object',
        array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
        )
    );
 */