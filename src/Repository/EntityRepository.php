<?php declare(strict_types=1);

namespace App\Repository;

class EntityRepository
{
    /** @var array */
    private $entities = [];

    /**
     * EntityRepository constructor.
     */
    public function __construct()
    {
        $entitiesRawData = '{
    "list": [
        {
            "id": 1,
            "logo": "https://cdn4.telesco.pe/file/lATD_qtZF5MAsg3lUOJa39M7m2HWh5wk1XJziZI8ZYlWN7pxCYiVaa8fh9wNh-Z2qQhYR58UmcCujPDzzsBNjcA9d_eFcdQ35QtIkuXhNRTCjCv__6SzfNDcxv6vYuzKD8qSQg7OXVTvyGO_eqvXSK6DIMkPk0zzmD1PumnbC9AII0hgbr0XwUwuJwrI9q3tyeKk5ncA_k2f7qGoJ9t7gx_4-Uz3flbqhc-42F_4pInx2K9WLEXawFAnrt81NaVADDaLymoQqAkwqirdDq1dOsosf61RGYeL_arFAYZzXE84stTt2iPkGYBbaxJcsighxrJ_aOT51DZmYofcqBd-Gg.jpg",
            "title": "Equalizerguru",
            "language": "русский",
            "about": "Этот бот предназначен для прослушивания музыки в ознакомительных целях. Создатель: @igorkpl.",
            "type": "бот",
            "link": "https://t.me/equalizerguru_bot",
            "platform": "telegram",
            "release_notes": [
                {
                    "timestamp": 1111,
                    "info": "Обновление функционала"
                }
            ]
        },
        {
            "id": 4,
            "logo": "https://cdn4.telesco.pe/file/SJ9csg7y2SF2xoQutWhBL_nYJoMl_LEKF8N46Ln73lJ_LPohLbtWnhdLuJCY7ct5EQyAT26J_zyljSoZspsa9LPy5KmW-yAdixCqcCtyDNE21DJ3PgnMmRHRHhpQwMkn4EO0htf6wVY8eSr0H0fKI5-uRxrz25ANt_Ux73H0TqmvWXMyGx5Q_3Ev5bYtxe3su9mNeeIZj44rT0l4NVX7nkexRS_7qcDFtiCtUi8DmbP3fO0St06Pl__-5OSlMZeEoqDruMctWXhh4jv_Z81-QPZEO9qCedgEKWx9hmHBHYAybKmJx4pU33-HPSe6ZNRvBp9hHovgxdODmwn7URCvjw.jpg",
            "title": "Deezer",
            "language": "русский",
            "about": "Этот бот предназначен для прослушивания музыки в ознакомительных целях. Создатель: @igorkpl.",
            "type": "бот",
            "link": "https://t.me/deezer_music_bot",
            "platform": "telegram",
            "release_notes": [
                {
                    "timestamp": 1111,
                    "info": "Обновление функционала"
                }
            ]
        },
        {
            "id": 2,
            "logo": "http://via.placeholder.com/100x100",
            "title": "ZaycevNet",
            "language": "русский",
            "about": "Этот бот предназначен для прослушивания музыки в ознакомительных целях. Создатель: @igorkpl.",
            "type": "бот",
            "link": "https://t.me/zaycev_net_music_bot",
            "platform": "telegram"
        },
        {
            "id": 3,
            "logo": "http://via.placeholder.com/100x100",
            "title": "mp3db",
            "language": "русский",
            "about": "База данных музыки",
            "type": "канал",
            "link": "https://t.me/mp3db",
            "platform": "telegram"
        },
        {
            "id": 5,
            "logo": "https://cdn4.telesco.pe/file/BneJ9crtgayKfhNRl0iPH4sfnGItaDmOBUdmEUXTVz4cCsPpEzAoX2kgjHMaMzfxZMPBKtXjgZWLap_WZ9xbZ9fzU1rmrXvp2WbUlXqQ2J3-tYb99d6Wn7Zcj7DAnGx2clkb0zLN4kxpNiNYyX7BEG3Dyk_FNpycr9Y1hQGMo4tdLAR2OIOZ56bbeVchHwDMCJq_epx3pFShFiFdvaW0wRBBB-DXw47pJWVbFCshD2mEcr2azUDD832iuCkToiDJ-hYR5Jw5rNcH1_Qro9tfCPM9qt08xXi6fV7ZNV28bcvOGptufwQhgAGATu5LIgKbLYKRj-_maD1MBeVEhofLig.jpg",
            "title": "botonarioum_adv",
            "language": "русский",
            "about": "Канал обеспечивающий связь с пользователями. Реклама в ботах.",
            "type": "канал",
            "link": "https://t.me/botonarioum_adv",
            "platform": "telegram"
        }
    ]
}';
        $this->entities = json_decode($entitiesRawData, true);
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->entities['list'];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getById(int $id): ?array
    {
        foreach ($this->getAll() as $entity) {
            if ($id === $entity['id']) {
                return $entity;
            }
        }

        return null;
    }
}