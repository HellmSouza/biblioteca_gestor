-- -------------------------------------------------------------
-- -------------------------------------------------------------
-- TablePlus 1.1.8
--
-- https://tableplus.com/
--
-- Database: biblioteca
-- Generation Time: 2024-05-10 17:11:44.271241
-- -------------------------------------------------------------

CREATE TABLE `livros` (
  `id` int NOT NULL,
  `autor_id` int DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `data_lancamento` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

