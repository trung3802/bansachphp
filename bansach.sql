/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : bansach

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 09/12/2023 17:07:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for chi_tiet_don_hang
-- ----------------------------
DROP TABLE IF EXISTS `chi_tiet_don_hang`;
CREATE TABLE `chi_tiet_don_hang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_don_hang` int NULL DEFAULT 1,
  `id_san_pham` int NULL DEFAULT NULL,
  `so_luong` int NULL DEFAULT NULL,
  `gia_tien` decimal(10, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_don_hang`(`id_don_hang`) USING BTREE,
  INDEX `id_san_pham`(`id_san_pham`) USING BTREE,
  CONSTRAINT `chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`id_don_hang`) REFERENCES `don_hang` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chi_tiet_don_hang
-- ----------------------------
INSERT INTO `chi_tiet_don_hang` VALUES (6, 6, 1, 2, 400000.00);

-- ----------------------------
-- Table structure for danh_muc
-- ----------------------------
DROP TABLE IF EXISTS `danh_muc`;
CREATE TABLE `danh_muc`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten_danh_muc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mo_ta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of danh_muc
-- ----------------------------
INSERT INTO `danh_muc` VALUES (1, 'Luyện Thi TOEIC', NULL);
INSERT INTO `danh_muc` VALUES (2, 'Luyện Thi IELTS', NULL);
INSERT INTO `danh_muc` VALUES (3, 'Luyện thi THPTQG', NULL);

-- ----------------------------
-- Table structure for don_hang
-- ----------------------------
DROP TABLE IF EXISTS `don_hang`;
CREATE TABLE `don_hang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_nguoi_dung` int NULL DEFAULT NULL,
  `ngay_dat` date NULL DEFAULT NULL,
  `dia_chi_giao_hang` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tinh_trang` enum('ChuaXacNhan','DaXacNhan','DangGiao','DaGiao','Huy') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_nguoi_dung`(`id_nguoi_dung`) USING BTREE,
  CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_nguoi_dung`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of don_hang
-- ----------------------------
INSERT INTO `don_hang` VALUES (6, 11, '2023-12-09', 'gialoc', 'ChuaXacNhan');

-- ----------------------------
-- Table structure for san_pham
-- ----------------------------
DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE `san_pham`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten_san_pham` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mo_ta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `gia` decimal(10, 2) NULL DEFAULT NULL,
  `so_luong_hang` int NULL DEFAULT NULL,
  `nha_san_xuat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `khoi_luong` decimal(6, 2) NULL DEFAULT NULL,
  `ngay_tao` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `ngay_cap_nhat` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `id_danh_muc` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_danh_muc`(`id_danh_muc`) USING BTREE,
  CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_danh_muc`) REFERENCES `danh_muc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of san_pham
-- ----------------------------
INSERT INTO `san_pham` VALUES (1, 'TOEIC', '1-450', 200000.00, 100, 'English Việt', 0.00, '2023-12-09 15:25:41', '2023-12-09 15:26:41', 1);

-- ----------------------------
-- Table structure for tin_tuc
-- ----------------------------
DROP TABLE IF EXISTS `tin_tuc`;
CREATE TABLE `tin_tuc`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tom_tat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `noi_dung` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `ngay_dang` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `tac_gia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hinh_anh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tin_tuc
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `role` int NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (11, 'admin', '$2y$10$u2Ji0yNkxkR2VbApL42q6OjO/qjHNRmjclpVZ4wh/ipEo/0tNu0gO', 'Nguyễn Văn B', '0936846270', 'admin@gmail.com', 'gialoc', '2023-12-09 15:08:27', 1);
INSERT INTO `users` VALUES (12, 'huyen', '$2y$10$S8hfIkEbifk3D8l2ZmpMyu2WKFLhRvcyNQ9I6OHh/8HoUR2dmb2Ia', 'Nguyễn Thành Trung', '0936846270', 'admin@gmail.com', 'fd', '2023-12-09 15:42:22', 0);

SET FOREIGN_KEY_CHECKS = 1;
