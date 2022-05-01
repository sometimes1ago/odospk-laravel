<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <link rel="stylesheet" href="{{asset('/css/tailwind.css')}}">
  <title>Отделение дополнительного образования</title>
</head>
<body class="w-full flex flex-col items-center relative bg-light-500 text-black-900 leading-none dark:bg-dark-900 dark:text-light-900">
  <header id="head" class="w-full relative ad:mb-36 tb:mb-[60px] lg:mb-48 md:mb-56 xl:mb-[80px]">
      @include('landing.burger')
      <div class="w-full ad:flex ad:flex-col lg:flex-row tb:items-center lg:justify-between ad:mt-[80px] md:mt-[100px] xl:mt-[128px]">
        <div class="ad:mt-12 ph:w-[390px] tb:w-[470px] lg:w-[498px] md:w-[592px] xl:w-[750px] flex flex-col tb:items-center lg:items-start ad:order-2 lg:order-1 ad:px-16 tb:px-0 lg:pl-32 xl:pl-48">
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
    <div class="gallery-slider ad:mt-36 tb:mt-48 md:mt-56 xl:mt-64 bg-light-500 shadow-slider">
      <img class="gallery-slider__item dark:brightness-90" src="{{URL('/img/landing/gallery/gallery-img.png')}}" alt="Gallery Slider Item" loading="lazy">
      <img class="gallery-slider__item dark:brightness-90" src="{{URL('/img/landing/gallery/gallery-img.png')}}" alt="Gallery Slider Item" loading="lazy">
    </div>
    <ul class="tb:w-5/6 lg:w-11/12 md:w-5/6 flex tb:justify-between ad:flex-col tb:flex-row ad:mt-[120px] tb:mt-[86px] lg:mt-64 md:mt-[76px]">
      <li class="tb:w-1/2 xl:w-5/12 flex flex-col">
        <div class="flex ad:flex-col ad:items-start lg:flex-row">
          <img src="{{URL('/img/landing/illustrations/simple.svg')}}" class="ad:w-[136px] ad:h-[136px] lg:w-[148px] lg:h-[148px] xl:w-[164px] xl:h-[164px] dark:brightness-90" alt="Simplicity" loading="lazy">
          <div class="ad:w-11/12 tb:w-10/12 lg:w-3/5 xl:w-[425px] lg:ml-32 ad:mt-24">
            <h3 class="ad:text-24 md:text-28 font-bold tracking-tight dark:text-light-400">Простота</h3>
            <p class="ad:mt-8 xl:mt-12 lg:text-16 md:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-900">Наши программы созданы таким образом, чтобы не вызывать затруднений у ученикови быть им интересными</p>
          </div>
        </div>
        <div class="ad:mt-48 tb:mt-64 lg:mt-[84px] md:mt-[96px] flex ad:flex-col ad:items-start lg:flex-row">
          <img src="{{URL('/img/landing/illustrations/quality.svg')}}" class="ad:w-[136px] ad:h-[136px] lg:w-[148px] lg:h-[148px] xl:w-[164px] xl:h-[164px] dark:brightness-90" alt="Quality" loading="lazy">
          <div class="ad:w-11/12 tb:w-10/12 lg:w-3/5 xl:w-[400px] lg:ml-32 ad:mt-24">
            <h3 class="ad:text-24 md:text-28 font-bold tracking-tight dark:text-light-400">Качество</h3>
            <p class="ad:mt-8 xl:mt-12 lg:text-16 md:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-800">Все наши образовательные программы проверены временем и отзывами 
              о высоком качестве наших методик 
              и подходов обучения слушателей</p>
          </div>
        </div>
      </li>
      <li class="tb:w-1/2 xl:w-5/12 flex flex-col ad:mt-48 tb:mt-0">
        <div class="flex ad:flex-col ad:items-start lg:flex-row">
          <img src="{{URL('/img/landing/illustrations/price.svg')}}" class="ad:w-[136px] ad:h-[136px] lg:w-[148px] lg:h-[148px] xl:w-[164px] xl:h-[164px] dark:brightness-90" alt="Cost" loading="lazy">
          <div class="ad:w-11/12 tb:w-10/12 lg:w-3/5 lg:ml-32 ad:mt-24">
            <h3 class="ad:text-24 md:text-28 font-bold tracking-tight dark:text-light-400">Стоимость</h3>
            <p class="ad:mt-8 xl:mt-12 xl:w-[366px] lg:text-16 md:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-800">Для вашего удобства, реализуемые нами программы отличаются возможностью оплаты обучения в рассрочку</p>
          </div>
        </div>
        <div class="ad:mt-48 tb:mt-64 lg:mt-[84px] flex ad:flex-col ad:items-start lg:flex-row">
          <img src="{{URL('/img/landing/illustrations/proff.svg')}}" class="ad:w-[136px] ad:h-[136px] lg:w-[148px] lg:h-[148px] xl:w-[164px] xl:h-[164px] dark:brightness-90" alt="Professionality" loading="lazy">
          <div class="ad:w-11/12 tb:w-10/12 lg:w-3/5 lg:ml-32 ad:mt-24">
            <h3 class="ad:text-24 md:text-28 font-bold tracking-tight dark:text-light-400">Профессионализм</h3>
            <p class="ad:mt-8 xl:mt-12 xl:w-[412px] lg:text-16 md:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-800">Опыт наших преподавателей позволит вам стать  специалистом по выбранной программе обучения или курсу по вашему запросу</p>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <section id="courses" class="ad:px-16 lg:px-32 lg:mt-48 lg:mb-48 md:mt-48 md:mb-56 xl:mt-[80px] xl:mb-[80px] flex lg:flex-col lg:items-center lg:justify-center">
    <h2 class="lg:mt-48 lg:text-36 md:text-48 xl:text-52 font-bold tracking-tight dark:text-light-400">Наши курсы и программы</h2>
    <p class="lg:mt-12 md:mt-16 lg:w-[617px] md:w-[689px] xl:w-[755px] text-18 md:text-20 xl:text-22 text-black-800 text-center leading-tight dark:text-light-800">Список наших программ обучения, по которым вы можете получить дополнительное образование, профессиональную подготовку 
      или повысить квалификацию</p>
    <div class="w-full lg:mt-48 lg:p-16 md:p-20 bg-light-700 lg:rounded-28 md:rounded-32 dark:bg-dark-800">
      <div class="w-full flex items-end justify-between">
        <div>
          <h3 class="lg:block lg:text-24 md:text-32 font-bold dark:text-light-400 tracking-tight">Отфильтровано с заботой</h3>
          <p class="lg:mt-8 lg:text-16 md:text-20 leading-tight tracking-tight text-black-800 dark:text-light-800">Специально для Вас фильтры с быстрой <br> выборкой курсов и программ</p>
        </div>
        <div class="dropdowns w-fit flex items-center justify-between">
          <div class="dropdown__container w-[200px] flex flex-col items-start mr-24 z-10">
            <label class="dropdown__label mb-12 text-18 font-bold" data-dropdownIndex="0">Срок обучения</label>
            <div class="dropdown dropdown__light" data-index="0">
              <div class="dropdown__btn">
                <p class="dropdown__btn-text" data-dropdownValue="Любой">Любой</p>
                <svg class="dropdown__btn-icon" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                  <path d="M6.73205 8C5.96225 9.33333 4.03775 9.33333 3.26795 8L0.669873 3.5C-0.0999277 2.16667 0.862323 0.5 2.40192 0.5L7.59808 0.5C9.13768 0.5 10.0999 2.16667 9.33013 3.5L6.73205 8Z" fill="#252525"/>
                </svg>
              </div>
              <ul class="dropdown__options">
                <li class="dropdown__option">Любая</li>
                <li class="dropdown__option">1 месяц</li>
                <li class="dropdown__option">2 месяца</li>
                <li class="dropdown__option">3 месяца</li>
                <li class="dropdown__option">4 месяца</li>
                <li class="dropdown__option">5 месяца</li>
                <li class="dropdown__option">Полгода</li>
                <li class="dropdown__option">Год</li>
              </ul>
            </div>
          </div>
          <div class="dropdown__container w-[215px] flex flex-col items-start mr-24 z-10">
            <label class="dropdown__label mb-12 text-18 font-bold" data-dropdownIndex="1">Выдаваемый документ</label>
            <div class="dropdown dropdown__light" data-index="1">
              <div class="dropdown__btn">
                <p class="dropdown__btn-text" data-dropdownValue="Любой">Любой</p>
                <svg class="dropdown__btn-icon" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                  <path d="M6.73205 8C5.96225 9.33333 4.03775 9.33333 3.26795 8L0.669873 3.5C-0.0999277 2.16667 0.862323 0.5 2.40192 0.5L7.59808 0.5C9.13768 0.5 10.0999 2.16667 9.33013 3.5L6.73205 8Z" fill="#252525"/>
                </svg>
              </div>
              <ul class="dropdown__options">
                <li class="dropdown__option">Любой</li>
                <li class="dropdown__option">Сертификат</li>
                <li class="dropdown__option">Свидетельство</li>
              </ul>
            </div>
          </div>
          <div class="filter__input flex flex-col items-start w-[200px]">
            <label for="clientName" class="lg:text-18 mb-12 font-bold">Стоимость</label>
            <input type="text" id="clientName" class="w-full text-14 px-12 py-[14.5px] xl:py-16 xl:text-16 xl:mt-16 border outline-brand-900 outline-2 rounded-12 border-light-900 bg-light-400 placeholder:text-black-800" placeholder="Иван Иванов" required>
          </div>
        </div>
      </div>
      <div class="w-full lg:mt-36 flex lg:items-start lg:justify-between relative">
        <div class="courses-list relative ad:w-full lg:w-1/2 lg:mr-24 overflow-y-scroll no-scrollbar">
          <h4 class="lg:text-20 md:text-24 font-bold dark:text-light-400 tracking-tight">Курсы</h4>
          <ul class="w-full lg:mt-12 md:mt-16">
            <li class="course__item">1С Предприятие 8.2, 8.3</li>
            <li class="course__item-active course__item">Комбинированный маникюр и дизайн ногтей</li>
            <li class="course__item">Оформление и окрашивание бровей</li>
            <li class="course__item">Раскрой и пошив одежды</li>
            <li class="course__item">Художественная сварка</li>
            <li class="course__item">Цифровая фотография</li>
          </ul>
          <h4 class="lg:mt-24 lg:text-20 md:text-24 font-bold dark:text-light-400 tracking-tight">Профессиональная подготовка</h4>
          <ul class="courses w-full lg:mt-12 md:mt-16">
            <li class="course__item">Помощник машиниста электропоезда</li>
            <li class="course__item">Проводник пассажирского вагона</li>
            <li class="course__item">Сварщик ручной дуговой сварки плавящимся электродом</li>
            <li class="course__item">Художественная сварка</li>
            <li class="course__item">Цифровая фотография</li>
          </ul>
        </div>
        <div class="gradient-hidder__courses w-1/2 lg:h-64 absolute left-0 bottom-0"></div>
        <div class="course-description z-0 lg:w-1/2 lg:p-16 md:p-20 xl:p-24 bg-light-500 rounded-20 md:rounded-24 xl:rounded-28 border border-light-900 dark:bg-dark-700 dark:border-none">
          <h3 class="lg:text-32 md:text-36 xl:text-48 font-bold tracking-tight dark:text-light-400">Комбинированный маникюр и дизайн ногтей</h3>
          <div class="course-initial hidden lg:pr-36 md:pr-[84px] xl:pr-[120px]">
            <ul class="text-content lg:mt-24 md:mt-32 xl:mt-36">
              <li class="lg:text-18 md:text-20 xl:text-22 text-black-800 leading-tight dark:text-light-800">
                <span class="lg:text-20 md:text-24 xl:text-28 text-black-900 font-bold leading-none dark:text-light-400">Срок обучения: </span>
                32 академ. часа (1 месяц)
              </li>
              <li class="lg:mt-16 md:mt-20 xl:mt-24 lg:text-18 md:text-20 xl:text-22 text-black-800 leading-tight dark:text-light-800">
                <span class="lg:text-20 md:text-24 xl:text-28 text-black-900 font-bold leading-none dark:text-light-400">Выдаваемый документ: </span>
                Сертификат
              </li>
              <li class="lg:mt-16 md:mt-20 xl:mt-24 lg:text-18 md:text-20 xl:text-22 text-black-800 leading-tight dark:text-light-800">
                <span class="lg:text-20 md:text-24 xl:text-28 text-black-900 font-bold leading-none dark:text-light-400">Чему научитесь: </span>
                Выполнять комбинированный маникюр, техникам нанесения гель-лака, современным дизайнам ногтей
              </li>
              <li class="lg:mt-16 md:mt-20 xl:mt-24 lg:text-18 md:text-20 xl:text-22 text-black-800 leading-tight dark:text-light-800">
                <span class="lg:text-20 md:text-24 xl:text-28 text-black-900 font-bold leading-none dark:text-light-400">Описание: </span>
                Программа позволит вам освоить комбинированный маникюр, сочетающий техники обрезного и аппаратного маникюра, работу по нанесению гель-лака, создание разных видов дизайна ногтей, методикам укрепления натуральных ногтей, приобретете навык умело фотографировать свои работы и др
              </li>
              <li class="lg:mt-16 md:mt-20 xl:mt-24 lg:text-18 md:text-20 xl:text-22 text-black-800 leading-tight dark:text-light-800">
                <span class="lg:text-20 md:text-24 xl:text-28 text-black-900 font-bold leading-none dark:text-light-400">Стоимость: </span>
                5000 ₽
              </li>
            </ul>
            <button class="lg:w-[206px] md:w-[255px] mt-24 md:mt-32 xl:mt-36 text-16 md:text-18 p-16 md:p-[23px] bg-brand-900 text-light-400 rounded-12 xl:rounded-16 cursor-pointer hover:shadow-btn">Записаться на курс</button>
          </div>
          <div class="course-ordering lg:w-2/3">
            <h3 class="lg:text-24 lg:mt-20 font-bold dark:text-light-400">Запись на курс</h3>
            <p class="lg:text-16 lg:mt-8 leading-tight text-black-800">Заполните все необходимые поля и отправьте заявку чтобы записаться на выбранный курс</p>
            <form action="" class="w-full lg:mt-20">
              <label for="clientName" class="lg:text-18 font-bold">Ваше имя и фамилия</label>
              <input type="text" id="clientName" class="w-full text-14 px-12 py-[12.5px] leading-normal xl:py-16 xl:text-16 mt-12 xl:mt-16 border outline-brand-900 outline-2 rounded-8 border-light-900 bg-light-700 placeholder:text-black-800" placeholder="Иван Иванов" required>
              <label for="clientPhone" class="lg:text-18 lg:mt-24 block font-bold">Ваш телефон</label>
              <input type="text" id="clientPhone" class="w-full text-14 px-12 py-[12.5px] leading-normal xl:py-16 xl:text-16 mt-12 xl:mt-16 border outline-brand-900 outline-2 rounded-8 border-light-900 bg-light-700" placeholder="+7 900 900 90 90" required>
              <div class="flex items-start lg:mt-16">
                <input type="checkbox" name="agreement" id="agreement" class="form-checkbox lg:mt-[3px] lg:rounded-[4px] border-text-900 border-2" checked required>
                <label for="agreement" class="lg:ml-8 lg:text-16 leading-tight text-black-900 accent-brand-900">Я согласен на обработку моих личных данных</label>
              </div>
              <div class="flex mt-24 md:mt-32 xl:mt-36">
                <button type="submit" class="lg:w-[206px] md:w-[255px] text-16 md:text-18 p-16 md:p-[23px] bg-brand-900 text-light-400 rounded-12 xl:rounded-16 cursor-pointer hover:shadow-btn">Записаться</button>
                <button class="cancelOrdering text-16 lg:ml-12 md:text-18 p-16 md:p-[23px] font-bold" >Отмена</button>
              </div>
              <p class="lg:mt-16 lg:text-12 text-black-800 leading-tight">Все передаваемые вами данные защищены по ФЗ № 152</p>
            </form>
          </div>
          <div class="course-ordering__succeed hidden">
            <img class="lg:w-[265px] md:w-[290px] xl:w-[320px] lg:h-[265px] md:h-[290px] xl:h-[320px] lg:mt-48 md:mt-[56px] xl:mt-64 dark:brightness-90" src="/src/img/landing/illustrations/order-success.svg" alt="Order success">
            <div class="lg:mt-32">
              <h4 class="lg:text-24 md:text-28 xl:text-32 font-bold text-black-900 dark:text-light-400">Вы успешно записались!</h4>
              <p class="lg:mt-8 md:mt-12 lg:text-16 md:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-800">Скоро мы свяжемся с вами по  указанному <br> телефону и обсудим детали</p>
            </div>
            <button class="btn-primary lg:w-[206px] lg:mt-24 md:mt-[28px] xl:mt-36 lg:py-16 md:py-[20px] md:text-16">Спасибо!</button>
          </div>
          <div class="course-ordering__error hidden">
            <img class="lg:w-[265px] md:w-[290px] xl:w-[320px] lg:h-[265px] md:h-[290px] xl:h-[320px] lg:mt-48 md:mt-[56px] xl:mt-64 dark:brightness-90" src="/src/img/landing/illustrations/order-error.svg" alt="Order success">
            <div class="lg:mt-32">
              <h4 class="lg:text-24 md:text-28 xl:text-32 font-bold text-black-900 dark:text-light-400">Ой! Что-то пошло не так</h4>
              <p class="lg:mt-8 md:mt-12 lg:text-16 md:text-18 xl:text-20 text-black-800 leading-tight dark:text-light-800">Повторите попытку или сообщите нам об этом</p>
            </div>
            <button class="btn-primary lg:w-[206px] lg:mt-24 md:mt-[28px] xl:mt-36 lg:py-16 md:py-[20px] md:text-16">Сообщить</button>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full flex lg:items-center lg:justify-between lg:mt-36 md:mt-48 lg:p-24 xl:px-32 xl:py-36 lg:rounded-28 md:rounded-32 bg-brand-900 dark:bg-dark-800">
      <div class="lg:w-[350px] md:w-[390px] xl:w-[436px]">
        <h4 class="lg:text-24 xl:text-32 text-light-400 font-bold dark:text-light-400">Не можете выбрать курс?</h4>
        <p class="lg:mt-12 lg:text-16 md:text-18 xl:text-20 leading-tight text-light-400 dark:text-light-800">Оставьте заявку на обратный звонок. <br> 
          Мы свяжемся с вами в ближайшее время 
          и поможем в выборе курса или программы</p>
      </div>
      <form action="" method="post">
        <ul class="flex lg:items-center">
          <li class="lg:w-[240px] lg:mr-32 xl:mr-36 flex flex-col">
            <label class="lg:text-18 xl:text-22 text-light-400" for="helperClientName">Ваше имя и фамилия</label>
            <input class="lg:mt-12 xl:mt-16 lg:px-12 md:px-16 lg:py-[10px] md:py-[14px] lg:text-16  bg-brand-900 text-light-400  border-2 border-light-400 focus:border-light-400 lg:rounded-10 md:rounded-16 placeholder:text-light-900 dark:bg-dark-800" type="text" name="helperClientName" id="helperClientName" placeholder="Иван Иванов" required>
          </li>
          <li class="lg:w-[240px] lg:mr-32 xl:mr-36 flex flex-col">
            <label class="lg:text-18 xl:text-22 text-light-400" for="helperClientPhone">Ваш телефон</label>
            <input class="lg:mt-12 xl:mt-16 lg:px-12 md:px-16 lg:py-[10px] md:py-[14px]  bg-brand-900 text-light-400 border-2 border-light-400 focus:border-light-400 lg:rounded-10 md:rounded-16 placeholder:text-light-900 dark:bg-dark-800" type="tel" name="helperClientPhone" id="helperClientPhone" placeholder="+7 900 900 90 90" required>
          </li>
          <li class="self-end">
            <button class="lg:px-24 md:px-32 lg:py-16 md:py-20 bg-light-400 text-black-900 lg:rounded-10 md:rounded-16 hover:bg-brand-900 hover:outline hover:outline-2 hover:outline-light-400 hover:text-light-400 dark:bg-brand-900 dark:text-light-400 dark:hover:shadow-btn dark:hover:outline-none" type="submit">Позвоните мне</button>
          </li>
        </ul>
        <div class="flex lg:items-center xl:items-start lg:mt-12 md:mt-16">
          <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-20 lg:h-20" viewBox="0 0 20 20" fill="none">
            <path d="M9.99996 18.3334C14.6023 18.3334 18.3333 14.6025 18.3333 10.0001C18.3333 5.39771 14.6023 1.66675 9.99996 1.66675C5.39759 1.66675 1.66663 5.39771 1.66663 10.0001C1.66663 14.6025 5.39759 18.3334 9.99996 18.3334Z" stroke="#FEFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 6.66675V10.0001" stroke="#FEFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 13.3333H10.0083" stroke="#FEFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <p class="lg:ml-8 md:ml-12 lg:text-14 xl:text-16 text-light-400 xl:leading-tight tracking-wide">Отправляя данную форму вы автоматически согласны на обработку <br class="hidden xl:inline-block"> персональных данных</p>
        </div>
      </form>
    </div>
  </section>
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