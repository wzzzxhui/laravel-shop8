<?php

return [
    'alipay' => [
        'app_id'         => '2016092600602575',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApXaYVF1AcOd9fq3WXcgCoZvnSI4aBWOtl4wFS24GjnA9u3sPmLiRbeONLUh5QBZu4QGVb7FsfIBVEpn6vpu6flgKO5T3LCRJINdyruYEzdoJtVPUC05JJ9wrgh7cX7mB7w7le0iSPlk3Dz5Xl+M9TcTTD0N5Oe5VPD4vimjwPnwMQnvKzUkC8q/8Sys5SkLfz1Ebdf4Id11OD1dMZjqz2KlOOk8F0bu6AJtcKN701K1rAN3Htxm8ZbCedhnjSddVoO/yWor9mL7jcsX1CuWx4EIA37d39DQIPC3AT6r2aECwU5Y6y0qCXbjp4stviwCzeLN6EXxyffCFlGUgFlsTbwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAmg53lqlytXNYIxau2ihDVqJYgh9nOao/8eQ8p6JLZ7PLoL8aB48VNQnq0h/9gNYdC0nUoIuGZ7uXT6zIMi3b+AJHTh7xYvNtyf/u2Mkw2b9xhMx05m7dbCr1UeXncetwAZ6LgEuMFCs1+IU1Itqd7JdRSs1IaRF2kcTNFgzdAtReoLS428mscn2aIEouM/w/LN1cyIvRxfVE1rDgP9PKj8Gc+h/k5RMkPJGcMdWcfmUBd3bJWTJ/P5aDRhD/DNkwScmZbxLphBFv89h/LsRWuLMjzVVa+RueSeSnQ46SFlVYXL1JOfCME5zLsp2q0bKs9mncjXVXvj8SJLJiOHs3pQIDAQABAoIBAGSciCukNJ8eWnRoDv+5Belhk24/9hlp/+MJTTepvZdXi+hKhkRjhNUjyfE7JUNsEoHZ0PycwsWidPp6/DARVTSOwGTbvogCNTSUaje4haff6NJy+PG5e/B1ycuX22TB/19/XNoH/M77PX819/LwVe07EcNJeD3uQsKGhe4droV2iyesxlt/mR7RbFHc9u2UmC8F7Ou3A/5p8mfr9syX3yqARfL6QbhgD80btcAp20Zfs/d31Wkxua0CVNkf9CT2raUT9wxJLtE9REoUCGSDPrBm9Z1ZU0PY+rpRhdf+i6jve1bWEetbj1065yzGzxz3QRvvtyclbzJrGwQjWs8jAI0CgYEA0WXU3Vr/oM8PXOOwz+fRGu9nwJ2OZ1yHHNblDCkdirnd0djfSuuO/1b0MS2c0jdBe/BAiVItHas+UHxhV/0vfuTj0FyBzckq+OoercUfCoFhunalI+bS1qvg7AdWcTVrIXFhfwl1vzYCJG9nz3Rdy3dFnzakhase0tL+Aqtyz5sCgYEAvFejZ9NdksGphIrhAYzeo0nSY+e87zcTP+H+7WE3Hv2dNoa4vbPQHaoott1Mej+bzQUieJpm9W+AH6Ce4Tj50auDe/MoiG9vctM/WEROs366sqjxFUz7Zd8HQ+nvGbXTYfzklKGlgekwI2dTJC/IY4OfXIaYgwdJlKISQo0fqb8CgYBB5VnnjwuC/6ZGBSFPTBRx9YUhCHQX8vZSDQ5nlUjGr1cvAqDCYv7NO//8ue3v+ZOR/TlR/ZpVC97AVWQM3JBlzoIiv/nZWMU9L/AXn0D1fWHT3CJ7+de/1rchj+2UEstz6spTwBZd5hEmhiiVEHmz3gT65adAqWk5z0xAatPmoQKBgDRP90AQUi5AAjChTmvaz7/08i3zoOOknYEh6WfPl7rQ4IjTlJ6EQirrJ1HbV7Gg10pzwaZT5IMJTEH8oASYibL1+5hC6qAyq3buO+rtVhq++WZETGoJLs6VyvPPFy1B9ouB7Y9m8oyJ02gR++LSLsuNNIdDjzrdnE9fUMkRX5kLAoGAWNlQsN50VW7+Y4VWwUuskoty6fDkBekDLq/1YLWriu8w1qGzqCbXikAiSB5c+iUUoj0mpVLgVU4aqoRNd0NpBTEYC+QPz82sfiv0N9e6zanrH5+MiYLj62AGPPd6sphjxP6ljNFDenX/co/vGi0DZUs5yxhcBWM1ZCLmtlnDo04=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];