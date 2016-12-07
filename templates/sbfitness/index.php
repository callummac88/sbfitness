<?php
defined('_JEXEC') or die;
JHtml::_('bootstrap.framework');
$app = JFactory::getApplication();
?>

<?php
// Remove Scripts
$doc = JFactory::getDocument();
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

    <head>
        <meta charset="utf-8">
        <jdoc:include type="head" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="google-site-verification" content="SUezo6rL7YuBVKIxPY4L6VeVKJMSrrA9MQRbVEvng1Y" />

        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" media="screen" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/modernizr.min.js"></script>
        
        <script>
            jQuery(function() {
                // SVG / PNG
                if(!Modernizr.svg) {
                    jQuery('img[src*="svg"]').attr('src', function () {
                        return jQuery(this).attr('src').replace('.svg', '.png');
                    });
                }
            });
        </script>

        <?php
        if($this->countModules('left')){ $contentspanwidth="col-sm-9 col-sm-push-3";}
        if($this->countModules('left-wide')){ $contentspanwidth="col-sm-6 col-sm-push-6";}
        if(!$this->countModules('left') && !$this->countModules('left-wide')){ $contentspanwidth="col-sm-12";}
        ?>

        <?php
        $app = JFactory::getApplication();
        $menu = $app->getMenu()->getActive();
        $pageclass = '';
        if (is_object($menu)) $pageclass = $menu->params->get('pageclass_sfx');
        ?>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="<?php echo $pageclass ? htmlspecialchars($pageclass) : 'default'; ?>">

        <div class="header-bg navbar-default navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="col-logo">
                        <jdoc:include type="modules" name="logo" style="xhtml" />
                    </div>
                </div>
                <div id="navbar" class="main-nav navbar-collapse collapse">
                    <jdoc:include type="modules" name="main-menu" style="none" />
                </div>
            </div>
        </div>

        <?php if($this->countModules("banner-with-image-bg")){ ?>
        <div class="banner-image-bg">
            <div class="container banner-image-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-image-text">
                            <jdoc:include type="modules" name="banner-with-image-bg" style="xhtml" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>

        <?php if($this->countModules("banner")){ ?>
        <div class="banner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <jdoc:include type="modules" name="banner" style="xhtml" />
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
            
        
        <?php if($this->countModules("home-bio")){ ?>
        <div class="home-bio-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <jdoc:include type="modules" name="home-bio" style="xhtml" />
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        
        <?php if($this->countModules("testimonial")){ ?>
        <div class="testimonial-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <jdoc:include type="modules" name="testimonial" style="xhtml" />
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        
        
                
        <?php if($this->countModules("pricing-left and pricing-middle and pricing-right")){ ?>
        <div class="pricing-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 pricing-box pricing-left">
                        <jdoc:include type="modules" name="pricing-left" style="xhtml" />
                    </div>
                    <div class="col-md-4 pricing-box pricing-middle">
                        <jdoc:include type="modules" name="pricing-middle" style="xhtml" />
                    </div>
                    <div class="col-md-4 pricing-box pricing-right">
                        <jdoc:include type="modules" name="pricing-right" style="xhtml" />
                    </div>    
                </div>
            </div>
        </div>
        <?php }?>
        
        
         <?php if($this->countModules("extra-box and video-box")){ ?>
        <div class="ctas-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 cta-box extra-box">
                        <jdoc:include type="modules" name="extra-box" style="xhtml" />
                    </div>
                    <div class="col-md-6 video-box">
                        <jdoc:include type="modules" name="video-box" style="xhtml" />
                    </div> 
                </div>
            </div>
        </div>
        <?php }?>
        
        
        
        
                      
        <?php if($this->countModules("blog-box and faqs-box")){ ?>
        <div class="ctas-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 cta-box blog-box">
                        <jdoc:include type="modules" name="blog-box" style="xhtml" />
                    </div>
                    <div class="col-md-6 cta-box faqs-box">
                        <jdoc:include type="modules" name="faqs-box" style="xhtml" />
                    </div> 
                </div>
            </div>
        </div>
        <?php }?>
        
        
        

        <div class="content-bg <?php if(!$this->countModules("banner") && !$this->countModules('banner-with-image-bg') && !$this->countModules('slide-active')){ ?>no-banner<?php }?>">
            <div class="container">
                <div class="row">
                    <div class="<?php echo $contentspanwidth; ?> content">
                        <jdoc:include type="component" />
                    </div>
                    <?php if($this->countModules("left")){ ?>
                    <div class="col-sm-3 col-sm-pull-9 col-left">
                        <jdoc:include type="modules" name="left" style="xhtml" />
                        <div class="clearfix"></div>
                    </div>
                    <?php } ?>
                    <?php if($this->countModules("left-wide")){ ?>
                    <div class="col-sm-6 col-sm-pull-6 col-left-wide">
                        <jdoc:include type="modules" name="left-wide" style="xhtml" />
                        <div class="clearfix"></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php if($this->countModules("primary-layer")){ ?>
        <div class="primary-layer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                        <jdoc:include type="modules" name="primary-layer" style="xhtml" />
                    </div>
                </div>
            </div>
        </div>
        <?php }?>

        <div class="footer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 footer-left">
                        <p>Copyright &#169; <?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>. All rights reserved.</p>
                    </div>
                    <div class="col-md-7 footer-right">
                        <jdoc:include type="modules" name="footer-right" style="xhtml" />
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script type="text/javascript">
        (function(jquery){
            jquery(document).ready(function(){
                // dropdown
                jquery('.parent > a').append('<b class="caret"></b>');
            });
        })(jQuery);
    </script>
    
    
    
</html>
