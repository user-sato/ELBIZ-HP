<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'Open Sans', sans-serif;
  }
  .top-banner {
    background-image: url('https://source.unsplash.com/random/1920x1080?city,night');
    background-size: cover;
    background-position: center;
  }
</style>
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-white shadow">
  <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
    <a href="#" class="text-xl font-bold text-gray-800"><?php bloginfo('name'); ?></a>
    <div class="flex items-center">
      <div class="hidden md:flex space-x-6">
        <a href="#" class="text-gray-600 hover:text-gray-800">ホーム</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">会社概要</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">サービス内容</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">導入事例</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">お知らせ</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">お問い合わせ</a>
      </div>
      <div class="ml-6">
        <a href="tel:0368508012" class="text-blue-600 font-semibold">03-6850-8012</a>
      </div>
    </div>
  </nav>
</header>

<!-- Hero Section -->
<section class="top-banner py-20">
  <div class="container mx-auto px-6 flex items-center justify-between">
    <div class="w-1/2">
      <h2 class="text-4xl font-bold text-white mb-2"><?php bloginfo('description'); ?></h2>
      <h3 class="text-2xl mb-8 text-gray-200">Strong allies for All Companies.</h3>
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">お問い合わせ</button>
    </div>
    <div class="w-1/2">
      <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_0070.JPG" alt="Office" class="rounded shadow-lg">
    </div>
  </div>
</section>