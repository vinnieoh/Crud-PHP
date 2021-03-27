/*Tabela do banco*/
create table pessoas(
    IDALUNO int not null primary key AUTO_INCREMENT,
    nome varchar(100) not null,
    email varchar(150) not null UNIQUE,
    sexo Enum ('M', 'F'),
    dataNascimento date Not null
);