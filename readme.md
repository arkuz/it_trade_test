# Тестовое задание

Написать php скрипт, получающий произвольный набор переменных через HTTP запрос и выводящий их в виде:

```bash
имя переменной1 : значение1
имя переменной2 : значение2
имя переменной3 : значение3
```

# Установка

Скопировать скрипт `get_params.php` на хостинг.

# Запуск

Отправить запрос методами GET, POST с произвольным количеством параметров или без них.
```bash
http://test/get_params.php?bye=пока&page=5
```
![Скриншот с примером в Postman](https://cdn1.savepice.ru/uploads/2019/3/19/d3c7bded9fbe26890f54244409ebaf5a-full.png)

# Дополнительно
Для проверки скрипта доступен демонстрационный хостинг - [http://k928312d.beget.tech/it_trade_test/get_params.php](http://k928312d.beget.tech/it_trade_test/get_params.php). При отправке запроса не из браузера обязательно указать заголовок `User-Agent`.
