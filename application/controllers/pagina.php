<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


	public function index()
	{
        $dados['titulo'] = 'RBernardi Desenvolvimento Web';
        $this->load->view('home', $dados);
    }

    public function cliente()
    {
        $dados['titulo'] = 'Clientes - RBernardi Desenvolvimento Web';
        $this->load->view('cliente', $dados);
    }
    
    public function servico()
    {
        $dados['titulo'] = 'O que eu faço - RBernardi Desenvolvimento Web';
        $this->load->view('servico', $dados);
    }
    
    public function sobre()
    {
        $dados['titulo'] = 'Sobre mim - RBernardi Desenvolvimento Web';
        $this->load->view('sobre', $dados);
    }

    public function contato()
    {
        $this->load->helper('form');
        $this->load->library(array('form_validation', 'email'));
        //Regras de validação do formulário
        $this->form_validation->set_rules('nome', "Nome", "trim|required");
        $this->form_validation->set_rules('email', "Email", "trim|required|valid_email");
        $this->form_validation->set_rules('assunto', "Assunto", "trim|required");
        $this->form_validation->set_rules('mensagem', "Mensagem", "trim|required");
        if ($this->form_validation->run() == FALSE) {
            $dados['formerror'] = validation_errors();
        } else {
            $dados_form = $this->input->post();
            $this->email->from($dados_form['email'], $dados_form['nome']);
            $this->email->to('luisadsfatec@hotmail.com');
            $this->email->subject($dados_form['assunto']);
            $this->email->message($dados_form['mensagem']);

            if($this->email->send()) {
            $dados['formerror'] = 'Mensagem enviada com sucesso!';
            }
            else {
            $dados['formerror'] = 'Ocorreu um erro ao enviar a mensagem, tente novamente em alguns minutos';
            }
        }
        $dados['titulo'] = 'Fale comigo - RBernardi Desenvolvimento Web';
        $this->load->view('contato', $dados);
    }
}
