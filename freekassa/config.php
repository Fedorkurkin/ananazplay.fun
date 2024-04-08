<?php
class Config
{
    // Настроек от проекта в личном кабинете https://merchant.freekassa.ru/settings
    const MERCHANT_ID = '';
    const SECRET_KEY_1 = '';
    const SECRET_KEY_2 = '';

    // Валюта платежа (RUB,USD,EUR,UAH,KZT)
    const CURRENCY = '';

    // Стоимость товара в руб.
    const ITEM_PRICE = 1;

    // Таблица начисления товара, например `users`
    const TABLE_ACCOUNT = '';
    // Название поля из таблицы начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = '';
    // Название поля из таблицы начисления товара которое будет увеличено на количество оплаченного товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= '';

    // Параметры соединения с бд
    // Хост
    const DB_HOST = '';
    // Имя пользователя
    const DB_USER = '';
    // Пароль
    const DB_PASS = '';
    // Название базы
    const DB_NAME = '';
}
