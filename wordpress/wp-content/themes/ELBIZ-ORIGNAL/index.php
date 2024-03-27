<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Company Website</title>
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
    <a href="#" class="text-xl font-bold text-gray-800">ELEBIS</a>
    <div class="flex items-center">
      <div class="hidden md:flex space-x-6">
        <a href="#" class="text-gray-600 hover:text-gray-800">ホーム</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">企業情報</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">事業内容</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">採用情報</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">ニュース</a>
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
      <h2 class="text-4xl font-bold text-white mb-2">すべての企業に強い味方を。</h2>
      <h3 class="text-2xl mb-8 text-gray-200">Strong allies for All Companies.</h3>
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">お問い合わせ</button>
    </div>
    <div class="w-1/2">
      <img src="./IMG_0070.JPG" alt="Office" class="rounded shadow-lg">
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="container mx-auto px-6 py-10">
  <div class="text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-1">サービス内容</h1>
    <div class="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
</div>
  <div class="flex items-center flex-wrap mb-20">
    <div class="w-full md:w-1/3 px-2 mb-6">
      <div class="bg-white rounded shadow py-2 px-4">
        <div class="flex items-center mb-3">
          <div class="p-2 rounded-full bg-indigo-500 text-white mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h1m0 0h-1V9h1m2 7h1v-4h-1m0 0h1V9h-1m-4 0h-1v3h1m0 4h-1v-4h1m0 0V9h1v3h-1z" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800">戦略策定</h3>
        </div>
        <p class="text-sm text-gray-600">お客様のビジネスに合わせた、カスタムメイドの戦略をご提案いたします。</p>
        <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/400x300?business" alt="Business Strategy">
      </div>
    </div>
    <div class="w-full md:w-1/3 px-2 mb-6">
      <div class="bg-white rounded shadow py-2 px-4">
        <div class="flex items-center mb-3">
          <div class="p-2 rounded-full bg-indigo-500 text-white mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17l1.5 1.5 5-5-5-5-1.5 1.5L12.75 12H3v2h9.75z" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800">販売促進</h3>
        </div>
        <p class="text-sm text-gray-600">効果的なマーケティング戦略で、お客様の販売促進をサポートします。</p>
      </div>
      <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/400x300?consulting" alt="Consulting Services">
    </div>
    <div class="w-full md:w-1/3 px-2 mb-6">
      <div class="bg-white rounded shadow py-2 px-4">
        <div class="flex items-center mb-3">
          <div class="p-2 rounded-full bg-indigo-500 text-white mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.5-1.5m0 0l1.5 1.5-1.5 1.5m1.5-1.5H9m6 0H3" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800">顧客管理</h3>
        </div>
        <p class="text-sm text-gray-600">最新のCRMシステムを用いて、顧客管理の効率化を図ります。</p>
        <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/400x300?outsourcing" alt="Outsourcing Solutions">
      </div>
    </div>
  </div>
</section>

<!-- 導入事例 -->
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <div class="text-center">
      <h1 class="text-4xl font-bold text-gray-800 mb-1">導入事例</h1>
      <div class="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
  </div>
  <div class="grid md:grid-cols-3 gap-8">
      <!-- Service Card 1 -->
      <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/400x300?business" alt="Business Strategy">
          <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">ご支援例01</h2>
              <p class="text-gray-600 mb-4">新規顧客獲得に重要な要素のひとつが戦略。我々がロングターム視点、顧客接点をさまざまなタッチポイントで最適化。</p>
              <a href="#" class="text-blue-500 font-semibold hover:text-blue-700 transition duration-150 ease-in-out">Learn More →</a>
          </div>
      </div>
      <!-- Service Card 2 -->
      <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/400x300?consulting" alt="Consulting Services">
          <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">ご支援例02</h2>
              <p class="text-gray-600 mb-4">顧客満足度、顧客生涯価値を高め、MAXIMの競争優位を実現します！</p>
              <a href="#" class="text-blue-500 font-semibold hover:text-blue-700 transition duration-150 ease-in-out">Learn More →</a>
          </div>
      </div>
      <!-- Service Card 3 -->
      <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/400x300?outsourcing" alt="Outsourcing Solutions">
          <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">ご支援例03</h2>
              <p class="text-gray-600 mb-4">信頼できるアウトソーシングパートナーとして、最先端の技術、優秀な技術者の人材の供給をお約束。</p>
              <a href="#" class="text-blue-500 font-semibold hover:text-blue-700 transition duration-150 ease-in-out">Learn More →</a>
          </div>
      </div>
  </div>
</div>


<!-- Contact Section -->
<section class="bg-white py-8">
  <div class="container mx-auto px-6 flex items-center justify-between">
    <div class="w-1/2">
      <h2 class="text-gray-800 text-3xl font-bold">CONTACT</h2>
      <p class="text-gray-600 mt-4">お問い合わせはこちらからどうぞ。専門のスタッフが丁寧に対応いたします。</p>
      <p class="mt-8">
        <a href="tel:0368508012" class="text-blue-600 text-lg font-semibold">03-6850-8012</a>
      </p>
      <p class="mt-4">
        <a href="#" class="text-indigo-600 hover:text-indigo-800">お問い合わせフォーム</a>
      </p>
    </div>
    <div class="w-1/2">
      <img src="https://source.unsplash.com/random/768x432?contact" alt="Contact" class="rounded shadow-lg">
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white">
  <div class="container mx-auto px-6 py-4">
    <div class="flex flex-wrap justify-between items-center">
      <div class="w-full md:w-1/3 text-center md:text-left">
        <p class="text-sm">© 2023 COMPANY. All Rights Reserved.</p>
      </div>
      <div class="w-full md:w-1/3 text-center">
        <p class="text-sm">03-6850-8012</p>
        <p class="text-sm">お問い合わせフォーム</p>
      </div>
      <div class="w-full md:w-1/3 text-center md:text-right">
        <p class="text-sm">利用規約</p>
        <p class="text-sm">プライバシーポリシー</p>
      </div>
    </div>
  </div>
</footer>

</body>
</html>