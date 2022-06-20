<style>
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




