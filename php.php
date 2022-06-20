<style>
    .ceo-container {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .ceo-container img {
        margin: 20px 0 0 0 !important;
        max-width: 400px;
    }

    .ceo-images {
        text-align: center;
    }

    .ceo-images p {
        margin-top: 20px;
        max-width: 400px;
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


<!-- <h2 style="text-align:center;">Обрывы и отключения</h2> -->
<div style="background-color: #f6f6f6; padding: 20px 20px 20px 20px; border-radius:5px;">
    <!-- <h4 style="text-align:center;">Зависимость температуры провода, угла стрелы провеса и амплитуды вибраций от погодных явлений</h4>
    <div class="ceo-container">
        <div>
            <img width="100%" src="/local/templates/aspro-allcorp3_energy/components/aspro/13.png" style="border-radius:5px;">
        </div>
        <div>
            <img width="100%" src="/local/templates/aspro-allcorp3_energy/components/aspro/23.png" style="border-radius:5px;">
        </div>
    </div>
    <p style="text-align:center;">
        Шел снег, температура -1
    </p> -->
    <div style="background-color: #1074bc; padding: 20px 20px 20px 20px; border-radius:5px; color: #fff;">
        <!-- <h4 style="text-align:center; border-radius: 1px;">Снег налип на провод и понизил температуру провода, угла стрелы провеса и амплитуду вибрации от погодных явлений</h4> -->
        <div class="ceo-container">
            <div class="ceo-images">
                <img width="100%" src="/local/templates/aspro-allcorp3_energy/components/aspro/koron1.png" style="border-radius:5px;">
                <p>Модуль стационарной диагностики оборудован сверхчувствительной тепловой матрицей для определения участков нагрева</p>
            </div>
            <div class="ceo-images">
                <img width="100%" src="/local/templates/aspro-allcorp3_energy/components/aspro/koron2.png" style="border-radius:5px;">
                <p>Зафиксирован коронный разряд на изоляторе трансформатора ТП 110кВ Коронный разряд на изоляторе с наложением на дневную картинку</p>
            </div>
        </div>
    </div>
    <h2>Состав системы</h2>
    <div class="flex-parent">
        <div class="flex-child">
            <div class="flex-elem">
                <span>МОДУЛЬ ДИСТАНЦИОННОЙ ДИАГНОСТИКИ ПРОВОДОВ</span>
                <ul>
                    <li>сила тока в проводе</li>
                    <li>температура провода</li>
                    <li>угол стрелы провеса провода</li>
                    <li>амплитуда и частота вибрации провода</li>
                    <li>обрыв провода в пролете</li>
                    <li>GPS позиционирование и привязку ВЛ к картографическим данным</li>
                    <li class="ceo-hidden">Phasellus leo dolor tempus non</li>

                </ul>
            </div>
            <div class="flex-elem">
                <span>МОДУЛЬ ДИСТАНЦИОННОЙ ДИАГНОСТИКИ ИЗОЛЯТОРОВ</span>
                <ul>
                    <li>ток утечки и его изменение в зависимости от метео и иных параметров</li>
                    <li>угол отклонения гирлянды от вертикальной оси</li>
                    <li>угол стрелы провеса провода</li>
                    <li>обрыв провода в пролете</li>
                </ul>
            </div>
            <div class="flex-elem">
                <span>МОДУЛЬ ДИСТАНЦИОННОЙ ДИАГНОСТИКИ ОПОР</span>
                <ul>
                    <li>угла наклона опоры</li>
                    <li>амплитуда и частота вибрации верхней части опоры.</li>
                </ul>
            </div>
        </div>
        <div class="flex-child">
            <div class="flex-elem">
                <span>МЕТЕОСТАНЦИЯ</span>
                <ul>
                    <li>температура</li>
                    <li>влажность</li>
                    <li>скорость и направление ветра</li>
                    <li>величина осадков</li>
                    <li>солнечная активность</li>
                    <li>прием прогноза метеорологических данных по Сети</li>
                    <li>обработка методами искусственного интеллекта</li>
                </ul>
            </div>
            <div class="flex-elem">
                <span>ОХРАННЫЙ МОДУЛЬ</span>
                <ul>
                    <li>несанкционированное проникновение в охранную зону ВЛ</li>
                    <li>несанкционированный подъем на опоры ВЛ</li>
                    <li>предупреждение хищения металла и разрушения опор ВЛ</li>
                    <li class="ceo-hidden">Phasellus leo dolor tempus non</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>