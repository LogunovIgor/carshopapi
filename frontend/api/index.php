<?
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

$cars = [
        [
            "brand" => "Honda",
            "model" => "CR-V",
            "year" => "2019",
            "engine" => "2.0",
            "transmission" => "Auto",
            "photos" => [
                "https://avatars.mds.yandex.net/get-autoru-vos/2173187/a6b4dc28c6131a7b30f76d5e4ab1f9ac/1200x900n",
                "https://yastatic.net/naydex/autoru/lV14ou257/6f7147Uxpf/D3j5jEJaNw27d5KAwxwR6HozKbih7QbNslvbZnJha8F81rhO3slQNORVlTiE57oDhXpAHUzEms4589Jj_koGDR0p648JS38B6DyJwMBdRL8yLT_k5fIP95k3-1FZQUv9FumZXISPDiunF_hSi-ytNIsdHngS0sycVKzbH4odfk0aT8uESUhPFbBU9arbCjrZY1kxureMFPy1Jv5GVGFs2BbYhXWlnStOsiDmSfHJvS21JSV-BdPhomy07T2ZLXRxFHs"
            ]
        ],
        [
            "brand" => "MINI Countryman",
            "model" => "Cooper S",
            "year" => "2013",
            "engine" => "1.6",
            "transmission" => "Auto",
            "photos" => [
                "https://avatars.mds.yandex.net/get-autoru-vos/1545460/e65216f5d366c4e3c543a0ada2305b8a/1200x900n",
                "https://yastatic.net/naydex/autoru/lV14ou257/6f7147Uxpf/D3j5jEJaNw27d5KAwxwR6HozKbih7QbNslvbZnJha8F81rhO3slQMudRljqEu-sE1XhDGRCQmpk89IYw-khWDEB979VWTH1VvDePnJNdRL8yLT_k5fIP95k3-1FZQUv9FumZXISPDiunF_hSi-ytNIsdHngS0sycVKzbH4odfk0aT8uESUhPFbBU9arbCjrZY1kxureMFPy1Jv5GVGFs2BbYhXWlnStOsiDmSfHJvS21JSV-BdPhomy07T2ZLXRxFHs",
                "https://avatars.mds.yandex.net/get-autoru-vos/2049300/6f6e5538f9c5140832549752f359354f/1200x900n",
            ]
        ],
        [
            "brand" => "Toyota",
            "model" => "Land Cruiser",
            "year" => "2018",
            "engine" => "4.5",
            "transmission" => "Auto",
            "photos" => [
                "https://avatars.mds.yandex.net/get-autoru-vos/2113863/1e9bbd558926b34563ffe59a94e223df/1200x900n",
                "https://avatars.mds.yandex.net/get-autoru-vos/2174525/59b56a3c0a8d88d9b489081f7966a071/1200x900n",
                "https://avatars.mds.yandex.net/get-autoru-vos/2168982/b6a100b35c03fe68b7d1962443e2b1cd/1200x900n",
            ]
        ],
        [
            "brand" => "BMW",
            "model" => "3 320d",
            "year" => "2012",
            "engine" => "2.0",
            "transmission" => "Auto",
            "photos" => [
                "https://avatars.mds.yandex.net/get-autoru-vos/2164685/23cfdeb0f5d6036a5c4dc50e6b6d55fc/1200x900n"
            ]
        ],
        [
            "brand" => "Mercedes-Benz",
            "model" => "S 500 Long",
            "year" => "2014",
            "engine" => "4.7",
            "transmission" => "Auto",
            "photos" => [
                "https://avatars.mds.yandex.net/get-autoru-vos/2172754/0ae16810966fc0da9c725741109799c5/1200x900n",
                "https://avatars.mds.yandex.net/get-autoru-vos/2057171/a4fa7649ccb6c4813b385035e0161596/1200x900n",
                "https://avatars.mds.yandex.net/get-autoru-vos/2172695/50a8c555fd34c134ca66fdda1242e790/1200x900n",
            ]
        ]
    ];

echo json_encode($cars);

?>