<style>
    .ceo-wrap-grey {
        background-color: #f6f6f6;
        padding: 40px 20px 20px 20px;
        border-radius: 5px;
        margin-bottom: 48px;
    }

    .ceo-wrap-white {
        padding: 40px 20px 20px 20px;
        border-radius: 5px;
        margin-bottom: 48px;
    }

    .ceo-wrap-grey h3 {
        text-align: center;
    }

    .ceo-container {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .left {
        align-items: center;
    }

    .left img {
        margin: 0;
    }

    .compound img {
        max-width: 200px;
    }

    .ceo-flex-elem {
        width: calc((100% - 100px) / 2);
        margin-bottom: 40px;
    }

    .ceo-flex-elem-2 {
        display: flex;
        align-content: center;
        flex-wrap: nowrap;
        align-items: center;
    }

    .flex-parent {
        display: flex;
        border-radius: 5px;
    }

    .flex-child {
        border-radius: 5px;
        background: #f6f6f6;
        padding: 15px;
        box-sizing: border-box;
        width: 50%;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: flex-start;
    }

    .flex-child:nth-of-type(2) {
        background: #f1f1f1;
    }

    .flex-elem span {
        display: block;
        font-size: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        font-weight: bold;
    }

    .ceo-hidden {
        opacity: 0;
    }

    .flex-elem li {
        margin: 5px 0px 0px 0px;
    }
</style>


<div class="ceo-wrap-grey">
    <div class="ceo-container">
        <div class="ceo-flex-elem">
            <h4>Контроль и безопасность</h4>
            <p>АСУНО «Спот Лайт» использует концепцию IoT для города. Это расширяет область применения системы, добавляя новые возможности. Технология не только управляет освещением парков. Но и собирает, анализирует данные о среде использования.</p>
            <p>Датчики света на фонарях дают информацию о степени солнечной инсоляции в различное время года. На основе этих данных создаются эффективные схемы освещения. Датчики движения анализируют человеческий поток в различных участках парка.</p>
            <p>Данные используются для создания схемы наилучшего освещения наиболее оживлённых участков. А также участков, где ведётся видеонаблюдение. В свою очередь это повышает безопасность, снижает риск противоправных действий.</p>
        </div>
        <div class="ceo-flex-elem">
            <div>
                <img width="100%" src="/local/templates/aspro-allcorp3_energy/images/osveshenie_parkov.png" style="border-radius:5px;">
            </div>
        </div>
        <div class="ceo-flex-elem">
            <h4>Праздничные огни города</h4>
            <p>Помимо повседневного освещения, система Spot Light может использоваться для управления праздничной иллюминации. Технология с одинаковой эффективностью работает как со штатными светильниками, так и с праздничными элементами.</p>
            <p>Контроллеры и ШУНО быстро монтируются, благодаря беспроводной связи. Это позволяет в короткие сроки организовать декоративное освещение к любому праздничному событию. А также быстро демонтировать по окончанию события.</p>
        </div>
        <div class="ceo-flex-elem">
            <h4>Парковая иллюминация</h4>
            <p>Особенность АСУНО Spot Light заключается в возможности использования различных схем освещения. Система позволяет дистанционно управлять повседневным освещением парков. Контроллер управления оснащён часовым модулем, задающим время включения.</p>
            <p>Фотореле позволяет регулировать яркость освещения в зависимости от времени суток, года и погодных явлений. Можно дистанционно с пульта управлять освещением в заданных участках парка. Допускается применение сложных схем освещения.</p>
        </div>
    </div>
    <h3 style="margin: 60px 0 40px 0;">Система уличного освещения «Spot Light»</h3>
    <div class="ceo-container">
        <div class="ceo-flex-elem-2">
            <div style="padding: 20px 20px 20px 0;">
                <img style="margin: 0;" src="/local/templates/aspro-allcorp3_energy/images/icon_adv.png" alt="">
            </div>
            <div style="padding: 20px 0 20px 0; font-size: 18px;">
                Парки
            </div>
        </div>
        <div class="ceo-flex-elem-2">
            <div style="padding: 20px 20px 20px 0;">
                <img style="margin: 0;" src="/local/templates/aspro-allcorp3_energy/images/icon_adv.png" alt="">
            </div>
            <div style="padding: 20px 0 20px 0; font-size: 18px;">
                Городские улицы
            </div>
        </div>
        <div class="ceo-flex-elem-2">
            <div style="padding: 20px 20px 20px 0;">
                <img style="margin: 0;" src="/local/templates/aspro-allcorp3_energy/images/icon_adv.png" alt="">
            </div>
            <div style="padding: 20px 0 20px 0; font-size: 18px;">
                Автомагистрали
            </div>
        </div>
        <div class="ceo-flex-elem-2">
            <div style="padding: 20px 20px 20px 0;">
                <img style="margin: 0;" src="/local/templates/aspro-allcorp3_energy/images/icon_adv.png" alt="">
            </div>
            <div style="padding: 20px 0 20px 0; font-size: 18px;">
                Логистические центры
            </div>
        </div>
    </div>
</div>
<div class="ceo-wrap-white">
    <div class="ceo-container">
        <div class="ceo-flex-elem">
            <h5>Основные звенья Spot Light</h5>
            <p> В состав системы входит четыре главных звена: светодиодные светильники, датчики движения, контроллеры и шкаф управления. Все звенья управляются программой. Она отражает их деятельность, и анализирует состояние.
            </p>
            <p> В свою очередь программа позволяет:
            </p>
            <ul>
                <li>
                    &mdash; учитывать расход электричества;
                </li>
                <li> &mdash; регулировать параметры (яркость) освещения;
                </li>
                <li> &mdash; дистанционно управлять освещением;
                </li>
                <li> &mdash; контролировать работу датчиков движения.
                </li>
            </ul>
        </div>
        <div class="ceo-flex-elem">
            <p> Умное освещение производственных площадок – это использование энергии только по необходимости. Датчики движения позволяют снизить/повысить освещённость, когда это нужно. Программа автоматически выключает/включает свет согласно заданной команде.
            </p>
            <p> В целом, система АСУНО Spot Light – удобный, экономичный и полезный инструмент. Это выгодное вложение, которое окупается за счёт существенного снижения расходов. «Спот Лайт» – это доступный свет на безопасных и комфортных условиях!
            </p>
        </div>
    </div>
    <h2>Функционал оборудования</h2>
    <div class="flex-parent">
        <div class="flex-child">
            <div class="flex-elem">
                <span>Spot Light 1.0</span>
                <p>Контролер управления размещается непосредственно на светильнике, а управляемый драйвер в корпусе. Подключение контроллера к светильнику осуществляется по протоколу DALI, разъем Zhaga.
                    Связь шкафа управления наружным освещением (ШУНО) с контроллером организована по радиоканалу 2,4ГГц, между контроллерами по ретрансляции сигнала.
                    Данное решение имеет обширный опыт применения, за счет простоты монтажа и надежности.</p>
            </div>
        </div>
        <div class="flex-child">
            <div class="flex-elem">
                <span>Spot Light 2.0</span>
                <p>
                    Размещение контроллера с драйвером в одном корпусе на опоре освещения или внутри полой композиции опоры.
                    Связь шкафа управления наружным освещением с контроллером организованна по WIFI, между контроллерами также по ретрансляции. Дополнительно, контроллеры оборудованы модулями часов, позволяет каждому светильнику работать в автономном режиме, даже в случае обрыва связи с ШУНО.
                    Данное решение позволяет производить обслуживание оборудования без автовышки и подключать к одному контроллеру до трех светильников одновременно, что позволяет экономить на стоимости оборудования и обслуживания в дальнейшем.
                </p>
            </div>
        </div>
    </div>
</div>

<h2>В состав системы «Spot Light» входят:</h2>
<div class="ceo-wrap-white">
    <div class="ceo-container compound">
        <div class="ceo-flex-elem-composition">
            <div>
                <img src="/local/templates/aspro-allcorp3_energy/images/svetodiod_svetiln.png" alt="">
            </div>
            <div style="padding: 20px 0 20px 0; font-size: 18px; text-align: center;">
                Светодиодные светильники
            </div>
        </div>
        <div class="ceo-flex-elem-composition">
            <div>
                <img src="/local/templates/aspro-allcorp3_energy/images/shkaf_uprav.png" alt="">
            </div>
            <div style="padding: 20px 0 20px 0; font-size: 18px; text-align: center;">
                Шкаф управления
            </div>
        </div>
        <div class="ceo-flex-elem-composition">
            <div>
                <img src="/local/templates/aspro-allcorp3_energy/images/datchik_dvizh.png" alt="">
            </div>
            <div style="padding: 20px 0 20px 0; font-size: 18px; text-align: center;">
                Датчики движения
            </div>
        </div>

        <div class="ceo-flex-elem-composition">
            <div>
                <img src="/local/templates/aspro-allcorp3_energy/images/kontroller_uprav.png" alt="">
            </div>
            <div style="padding: 20px 0 20px 0; font-size: 18px; text-align: center;">
                Контроллеры управления
            </div>
        </div>
    </div>
</div>

<h2>Управление системой</h2>
<div class="ceo-wrap-grey">
    <div class="ceo-container left">
        <div class="ceo-flex-elem">
            <div>
                <img width="100%" src="/local/templates/aspro-allcorp3_energy/images/automatisation.png" style="border-radius:5px;">
            </div>
        </div>
        <div class="ceo-flex-elem">
            <h5>Яркость</h5>
            <p>
                Доммирование яркости света как отдельного светильника, так и линии светильников
            </p>
            <h5>Автоматизация</h5>
            <p>
                Коммерческий учет энергопотребления.
            </p>
            <h5>Трансформация</h5>
            <p>
                Изменение уровня яркости светильника по датчику движения
            </p>
            <h5>Универсальность</h5>
            <p>
                Дистанционное управление освещением с любого устройства с возможностью выхода в интернет
            </p>
            <h5>Регулирование</h5>
            <p>
                Включение/выключение в соответствии с заданными параметрами (по таблице рассветов и закатов)
            </p>
        </div>
    </div>

</div>