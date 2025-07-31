-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2025 at 07:09 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conference_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1753936164),
('laravel_cache_77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1753936164;', 1753936164),
('laravel_cache_anggawarjaya@mhs.unimed.ac.id|127.0.0.1', 'i:1;', 1753934137),
('laravel_cache_anggawarjaya@mhs.unimed.ac.id|127.0.0.1:timer', 'i:1753934137;', 1753934137),
('laravel_cache_awfproduction.ing@gmail.com|127.0.0.1', 'i:2;', 1753941694),
('laravel_cache_awfproduction.ing@gmail.com|127.0.0.1:timer', 'i:1753941694;', 1753941694),
('laravel_cache_da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:2;', 1753941823),
('laravel_cache_da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1753941823;', 1753941823);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conference_settings`
--

CREATE TABLE `conference_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conference_settings`
--

INSERT INTO `conference_settings` (`id`, `key`, `value`, `type`, `group`, `created_at`, `updated_at`) VALUES
(1, 'conference_name', 'International Conference on Computer Science', 'text', 'general', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(2, 'conference_acronym', 'ICCS', 'text', 'general', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(3, 'conference_year', '2025', 'number', 'general', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(4, 'conference_location', 'University 8 Mai 1945 Guelma', 'text', 'general', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(5, 'conference_website', 'https://conference.example.com', 'text', 'general', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(6, 'submission_deadline', '2025-08-15', 'date', 'deadlines', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(7, 'review_deadline', '2025-09-30', 'date', 'deadlines', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(8, 'camera_ready_deadline', '2025-11-15', 'date', 'deadlines', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(9, 'registration_deadline', '2025-12-01', 'date', 'deadlines', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(10, 'conference_description', 'A premier international conference bringing together researchers and practitioners in computer science.', 'textarea', 'content', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(11, 'submission_guidelines', 'Papers should be submitted in PDF format, maximum 8 pages, using the provided template.', 'textarea', 'content', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(12, 'review_criteria', 'Papers will be reviewed based on originality, technical quality, clarity, and relevance.', 'textarea', 'content', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(13, 'keywords', 'Computer Science, Machine Learning, AI, Software Engineering, Data Science', 'text', 'content', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(14, 'max_paper_size_mb', '10', 'number', 'system', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(15, 'reviews_per_paper', '3', 'number', 'system', '2025-07-30 20:53:43', '2025-07-30 20:53:43'),
(16, 'enable_blind_review', '1', 'checkbox', 'system', '2025-07-30 20:53:43', '2025-07-30 20:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `decisions`
--

CREATE TABLE `decisions` (
  `id` bigint UNSIGNED NOT NULL,
  `paper_id` bigint UNSIGNED NOT NULL,
  `chair_id` bigint UNSIGNED NOT NULL,
  `decision` enum('Accepted','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_05_130341_create_roles_table', 1),
(5, '2025_06_05_130452_update_users_table', 1),
(6, '2025_06_05_132319_create_papers_table', 1),
(7, '2025_06_05_132447_create_reviews_table', 1),
(8, '2025_06_05_132522_create_decisions_table', 1),
(9, '2025_06_06_153347_update_users_table', 1),
(10, '2025_06_15_194312_create_tags_table', 1),
(11, '2025_06_19_021722_create_conference_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` bigint UNSIGNED NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Submitted','Under Review','Accepted','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Submitted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('awfarka@gmail.com', '$2y$12$BwWQWInxu8TomUPIQ5/mL.lLsZsJeaakrINfxAPk.S8jRcSS02rhC', '2025-07-30 22:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `paper_id` bigint UNSIGNED NOT NULL,
  `reviewer_id` bigint UNSIGNED NOT NULL,
  `score` int DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'chair', 'System administrator with full access', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(2, 'reviewer', 'Paper reviewer', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(3, 'author', 'Paper author', '2025-07-30 20:53:42', '2025-07-30 20:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BfJZUp3Qg2CYOySdb1mt5DwSGtQP3tbB1coC1jop', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibWQ0b3BGc3JqSHhNZUlhUVFnYjVYMHJQMkU4dW9IYTlPYTdpb3hxRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYXBlci9jcmVhdGUiO31zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjE3MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2VtYWlsL3ZlcmlmeS8zL2FjOTNkZDE1MzQ3ODVlZmNlZTI0YWJiN2VjYzA1Nzc5ZGI3MzYxYTg/ZXhwaXJlcz0xNzUzOTM5NTczJnNpZ25hdHVyZT1iZTllNGViYTgwOGFmYjgyMTczNjU3OTkzMzg1NTA5ZmNhYmM2NjliNDRkMzBkNTQ0YWY1NTllODE5N2U3OTY2Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1753940832),
('uybNmwas9Q4h3xIi63H5KGRc3BNIjbUOOjqd2KgR', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWml3QlRvSjdZcDhVZ0xqTUF4dXMxV3FITWcyS2pjcWZuUFpvU2JJVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXZpZXdlciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NoYWlyIjt9fQ==', 1753942172),
('zKG3ueFrrA0aQADGh68FoBqjS56tbLn5FEfvZ4Ya', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV2FxcVVHdFNZaUNBdWZLYktud09JZXl0ZlB4R3J6VzZkbmp4WmFCaiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3BhcGVyIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753934820);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Artificial Intelligence', 'Exploring the principles and applications of AI.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(2, 'Machine Learning', 'Techniques and algorithms for machine learning.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(3, 'Deep Learning', 'Advanced methods in deep learning.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(4, 'Neural Networks', 'Understanding neural networks and their architectures.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(5, 'Computer Vision', 'Techniques for processing and analyzing visual data.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(6, 'Natural Language Processing', 'Methods for understanding and generating human language.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(7, 'Data Science', 'Statistical methods for extracting insights from data.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(8, 'Algorithm Design', 'Designing efficient algorithms for problem-solving.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(9, 'Software Engineering', 'Principles of software development and project management.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(10, 'Web Development', 'Building dynamic websites and web applications.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(11, 'Mobile Development', 'Developing applications for mobile devices.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(12, 'Database Systems', 'Managing and querying databases effectively.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(13, 'Cloud Computing', 'Utilizing cloud services for scalable applications.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(14, 'Cybersecurity', 'Protecting systems against cyber threats.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(15, 'Blockchain Technology', 'Decentralized technology for secure transactions.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(16, 'Internet of Things', 'Connecting devices to the internet for data exchange.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(17, 'Big Data Analytics', 'Analyzing large datasets to uncover patterns.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(18, 'DevOps', 'Integrating development and operations for efficiency.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(19, 'User Experience Design', 'Designing user-friendly interfaces and experiences.', '2025-07-30 20:53:42', '2025-07-30 20:53:42'),
(20, 'Quantum Computing', 'Exploring the future of computing with quantum mechanics.', '2025-07-30 20:53:42', '2025-07-30 20:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `conference_settings`
--
ALTER TABLE `conference_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `conference_settings_key_unique` (`key`);

--
-- Indexes for table `decisions`
--
ALTER TABLE `decisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `decisions_paper_id_foreign` (`paper_id`),
  ADD KEY `decisions_chair_id_foreign` (`chair_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `papers_author_id_foreign` (`author_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_paper_id_foreign` (`paper_id`),
  ADD KEY `reviews_reviewer_id_foreign` (`reviewer_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conference_settings`
--
ALTER TABLE `conference_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `decisions`
--
ALTER TABLE `decisions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `decisions`
--
ALTER TABLE `decisions`
  ADD CONSTRAINT `decisions_chair_id_foreign` FOREIGN KEY (`chair_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `decisions_paper_id_foreign` FOREIGN KEY (`paper_id`) REFERENCES `papers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `papers`
--
ALTER TABLE `papers`
  ADD CONSTRAINT `papers_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_paper_id_foreign` FOREIGN KEY (`paper_id`) REFERENCES `papers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_reviewer_id_foreign` FOREIGN KEY (`reviewer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
