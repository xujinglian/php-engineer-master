/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : tp5

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-05-02 20:18:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for goods_type
-- ----------------------------
DROP TABLE IF EXISTS `goods_type`;
CREATE TABLE `goods_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `level` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_type
-- ----------------------------
INSERT INTO `goods_type` VALUES ('1', '服装', '0', '0,1', '1');
INSERT INTO `goods_type` VALUES ('2', '西服', '1', '0,1,2', '2');
INSERT INTO `goods_type` VALUES ('3', '鞋', '0', '0,3', '1');
INSERT INTO `goods_type` VALUES ('5', '男士西服', '2', '0,1,2', '2');
INSERT INTO `goods_type` VALUES ('6', '女士西服', '2', '0,1,2', '2');
INSERT INTO `goods_type` VALUES ('7', '童装', '1', '0,1,7', '1');
INSERT INTO `goods_type` VALUES ('10', '凉鞋', '3', '0,3,10', '2');
INSERT INTO `goods_type` VALUES ('11', '汽车装饰', '0', '0,11', '1');
INSERT INTO `goods_type` VALUES ('12', '车垫', '11', '0,11,12', '2');
