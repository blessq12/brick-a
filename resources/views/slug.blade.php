@extends('layout/main')

@section('main_content')
<style>
    .slug-list{
        margin-bottom: 1rem!important;
    }
    .slug-list li:before{
        content: '➤';
        margin-right: 15px;
        color: #e22a31;
    }
</style>
<div id="home" class="banner-area banner-area-another">
    <div class="carousel-item active bg-fixed" style="background-image: url('assets/img/banner_top.jpeg');">
        <div class="box-table" style="position: relative;z-index: 1;">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" style="text-transform: none">Каталог наших услуг</h1>
                            <p class="text-white">
                                Строительные услуги полного цикла от компании "Брик-А".
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-layout" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;background: rgba(0,0,0,0.7);z-index: 0;"></div>
    </div>
</div>

<div class="default-padding bottom-less pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 style="font-weight: 600">Оказание строительных услуг полного спектра от компании “Брик-Астрой”</h2>
                <p>
                    Любое строительство, будь то уличный мангал или же загородный дом, сложный и трудоёмкий процесс, который требует должного опыта и подготовки исполнителей.
                    Именно поэтому к выбору организации, которой доверить строительство подходят с должным вниманием.
                    Особенно важно, чтобы один подрядчик обладал большим спектром оказываемых услуг, ведь заказывать всё по-отдельности приведет к тому, что придется отслеживать работу нескольких организаций.
                    Наша компания на рынке с 2000 года и обладает полным спектром услуг по строительным работам.
                </p>
                <p>Если вы не нашли ответ на свой вопрос на этой странице, то просто свяжитесь с нами по телефону и мы ответим на все интересующие вас вопросы. Телефон: <a href="tel:+7 (999) 342-22-22" style="color: #e22a31">+7 (999) 342-22-22</a></p>
            </div>
        </div>
    </div>
