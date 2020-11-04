/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50723
Source Host           : localhost:3306
Source Database       : urlusersdb

Target Server Type    : MYSQL
Target Server Version : 50723
File Encoding         : 65001

Date: 2020-05-10 13:23:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for urlcomments
-- ----------------------------
DROP TABLE IF EXISTS `urlcomments`;
CREATE TABLE `urlcomments` (
  `username` varchar(30) NOT NULL,
  `urlstr` varchar(50) NOT NULL,
  `urlcomment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of urlcomments
-- ----------------------------
INSERT INTO `urlcomments` VALUES ('11', 'www.baidu.com', '引擎');

-- ----------------------------
-- Table structure for urllables
-- ----------------------------
DROP TABLE IF EXISTS `urllables`;
CREATE TABLE `urllables` (
  `username` varchar(30) NOT NULL,
  `urlstr` varchar(50) NOT NULL,
  `urllable` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of urllables
-- ----------------------------
INSERT INTO `urllables` VALUES ('11', 'www.baidu.com', '搜索');
INSERT INTO `urllables` VALUES ('11', 'www.baidu.com', '引擎');

-- ----------------------------
-- Table structure for urls
-- ----------------------------
DROP TABLE IF EXISTS `urls`;
CREATE TABLE `urls` (
  `username` varchar(30) NOT NULL,
  `urlname` varchar(30) NOT NULL,
  `urlstr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of urls
-- ----------------------------
INSERT INTO `urls` VALUES ('11', '百度', 'www.baidu.com');
INSERT INTO `urls` VALUES ('11', '谷歌', 'www.google.com');

-- ----------------------------
-- Table structure for urlusers
-- ----------------------------
DROP TABLE IF EXISTS `urlusers`;
CREATE TABLE `urlusers` (
  `username` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of urlusers
-- ----------------------------
INSERT INTO `urlusers` VALUES ('11', '11');
INSERT INTO `urlusers` VALUES ('', '');
