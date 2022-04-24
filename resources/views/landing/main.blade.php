<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <title>Отделение дополнительного образования</title>
</head>
<body class="w-full flex flex-col items-center relative bg-light-500 text-black-900 leading-none dark:bg-dark-900 dark:text-light-900">
  <header id="head" class="w-full relative ad:mb-36 tb:mb-[60px] lg:mb-48 md:mb-56 xl:mb-[80px]">
      @include('landing.burger')
      <div class="w-full ad:flex ad:flex-col lg:flex-row tb:items-center lg:justify-between ad:mt-[80px] md:mt-[100px] xl:mt-[128px]">
        <div class="ad:mt-12 ph:w-[390px] tb:w-[470px] lg:w-[498px] md:w-[592px] xl:w-[750px] flex flex-col tb:items-center lg:items-start ad:order-2 lg:order-1 ad:pl-12 tb:pl-0 lg:pl-32 xl:pl-48">
          <h1 class="ad:text-32 ph:text-36 tb:text-52 tb:text-center lg:text-left md:text-64 xl:text-82 leading-none font-bold -tracking-wide dark:text-light-400">Отделение <br> дополнительного <br> образования</h1>
          <p class="ad:mt-16 tb:mt-24 md:mt-32 ad:text-16 ph:text-18 tb:text-center lg:text-left md:text-20 xl:text-22 xl:w-[573px] text-black-800 leading-tight dark:text-light-800">Мы приглашаем всех желающих пройти обучение на наших курсах и программах профессиональной подготовки, по окончании которых вы получите подтверждающий сертификат</p>
          <button class="ad:w-[290px] tb:w-[320px] px-24 py-20 ad:mt-24 ph:mt-36 tb:text-18 lg:text-16 md:mt-48 rounded-16 md:rounded-16 bg-brand-900 text-light-400 hover:shadow-btn">Смотреть курсы и программы</button>
        </div>
        <img src="{{URL('/img/landing/illustrations/offer-img.png')}}" class="ad:order-1 lg:order-2 ad:w-full ad:h-[280px] ph:w-[380px] ph:h-[310px] tb:w-[700px] tb:h-[500px] lg:w-[760px] lg:h-[520px] md:w-[890px] md:h-[600px] xl:w-[1040px] xl:h-[710px] dark:brightness-90" alt="Offer img">
      </div>
  </header>
  <section id="about" class="w-full ad:px-16 lg:px-32 ad:mt-36 tb:mt-[60px] lg:mt-48 lg:mb-48 md:mt-56 md:mb-56 xl:mb-[80px] flex flex-col items-center justify-center">
    <h2 class="ad:text-left ad:self-start tb:self-center tb:text-center ad:text-28 tb:text-36 md:text-48 xl:text-52 font-bold tracking-tight dark:text-light-400">Кто мы и чем занимаемся</h2>
    <p class="ad:text-left tb:text-center tb:w-[625px] lg:w-[730px] md:w-[812px] xl:w-[900px] ad:mt-12 md:mt-16 ad:text-16 tb:text-18 md:text-20 xl:text-22 text-black-800 text-center leading-tight dark:text-light-900">Мы распологаем большим выбором программ обучения, среди которых обязательно найдется нужная именно Вам! Все программы реализуются в нашем колледже под руководством наставников с многолетним опытом работы</p>
    <div class="gallery-slider ad:mt-36 tb:mt-48 md:mt-56 xl:mt-64 bg-light-500 lg:rounded-24 md:rounded-32 xl:rounded-36 shadow-slider">
      <img class="gallery-slider__item dark:brightness-90" src="{{URL('/img/landing/gallery/gallery-img.png')}}" alt="Gallery Slider Item" loading="lazy">
      <img class="gallery-slider__item dark:brightness-90" src="{{URL('/img/landing/gallery/gallery-img.png')}}" alt="Gallery Slider Item" loading="lazy">
    </div>
    <ul class="tb:w-4/5 lg:w-[1100px] flex tb:justify-between ad:flex-col tb:flex-row ad:mt-[120px] tb:mt-56 lg:mt-64 md:mt-[76px]">
      <li class="flex flex-col">
        <div class="flex ad:flex-col ad:items-start lg:flex-row lg:items-center">
          <img src="{{URL('/img/landing/illustrations/simple.svg')}}" class="ad:w-[136px] ad:h-[136px] lg:w-[148px] lg:h-[148px] xl:w-[164px] xl:h-[164px] dark:brightness-90" alt="Simplicity" loading="lazy">
          <div class="ad:w-4/5 tb:w-[218px] lg:w-[340px] md:w-[382px] xl:w-[425px] lg:ml-32 ad:mt-24">
            <h3 class="ad:text-24 md:text-28 font-bold tracking-tight dark:text-light-400">Простота</h3>
            <p class="ad:mt-8 xl:mt-12 lg:text-16 mdx:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-900">Наши программы созданы таким образом, чтобы не вызывать затруднений у ученикови быть им интересными</p>
          </div>
        </div>
        <div class="ad:mt-48 tb:mt-64 lg:mt-[84px] md:mt-[96px] ad:flex-col ad:items-start lg:flex-row lg:items-center">
          <img src="{{URL('/img/landing/illustrations/quality.svg')}}" class="ad:w-[136px] ad:h-[136px] lg:w-[148px] lg:h-[148px] xl:w-[164px] xl:h-[164px] dark:brightness-90" alt="Quality" loading="lazy">
          <div class="tb:w-[260px] lg:w-[324px] md:w-[363px] xl:w-[400px] lg:ml-32 ad:mt-24">
            <h3 class="ad:text-24 md:text-28 font-bold tracking-tight dark:text-light-400">Качество</h3>
            <p class="ad:mt-8 xl:mt-12 lg:text-16 md:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-800">Все наши образовательные программы проверены временем и отзывами 
              о высоком качестве наших методик 
              и подходов обучения слушателей</p>
          </div>
        </div>
      </li>
      <li class="flex flex-col">
        <div class="flex ad:flex-col ad:items-start lg:flex-row lg:items-center">
          <img src="{{URL('/img/landing/illustrations/price.svg')}}" class="ad:w-[136px] ad:h-[136px] lg:w-[148px] lg:h-[148px] xl:w-[164px] xl:h-[164px] dark:brightness-90" alt="Cost" loading="lazy">
          <div class="tb:w-[210px] lg:w-[290px] md:w-[330px] lg:ml-32 ad:mt-24">
            <h3 class="ad:text-24 md:text-28 font-bold tracking-tight dark:text-light-400">Стоимость</h3>
            <p class="ad:mt-8 xl:mt-12 xl:w-[366px] lg:text-16 mdx:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-800">Для вашего удобства, реализуемые нами программы отличаются возможностью оплаты обучения 
              <br> в рассрочку</p>
          </div>
        </div>
        <div class="ad:mt-48 tb:mt-64 lg:mt-[84px] ad:flex-col ad:items-start lg:flex-row lg:items-center">
          <img src="{{URL('/img/landing/illustrations/proff.svg')}}" class="ad:w-[136px] ad:h-[136px] lg:w-[148px] lg:h-[148px] xl:w-[164px] xl:h-[164px] dark:brightness-90" alt="Professionality" loading="lazy">
          <div class="tb:w-[240px] lg:w-[322px] md:w-[360px] lg:ml-32 ad:mt-24">
            <h3 class="ad:text-24 md:text-28 font-bold tracking-tight dark:text-light-400">Профессионализм</h3>
            <p class="ad:mt-8 xl:mt-12 xl:w-[412px] lg:text-16 mdx:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-800">Опыт наших преподавателей позволит вам стать  специалистом по выбранной программе обучения или курсу по вашему запросу</p>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <section id="cources"></section>
  <section id="feedbacks"></section>
  <section id="contacts" class="lg:hidden"></section>
  <footer></footer>
  <script src="{{asset('/js/app.js')}}"></script>
  <script src="{{asset('/js/jquery.min.js')}}"></script>
  <script src="{{asset('/js/burger.js')}}"></script>
  <script src="{{asset('/js/scriptSlick.js')}}"></script>
  <script src="{{asset('/js/slick.min.js')}}"></script>
</body>
</html>