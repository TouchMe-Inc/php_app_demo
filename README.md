# Demo for [hidden]
I created this repository as a solution to a test task for the vacancy "php programmer". Unfinished (and will not be completed unless needed)

## Specification
> Написать формы регистрации, авторизации, страницу профиля:
> - В форме регистрации пользователь должен указать Имя, телефон, почту, пароль и повтор пароля.
> - Почта, логин  и телефон должны быть уникальны и если такие в базе уже есть - уведомлять пользователя об этом.
> - Пароли в обоих полях должны совпадать, иначе уведомлять пользователя об этом.
> - Авторизация возможна по телефону или email (в одном поле) и паролю, необходимо добавить Yandex SmartCaptcha при авторизации.
> - Сделать страницу, к которой только авторизованные пользователи имеют доступ. Неавторизованные пользователи должны перенаправляться на главную страницу. На этой странице пользователи могут менять свою личную информацию (имя, телефон, почта, пароль).
>
> Нам важно знать именно ваши навыки обращения с кодом, по этому переписанные готовые решения не принимаются. Всё должно быть выполнено с использованием нативного php, без использования сторонних языков и фреймворков.

## Install

1. Run `composer install`;
2. Run query(s) from `src\db\schema.sql`;
3. Write your database connection details to `src\config\database.php`;
4. Configure your web server to process requests from the `src\public` folder.
