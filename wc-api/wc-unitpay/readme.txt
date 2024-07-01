# Unitpay Gateway for WooCommerce

Author URI: https://unitpay.ru/
Contributors: unitpay
Tags: woocommerce, payment, payments, unitpay, wordpress
Requires at least: 4.9.7
Tested up to: 6.1.1
Stable tag: 3.0.3
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

[Unitpay](https://help.unitpay.ru/modules/cms-modules/woocommerce-wordpress) — сервис онлайн-платежей для бизнеса. С его помощью вы сможете:

- принимать оплату не только банковскими картами, но и через Apple Pay, Google Pay, YandexPay, Qiwi, PayPal и другие платёжные системы,
- работать по 54-ФЗ благодаря собственному решению Unitpay «Юнит.Чеки» или с помощью партнерских онлайн-касс,
- принимать платежи в рублях, долларах, евро, тенге, валютах СНГ и другой валюте.

## Совместимость:
WordPress 4.9.7 и выше;
WooCommerce 3.4.4 и выше.

## Установка:
1. Скопируйте папку wc-unitpay в директорию wp-content/plugins/ на вашем сервере или установите плагин напрямую через раздел плагинов WordPress.
2. Зайдите в “Управление сайтом” -> “Плагины” -> "Установленные" и нажмите "Активировать" напротив плагина UnitPay.
4. Выберите в меню "WooCommerce" -> "Настройки" и перейдите на вкладку "Платежи", там выберите UnitPay.
5. В поле DOMAIN вставьте значение unitpay.ru . В поля PUBLIC KEY и SECRET KEY скопируйте публичный и секретный ключ, которые вы можете взять из личного кабинета Unitpay. Нажмите на кнопку "Сохранить изменения".
6. НДС ставится внутри настроек модуля.
7. Введите в личном кабинете Unitpay.ru обработчик платежей по шаблону  https://<имя_вашего_сайта>/wc-api/wc_unitpay

> [Здесь можно ознакомиться с официальной подробной документацией
Unitpay по модулю Wordpress.](https://help.unitpay.ru/modules/cms-modules/woocommerce-wordpress)

## FAQ

= Какую комиссию берёт сервис? = 

Тарифы зависят от оборотов магазина. Вы можете посмотреть тарифы и комиссии [на сайте Unitpay.](https://unitpay.ru/ru/tariffs)

= Когда я получу деньги на свой банковский счёт? =

Выплаты происходят на ваш расчётный счет автоматически на следующий день после оплаты покупателем.

= Как я могу связаться с поддержкой Unitpay? =

[Cпециалисты Unitpay](https://help.unitpay.ru/support) на связи ежедневно с 9:00 до 21:00.