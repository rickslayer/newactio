<?php get_header(); ?>

    <!-- Portfolio Grid Section -->
    <input type="hidden" name="ajaxurl" id="ajaxurl" value="<?php echo admin_url('admin-ajax.php');?>"/>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <h1><i class="fa fa-users fa-1x" aria-hidden="true"></i></h1>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/cabin.png" class="img-responsive" alt="Cabin">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/cake.png" class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/circus.png" class="img-responsive" alt="Circus tent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/game.png" class="img-responsive" alt="Game controller">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/safe.png" class="img-responsive" alt="Safe">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/submarine.png" class="img-responsive" alt="Submarine">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sobre a Actio</h2>
                    <h1><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i></h1>
                </div>
            </div>



            <div class="row" id="sobre_Actio">

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contato</h2>
                    <h1 class="space">
                   <i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
                   </h1>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Nome e obrigatório.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="E-mail e obrigatório.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Telefone</label>
                                <input type="tel" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Telefone e obrigatório.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Mensagem</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="Mensagem" required data-validation-required-message="Mensagem é obrigatória"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 <script type="text/javascript">
                         jQuery(function($) {
                                var urlajax = $("#ajaxurl").val();

                                var call = $.ajax({
                                    url: urlajax,
                                    dataType: "json",
                                    method: "post",
                                    data : {
                                        action : 'actio_get_post_by_category'
                                    }


                                });
                                call.done(function(data){
                                        var clientes = $("#sobre_Actio");

                                    $.each(data, function(i, field){



                                        var h1 = $("<h1>",{
                                            "text" : field.post_title
                                        });

                                        var p = $("<p>").html(field.post_content).text();

                                        var div = $("<div>",{
                                                    'class':"col-sm-6"
                                        });






                                        $(clientes).append(div);
                                         $(div).append(h1);
                                         $(div).append(p);


                                    });

                                });
                              console.log(clientes);

                         });
                     </script>
<?php get_footer(); ?>