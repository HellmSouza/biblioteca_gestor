-- -------------------------------------------------------------
-- -------------------------------------------------------------
-- TablePlus 1.1.8
--
-- https://tableplus.com/
--
-- Database: biblioteca
-- Generation Time: 2024-05-10 17:11:58.591160
-- -------------------------------------------------------------

CREATE TABLE `locacoes` (
  `id` int NOT NULL,
  `livro_id` int DEFAULT NULL,
  `cliente_nome` varchar(100) DEFAULT NULL,
  `cliente_email` varchar(100) DEFAULT NULL,
  `data_locacao` date DEFAULT NULL,
  `data_prevista` date DEFAULT NULL,
  `data_devolucao` date DEFAULT NULL,
  `valor_multa` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

