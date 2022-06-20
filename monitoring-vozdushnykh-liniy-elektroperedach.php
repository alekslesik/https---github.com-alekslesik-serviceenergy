<style>
    .ceo-container {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        margin: 20px;
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


<h3 style="text-align:center;">ПЕРЕДАЧА ДАННЫХ</h3>
<div style="background-color: #f6f6f6; padding: 20px 20px 20px 20px; border-radius:5px;">
    <div class="ceo-container">
        <div>
            Организована по сети GSM (GPRS). Отображение информации
            возможно как на пульте диспетчера, так и на любом устройстве имеющем
            возможность выхода в интернет (смартфон, планшет, ноутбук, стационарный
            компьютер и т.д.). Данное решение позволяет иметь полное представление
            о состоянии линии без выезда на объект обслуживающего персонала и проводить
            анализ в режиме онлайн, что значительно снижает стоимость обслуживания ВЛ
            и позволяет оперативно реагировать на внештатные ситуации.</div>
    </div>
    <div class="ceo-container">
        <div>
            <img width="100%" src="/local/templates/aspro-allcorp3_energy/components/aspro/monitorVL.png" style="border-radius:5px;">
        </div>
    </div>
    <div class="ceo-container">
        <p>
        <ul>
            <li>1 - МДД ВЛ</li>
            <li>2 - Сервер сбора данных
            </li>
            <li>3 - Пульт диспетчера
            </li>
            <li>4 - Устройство имеющее возможность выхода в интернет
            </li>
        </ul>
        </p>
    </div>
</div>