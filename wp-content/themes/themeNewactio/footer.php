<?php
/*
@package themeNewactio
====================
SECTION FOOTER
====================
*/
?>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Endereço</h3>
                        <p>R. Desemb. Pedro Licínio, 716, Bairro Ouro Preto |
                            Belo Horizonte - MG | CEP: 31310-650 </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Nossas Redes Sociais</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contatos</h3>
                        <p>E-mail: <a href="mailto:<?php bloginfo('admin_email' ); ?>"><?php bloginfo('admin_email' ); ?></a></p>
                        <p>Telefone: 31-3317-0794</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span>
                            Copyright &copy; <?php bloginfo('name' ); ?> - <?php  the_time('Y');  ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>