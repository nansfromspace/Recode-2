CREATE DATABASE fseletro;

-- criando tabela Produto --

CREATE TABLE Produto(
  idProduto int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Categoria varchar(45) NOT NULL,
  Descricao varchar(100) NOT NULL,
  Preco decimal(8,2) NOT NULL,
  Precofinal decimal(8,2) NOT NULL,
  Imagem varchar(250) NOT NULL
); 
 
 -- inserindo 10 valores na tabela --

INSERT INTO Produto VALUES (
    1,'Geladeira','Geladeira Frost Free Brastemp Side Inverse 540 litros',6389.00,5019.00,'imagens/geladeira2.jpeg'),
    (2,'Geladeira','Geladeira Frost Free Brastemp Branca 373 litros',2000.00,1039.00,'imagens/geladeira1.jpeg'),
    (3,'Geladeira','Geladeira Frost Free Consul Prata 340 litros',2067.00,1839.00,'imagens/geladeira3.png'),
    (4,'Geladeira','Geladeira Frost Free Consul Prata 570 litros',3097.00,2039.00,'imagens/geladeira3.png'),
    (5,'Fogao','Fogão de Piso 4 Bocas Atlas Monaco com acendimento Automático',900.00,539.00,'imagens/fogao.png'),
    (6,'Microondas','Microondas 25l Espelhado Philco 220V',900.00,468.00,'imagens/microondas2.jpeg'),
    (7,'Microondas','Forno de Microondas Electrolux 20l Branco',1000.00,600.00,'imagens/microondas1.png'),
    (8,'Lavaroupas','Máquina de Lavar Roupas Philco Inverter 12kg',4000.00,2039.00,'imagens/maquinadelavar2.png'),
    (9,'Lavaloucas','Lava-loucas Electrolux Inox com Painel Bluetouch',1345.00,947.00,'imagens/frigobar.jpeg'),
    (10,'Lavaloucas','Lava-loucas Compacta 08 servicos Branca 127V Brastemp',3000.00,1738.00,'imagens/lavaloucas.jpeg');
    


-- criando tabela Pedidos --

CREATE TABLE Pedidos(
  idPedidos int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Nome varchar(100) NOT NULL,
  Endereco varchar(250) NOT NULL,
  Telefone int NOT NULL,
  NomeProduto varchar(100) NOT NULL,
  ValorUnitario decimal(8,2) NOT NULL,
  Quantidade int NOT NULL,
  ValorTotal decimal(8,2) NOT NULL
);

-- inserindo 10 valores na tabela Pedidos --

INSERT INTO Pedidos VALUES (
    1,'Mariana','Rua Maria Antonia, 208', 998877553, 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 5019.00, 1, 5019.00),
    (2,'Pamela','Rua Madrid, 26', 983567006, 'Fogão de Piso 4 Bocas Atlas Monaco com acendimento Automático', 539.00, 2, 1078.00),
    (3,'Gabriela','Rua Estevao, 86', 983123454, 'Geladeira Frost Free Consul Prata 340 litros',1839.00, 1, 1839.00),
    (4,'Jessica','Rua Roberto Carlos, 108', 998765735, 'Fogão de Piso 4 Bocas Atlas Monaco com acendimento Automático', 539.00, 2, 1078.00),
    (5,'José','Rua Diniz, 12', 909856743, 'Fogão de Piso 4 Bocas Atlas Monaco com acendimento Automático', 539.00, 2, 1078.00),
    (6,'Guilherme','Rua da Consolacao, 100', 986378279, 'Geladeira Frost Free Consul Prata 340 litros',1839.00, 1, 1839.00),
    (7,'Maria Flor','Rua Feijao, 657', 999944462, 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 5019.00, 3, 15057.00),
    (8,'Roberta','Travessa do Tesouro, 89', 900009872, 'Fogão de Piso 4 Bocas Atlas Monaco com acendimento Automático', 539.00, 2, 1078.00),
    (9,'Paulo','Rua Barao de Campinas, 100', 987647006, 'Geladeira Frost Free Consul Prata 340 litros',1839.00, 2, 3678.00),
    (10,'Enzo','Rua Inacio de Araujo, 20', 940989896, 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 5019.00, 1, 5019.00);
    