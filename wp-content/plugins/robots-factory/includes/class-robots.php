<?php

/** Register CPT
 * 
 * @return void
 */
if ( ! class_exists( 'Robots_CPT' ) ) :
    class Robots_CPT {
        function __construct() {
            // load actions
            add_action( 'init', array( $this, 'robots_cpt' ) );
            add_action( 'init', array( $this, 'robot_category_taxonomy' ) );
        }

        /** Register Robots CPT */
        public function robots_cpt() {
            $labels = array(
                'name'                  => _x( 'Robots', 'Post type general name', 'softuni' ),
                'singular_name'         => _x( 'Robot', 'Post type singular name', 'softuni' ),
                'menu_name'             => _x( 'Robots', 'Admin Menu text', 'softuni' ),
                'name_admin_bar'        => _x( 'Robot', 'Add New on Toolbar', 'softuni' ),
                'add_new'               => __( 'Add New', 'softuni' ),
                'add_new_item'          => __( 'Add New Robot', 'softuni' ),
                'new_item'              => __( 'New Robot', 'softuni' ),
                'edit_item'             => __( 'Edit Robot', 'softuni' ),
                'view_item'             => __( 'View Robot', 'softuni' ),
                'all_items'             => __( 'All Robots', 'softuni' ),
                );
                
            $args = array(
                    'labels'             => $labels,
                    'public'             => true,
                    'publicly_queryable' => true,
                    'show_ui'            => true,
                    'show_in_menu'       => true,
                    'query_var'          => true,
                    'capability_type'    => 'post',
                    'has_archive'        => true,
                    'hierarchical'       => false,
                    'menu_position'      => null,
                    'supports'           => array( 
                        'title', 
                        'editor', 
                        'author', 
                        'thumbnail', 
                        'revisions',
                    ),
                    // Visualizes the Gutenberg Editor because it uses the REST API.
                    'show_in_rest'      => true,
            );
        register_post_type( 'robot', $args );
        }
        
        /** Register taxonomy "Category" for the Robots CPT*/
        public function robot_category_taxonomy() {
            $labels = array(
                'name'          => 'Robots Categories',
                'singular_name' => 'Robot Category',
            );
        
            $args = array(
                'labels'       => $labels,
                'show_in_rest' => true,
                'hierarchical' => true,
            );
        register_taxonomy( 'Robot Category', 'robot', $args );
        }
    }

    $robots_cpt = new Robots_CPT;
    flush_rewrite_rules();

endif;
