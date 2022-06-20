<style>
    .ceo-container {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .ceo-container img {
        margin: 20px 0 0 0 !important;
        max-width: 900px;
    }

    .ceo-images {
        text-align: center;
    }

    .ceo-images p {
        margin-top: 20px;
        max-width: 900px;
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


<h2 style="text-align:center;">Схема работы</h2>
<div style="background-color: #f6f6f6; padding: 20px 20px 20px 20px; border-radius:5px;">
    <div class="ceo-container">
        <div>
            <img width="100%" src="/local/templates/aspro-allcorp3_energy/components/aspro/meteo1.png" style="border-radius:5px;">
        </div>
    </div>

    <h2 style="text-align:center;">Состав системы</h2>
    <div class="flex-parent">
        <div class="flex-child">
            <div class="flex-elem">
                <span>АВТОНОМНАЯ ЭКОЛОГИЧЕСКАЯ МЕТЕОСТАНЦИЯ</span>
                <ul>
                    <li>метеомачта EcoMeteo</li>
                    <li>шкаф управления «ССофт:Сигнал» v.Expanded 5.1</li>
                    <li>метеостанция беспроводная DAVIS Instruments Vantage Pro2 6163EU</li>
                    <li>солнечная батарея</li>
                    <li>обрыв провода в пролете</li>
                    <li>беспроводная станция измерения температуры и влажности почвы G345 OV</li>
                    <li class="ceo-hidden">Phasellus leo dolor tempus non</li>

                </ul>
            </div>
            <div class="flex-elem">
                <span>СЕРВЕР ПРИЕМА-ОБРАБОТКИ ДАННЫХ</span>
                <p></p>
            </div>
            <div class="flex-elem">
                <span>WЕВ-СЕРВИС «Монитор телеметрии Meteo.TeleSSoft.ru»</span>
                <p></p>
            </div>
        </div>
    </div>
</div>
<br>