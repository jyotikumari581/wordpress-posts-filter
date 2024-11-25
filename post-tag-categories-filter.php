<?php
// filter tag and categories //

function filtertagandcategory(){
 ob_start();
 ?>

 <style>

.tag-filters.hides-how
{
      margin: 0 auto;
}	

.flowers.custom-section-post-grid
{
    max-width: 100%;
    margin: 0 auto;
    width: 100%;
}

.flowers.custom-section-post-grid .flowers-container
{
    max-width: 1200px;
    margin: 0 auto;
}
 
.main-cats-home
{
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    padding: 20px 0px 20px 0px;
}	

.sub-cats-home
{
    padding-bottom: 20px;
    padding-top: 20px;
	margin: 0 auto;
    text-align: center;
    display: flex;
}

.sub-cats-home span
{
	display: flex;
}

.sub-cats-home span img
{
	padding-right: 9px;
}

.feature1 {

    position: relative;
    height: 50px;
    margin: 5px;
    float: left;
    box-sizing: border-box;
    margin-right: 0px;
background-color: #000;
    border-radius: 30px
}

.feature1 div {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 25px;
  padding: 25px 28px;
}

.feature1 input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  cursor: pointer;
}

input[type=radio]:checked ~ div {
  background-color: #50bcf2;
}

@media (min-width: 1201px) {
.custom-section-post-grid .col-lg-4 {
    max-width: 33.33% !Important;
	 width: 33.33% !Important;
}
}

.custom-section-post-grid
{
   padding:40px 0px;
}
	
.tag-filters input[type=radio]:checked ~ div span
{
	    color: #fff;
}

.tag-filters input[type=radio]:checked ~ div span img
{
	   -webkit-filter: brightness(0) invert(1);
  filter: brightness(0) invert(1);
}


.feature1 div span
{
	text-align: center;
    color: #FFFFFF;
    font-family: "Roboto", Sans-serif;
    font-size: 15px;
    font-weight: 400;
    text-transform: uppercase;
    line-height: 22px;
}

.tag-filters article div span
{
    padding: 7px 22px;
    color: #6EC2FA;
    font-size: 15px;
    font-weight: 500;
    text-transform: uppercase;
}


.tag-filters article div 
{
    border-radius: 30px;
}

.tag-filters article {
  position: relative;
  width: auto;
  height: auto;
  margin: 5px;
  float: left;
  border: 2px solid #000;
  box-sizing: border-box;
  border-radius: 30px;
}

.tag-filters article div {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 25px;
  transition: .5s ease;
}

.tag-filters article input {
    position: absolute !IMPORTANT;
    top: 0 !IMPORTANT;
    left: 0 !IMPORTANT;
    width: 100% !IMPORTANT;
    height: 100% !IMPORTANT;
    opacity: 0;
    cursor: pointer;
}

.tag-filters input[type=radio]:checked ~ div {
  background-color: #4ec4ff;
  border-radius: 30px;
}
label.feature1:hover {
    background-color: #4ec4ff;
    border-radius: 30px;
}
	.button-post a
	{
	   padding: 10px 20px;
    background: #046bd2;
    border-radius: 30px;
    color: #fff;
}

   .flowers .post-data  
	{
         font-family: 'Open Sans';
		font-style: normal;
		font-weight: 400;
		font-size: 16px;
		line-height: 24px;
		color: #646361 !important;
    }
   
   
   .flowers .flowers-single-meta.date-post  
	{
      padding: 8px 0px 8px 0px;
	      padding-right: 16px;
   }
   
 .flowers .flowers-single-meta.date-post .flowers-meta-wraper  
	{
        font-family: 'Open Sans';
		font-style: normal;
		font-weight: 600;
		font-size: 14px;
		line-height: 24px;
		color: #046bd2;
   }

.flowers .flowers-post-body  {
  padding:15px !important;
   
}

.flowers .flowers-post-body .entry-title {
  padding: 0px !important;
  border-radius: 0px !important;
   font-family: 'Open Sans' !important;
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    line-height: 28px;
    margin: 0px;
}


.flowers .flowers-post-body .entry-title a {
  color: #060107;
    font-weight: 600;
    font-size: 18px;

}


.flowers .flowers-entry-thumb {
  padding: 0px !important;
  border-radius: 0px !important;
}

.flowers .flowers-entry-thumb img{
      max-height: 211px;
    width: -webkit-fill-available;
}

.post-image-card {
    min-height: 414px;
}

.flowers {
  float:left;
  width:80%;
}
.flowers .post-image-card {
    background-color: #2482d926 !Important;
    margin: 0px 10px;
    border: 5px solid #EDEDED;
    border-radius: 10px;
    min-height: 510px;
}


