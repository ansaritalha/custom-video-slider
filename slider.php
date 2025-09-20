<?php

// Register shortcode [video_banner]
function mc_video_banner_shortcode($atts, $content = null) {
    $atts = shortcode_atts([
        'video'   => '',
        'heading' => 'Educational Toys',
        'sub'     => 'Mindfully Selected For Children on the Spectrum!',
        'button'  => 'Shop Now',
        'link'    => '#'
    ], $atts);
    ob_start(); ?>
    <div class="mc-video-banner">
        <video class="mc-video" autoplay muted loop playsinline>
            <source src="<?php echo esc_url($atts['video']); ?>" type="video/mp4">
        </video>
        <div class="mc-overlay">
            <h2><?php echo esc_html($atts['heading']); ?></h2>
            <p><?php echo esc_html($atts['sub']); ?></p>
            <a href="<?php echo esc_url($atts['link']); ?>" class="mc-btn"><?php echo esc_html($atts['button']); ?></a>
        </div>
    </div>
    <style>
        .mc-video-banner {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 7;
            min-height: 400px;
            max-height: 700px;
            overflow: hidden;
            background: #eee;
            display: flex;
            align-items: stretch;
        }
        .mc-video {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }
        .mc-overlay {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            height: 100%;
            color: #fff;
            padding: 0 5%;
            max-width: 800px;
            margin-left: 0;
            margin-right: auto;
            text-align: left;
            transform: translateX(70%);
        }
        .mc-overlay h2 {
           font-family: Nunito;
    font-size: 39px;
    font-weight: 600;
            max-width: 700px;
            line-height: 43px;
            word-break: break-word;
            white-space: normal;
            color: #fff;
        }
        .mc-overlay p {
            font-family: Nunito;
    font-size: 52px;
    font-weight: 400;
            margin-top: 12px;
			    letter-spacing: 0px;
    line-height: 56px;
            text-align: left;
        }
        .mc-btn {
            background: #28a745;
            padding: 12px 28px;
            border-radius: 4px;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
            margin-top: 12px;
        }
        .mc-btn:hover {
            background: #000;
            color: #fff;
        }
        /* Mobile styles */
        @media (max-width: 768px) {
            .mc-video-banner {
                aspect-ratio: 16 / 12;
                min-height: 300px;
                max-height: 450px;
            }
            .mc-overlay {
                transform: none !important;
                max-width: 90vw;
                padding: 0 5vw;
                align-items: flex-start;
                text-align: left;
                margin-left: 40%;
                margin-right: auto;
            }
            .mc-overlay h2 {
                font-size: 2.1rem;
                max-width: 320px;
                line-height: 1.1;
                margin-bottom: 10px;
                white-space: normal;
                word-break: break-word;
                color: #fff;
                text-align: left;
				display:none;
            }
            .mc-overlay p {
                font-size: 2.1rem;
                line-height: 1.4;
                max-width: 320px;
                margin: 0 0 18px 0;
                white-space: normal;
                word-break: break-word;
                text-align: left;
            }
            .mc-btn {
                width: auto;
                
                margin-top: 5px;
				padding: 10px 18px;
            }
        }
		@media (min-width: 1200px) {
    #video-row-container .container {
        width: 100%!important;
		max-width: 100%!important;
    }
}
		@media (min-width: 1300px and max-width:1600px) {
			.mc-overlay {
				 transform: translateX(100%);
			}
		}
		@media (min-width: 1600px) {
			.mc-overlay {
				 transform: translateX(130%);
			}
		}
		div#video-row-container {
    padding-top: 0px !important;
			padding-bottom: 0px !important;
}
		.vc_custom_1594017397046 {
    padding-top: 0px !important;
    
}
		@media (max-width: 767px) {
    .tm-row.tm-responsive-custom-68757514 {
        padding-top: 0px !important;
    }
    }
    </style>
    <?php
    return ob_get_clean();
}
add_shortcode('video_banner', 'mc_video_banner_shortcode');
