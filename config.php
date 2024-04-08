<?php
class Config
{
    // Настроек от проекта в личном кабинете https://merchant.freekassa.ru/settings
    const MERCHANT_ID = '0ca81a4e75ad24ae6f0ea8bff57131cc';
    const SECRET_KEY_1 = 'jNb23rtg!';
    const SECRET_KEY_2 = 'jNb23rtg!';

    // Валюта платежа (RUB,USD,EUR,UAH,KZT)
    const CURRENCY = '';

    // Стоимость товара в руб.
    const ITEM_PRICE = 1;

    // Таблица начисления товара, например `users`
    const TABLE_ACCOUNT = 'accounts';
    // Название поля из таблицы начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = 'NickName';
    // Название поля из таблицы начисления товара которое будет увеличено на количество оплаченного товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'DonateMoney';

    // Параметры соединения с бд
    // Хост
    const DB_HOST = 'localhost';
    // Имя пользователя
    const DB_USER = 'user45085';
    // Пароль
    const DB_PASS = 'XESSAAI7EhSs';
    // Название базы
    const DB_NAME = 'user45085';
}
