-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 03 2019 г., 22:16
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `short_post` text NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `url`, `short_post`, `post`) VALUES
(2, '2019-09-13', 'Вторая новость', 'vtoraya-novost', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mus mauris vitae ultricies leo integer malesuada nunc vel. Odio pellentesque diam volutpat commodo sed egestas egestas. Sapien pellentesque habitant morbi tristique senectus et netus. Nulla aliquet porttitor lacus luctus. Ut faucibus pulvinar elementum integer enim neque volutpat. Proin fermentum leo vel orci porta non pulvinar neque. Interdum varius sit amet mattis vulputate enim nulla. Rhoncus dolor purus non enim praesent. Consectetur purus ut faucibus pulvinar elementum integer. Blandit aliquam etiam erat velit. Pharetra diam sit amet nisl suscipit. Consectetur a erat nam at lectus urna duis. Nisi vitae suscipit tellus mauris a.\r\n\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mus mauris vitae ultricies leo integer malesuada nunc vel. Odio pellentesque diam volutpat commodo sed egestas egestas. Sapien pellentesque habitant morbi tristique senectus et netus. Nulla aliquet porttitor lacus luctus. Ut faucibus pulvinar elementum integer enim neque volutpat. Proin fermentum leo vel orci porta non pulvinar neque. Interdum varius sit amet mattis vulputate enim nulla. Rhoncus dolor purus non enim praesent. Consectetur purus ut faucibus pulvinar elementum integer. Blandit aliquam etiam erat velit. Pharetra diam sit amet nisl suscipit. Consectetur a erat nam at lectus urna duis. Nisi vitae suscipit tellus mauris a.\r\n\r\nEnim diam vulputate ut pharetra sit amet aliquam. Enim lobortis scelerisque fermentum dui faucibus. Erat pellentesque adipiscing commodo elit at imperdiet. Libero enim sed faucibus turpis in eu mi. Euismod in pellentesque massa placerat duis ultricies lacus. Ultrices tincidunt arcu non sodales neque sodales ut etiam. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Rhoncus urna neque viverra justo nec ultrices dui sapien. Molestie ac feugiat sed lectus vestibulum. Vel risus commodo viverra maecenas. Nibh praesent tristique magna sit amet. Rutrum quisque non tellus orci ac auctor. Enim diam vulputate ut pharetra sit amet aliquam id. Velit sed ullamcorper morbi tincidunt. Amet massa vitae tortor condimentum lacinia quis vel. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Etiam erat velit scelerisque in. Ut consequat semper viverra nam libero. Mauris augue neque gravida in fermentum et sollicitudin ac.'),
(3, '2019-09-01', 'Третья зановость', 'tretya-nonvost', 'Etiam sodales nisl ac diam euismod, ut tincidunt neque lacinia. Integer at libero lectus. Phasellus sagittis felis nisl, vel semper libero tempor at. Proin laoreet metus sed nulla pulvinar blandit. Integer suscipit euismod eleifend. Phasellus pharetra quam id ullamcorper aliquet. Integer euismod, dolor nec gravida venenatis, arcu erat posuere velit, sit amet euismod elit nisl in odio. Quisque a commodo justo. Mauris vestibulum nulla sapien, ac sagittis felis feugiat nec. Maecenas ac ante ultricies, auctor massa sit amet, tristique diam.', 'Phasellus eget nunc quis augue ultricies molestie vitae tincidunt diam. Integer metus sem, congue ut nisl nec, dapibus congue risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eu leo faucibus, convallis leo finibus, molestie magna. Proin sit amet mauris non tellus auctor eleifend. Curabitur sit amet neque pretium, aliquam urna eu, iaculis arcu. In lobortis lacus ut ante elementum iaculis. Sed a iaculis dui, eu volutpat ante. Vivamus ultrices erat ut urna sollicitudin commodo. Pellentesque a risus quam.\r\n\r\nMauris ut neque neque. Nullam ut enim ex. Praesent rutrum pretium porttitor. Praesent imperdiet imperdiet metus, id sollicitudin velit dictum sit amet. Duis ornare sapien et ornare porttitor. Curabitur ullamcorper ante id lorem tempor, a facilisis odio lobortis. Phasellus nec nunc sed ligula volutpat condimentum quis et tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis erat varius gravida interdum. Nam hendrerit erat sit amet lectus gravida, sit amet vehicula lorem vehicula. Suspendisse commodo molestie turpis sed tempor. Curabitur ante dolor, feugiat at diam id, vehicula sagittis tellus. Morbi nec fringilla dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper, massa eget ullamcorper ultrices, lorem turpis fringilla risus, pharetra tincidunt lacus augue nec lacus. Mauris id justo eget sapien pharetra gravida.\r\n\r\nInteger facilisis quis nulla nec molestie. Sed rutrum pulvinar arcu, id gravida metus tempor nec. Nam pulvinar erat vel ipsum congue, vitae placerat urna sollicitudin. Aliquam malesuada, sapien quis euismod fermentum, nisi dui consectetur ex, eu pellentesque diam massa quis metus. Duis nec nibh dolor. Nullam tincidunt elit urna, et mattis enim interdum sed. Fusce molestie tortor ac leo ornare ultricies. Aenean pharetra sollicitudin urna vel pellentesque. Curabitur orci sapien, bibendum vitae justo at, rhoncus luctus libero. Nulla cursus, elit id tristique efficitur, magna neque tempor mi, vitae ullamcorper sapien mauris a nunc. Aliquam tempus nec ipsum quis sollicitudin. Nunc sit amet placerat urna, in dapibus orci. Curabitur sed lectus facilisis, mattis felis non, ullamcorper justo. Nulla commodo, ligula eget viverra ullamcorper, enim urna pretium lectus, et fringilla purus orci non tortor.'),
(4, '2019-09-01', 'Четвертая новость', 'chetvertaya-novost', 'Donec hendrerit orci et massa placerat, ac ornare nunc consequat. Duis tincidunt sit amet augue in fringilla. Nam convallis sit amet mauris eu sagittis. Sed at quam finibus, tincidunt neque eget, commodo orci. Morbi quis erat vel ligula egestas rutrum at et nisl. Suspendisse semper augue eget ipsum bibendum egestas. Maecenas ullamcorper nulla non tortor luctus tincidunt. Quisque hendrerit lorem a dui sagittis volutpat. Praesent hendrerit neque sit amet iaculis tristique. Ut et commodo massa. Donec nisi lacus, volutpat vel pharetra sit amet, faucibus et enim. Nulla nec turpis aliquam, luctus neque ut, blandit nulla. Curabitur tincidunt, justo vehicula sagittis efficitur, est metus ullamcorper metus, vel laoreet nibh urna nec e', 'Sed vulputate ipsum at nulla fringilla, sit amet tempus mi fringilla. Donec laoreet, justo quis consectetur molestie, eros urna aliquam turpis, a pharetra lorem risus et felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec sed hendrerit orci. Fusce non massa luctus ante eleifend scelerisque. Duis quis odio lacus. Nullam nulla justo, lacinia a nisl vitae, dignissim efficitur massa. Praesent volutpat magna in porttitor gravida.\r\n\r\nUt consectetur non sem id facilisis. Suspendisse potenti. Vivamus ultrices turpis nec accumsan viverra. Phasellus non dui aliquet, euismod turpis at, consequat lacus. Duis eget ornare enim. Cras vitae ipsum venenatis, ultricies felis in, congue lacus. Sed ultricies condimentum faucibus. Praesent rutrum leo non semper fermentum.\r\n\r\nPellentesque dui odio, dignissim id porta quis, feugiat id tellus. Aenean ultrices pharetra tempus. Nullam ultricies facilisis est. Sed iaculis tempor augue quis sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis nunc enim, eget fringilla magna lacinia sit amet. Suspendisse lacinia non ante sit amet rutrum. Cras ullamcorper sed odio sed mollis. Proin iaculis dolor nec sollicitudin ullamcorper. Curabitur pellentesque erat enim, vitae facilisis elit faucibus sed. Quisque eget venenatis neque. Etiam ultricies orci at fermentum porta. Curabitur dapibus arcu dui, varius congue augue rhoncus nec.'),
(17, '2019-09-02', 'Четвертая новость', 'CHetvertaya-novost', 'Четвертая новость', 'Четвертая новость');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
