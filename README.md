Лабораторная работа №6: Изучение нереляционных баз данных (Redis, Elasticsearch, ClickHouse) и взаимодействие с ними через API с помощью GuzzleClien
👩‍💻 Автор
ФИО: Косинский Максим Сергеевич

Группа: ПМ-ИП1

📌 Описание задания
Закрепить навыки работы с HTTP-запросами и API-интерфейсами для взаимодействия с современными нереляционными СУБД

Результат доступен по адресу http://localhost:8080.

⚙️ Как запустить проект
Клонировать репозиторий:

git clone https://github.com/Ch1stum/nginx-lab-6.git
cd nginx-lab-6
Запустить контейнеры:

docker-compose up -d --build
Открыть в браузере: http://localhost:8080 📂 Содержимое проекта

docker-compose.yml — описание сервисов (Nginx, PHP, Redis, Elasticsearch, ClickHouse)

Dockerfile — сборка PHP-образа с расширениями

nginx/default.conf — файл для обработки PHP

nginx/default.conf — Описание сервисов (Nginx, PHP, Redis, Elasticsearch, ClickHouse)

vendor/ — зависимости Composer (Guzzle)

✅ Веб-сервер успешно запущен в Docker. Данные, введённые в форму, сохраняются в базу данных ClickHouse и выводятся на главную страницу сайта.
