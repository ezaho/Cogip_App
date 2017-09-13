-- MySQL Script generated by MySQL Workbench
-- Mon 04 Sep 2017 11:15:58 CEST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema comptabilite
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema comptabilite
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `comptabilite` DEFAULT CHARACTER SET utf8 ;
USE `comptabilite` ;

-- -----------------------------------------------------
-- Table `comptabilite`.`type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comptabilite`.`type` (
  `id_type` INT NOT NULL,
  `fournisseur` VARCHAR(45) NULL,
  `client` VARCHAR(45) NULL,
  PRIMARY KEY (`id_type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comptabilite`.`Société`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comptabilite`.`Société` (
  `id_Société` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  `tel` VARCHAR(45) NULL,
  `TVA` VARCHAR(45) NULL,
  `cpte bancaire` INT NOT NULL,
  PRIMARY KEY (`id_Société`),
  CONSTRAINT `fk_Société_type1`
    FOREIGN KEY (`cpte bancaire`)
    REFERENCES `comptabilite`.`type` (`id_type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comptabilite`.`Personnes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comptabilite`.`Personnes` (
  `id_personnes` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `tel` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `id_Société` INT NOT NULL,
  PRIMARY KEY (`id_personnes`, `id_Société`),
  CONSTRAINT `fk_Personnes_Société1`
    FOREIGN KEY (`id_Société`)
    REFERENCES `comptabilite`.`Société` (`id_Société`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comptabilite`.`factures`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comptabilite`.`factures` (
  `id_factures` INT NOT NULL,
  `N°facture` INT(11) NULL,
  `date_factutre` INT(11) NULL,
  `bc-facture` VARCHAR(45) NULL,
  `id_personnes` INT NOT NULL,
  `id_Société` INT NOT NULL,
  PRIMARY KEY (`id_factures`, `id_personnes`, `id_Société`),
  CONSTRAINT `fk_factures_Personnes1`
    FOREIGN KEY (`id_personnes`)
    REFERENCES `comptabilite`.`Personnes` (`id_personnes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_factures_Société1`
    FOREIGN KEY (`id_Société`)
    REFERENCES `comptabilite`.`Société` (`id_Société`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
