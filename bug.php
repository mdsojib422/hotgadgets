<?php

// Register Shortcode
function rd_hover_effects_shortcode($atts){
	extract( shortcode_atts( array(

		'category' => '',	
		'style' => '',		
		'text_color' => '',	
		'link_open' => '',	
		'google_font' => '',
		'item_width' => '',		
		'item_height' => '',		
		'item_space_right' => '',		
		'full_space_bottom' => '',		
		'hover_full_left' => '',		
		'item_border' => '',		
		'border_color' => '',		
		
	), $atts) );
	
	
	    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'rd-hover', 'hover_cat' => $category)
        );
	
		while($q->have_posts()) : $q->the_post();
		$id = get_the_ID();	
		
	
		$rdmeta = vp_metabox('rdmeta.rd-hover', false);
		
	$i = 0;

		$output = '
	<style type="text/css">
		#style1 ul, #style2 ul, #style3 ul, #style4 ul, #style5 ul, #style6 ul, #style7 ul, #style8 ul, #style9 ul, #style10  ul, #style11 ul, #style12 ul, #style13 ul, #style14 ul, #style15  ul, #style16  ul, #style17 ul, #style18 ul, #style19 ul, #style20 ul, #style21 ul, #style22 ul, #style23 ul, #style24 ul, #style25 ul, #style26 ul, #style27 ul, #style28 ul, #style29 ul, #style30 ul, #style31 ul, #style32 ul {
			  margin-left: '.$hover_full_left.'px!important;
			  margin-bottom: '.$full_space_bottom.'px!important;
			  overflow: hidden;
			}
			</style>
		<div id="'.$style.'"><ul>';
		
		foreach ($rdmeta as $info) {	

		if ($style == 'style1') {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-first {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}				
					.rakib-dev-first .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-first">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div> 
				';
		}
		if ($style== 'style2') {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-second {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-second .mask {
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
		<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-second">
                    <img src="'.$info['imgup_1'].'" />
                    <div class="mask"></div>
                    <div class="rd_content">
                        <h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
                        <p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
                        <a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
                    </div>
                </div>
				';
		}
		if ($style== 'style3') {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-third {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-third .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-third">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($style== 'style4') {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-fourth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-fourth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-fourth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($style== 'style5') {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-fifth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-fifth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-fifth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($style== 'style6') {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-sixth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-sixth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>

				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-sixth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($style== 'style7') {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-seventh {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-seventh .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-seventh">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($style== 'style8') {
		
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-eighth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-eighth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-eighth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>  
				';
		}
		if ($style== 'style9') {
			
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-ninth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-ninth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
		          <div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-ninth">
                    <img src="'.$info['imgup_1'].'" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="rd_content">
                        <h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
						<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
                    </div>
                </div>
				';
		}
		if ($style== 'style10') {
			
		$output .= '
			<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family='.$google_font.');
			.rakib-dev-tenth {
				height: '.$item_height.'px !important;
				width: '.$item_width.'px !important;
					}
					.rakib-dev-tenth .mask{
						  height: '.$item_height.'px !important;
						  width: '.$item_width.'px !important;
						}
			</style>
			
				<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rakib-dev rakib-dev-tenth">
                    <img src="'.$info['imgup_1'].'" />
						<div class="mask">
							<h2 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h2>
								<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a>
					</div>
                </div>
				';
		}
		
		if ($style== 'style11') {
			
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				#style11 figure {
				  height: '.$item_height.'px !important;
				  width: '.$item_width.'px !important;
				}
			</style>
			
			<li style=" margin-right: '.$item_space_right.'px !important;" >
		<figure class="mar-rig">
			<img src="'.$info['imgup_1'].'">
			<figcaption>
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
					<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
				<p><a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a></p>
			</figcaption>
		</figure>
		</li>
				';
		}
		if ($style== 'style12') {
			
		$output .= '
		

			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.mar-rig.rd-item.square.effect10.top_to_bottom {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect10 top_to_bottom">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>		
		';
		}
		
		if ($style== 'style13') {
			
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				#style13 figure {
				  height: '.$item_height.'px !important;
				  width: '.$item_width.'px !important;
				}
			</style>
			
			<li style=" margin-right: '.$item_space_right.'px !important;">
		<figure class="mar-rig">
			<img src="'.$info['imgup_1'].'">
			<figcaption>
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
					<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
				<p><a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a></p>
			</figcaption>
		</figure>
		</li>
		
		
		
		<li style=" margin-right: '.$item_space_right.'px !important;">
		';
		}
		if ($style== 'style14') {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				#style14 figure {
				  height: '.$item_height.'px !important;
				  width: '.$item_width.'px !important;
				}
			</style>
			
			<li style=" margin-right: '.$item_space_right.'px !important;">
		<figure class="mar-rig">
			<img src="'.$info['imgup_1'].'">
			<figcaption>
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
					<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
				<p><a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a></p>
			</figcaption>
		</figure>
		</li>
		<li>
		';
		}
		if ($style== 'style15') {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.effect5 {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
					}
			</style>
			
	<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect5 left_to_right ">
        <div class="img">
			<img src="'.$info['imgup_1'].'">
		</div>
					<div class="info">
							<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
							<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
					<div class="effect_button">
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
			</div>
		</div>
	</div>
	';
		}
		if ($style == 'style16') {
		$output .= '
					<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.effect6 {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
					}
			</style>
			
	<div style=" margin-right: '.$item_space_right.'px !important;" class="rd-item square effect6 from_top_and_bottom">
        <div class="img">
			<img src="'.$info['imgup_1'].'">
		</div>
					<div class="info">
							<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
							<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
					<div class="effect_button">
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
			</div>
		</div>
	</div>
	';
		}
		
		if ($style == 'style17') {
		$output .= '
					<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
.rd-item.square.colored.effect6.from_top_and_bottom{
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
					}
			</style>
			
	<div style=" margin-right: '.$item_space_right.'px !important;" class="rd-item square colored effect6 from_top_and_bottom">
        <div class="img">
			<img src="'.$info['imgup_1'].'">
		</div>
					<div class="info">
							<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
							<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
					<div class="effect_button">
						<a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
			</div>
		</div>
	</div>
			
	';
		}
		if ($style == 'style18') {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.effect2 {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect2">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
		
		if ($style == 'style19') {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.mar-rig.rd-item.square.effect7 {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect7">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
		if ($style== 'style20') {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.effect8 {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect8 scale_up">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
		
		if ($style== 'style21') {
		$output .= '
			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
.mar-rig.rd-item.square.effect8.scale_down {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect8 scale_down">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
	
		if ($style== 'style22') {
		$output .= '

			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.mar-rig.rd-item.square.effect9.bottom_to_top {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect9 bottom_to_top">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
		}
		
		if ($style== 'style23') {
		$output .= '

			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.mar-rig.rd-item.square.effect9.left_to_right {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect9 left_to_right">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
	';
	}
		if ($style== 'style24') {
		$output .= '
<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				#style24 figure {
				  height: '.$item_height.'px !important;
				  width: '.$item_width.'px !important;
				}
			</style>
			
			<li style=" margin-right: '.$item_space_right.'px !important;" >
		<figure class="mar-rig">
			<img src="'.$info['imgup_1'].'">
			<figcaption>
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
					<p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
				<p><a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'" class="info">'.$info['link_title'].'</a></p>
			</figcaption>
		</figure>
		</li>
		
		<li>	
		

	';
		}
		if ($style== 'style25') {
		$output .= '

			<style type="text/css">
				@import url(http://fonts.googleapis.com/css?family='.$google_font.');
				.mar-rig.rd-item.square.effect9.top_to_bottom {
				 height: '.$item_height.'px !important;
				 width: '.$item_width.'px !important;
				}
			</style>
			<div style=" margin-right: '.$item_space_right.'px !important;" class="mar-rig rd-item square effect9 top_to_bottom">
        <div class="img"><img src="'.$info['imgup_1'].'" alt="img"></div>
        <div class="info">
				<h3 style="border-bottom:'.$item_border.' '.$border_color.'; font-family:'.$google_font.'; color:'.$text_color.';">'.$info['title'].'</h3>
                <p style="font-family:'.$google_font.'; color:'.$text_color.';">'.$info['desc'].'</p>
		   <div class="effect_button">
            <a style="font-family:'.$google_font.'; color:'.$text_color.';" target="'.$link_open.'" href="'.$info['link'].'">'.$info['link_title'].'</a>
            </div>
        </div></div>
			
			
	';
		}
		
		$i++;
	}
	
	endwhile;
	$output .='</div></ul>';
	wp_reset_query();
	return $output;
}

add_shortcode('hover', 'rd_hover_effects_shortcode');

?>