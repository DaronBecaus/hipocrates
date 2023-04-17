<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/db/conexao.php";

class Paciente {
    public $id_paciente;
    public $nome;
    public $rg;
    public $cpf;
    public $cns;
    public $telefone;
    public $email;
    public $genero;
    public $nascimento;
    public $orgao_emissor;
    public $estado_civil;
    public $limitacoes;
    public $etnias;
    public $tipo_sanguineo;
    public $foto;
    public $senha;
    public $id_endereco;

    public function __construct($id_paciente = false)
    {
        if ($id_paciente) {
            $this->id_paciente = $id_paciente;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT nome, cpf, rg, cns, telefone, email, genero, nascimento, orgao_emissor, estado_civil, limitacoes, etnias, tipo_sanguineo, foto, senha, id_endereco FROM paciente 
        WHERE id_paciente = :id_paciente";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_paciente', $this->id_paciente);
        $stmt->execute();

        $lista = $stmt->fetch();
        $this->nome = $lista['nome'];
        $this->cpf = $lista['cpf'];
        $this->rg = $lista['rg'];
        $this->cns = $lista['cns'];
        $this->telefone = $lista['telefone'];
        $this->email = $lista['email'];
        $this->genero = $lista['genero'];
        $this->nascimento = $lista['nascimento'];
        $this->orgao_emissor = $lista['orgao_emissor'];
        $this->estado_civil = $lista['estado_civil'];
        $this->limitacoes = $lista['limitacoes'];
        $this->etnias = $lista['etnias'];
        $this->tipo_sanguineo = $lista['tipo_sanguineo'];
        $this->foto = $lista['foto'];
        $this->senha = $lista['senha'];
        $this->id_endereco = $lista['id_endereco'];
    }

    public function criar()
    {
        $query = "INSERT INTO  paciente (nome, cpf, rg, cns, telefone, email, genero, nascimento, orgao_emissor, estado_civil, limitacoes, etnias, tipo_sanguineo, foto, senha, id_endereco) VALUES (:nome, :cpf, :rg, :cns, :telefone, :email, :genero, :nascimento, :orgao_emissor, :estado_civil, :limitacoes, :etnias, :tipo_sanguineo, :foto, :senha, :id_endereco)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':cpf', $this->cpf);
        $stmt->bindValue(':rg', $this->rg);
        $stmt->bindValue(':cns', $this->cns);
        $stmt->bindValue(':telefone', $this->telefone);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':genero', $this->genero);
        $stmt->bindValue(':nascimento', $this->nascimento);
        $stmt->bindValue(':orgao_emissor', $this->orgao_emissor);
        $stmt->bindValue(':estado_civil', $this->estado_civil);
        $stmt->bindValue(':limitacoes', $this->limitacoes);
        $stmt->bindValue(':etnias', $this->etnias);
        $stmt->bindValue(':tipo_sanguineo', $this->tipo_sanguineo);
        $stmt->bindValue(':foto', $this->foto);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':id_endereco', $this->id_endereco);
        $stmt->execute();
        $id_paciente = $conexao->lastInsertId();
        return $id_paciente;
        
    }
}