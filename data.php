<?php
    // Массив с товарами
    $goods = [
        [
            'id' => 1,
            'category' => 'tv',
            'name' => 'телевизор BBK',
            'desc' => 'BBK 32LEM-1058/T2C HD READY (720p)',
            'img' => 'img/product/tv1.jpg',
            'price' => '9 230 р.'
        ],
        [
            'id' => 2,
            'category' => 'tv',
            'name' => 'телевизор SAMSUNG',
            'desc' => 'UE50NU7002UXRU Ultra HD 4K (2160p)',
            'img' => 'img/product/tv2.jpg',
            'price' => '31 190 р.'
        ],
        [
            'id' => 3,
            'category' => 'tv',
            'name' => 'телевизор LG',
            'desc' => '49UK6200PLA Ultra HD 4K',
            'img' => 'img/product/tv3.jpg',
            'price' => '27 470 р.'
        ],
        [
            'id' => 4,
            'category' => 'tv',
            'name' => 'телевизор LG',
            'desc' => '32LJ500V FULL HD (1080p)',
            'img' => 'img/product/tv4.jpg',
            'price' => '15 980 р.'
        ],
        [
            'id' => 5,
            'category' => 'tv',
            'name' => 'телевизор BBK',
            'desc' => 'BBK 32LEM-1037/TS2C HD READY (720p)',
            'img' => 'img/product/tv5.jpg',
            'price' => '11 810 р.'
        ],
        //-----------------------------------

        [
            'id' => 6,
            'category' => 'smart clock',
            'name' => 'Смарт-часы DIGMA',
            'desc' => 'Smartline T4r, 1.3"',
            'img' => 'img/product/smart1.jpg',
            'price' => '1 990 р.'
        ],
        [
            'id' => 7,
            'category' => 'smart clock',
            'name' => 'Смарт-часы SMARTERRA',
            'desc' => 'SmartLife Vega, 1.08"',
            'img' => 'img/product/smart2.jpg',
            'price' => '2 190 р.'
        ],
        [
            'id' => 8,
            'category' => 'smart clock',
            'name' => 'Смарт-часы HUAWEI',
            'desc' => 'Watch GT Classic FTN-B19, 1.4"',
            'img' => 'img/product/smart3.jpg',
            'price' => '9 990 р.'
        ],
        [
            'id' => 9,
            'category' => 'smart clock',
            'name' => 'Смарт-часы SMARTERRA',
            'desc' => 'SmartLife R, 1.54"',
            'img' => 'img/product/smart4.jpg',
            'price' => '1 290 р.'
        ],
        [
            'id' => 10,
            'category' => 'smart clock',
            'name' => 'Смарт-часы SMARTERRA',
            'desc' => 'SmartLife R, 1.54"',
            'img' => 'img/product/smart4.jpg',
            'price' => '10 990 р.'
        ],
        //-----------------------------------

        [
            'id' => 11,
            'category' => 'auto',
            'name' => 'Автомагнитола PIONEER',
            'desc' => 'MVH-A210BT, USB',
            'img' => 'img/product/avto1.jpg',
            'price' => '9 550 р.'
        ],
        [
            'id' => 12,
            'category' => 'auto',
            'name' => 'Автомагнитола PIONEER',
            'desc' => 'AVH-3100DVD, USB',
            'img' => 'img/product/avto2.jpg',
            'price' => '12 540 р.'
        ],
        [
            'id' => 13,
            'category' => 'auto',
            'name' => 'Усилитель автомобильный',
            'desc' => 'SWAT M-1.500',
            'img' => 'img/product/avto3.jpg',
            'price' => '3 099 р.'
        ],
        [
            'id' => 14,
            'category' => 'auto',
            'name' => 'Сабвуфер автомобильный',
            'desc' => 'ALPINE SBG-1244BP, 800Вт',
            'img' => 'img/product/avto4.jpg',
            'price' => '8 150 р.'
        ],
        [
            'id' => 15,
            'category' => 'auto',
            'name' => 'Видеорегистратор Silverstone',
            'desc' => 'F1 HYBRID S-BOT GPS',
            'img' => 'img/product/avto5.jpg',
            'price' => '12 990 р.'
        ],
        //-----------------------------------

        [
            'id' => 16,
            'category' => 'consoles',
            'name' => 'PLAYSTATION 4',
            'desc' => '1 ТБ, CUH-2208B',
            'img' => 'img/product/game1.jpg',
            'price' => '25 990 р.'
        ],
        [
            'id' => 17,
            'category' => 'consoles',
            'name' => 'RETRO GENESIS',
            'desc' => 'Modern Wireless 170 игр',
            'img' => 'img/product/game2.jpg',
            'price' => '2 240 р.'
        ],
        [
            'id' => 18,
            'category' => 'consoles',
            'name' => 'MICROSOFT Xbox One S',
            'desc' => '1 ТБ, с играми: Gears 5, Gears of War, Gears of War',
            'img' => 'img/product/game3.jpg',
            'price' => '20 990 р.'
        ],
        [
            'id' => 19,
            'category' => 'consoles',
            'name' => 'NINTENDO Switch',
            'desc' => 'консоль NINTENDO Switch',
            'img' => 'img/product/game4.jpg',
            'price' => '22 990 р.'
        ],
        [
            'id' => 20,
            'category' => 'consoles',
            'name' => 'RETRO GENESIS',
            'desc' => '300 игр, два джойстика',
            'img' => 'img/product/game5.jpg',
            'price' => '2 090 р.'
        ],
        //-----------------------------------

        [
            'id' => 21,
            'category' => 'play',
            'name' => 'Red Dead Redemption 2',
            'desc' => 'Red Dead Redemption 2, русская версия',
            'img' => 'img/product/play1.jpg',
            'price' => '2 990 р.'
        ],
        [
            'id' => 22,
            'category' => 'play',
            'name' => 'Death Stranding',
            'desc' => 'Death Stranding, русская версия',
            'img' => 'img/product/play2.jpg',
            'price' => '4 490 р.'
        ],
        [
            'id' => 23,
            'category' => 'play',
            'name' => 'God of War',
            'desc' => 'God of War, русская версия',
            'img' => 'img/product/play3.jpg',
            'price' => '1 340 р.'
        ],
        [
            'id' => 24,
            'category' => 'play',
            'name' => 'Grand Theft Auto V',
            'desc' => 'Grand Theft Auto V Premium Edit, RUS',
            'img' => 'img/product/play4.jpg',
            'price' => '2 090 р.'
        ],
        [
            'id' => 25,
            'category' => 'play',
            'name' => 'Bloodborne',
            'desc' => 'Bloodborne, RUS',
            'img' => 'img/product/play5.jpg',
            'price' => '1 340 р.'
        ],
    ];
    // _____________________________________________
?>