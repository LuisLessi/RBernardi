<?php $this->load->view('Header'); ?>

    <div class="row">
        <div class="col-md-5">
            <div class="Mapa">
                <h4> <b> Localização </b> </h4>
                <img width="330px;" height="250px;" src="<? echo base_url('assets/Imgs/mapa.jpg') ?>" alt=""><br>
                Rua machado de Assis,121 </br>
                Raim Manhoca
                Pscicaliandia - UF
                </br> </br>
            </div>
            <div class="Contatos">
                <h4> <b> Contato Direto </b> </h4>
                Fone:(71) 9999-9999 <br>
                Email: contato@bernardi.com <br>
                Skype: login.skype <br>
            </div>
        </div>
        <div class="col-md-7">
            <h4> <b> Envie uma mensagem </b> </h4><br>
            <div class="Formulário">
                <?php 
                    if($formerror);
                        echo '<p>'.$formerror.'</p>';
                    echo form_open('pagina/contato');

                    echo form_label('Seu Nome:', 'nome') . '<br>';
                    echo form_input('nome', set_value('nome'), 'style="width: 80%; height: 29px;"') . '<br>';

                    echo form_label('Seu Email:', 'email') . '<br>';
                    echo form_input('email', set_value('email'), 'style="width: 80%; height: 29px;"') . '<br>';

                    echo form_label('Assunto:', 'assunto') . '<br>';
                    echo form_input('assunto', set_value('assunto'), 'style="width: 80%; height: 29px;"') . '<br>';

                    echo form_label('Mensagem:', 'mensagem') . '<br>';
                    echo form_textarea('mensagem', set_value('mensagem'), 'style="width: 80%; height: 100px;"') . '<br>';


                    echo form_submit('enviar', 'Enviar Mensagem >>', 'class="btn btn-info"');
                    echo form_close();
                ?>
               <!--
                <form action="" method="get">
                    <label> Seu Nome</label><br>
                    <input type="text" style="width: 80%; height: 29px;"  name="Usuario_Nome" id="Usuario-Nome"><br>
                    <label> Seu Email</label><br>
                    <input type="email" style="width: 80%; height: 29px;" name="Usuario_Email" id="Usuario-Email"><br>
                    <label> Assunto</label><br>
                    <input type="text" style="width: 80%; height: 29px;"  name="Usuario_Assunto" id="Usuario-Assunto"><br>
                    <label> Mensagem</label><br>
                    <input type="text" style="width: 80%; height: 100px;"  name="Usuario_Msg" id="Usuario-Msg">
                    <button type="submit" class="btn btn-info" style="margin-top: 3%;">Enviar Mensagem &raquo;</button>
                </form>
                -->
            </div>
        </div>
    </div>

    <div class="row" style="Margin-top: 5%;">
        <div class="col-md-5">
            <h4> <b> Método alternativo de contato </b> </h4><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> <br>
            &emsp; 1.Labore et dolore magna aliqua. <br>
            &emsp; 2.Lorem ipsum dolor sit amet.<br><br>
            Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
        <?php $this->load->view('Noticias'); ?>
    </div>

<?php $this->load->view('Footer'); ?>

