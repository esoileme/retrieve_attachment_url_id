pippin_get_image_id($image_url) { 	
  global $wpdb; 	
  $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url ));          
  return $attachment[0];  
}

/* Usage example*/
/*
$image = get_post_meta($post->ID,'hp-photo',true);
$image_id = pippin_get_image_id($image);
$image = wp_get_attachment_image_src($image_id, 'medium');

if( ! empty($image)) {
  $return .= '<a class="frc-image" href="' . get_the_permalink($post->ID) . 
  '"><figure style="background:' . $post_category_color . ';">' . 
  '<img class="frcimage-spec-height" src="' .  $image_thumb[0] . '"/>';
}
*/
