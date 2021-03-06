<?php
/**
 * @package Degraw & Dehaan
 */

add_action( 'graphql_register_types', 'restister_project_color_set' );
function restister_project_color_set() {
    register_graphql_object_type( 'color_set', [
      'description' => __( "All images that exist for featured image", 'dd' ),
      'fields' => [
        'colorone' => [
            'type' => 'String',
            'description' => __( '150px square for thumbnails', 'dd' ),
        ],
        'colortwo' => [
            'type' => 'String',
            'description' => __( '300px width image', 'dd' ),
        ],
        'colorthree' => [
            'type' => 'String',
            'description' => __( '768px max-width image', 'dd' ),
        ],
        'colorfour' => [
            'type' => 'String',
            'description' => __( '1024px max-width image', 'dd' ),
        ],
        'colorfive' => [
            'type' => 'String',
            'description' => __( 'Original image size', 'dd' ),
        ],
        'colorsix' => [
            'type' => 'String',
            'description' => __( 'Default image size', 'dd' ),
        ],
        'colorseven' => [
            'type' => 'String',
            'description' => __( 'Default image size', 'dd' ),
        ],
        'coloreight' => [
            'type' => 'String',
            'description' => __( 'Default image size', 'dd' ),
        ],
        'colornine' => [
            'type' => 'String',
            'description' => __( 'Default image size', 'dd' ),
        ],
        'colorten' => [
            'type' => 'String',
            'description' => __( 'Default image size', 'dd' ),
        ],
      ],
    ] );
}


add_action( 'graphql_register_types', 'project_meta_graphql_register');
function project_meta_graphql_register() {
    
    register_graphql_field( 'project', 'location', [
        'type'  =>  'String',
        'description' => __( 'Where the project was created.' ),
        'resolve'       => function( $post ) {
            $location = get_post_meta( $post->ID, 'project_location_block_field')[0];
            return $location;
        }
    ]);
    register_graphql_field( 'project', 'budget', [
        'type'  =>  'String',
        'description' => __( 'Where the project was created.' ),
        'resolve'       => function( $post ) {
            $budget = get_post_meta( $post->ID, 'project_budget_field')[0];
            return $budget;
        }
    ]);
    register_graphql_field( 'project', 'projectSummary', [
        'type'  =>  'String',
        'description' => __( 'Where the project was created.' ),
        'resolve'       => function( $post ) {
            $summary = get_post_meta( $post->ID, 'project_summary_block_field')[0];
            return $summary;
        }
    ]);

    register_graphql_field( 'project', 'colorPalette', [
        'type'  =>  'color_set',
        'description' => __( 'Project color palette/swatch.' ),
        'resolve'       => function( $post ) {
            $postmeta = get_post_meta( $post->ID );
            
            foreach($postmeta as $key => $value){
                $exp_key = explode('palette_', $key);
                if($exp_key[0] == 'color_'){
                     $colors[] = $value;
                }
            }    
            
            return [
                'colorone'      =>  $colors[0][0],
                'colortwo'      =>  $colors[1][0],
                'colorthree'    =>  $colors[2][0],
                'colorfour'     =>  $colors[3][0],
                'colorfive'     =>  $colors[4][0],
                'colorsix'      =>  $colors[5][0],
                'colorseven'    =>  $colors[6][0],
                'coloreight'    =>  $colors[7][0],
                'colornine'     =>  $colors[8][0],
                'colorten'      =>  $colors[9][0]
            ];
        }
    ]);    
    
}

function printstuff(){

    $postmeta = get_post_meta( 7 );

    foreach($postmeta as $key => $value){
        $exp_key = explode('palette_', $key);
        if($exp_key[0] == 'color_'){
             $arr_result[] = $value;
        }
    }    

    print_r( $arr_result[0][0] );
    
    // $json = $postmeta['location'][0];
    // $json = $postmeta['location'];

    // decoded json object
    // $jsonDataObject = json_decode($json);

    // print_r(get_bj$json);
    // echo $json;

    // taxonomy
    // $taxonomy = get_taxonomy( 'project_type' );
    // foreach($terms as $term){

    //     $term_meta = array_slice(get_term_meta($term->term_id), 0, 1);

    //     $img =  wp_get_attachment_image_src($term_meta['featured_image'][0])[0];

    //     print_r($img);

    // }
    
}

// add_action( 'init', 'printstuff' );