<style>
    .ceo-container {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .ceo-container .img {
        margin: 20px 0 0 0 !important;
        max-width: 400px;
    }

    .ceo-container .single .img {
        margin: 20px 0 0 0 !important;
        max-width: 800px;
    }

    .ceo-container .icon {
        margin: 0 20px 0 0 !important;
        max-width: 25px;
    }

    .ceo-images {
        text-align: center;
    }

    .ceo-images p {
        margin-top: 20px;
        max-width: 500px;
    }

    .ceo-table p {
        margin-top: 20px;
        max-width: 500px;
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


<div style="background-color: #f6f6f6; padding: 20px 20px 20px 20px; border-radius:5px;">
    <div style="background-color: #1074bc; padding: 20px 20px 20px 20px; border-radius:5px; color: #fff;">
        <div class="ceo-container">
            <div class="ceo-images">
                <img class="img" width="100%" src="/local/templates/aspro-allcorp3_energy/components/aspro/monitor_ts_1.png" style="border-radius:5px;">
                <p>Модуль стационарной диагностики оборудован сверхчувствительной тепловой матрицей для определения участков нагрева</p>
            </div>
            <div class="ceo-images">
                <img class="img" width="100%" src="/local/templates/aspro-allcorp3_energy/components/aspro/monitor_ts_2.png" style="border-radius:5px;">
                <p>Зафиксирован коронный разряд на изоляторе трансформатора ТП 110кВ</p>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #f6f6f6; padding: 20px 20px 20px 20px; border-radius:5px;">
    <div style="padding: 20px 20px 20px 20px; border-radius:5px;">
        <div class="ceo-container">
            <div class="ceo-table">
                <p style="font-size: 18px;">Модуль собирает и обрабатывает информацию получаемую по 4-м информационным каналам:</p>
                <p>
                <ul>
                <li><img class="icon" src="/local/templates/aspro-allcorp3_energy/images/ok2.png" alt="">Визуальный канал</li>
                <li><img class="icon" src="/local/templates/aspro-allcorp3_energy/images/ok2.png" alt="">Инфракрасный канал</li>
                    <li><img class="icon" src="/local/templates/aspro-allcorp3_energy/images/ok2.png" alt="">Ультрафиолетовый канал</li>
                    <li><img class="icon" src="/local/templates/aspro-allcorp3_energy/images/ok2.png" alt="">Звуковой канал</li>
                </ul>
                </p>
            </div>
            <div class="ceo-table">
                <p style="font-size: 18px;">Программно-аппаратный комплекс для дистанционной диагностики состоит из:</p>
                <p>
                <ul>
                    <li><img class="icon" style="margin: 0 20px 0 0;" src="/local/templates/aspro-allcorp3_energy/images/ok2.png" alt="">Модуль стационарной диагностики</li>
                    <li><img class="icon" src="/local/templates/aspro-allcorp3_energy/images/ok2.png" alt="">Моторизированный подвес</li>
                    <li><img class="icon" src="/local/templates/aspro-allcorp3_energy/images/ok2.png" alt="">Программное обеспечение для ПК</li>
                    <li><img class="icon" src="/local/templates/aspro-allcorp3_energy/images/ok2.png" alt="">Блок питания 12В</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #f6f6f6; padding: 20px 20px 20px 20px; border-radius:5px;">
    <div style="padding: 20px 20px 20px 20px; border-radius:5px;">
        <div class="ceo-container">
            <div class="ceo-images single">
                <h4>МОДУЛЬ ОБЛАДАЕТ БЕСПРОВОДНЫМ КАНАЛОМ ПЕРЕДАЧИ ДАННЫХ (4G/3G/GPRS)</h4>
                <img class="img" width="100%" src="/local/templates/aspro-allcorp3_energy/components/aspro/monitor_ts_3.png" style="border-radius:5px;">
            </div>
        </div>
    </div>
</div>