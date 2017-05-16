<?php
function actio_get_post_by_category()
{
    $result = array();
    $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => "Empresa"
                    );
            $dados = get_posts( $args );

 echo json_encode($dados, true);
         die();
wp_reset_postdata();
}