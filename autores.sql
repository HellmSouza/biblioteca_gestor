-- -------------------------------------------------------------
-- -------------------------------------------------------------
-- TablePlus 1.1.8
--
-- https://tableplus.com/
--
-- Database: biblioteca
-- Generation Time: 2024-05-10 17:11:32.003721
-- -------------------------------------------------------------

CREATE TABLE `autores` (
  `id` int NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `biblioteca`.`autores` (`id`, `nome`, `telefone`) VALUES (1, 'Machado de Assis', '(31) 9999-9999');

