Основная сложность в данном случае в отдаче данных сквозь
кэш и в его инвалидации.
Отношение между сущностями многие ко многим из-за того, что одна новость может находиться в нескольких категориях, ну и само собой в одной категории могут быть тысячи новостей. Константы в интерфейсе новости решение спортное, зато все будут знать, что я знаю про константы классов. Внедрение зависимости кэша в контроллер, наверное,не совсем правильно

#таблица новостей
CREATE TABLE `mk_task`.`posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titile` VARCHAR(255) NOT NULL,
  `statusID` TINYINT(1) NOT NULL,
  `text` BLOB NOT NULL,
  `publishDate` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE);

#таблица рубрик
  CREATE TABLE `mk_task`.`rubrics` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE);

  #отношение между новостями и рубриками - многие ко многим
  #связующая таблица 
  CREATE TABLE `mk_task`.`rubrics_posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `post_id` INT NULL,
  `rubric_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `post_id_idx` (`post_id` ASC) VISIBLE,
  INDEX `rubric_id_idx` (`rubric_id` ASC) VISIBLE,
  CONSTRAINT `post_id`
    FOREIGN KEY (`post_id`)
    REFERENCES `mk_task`.`posts` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `rubric_id`
    FOREIGN KEY (`rubric_id`)
    REFERENCES `mk_task`.`rubrics` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);