.cats-on-post span
{
     font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    line-height: 28px;
    color: #060107;
    padding-left: 12px;
    position: relative;
    top: -7px;
}
 

.cats-on-post {
    position: absolute;
    background-color: #fff;
    padding: 10px 10px 0 0;
}
.flowers .col-lg-4
{
    margin-bottom: 31px;
}

@media (min-width: 1201px) {
	.flowers .col-lg-4
	{
	  max-width: 33.3% !Important;
	  float: left;
	}
}


@media only screen and (min-device-width: 769px) and (max-device-width: 1200px) {
	.flowers .col-lg-4
	{
	     max-width: 45% !Important;
	}
}


@media (min-width: 769px) {
#hide
	{
	 display:none;
	}
	
	#show
	{
	  display:none;
	}
}
@media only screen and (min-width: 601px) and (max-width: 1024px){

.flowers .col-lg-4
	{
	     max-width: 50% !Important;
	     float: left;
	}
	#show {
    display: block;
}
.show-hide-all-filter
	{
	  background:#6EC2FA;
	  padding:10px 30px;
	  text-align: center;
      color: #fff;
      text-transform: uppercase;
	  font-family: "oswald", Arial, sans-serif !important;
	}
}

@media only screen and (max-width: 600px) {
    .flowers .col-lg-4
	{
	     max-width: 100% !Important;
	}
    .flowers .post-image-card {
    height: auto;
    width: auto;
    }
    .show-hide-all-filter
	{
	  background:#6EC2FA;
	  padding:10px 30px;
	  text-align: center;
      color: #fff;
      text-transform: uppercase;
	  font-family: "oswald", Arial, sans-serif !important;
	}
}
@media (max-width: 768px) {


.show-hide-all-filter
{
    font-size: 14px;
    font-weight: 400;
}

.show-hide-all-filter img
{
    margin-top: 0px;
    padding-top: 1px;
    margin-right: 13px;
    height: 16px;
    font-weight: 400;
}
	
	
	.flowers-wrap {
    float: left;
    width: 100%;
}
	
	.flowers {
    float: left;
    width: 100%;
    margin-top: 9px;
}


.show-hide-all-filter
	{
	  background:#6EC2FA;
	  padding:10px 30px;
	  text-align: center;
      color: #fff;
      text-transform: uppercase;
	  font-family: "oswald", Arial, sans-serif !important;
	}
	
	.hides-how
	{
	  display:none;
	}
	
	#hide
	{
	 display:none;
	}
	
	#show
	{
	  display:block;
	}
 
 
 .filter-title.category:before
 {
   display:none;
 }

 .filter-title {
    margin-top: 0px;
    margin-bottom: 11px;
}
 
}

@media only screen and (min-device-width: 1025px) and (max-device-width: 1200px) {
	.flowers .col-lg-4
	{
	  max-width: 33.3% !Important;
	}
}
.flowers .flowers-container .row {
    display: flex !important;
    flex-wrap: wrap !important;
}

 </style>

<div class="flowers-wrap">  
<div id="hide" class="show-hide-all-filter">
	<span class="hide-text">Hide all filters</span></div>
	<div id="show" class="show-hide-all-filter show-how"><span class="hide-text">Show all filters</span></div>
	
 
 <script>
      jQuery(document).ready(function(){
	  jQuery("#hide").click(function(){
		jQuery(".hides-how").hide();
		jQuery("#hide").hide();
		jQuery("#show").show();
	  });
	  jQuery("#show").click(function(){
		jQuery(".hides-how").show();
		jQuery("#show").hide();
		jQuery("#hide").show();
	  });
	});
</script>
 <div class="main-cats-home">
  <form class="tag-filters hides-how">
    <?php
	if( $terms = get_terms( array(
		'taxonomy' => 'category', // to make it simple I use default categories
		'orderby' => 'name'
		
	) ) ) : 
		 
		foreach ( $terms as $term ) {
			?>
<label class="feature1">
  <input type="radio" name="fl-colour" id="catid<?php echo $term->term_id;?>" value="<?php echo $term->term_id;?>">
    <div>
      <span>
       <?php echo $term->name;?>
      </span>
    </div>
  </label>
			<?php
		}
	   endif;
  ?>
  </form>
 </div>