</div>
<div class="default-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h2 style="font-weight: 600">Услуги, которые мы оказываем</h2>
                <h3 style="color: #e22a31;font-weight: 500;line-height: 1.3;margin-bottom: 25px;">Доверяйте свое время и деньги профессионалам в сфере строительства</h3>
            </div>
            <div class="col-12 py-4">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <h3>Земляные работы</h3>
                        <hr style="border-top: 2px solid #e22a31;width: 20%;margin-bottom: 15px">
                        <p>Это самый первый и важный этап в строительстве. Эти работы заключаются в подготовке участка и создании подробного плана строительных работ, а именно:</p>
                        <ul class="slug-list">
                            <li>подготовка грунта под строительство.</li>
                            <li>перемещение необходимого под мество строительства.</li>
                            <li>уплотнее грунта для возведения фундамента, установки винтовых свай и других видов несущих конструкции.</li>
                        </ul>
                        <p>
                            Также в земляные работы входит и первичная прокладка коммуникаций под здания и прочие постройки на участке(фонтаны/поливочные системы и прочее).
                            Именно на этом этапе участкок подготавливается, выравнивается и определяются места будущих построек и в этот же этап закладывается подведение основным коммуникаци:
                        </p>
                        <ul class="slug-list">
                            <li>сетевые кабели(электричество)</li>
                            <li>системы водоснабжения</li>
                            <li>системы отведения сточных вод</li>
                        </ul>
                    </div>
                    <div class="d-none d-md-block d-lg-block col-md-6 col-lg-6 py-4">
                        <img src="assets/img/zeml_raboti.jpeg" alt="земляные работы">
                    </div>
                </div>
            </div>
            <div class="col-12 py-4">
                <div class="row">
                    <div class="d-none d-md-block d-lg-block col-md-6 col-lg-6 py-4">
                        <img src="assets/img/foundation.jpeg" alt="возведение фундамента">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <h3>Возведение фундамента</h3>
                        <hr style="border-top: 2px solid #e22a31;width: 20%;margin-bottom: 15px">
                        <p>
                            Фундамент относится к несущим конструкциям и ошибка в выборе вида фундамента, который будет подходить как под тип постройки так и под тип грунта, может стоить очень дорого в дальнейшем. 
                            Наши специалисты помогут безошибочно подобрать нужный вам вид фундамента и возвести его в кратчайшие сроки. 
                            Фудаменты разделяют на основные виды:
                        </p>
                        <ul class="slug-list">
                            <li>Ленточный фундамент</li>
                            <li>Винтовые сваи</li>
                            <li>Забивные сваи</li>
                            <li>Утепленная шведская плита</li>
                            <li>Монолитный фундамент</li>
                        </ul>
                        <p>
                            Такое многообразие видов фундамента сбивает с толку неопытных в строительстве людей и поэтому в этом вопросе лучшее доверить выбор специалистам, ведь ошибка выбора может стоить больших денег на момент её исправления.
                            <b>Компания “Брик-Астрой” оказывает полный спектр услуг по выбору и возведению фундамента под строительство</b>, а опытные специалисты помогут с правильным выбором вида фундамента, который подойдет именно вам.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 py-4">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <h3>Кирпичная кладка</h3>
                        <hr style="border-top: 2px solid #e22a31;width: 20%;margin-bottom: 15px">
                        <p>
                            С кладкой кирпича не всё так однозначно, как может показаться на первый взгляд, ведь она бывает нескольких видов и каждый вид применяется в определенных ситуацих.
                            Изначально кладка делится на два вида :
                        </p>
                        <ul class="slug-list">
                            <li>Облицовочная кладка</li>
                            <li>Строительная кладка</li>
                        </ul>
                        <p>
                            Облицовочная кладка несет в себе декоративный характер применения и используется для придания эстетичного внешнего вида постройкам, облицовка из кирпича используется не только для сооружений построенных из кирпича, фасад любого типа можно облицевать кирпичной кладкой, но это требует определнных навыков и опыта, ведь от руки исполнителя будет зависеть внешний вид.
                            <br>Строительная кладка же наоборот имеет ряд отличий от облицовочной и имеет определенные виды кладки кирпича, такие как:
                        </p>
                        <ul class="slug-list">
                            <li>Баварская</li>
                            <li>Ложковая</li>
                            <li>Многорядная</li>
                            <li>Армированная</li>
                            <li>Со смещением в 1/2/3 кирпича</li>
                        </ul>
                        <p>
                            Для того чтобы постройка не подвергалась разрушениям с течением времени, нужно ответственно подойти как к процессу кладки, так и к подбору материалов.
                            Мы оказываем услуги по кладке кирпича и в нашем штате есть опытные мастера по укладке кирпича.
                        </p>
                    </div>
                    <div class="d-none d-md-block d-lg-block col-md-6 col-lg-6 py-4">
                        <img src="assets/img/kladka.jpeg" alt="Кирпичная кладка">
                    </div>
                </div>
            </div>
            <div class="col-12 py-4">
                <div class="row">
                    <div class="d-none d-md-block d-lg-block col-md-6 col-lg-6 py-4">
                        <img src="assets/img/kommunication.jpeg" alt="Инженерные коммуникации">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <h3>Инженерные коммуникации</h3>
                        <hr style="border-top: 2px solid #e22a31;width: 20%;margin-bottom: 15px">
                        <p>
                            В современном мире нельзя представить ни одно строительство, в котором бы не были задействованы инженерные коммуникации, ведь к ним относится довольно большой спектр услуг:
                        </p>
                        <ul class="slug-list">
                            <li>Системы вентиляции</li>
                            <li>Кондиционирование</li>
                            <li>Отопительные системы</li>
                            <li>Системы водоснабжения</li>
                            <li>Системы отвода сточных вод</li>
                            <li>Электроснабжение</li>
                        </ul>
                        <p>
                            Все это требует определенного опыта, навыков и профессиональной подготовки от исполнителя, ведь от того как будут смонтированы те или иные системы – будет зависеть насколько долговечными они будут и расширяемыми.
                            В нашем штате работников, есть профессионалы своего дела, которые имеют большой опыт и профессиональную подготовку для оказания услуг по монтажу и прочим работам с коммуникационными системами на этапе строительства или же в момент, когда нужно доработака той или иной системы.
                            Доверьте работу с коммуникациями профессионалам в этой сфере.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 py-4">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <h3>Отделочные работы</h3>
                        <hr style="border-top: 2px solid #e22a31;width: 20%;margin-bottom: 15px">
                        <p>
                            Отделочные работы не ограничиваются наклейкой обоев или обшитию фасада здания.
                            Это очень обширный вид услуг, который включает в себя много его подвидов.
                            Тут как и везде стоит обратиться к услугам профессионалов, которые помогут вам в выборе решений в именно вашем случае, помогут съэкономить на материалах и окажут услуги на высоком уровне качества.
                        </p>
                        <p>
                            Если говорить об отделочных работах объективно, то их можно разделять на два основных типа и это:
                        </p>
                        <ul class="slug-list">
                            <li>Внутреняя отделка помещений и зданий</li>
                            <li>Наружняя отделка</li>
                        </ul>
                        <p>
                            Мы имеем большой опыт в строительстве и оказываем услуги как по внутренней, так и по внешней отделке зданий и помещений.
                            Профессиональные подход и большой опыт в строительстве позволяет оказывать услуги по отделке в кратчайшие сроки на высоком уровне качества.
                            Для более получения более подробной информации по отделочным работам, свяжитесь с нами по телефону
                            <a href="tel:+7 (999) 342-22-22" style="color: #e22a31">+7 (999) 342-22-22</a>.
                        </p>
                    </div>
                    <div class="d-none d-md-block d-lg-block col-md-6 col-lg-6 py-4">
                        <img src="assets/img/otdelka.jpeg" alt="Отделочные работы">
                    </div>
                </div>
            </div>
            <div class="col-12 py-4">
                <div class="row">
                    <div class="d-none d-md-block d-lg-block col-md-6 col-lg-6 py-4">
                        <img src="assets/img/krovlya.jpeg" alt="Кровельные работы">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <h3>Кровельные работы</h3>
                        <hr style="border-top: 2px solid #e22a31;width: 20%;margin-bottom: 15px">
                        <p>
                            Кровля у любой постройки – это очень важный её элемент, ведь именно кровля защищает ваше сооружение от погодных явлений, также как и от всех типов осадков.
                            Мы оказываем услуги по проектированию, возведению и монтажу как самой крыши так и кровельных покрытий, команда профессионалов поможет вам реализовать задуманное в кротчайшие сроки и по лучшей цене на рынке.
                            Вопрос кровли очень важне и его стоит доверять профессионалам.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="default-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>
                    Мы описали основной перечень услуг, оказываемых нашей компанией, но он далеко не полный, если вы не нашли ответ на свой вопрос или не нашли нужную вам услугу – свяжитесь с нами по телефону или оставьте заявку на сайте, наши менеджеры профессионально проконсультирую вас по вашему вопросу и предложат услгуи, которые смогут закрыть ваши потребности.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection