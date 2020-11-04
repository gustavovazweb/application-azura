CREATE DATABASE IF NOT EXISTS `azura` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `azura`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirma_senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `confirma_senha`, `data_cadastro`) VALUES
(1, 'Administrador', 'adm@azura.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2020-06-16 14:53:51'),
(2, 'User', 'user@azura.com', 'c33367701511b4f6020ec61ded352059', 'c33367701511b4f6020ec61ded352059', '2020-06-17 14:52:03'),
(3, 'Juliano Silva de Oliveira', 'julianoso@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2020-06-17 14:57:28'),
(4, 'Maria Santana de Faria', 'mariasf@bol.com', 'f8461b554d59b3014e8ff5165dc62fac', 'f8461b554d59b3014e8ff5165dc62fac', '2020-06-17 15:00:43'),
(8, 'Mauro Faria Passos', 'maurofp@ig.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2020-06-17 17:05:26'),
(9, 'Maicon Silva Santos', 'maiconss2020@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2020-06-18 14:58:14');

CREATE DATABASE IF NOT EXISTS `cad_prod` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cad_prod`;

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT 1,
  `produto` text COLLATE utf8_unicode_ci NOT NULL,
  `qtde` int(255) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tb_produtos` (`id`, `id_status`, `produto`, `qtde`, `data_cadastro`) VALUES
(42, 1, 'Jogo de chaves B2W Gold', 14, '2020-05-30 16:22:32'),
(43, 2, 'Cooler Aluminium A2 12cm', 0, '2020-05-30 16:22:46'),
(44, 2, 'Teclado mecânico digimaster pro', 0, '2020-05-30 16:25:32'),
(45, 1, 'Chave de fenda AW4 Gold', 20, '2020-06-01 13:53:47');

CREATE TABLE `tb_status` (
  `id` int(11) NOT NULL,
  `status` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tb_status` (`id`, `status`) VALUES
(1, 'DISPONÍVEL'),
(2, 'INDISPONÍVEL');

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Administrador', 'adm@cadpro.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'User', 'user@user.com', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'Marcelo Ferreira de Oliveira', 'marcelo.fo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'Eduardo Sales da Silva', 'edu.ss@bol.com', '25f9e794323b453885f5181f1b624d0b'),
(13, 'Joana da Silva', 'joanadasilva@yahoo.com', '25f9e794323b453885f5181f1b624d0b');