<div class="sub-cats-home">
<form class="tag-filters hides-how">
<?php 
     $tags = get_tags(array(
      'hide_empty' => false
    ));
     
    foreach ($tags as $tag) {
        
      $image_id = get_term_meta ( $tag->term_id, 'tag-image', true );
      $img_arr = wp_get_attachment_image_src ( $image_id, 'large' );
    ?>
 
    <article class="<?php echo $tag->name; ?>" for="<?php echo $tag->name; ?>"><input type="radio" name="fl-size" value="<?php echo $tag->name; ?>" id="<?php echo $tag->name; ?>" />  <div>  <span> <?php echo $tag->name; ?>  </span> </div>
    </article> 
 
 <?php 
  } 
 ?>
</form>   
</div> 
</div>

<section class="flowers custom-section-post-grid">
			 <div class="flowers-container">
			<div class="row">
<?php

	$args = array(
	'post_type'=> 'post',
	'orderby'    => 'ID',
	'post_status' => 'publish',
	'order'    => 'DESC',
	'posts_per_page' => -1 
	);
	
 
	$result = new WP_Query( $args );
 
	if ( $result-> have_posts() ) : ?>
	<?php while ( $result->have_posts() ) : $result->the_post(); ?>
	   
	<?php $poid = get_the_ID();
     $post_categories = wp_get_post_categories( $poid );
	 
	  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
	?>  
<?php 
    
?>
  <div class="col-lg-4 col-md-6 flower" data-id="<?php the_title(); ?>" data-category="<?php foreach($post_categories as $c){ $cat = get_category( $c ); echo $cat->term_id." "; } ?> <?php $tags = wp_get_post_tags($poid); foreach ( $tags as $tag ) { $tag_link = get_tag_link( $tag->term_id ); echo $tag->name." ";} ?>">

         <div class="post-image-card">
              <div class="flower-header">
			  
			   <div class="cats-on-post">
                <div class="flower-meta-wraper">
			  <?php foreach($post_categories as $c){  $cat = get_category( $c ); ?>
                <span>
				  <a href="<?php echo get_category_link($cat->term_id); ?>" rel="category tag"> <?php echo $cat->name; ?></a>
				 </span>
			  <?php } ?>
				  </div>
            </div>
			  
                  <a href="<?php echo get_permalink($poid); ?>" class="flowers-entry-thumb">
                   <?php the_post_thumbnail($poid); ?> 
                          </a>                           
					 </div>

		 <div class="flowers-post-body ">
					<h2 class="entry-title">
				 <a href="<?php echo get_permalink($poid); ?>">
								<?php the_title(); ?> </a>
			  </h2>
				 <div class="flowers-single-meta date-post">
				 <span class="flowers-meta-wraper"><?php $post_date = get_the_date( 'Y/m/d' ); echo $post_date; ?></div>							
			  <p class="post-data">
					 <?php $post = get_post($poid);

			     $post_content = wp_trim_words( $post->post_content, 15 , '...');          
			      echo str_replace("[vc_row][vc_column][vc_column_text]","", $post_content);
?></p>
					   <div class="button-post">
                                    
             <a href="<?php echo get_permalink($poid); ?>" class="button-post">Read More
               <i aria-hidden="true" class="fas fa-angle-right"></i> </a>
          </div>
        </div>
       </div>
   </div>
 
<?php
 
 endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
            	
  </div>
       </div> 
	   </div>
 </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
<script>
var $filterCheckboxes = $('input[type="radio"]');
var filterFunc = function() {
  
  var selectedFilters = {};

  $filterCheckboxes.filter(':checked').each(function() {

    if (!selectedFilters.hasOwnProperty(this.name)) {
      selectedFilters[this.name] = [];
    }

    selectedFilters[this.name].push(this.value);
  });

  // create a collection containing all of the filterable elements
  var $filteredResults = $('.flower');

  // loop over the selected filter name -> (array) values pairs
  $.each(selectedFilters, function(name, filterValues) {

    // filter each .flower element
    $filteredResults = $filteredResults.filter(function() {

      var matched = false,
        currentFilterValues = $(this).data('category').split(' ');

      // loop over each category value in the current .flower's data-category
      $.each(currentFilterValues, function(_, currentFilterValue) {

        // if the current category exists in the selected filters array
        // set matched to true, and stop looping. as we're ORing in each
        // set of filters, we only need to match once

        if ($.inArray(currentFilterValue, filterValues) != -1) {
          matched = true;
          return false;
        }
      });

      // if matched is true the current .flower element is returned
      return matched;

    });
  });

  $('.flower').hide().filter($filteredResults).show();
}

$filterCheckboxes.on('change', filterFunc);  

</script>
<?php
 return ob_get_clean();
}
add_shortcode( 'cat-tag-filter', 'filtertagandcategory' );
