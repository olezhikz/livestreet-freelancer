<?php

return [
    
    'errors' => [
        'is_master' =>'Не доступно заказчику',
        'is_employer' => 'Не доступно мастеру',
        
        'no_price' => 'Не верное значение цены',
        'no_region' => 'Не выбрано местоположение',
        'no_contact' => 'Не запонены контакты',
        
        
        'no_page' => 'Такой страницы не существует',
        
        'one_spec' => 'Выберете хотябы одну специализацию',
        'create_order' => 'Вы не можете создавать заявки.',        
        'specialization' => 'Вы не можете выбрать специализацию',
        'no_order' => 'Такой заявки нет',
        'no_order_search' => 'Вам нельзя просматривать заявки',
        'no_orders_top' => 'Ваша заявка не в топе',
        
        'no_create_response' => 'Вы не можете создавать отклики на заявки.',
        'master_already_check' => 'Исполнитель заказа уже выбран',
        'no_response' => 'Отклик не найден',
        'no_create_response_more' => 'Вы не можете создать больше 1го отклика на заявку.',
        
        
        'view_order' => 'Вам нельзя просматривать заявки',
        'no_view_clients' => 'Вам нельзя просматривать профили заказчиков',
        'no_view_clients_contacts' => 'Вам нельзя просматривать контакты заказчика',
        'no_view_contacts_ankets' => 'Вам нельзя просматривать контакты мастеров',
        'done_bids' => 'Вы исчерпали возможность отвечать на заявки заказчиков. В день %%count%%',
        'error_read_role' => 'Ошибка чтения роли',
        
        'add_portfolio' => 'Вы не можете добавлять записи в портфолио. Максимально %%count%%',
        'notif_email_orders' => 'Отключены оповещения на email о заявках',
        'notif_sms_orders' => 'Отключены оповещения по sms о заявках',
        'notif_email_bids' => 'Отключены оповещения на email об ответах на заявки',
        'notif_sms_bids' => 'Отключены оповещения на sms об ответах на заявки',
        'ads_direct' => 'Ваше обьявление не отображается в yandex',
        'top_anketa' => 'Ваша анкета больше не отображается в топе',
        'lux_masters' => 'Ваша анкета больше не отображается в боке Лучшие мастера',
        'auth_error' => 'Вы должны быть авторизованы',
        'order_error' => 'Ошибка создания заказа',
        'top_freelancer' => 'Вам ограничена выдача в топе',
        'unknown' => 'Неизвестная ошибка',
        
        'noallow_edit' => 'Нет доступа к редактированию',
        'no_auth' => 'Нет доступа к редактированию. Авторизируйтесь'
        
    ],
    'text' => [
        
        'order_search' => 'Поиск заказов',
        'master_search' => 'Поиск мастеров',
        'form' => [
            'title' => 'Название',
            'edit' => 'Редактировать',
            'order' => [
                'title' => 'Название заказа',
                'header' => 'Редактирование заказа',
                'budjet' => 'Бюджет',
                'status' => 'Статус',
                'master' => 'Исполнитель',
                'create_resp' => 'Откликнуться'
                ],
            'response' =>[
                'header' => 'Редактирование отклика',
                'text' => 'Текст',
                'price' => 'Цена'
            ]
        ],
        'order' => [
            'choose_master_accept_bid' => 'Выбрать исполнителя и принять условия',
            'accept_bid' => 'Принять предложение',
            'choose' => 'Выбрать',
            'accept' => 'Принять',
            'no_master' => 'Исполнитель не выбран',
            'title_search' => 'Поиск заказов',
            'choose_master' => "Выбрать исполнителя",
            'order' => 'Упорядочить',
            'geo'=>'Местоположение',
            'status' => [
                'new' => 'На модерации',
                'publish' => 'Опубликовано'
            ]
        ],
        'response' => [
            'response_declension' => '%%count%% откликов;%%count%% отклика;%%count%% откликов',
            'response' => 'Отклик',
            'response_add' => 'Оставить отклик',
            'response_no' => 'Откликов нет'
        ],
        
        'freelancer_search' => 'Поиск мастеров',
        'title_order' => 'Название',
        'about_master' => 'Описание услуг',
        'save' => 'Сохранить',
        'price' => 'Цены',
        'about_order' => 'Описание заказа',
        'specialization_set' => 'Выбрать специализацию',
        'budjet' => 'Бюджет',
        'contacts' => 'Контакты',
        'specialization' => 'Специализация',
        'activation' => 'Проверте свой почтовый ящик <b>%%email%%</b>. '
        . 'Вам отправлено сообщение для завершения регистрации.<br> '
        . 'Не забудте проверить в папке Спам.',
        'sms_form' => 'Подтвердите Ваш номер телефона <b>%%number%%</b>.<br>'
        . 'Введите код полученный в смс ',
        
        'sms' => [
            'valid' => 'Profimaster. Код: %%kod%%'
        ],
        'media' => [
            'add' => 'Добавить',
            'image' => 'Изображения'
        ]
    ],
    'admin' => [
       'title'=> 'Фрилансер',
       'menu'=> [
          'orders' => 'Заказы',
          'masters' => 'Мастера',
          'bids' => 'Отклики'
       ]
    ],   

    'user_role'=>[
        'employer' => 'Заказчик',
        'master' => 'Мастер',
        'manager' => 'Партнер'
    ],
    'menu' => [
       'orders' => 'Заказы',
       'masters' => 'Мастера',
       'create_order' => 'Создать заказ',
    ],
    'bid_is_deleted' =>'Отклик удален',
    'saved' => 'Успешно сохранено',
    'str_user_role'=>[
        'employer' => 'Размещено',
        'master' => 'Выполнено'
    ],
    'notify' => [
        'email'=>[
            'subject'=>[
                'registration_activate' => 'Регистрация',
                'order' => 'Вас выбрали испонителем',
                'order_start' => 'Ваш заказ принят к исполнению',
                'bid' => 'Новый отклик',
                'response' => 'Новый отзыв',
                'specialization_leave1' => 'Дополнительные специализации истекли'
            ]
        ],
        'panel' =>[
            'order' => 'Вас выбрали испонителем',
            'order_start' => 'Ваш заказ принят к исполнению',
            'bid' => 'Новый отклик',
            'response' => 'Новый отзыв',
            'specialization_leave1' => 'Дополнительные специализации истекли'
            ]
        ],
    'field_category' => [
        'placeholder' => 'Выберите специализацию'
    ],
    'search_form' => [
        'breadcrubs_first' => 'Все специальности',
        'count' => 'Найдено'
    ],
    'user' => [
        'validators' =>[
            'no_geo' => 'Не заполнено поле "Местоположение"',
            'no_location' => 'Не заполнено поле "Локация"'
        ]
    ],
    'register' => [
        'validation' => [
            'no_specialization' => 'Выберете хотябы одну специализацию',
            'no_captcha' => 'Вы робот?',
            'undefined_user' => 'Неизвестный пользователь'
        ],
        'form' => [
            'im_master' => 'Я мастер',
            'im_employer' => 'Я заказчик'
         
        ]
    ]
    
];
