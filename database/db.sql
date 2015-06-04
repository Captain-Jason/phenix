/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50169
Source Host           : localhost:3306
Source Database       : yii2_test1

Target Server Type    : MYSQL
Target Server Version : 50169
File Encoding         : 65001

Date: 2015-06-04 16:50:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for menu_tree
-- ----------------------------
DROP TABLE IF EXISTS `menu_tree`;
CREATE TABLE `menu_tree` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `flat_dir` varchar(255) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`) USING HASH
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu_tree
-- ----------------------------

-- ----------------------------
-- Table structure for user_test
-- ----------------------------
DROP TABLE IF EXISTS `user_test`;
CREATE TABLE `user_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_test
-- ----------------------------
INSERT INTO `user_test` VALUES ('1', 'sdfwe', '1', '12', 'dasdqwd');
