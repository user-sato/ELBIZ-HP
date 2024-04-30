<?php get_header(); ?>
<!-- Services Section -->
<section class="container mx-auto px-6 py-10">
  <div class="text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-1">サービス内容</h1>
    <div class="w-64 h-1 bg-blue-600 mx-auto mb-8"></div>
</div>
  <div class="flex items-center flex-wrap mb-20">
    <div class="w-full md:w-1/3 px-2 mb-6">
      <div class="bg-white rounded shadow py-2 px-4">
        <div class="flex items-center mb-3">
          <div class="p-2 rounded-full bg-indigo-500 text-white mr-3">
            <!-- 元のアイコン -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h1m0 0h-1V9h1m2 7h1v-4h-1m0 0h1V9h-1m-4 0h-1v3h1m0 4h-1v-4h1m0 0V9h1v3h-1z" />
            </svg> -->
            <!-- fontawesome のフリーアイコン -->
            <i class="fa-solid fa-person-chalkboard"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800">戦略策定</h3>
        </div>
        <p class="text-sm text-gray-600">お客様のビジネスに合わせた、カスタムメイドの戦略をご提案いたします。</p>
        <img class="w-full h-48 object-cover" src="<?php echo home_url(); ?>/wp-content/themes/ELEBIZ/img/business.jpg" alt="Business Strategy">
      </div>
    </div>
    <div class="w-full md:w-1/3 px-2 mb-6">
      <div class="bg-white rounded shadow py-2 px-4">
        <div class="flex items-center mb-3">
          <div class="p-2 rounded-full bg-indigo-500 text-white mr-3">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17l1.5 1.5 5-5-5-5-1.5 1.5L12.75 12H3v2h9.75z" />
            </svg> -->
            <!-- fontawesome のフリーアイコン -->
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800">販売促進</h3>
        </div>
        <p class="text-sm text-gray-600">効果的なマーケティング戦略で、お客様の販売促進をサポートします。</p>
      </div>
      <img class="w-full h-48 object-cover" src="<?php echo home_url(); ?>/wp-content/themes/ELEBIZ/img/outsourcing.jpg" alt="Consulting Services">
    </div>
    <div class="w-full md:w-1/3 px-2 mb-6">
      <div class="bg-white rounded shadow py-2 px-4">
        <div class="flex items-center mb-3">
          <div class="p-2 rounded-full bg-indigo-500 text-white mr-3">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.5-1.5m0 0l1.5 1.5-1.5 1.5m1.5-1.5H9m6 0H3" />
            </svg> -->
            <!-- fontawesome のフリーアイコン -->
            <i class="fa-solid fa-users"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-800">顧客管理</h3>
        </div>
        <p class="text-sm text-gray-600">最新のCRMシステムを用いて、顧客管理の効率化を図ります。</p>
        <img class="w-full h-48 object-cover" src="<?php echo home_url(); ?>/wp-content/themes/ELEBIZ/img/consulting.jpg" alt="Outsourcing Solutions">
      </div>
    </div>
  </div>
</section>

<!-- 導入事例 -->
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <div class="text-center">
      <h1 class="text-4xl font-bold text-gray-800 mb-1">導入事例</h1>
      <div class="w-64 h-1 bg-blue-600 mx-auto mb-8"></div>
  </div>
  <div class="grid md:grid-cols-3 gap-8">
      <!-- Service Card 1 -->
      <?php if(have_posts(  )) : ?>
        <?php while( have_posts(  ) ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'news' ) ?>>
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 ease-in-out">
                <img
                class="w-full h-48 object-cover" src="https://source.unsplash.com/random/400x300?business" alt="Business Strategy">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">ご支援例01</h2>
                    <p class="text-gray-600 mb-4">新規顧客獲得に重要な要素のひとつが戦略。我々がロングターム視点、顧客接点をさまざまなタッチポイントで最適化。</p>
                    <a href="#" class="text-blue-500 font-semibold hover:text-blue-700 transition duration-150 ease-in-out">Learn More →</a>
                </div>
            </div>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- Service Card 2 -->
      <!-- <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://source.unspla
          sh.com/random/400x300?consulting" alt="Consulting Services">
          <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">ご支援例02</h2>
              <p class="text-gray-600 mb-4">顧客満足度、顧客生涯価値を高め、MAXIMの競争優位を実現します！</p>
              <a href="#" class="text-blue-500 font-semibold hover:text-blue-700 transition duration-150 ease-in-out">Learn More →</a>
          </div>
      </div> -->
      <!-- Service Card 3 -->
      <!-- <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="<?php echo home_url(); ?>/wp-content/themes/ELEBIZ/img/outsourcing.jpg" alt="Outsourcing Solutions">
          <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">ご支援例03</h2>
              <p class="text-gray-600 mb-4">信頼できるアウトソーシングパートナーとして、最先端の技術、優秀な技術者の人材の供給をお約束。</p>
              <a href="#" class="text-blue-500 font-semibold hover:text-blue-700 transition duration-150 ease-in-out">Learn More →</a>
          </div>
      </div> -->
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
      <img src="<?php echo home_url(); ?>/wp-content/themes/ELEBIZ/img/contact.jpg" alt="Contact" class="rounded shadow-lg">
    </div>
  </div>
</section>

<?php get_footer(); ?>