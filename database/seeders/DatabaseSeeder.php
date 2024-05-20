<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->insertCategories();
        $this->insertProducts();
        $this->inserUsers();

        for ($i = 0; $i < 101; $i++) {
            $this->createOrders();
        }
    }

    public function createOrders()
    {
        $orderArr = [
            "order_date" => date("Y-m-d"),
            "status" => "active",
            "payment_status" => "not_paid",
            "user_id" => 1,
        ];
        $order = \App\Models\Order::create($orderArr);
        $orderProducts = [
            rand(2, 70), rand(3, 65), rand(4, 70), rand(5, 65), rand(6, 74), rand(7, 34), rand(11, 45), rand(23, 53), rand(31, 61), rand(9, 49),
        ];

        foreach ($orderProducts as $key => $id) {
            $orderItem = [
                "qty" => rand(2, 5),
                "order_id" => $order->id,
                "product_id" => $id,
            ];
            \App\Models\OrderItem::create($orderItem);
        }
    }


    public function inserUsers()
    {
        $timestamp = Carbon::now();
        $user = [
            'name' => 'Shaikh Al Amin',
            'email' => 'alamin.cse15@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => '9087563',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];

        \App\Models\User::insert($user);
        \App\Models\User::factory(10)->create();
    }



    public function insertCategories()
    {
        $timestamp = Carbon::now();
        $categories =  [
            [
                "name" => "Others", 'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                "name" => "Bread/Bun", 'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                "name" => "Coockies", 'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                "name" => "Cake", 'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                "name" => "Buiscuits", 'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                "name" => "Snacks", 'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                "name" => "Sweets", 'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
        ];

        \App\Models\Category::insert($categories);
    }


    public function insertProducts()
    {
        $timestamp = Carbon::now();

        $productDecode = json_decode($this->productsJson());

        foreach ($productDecode as $key => $product) {
            $preparedProduct = [
                "product_name" => $product->name,
                "descriptions" => $product->descriptions,
                "quantity" => rand(10, 100),
                "weight" => $product->weight,
                "price" => $product->price,
                "sku" => 'WFSW00' . $product->id,
                "category_id" => $product->category_id,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
            \App\Models\Product::create($preparedProduct);
        }
    }



    public function productsJson()
    {
        $productsJson = '[
            {
              "id": 76,
              "name": "Noodles",
              "descriptions": "Noodles 100gm 30",
              "quantity": "1234",
              "weight": "100",
              "price": "30",
              "sku": "WFSW00004",
              "category_id": 1,
              "user_id": null,
              "created_at": "2022-12-12T08:13:18.000000Z",
              "updated_at": "2022-12-12T08:13:18.000000Z",
              "storage_files": [
                {
                  "id": 89,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/q7gvryuzy4b6hutyw4ip",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670832791/bakery/products/q7gvryuzy4b6hutyw4ip.jpg",
                  "active": true,
                  "product_id": 76,
                  "category_id": null,
                  "created_at": "2022-12-12T08:13:11.000000Z",
                  "updated_at": "2022-12-12T08:13:18.000000Z"
                }
              ]
            },
            {
              "id": 75,
              "name": "Mixed Fried Plus",
              "descriptions": "Mixed Fried Plus 100gm 65",
              "quantity": "1234",
              "weight": "100",
              "price": "65",
              "sku": "WFSW00004",
              "category_id": 1,
              "user_id": null,
              "created_at": "2022-12-12T08:11:45.000000Z",
              "updated_at": "2022-12-12T08:11:45.000000Z",
              "storage_files": [
                {
                  "id": 88,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/b6w6eo1tqggfz1esjtlm",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670832700/bakery/products/b6w6eo1tqggfz1esjtlm.jpg",
                  "active": true,
                  "product_id": 75,
                  "category_id": null,
                  "created_at": "2022-12-12T08:11:41.000000Z",
                  "updated_at": "2022-12-12T08:11:45.000000Z"
                }
              ]
            },
            {
              "id": 74,
              "name": "Eclair",
              "descriptions": "Eclair 1piece 80",
              "quantity": "1234",
              "weight": "100",
              "price": "80",
              "sku": "WFSW00004",
              "category_id": 1,
              "user_id": null,
              "created_at": "2022-12-12T08:10:11.000000Z",
              "updated_at": "2022-12-12T08:10:11.000000Z",
              "storage_files": [
                {
                  "id": 87,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/szc3ubbhfvyq7y3jkdhx",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670832603/bakery/products/szc3ubbhfvyq7y3jkdhx.jpg",
                  "active": true,
                  "product_id": 74,
                  "category_id": null,
                  "created_at": "2022-12-12T08:10:03.000000Z",
                  "updated_at": "2022-12-12T08:10:11.000000Z"
                }
              ]
            },
            {
              "id": 73,
              "name": "Lachcha Shemai Premium",
              "descriptions": "Lachcha Shemai Premium 500gm 325",
              "quantity": "1234",
              "weight": "500",
              "price": "325",
              "sku": "WFSW00004",
              "category_id": 1,
              "user_id": null,
              "created_at": "2022-12-12T08:08:59.000000Z",
              "updated_at": "2022-12-12T08:08:59.000000Z",
              "storage_files": [
                {
                  "id": 86,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/wqwmiirjphdoecoatgkd",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670832533/bakery/products/wqwmiirjphdoecoatgkd.jpg",
                  "active": true,
                  "product_id": 73,
                  "category_id": null,
                  "created_at": "2022-12-12T08:08:53.000000Z",
                  "updated_at": "2022-12-12T08:08:59.000000Z"
                }
              ]
            },
            {
              "id": 72,
              "name": "Soan Papdi",
              "descriptions": "Soan Papdi 400gm 230",
              "quantity": "1234",
              "weight": "400",
              "price": "230",
              "sku": "WFSW00004",
              "category_id": 1,
              "user_id": null,
              "created_at": "2022-12-12T08:07:35.000000Z",
              "updated_at": "2022-12-12T08:07:35.000000Z",
              "storage_files": [
                {
                  "id": 85,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/ortpsxxaxynu80dccqdc",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670832447/bakery/products/ortpsxxaxynu80dccqdc.jpg",
                  "active": true,
                  "product_id": 72,
                  "category_id": null,
                  "created_at": "2022-12-12T08:07:28.000000Z",
                  "updated_at": "2022-12-12T08:07:35.000000Z"
                }
              ]
            },
            {
              "id": 71,
              "name": "Mixed Fried Flattened",
              "descriptions": "Mixed Fried Flattened 150gm 65",
              "quantity": "1234",
              "weight": "150",
              "price": "65",
              "sku": "WFSW00004",
              "category_id": 1,
              "user_id": null,
              "created_at": "2022-12-12T08:06:15.000000Z",
              "updated_at": "2022-12-12T08:06:15.000000Z",
              "storage_files": [
                {
                  "id": 84,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/za4nb0chltqxcc2mozez",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670832368/bakery/products/za4nb0chltqxcc2mozez.jpg",
                  "active": true,
                  "product_id": 71,
                  "category_id": null,
                  "created_at": "2022-12-12T08:06:09.000000Z",
                  "updated_at": "2022-12-12T08:06:15.000000Z"
                }
              ]
            },
            {
              "id": 70,
              "name": "Lachcha Semai",
              "descriptions": "Lachcha Semai 400gm 150",
              "quantity": "1234",
              "weight": "400",
              "price": "150",
              "sku": "WFSW00004",
              "category_id": 1,
              "user_id": null,
              "created_at": "2022-12-12T08:05:02.000000Z",
              "updated_at": "2022-12-12T08:05:02.000000Z",
              "storage_files": [
                {
                  "id": 83,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/umbyxzn1pgzdidthen7p",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670832294/bakery/products/umbyxzn1pgzdidthen7p.jpg",
                  "active": true,
                  "product_id": 70,
                  "category_id": null,
                  "created_at": "2022-12-12T08:04:54.000000Z",
                  "updated_at": "2022-12-12T08:05:02.000000Z"
                }
              ]
            },
            {
              "id": 69,
              "name": "Long Bun",
              "descriptions": "Long Bun 4pieces 60",
              "quantity": "1234",
              "weight": "100",
              "price": "60",
              "sku": "WFSW00004",
              "category_id": 2,
              "user_id": null,
              "created_at": "2022-12-12T08:00:54.000000Z",
              "updated_at": "2022-12-12T08:00:54.000000Z",
              "storage_files": [
                {
                  "id": 82,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/e4luknp7yeaaoywy14zb",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670832050/bakery/products/e4luknp7yeaaoywy14zb.jpg",
                  "active": true,
                  "product_id": 69,
                  "category_id": null,
                  "created_at": "2022-12-12T08:00:50.000000Z",
                  "updated_at": "2022-12-12T08:00:54.000000Z"
                }
              ]
            },
            {
              "id": 68,
              "name": "Lemon Bun",
              "descriptions": "Lemon Bun 4pieces 60",
              "quantity": "1234",
              "weight": "100",
              "price": "60",
              "sku": "WFSW00004",
              "category_id": 2,
              "user_id": null,
              "created_at": "2022-12-12T08:00:11.000000Z",
              "updated_at": "2022-12-12T08:00:11.000000Z",
              "storage_files": [
                {
                  "id": 81,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/vpjqxnhrtxspeppi0hhp",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670832002/bakery/products/vpjqxnhrtxspeppi0hhp.jpg",
                  "active": true,
                  "product_id": 68,
                  "category_id": null,
                  "created_at": "2022-12-12T08:00:03.000000Z",
                  "updated_at": "2022-12-12T08:00:11.000000Z"
                }
              ]
            },
            {
              "id": 67,
              "name": "Cream Bun",
              "descriptions": "Cream Bun 4pieces 60",
              "quantity": "1234",
              "weight": "100",
              "price": "60",
              "sku": "WFSW00004",
              "category_id": 2,
              "user_id": null,
              "created_at": "2022-12-12T07:59:28.000000Z",
              "updated_at": "2022-12-12T07:59:28.000000Z",
              "storage_files": [
                {
                  "id": 80,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/cnpjmcfj8fkbwsbivl8b",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670831957/bakery/products/cnpjmcfj8fkbwsbivl8b.jpg",
                  "active": true,
                  "product_id": 67,
                  "category_id": null,
                  "created_at": "2022-12-12T07:59:17.000000Z",
                  "updated_at": "2022-12-12T07:59:28.000000Z"
                }
              ]
            },
            {
              "id": 66,
              "name": "Burger Bun",
              "descriptions": "Burger Bun 4pieces 65",
              "quantity": "1234",
              "weight": "125",
              "price": "65",
              "sku": "WFSW00004",
              "category_id": 2,
              "user_id": null,
              "created_at": "2022-12-12T07:34:07.000000Z",
              "updated_at": "2022-12-12T07:34:07.000000Z",
              "storage_files": [
                {
                  "id": 79,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/uqukdtgg4sdfafcxrxlf",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670830500/bakery/products/uqukdtgg4sdfafcxrxlf.jpg",
                  "active": true,
                  "product_id": 66,
                  "category_id": null,
                  "created_at": "2022-12-12T07:35:01.000000Z",
                  "updated_at": "2022-12-12T07:35:01.000000Z"
                }
              ]
            },
            {
              "id": 65,
              "name": "Well Bread",
              "descriptions": "Well Bread 200gm 85",
              "quantity": "1234",
              "weight": "200",
              "price": "85",
              "sku": "WFSW00004",
              "category_id": 2,
              "user_id": null,
              "created_at": "2022-12-12T07:32:24.000000Z",
              "updated_at": "2022-12-12T07:32:24.000000Z",
              "storage_files": [
                {
                  "id": 78,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/jbkraz3tddwzhdadoyc5",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670830339/bakery/products/jbkraz3tddwzhdadoyc5.jpg",
                  "active": true,
                  "product_id": 65,
                  "category_id": null,
                  "created_at": "2022-12-12T07:32:20.000000Z",
                  "updated_at": "2022-12-12T07:34:07.000000Z"
                }
              ]
            },
            {
              "id": 64,
              "name": "Sandwich Bread",
              "descriptions": "Sandwich Bread 200gm 95",
              "quantity": "1234",
              "weight": "200",
              "price": "95",
              "sku": "WFSW00004",
              "category_id": 2,
              "user_id": null,
              "created_at": "2022-12-12T07:31:36.000000Z",
              "updated_at": "2022-12-12T07:31:36.000000Z",
              "storage_files": [
                {
                  "id": 77,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/hyvli7eykvtmgp5oznuy",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670830289/bakery/products/hyvli7eykvtmgp5oznuy.jpg",
                  "active": true,
                  "product_id": 64,
                  "category_id": null,
                  "created_at": "2022-12-12T07:31:29.000000Z",
                  "updated_at": "2022-12-12T07:31:36.000000Z"
                }
              ]
            },
            {
              "id": 63,
              "name": "Milk Bread",
              "descriptions": "Milk Bread 200gm 100",
              "quantity": "1234",
              "weight": "200",
              "price": "100",
              "sku": "WFSW00004",
              "category_id": 2,
              "user_id": null,
              "created_at": "2022-12-12T07:29:42.000000Z",
              "updated_at": "2022-12-12T07:29:42.000000Z",
              "storage_files": [
                {
                  "id": 76,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/cf5tl7gwzdr9m43wxjvt",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670830174/bakery/products/cf5tl7gwzdr9m43wxjvt.jpg",
                  "active": true,
                  "product_id": 63,
                  "category_id": null,
                  "created_at": "2022-12-12T07:29:35.000000Z",
                  "updated_at": "2022-12-12T07:29:42.000000Z"
                }
              ]
            },
            {
              "id": 62,
              "name": "Brown Bread",
              "descriptions": "Brown Bread 200gm 125",
              "quantity": "1234",
              "weight": "200",
              "price": "125",
              "sku": "WFSW00004",
              "category_id": 2,
              "user_id": null,
              "created_at": "2022-12-12T07:28:36.000000Z",
              "updated_at": "2022-12-12T07:28:36.000000Z",
              "storage_files": [
                {
                  "id": 75,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/w6ktmppyqzkamsczlqjw",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670830104/bakery/products/w6ktmppyqzkamsczlqjw.jpg",
                  "active": true,
                  "product_id": 62,
                  "category_id": null,
                  "created_at": "2022-12-12T07:28:25.000000Z",
                  "updated_at": "2022-12-12T07:28:36.000000Z"
                }
              ]
            },
            {
              "id": 61,
              "name": "Choco Cheese Bites",
              "descriptions": "Choco Cheese Bites Cookies 300gm 145",
              "quantity": "1234",
              "weight": "300",
              "price": "145",
              "sku": "WFSW00004",
              "category_id": 3,
              "user_id": null,
              "created_at": "2022-12-12T07:22:16.000000Z",
              "updated_at": "2022-12-12T07:22:16.000000Z",
              "storage_files": [
                {
                  "id": 74,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/qxavxelrtbddp29j08ga",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670829721/bakery/products/qxavxelrtbddp29j08ga.jpg",
                  "active": true,
                  "product_id": 61,
                  "category_id": null,
                  "created_at": "2022-12-12T07:22:01.000000Z",
                  "updated_at": "2022-12-12T07:22:17.000000Z"
                }
              ]
            },
            {
              "id": 60,
              "name": "Almond Choco Fill",
              "descriptions": "Almond Choco Fill Cookies 300gm 245",
              "quantity": "1234",
              "weight": "300",
              "price": "245",
              "sku": "WFSW00004",
              "category_id": 3,
              "user_id": null,
              "created_at": "2022-12-12T07:21:06.000000Z",
              "updated_at": "2022-12-12T07:21:06.000000Z",
              "storage_files": [
                {
                  "id": 73,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/a2lbb3ew8wfymwyjhlti",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670829658/bakery/products/a2lbb3ew8wfymwyjhlti.jpg",
                  "active": true,
                  "product_id": 60,
                  "category_id": null,
                  "created_at": "2022-12-12T07:20:58.000000Z",
                  "updated_at": "2022-12-12T07:21:06.000000Z"
                }
              ]
            },
            {
              "id": 59,
              "name": "Pistachio Cookies",
              "descriptions": "Pistachio Cookies 300gm 275",
              "quantity": "1234",
              "weight": "300",
              "price": "275",
              "sku": "WFSW00004",
              "category_id": 3,
              "user_id": null,
              "created_at": "2022-12-12T07:20:09.000000Z",
              "updated_at": "2022-12-12T07:20:09.000000Z",
              "storage_files": [
                {
                  "id": 72,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/b6olexktxxgvctyw2dfn",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670829596/bakery/products/b6olexktxxgvctyw2dfn.jpg",
                  "active": true,
                  "product_id": 59,
                  "category_id": null,
                  "created_at": "2022-12-12T07:19:57.000000Z",
                  "updated_at": "2022-12-12T07:20:09.000000Z"
                }
              ]
            },
            {
              "id": 58,
              "name": "Butter Salt Cookies",
              "descriptions": "Butter Salt Cookies 300gm 245",
              "quantity": "1234",
              "weight": "300",
              "price": "245",
              "sku": "WFSW00004",
              "category_id": 3,
              "user_id": null,
              "created_at": "2022-12-12T07:17:13.000000Z",
              "updated_at": "2022-12-12T07:17:13.000000Z",
              "storage_files": [
                {
                  "id": 71,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/drbkxlihyie7gsxa8u1j",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670829424/bakery/products/drbkxlihyie7gsxa8u1j.jpg",
                  "active": true,
                  "product_id": 58,
                  "category_id": null,
                  "created_at": "2022-12-12T07:17:05.000000Z",
                  "updated_at": "2022-12-12T07:17:13.000000Z"
                }
              ]
            },
            {
              "id": 57,
              "name": "Sugar Free Cookies",
              "descriptions": "Sugar Free Cookies 300gm 235",
              "quantity": "1234",
              "weight": "300",
              "price": "235",
              "sku": "WFSW00004",
              "category_id": 3,
              "user_id": null,
              "created_at": "2022-12-12T07:15:43.000000Z",
              "updated_at": "2022-12-12T07:15:43.000000Z",
              "storage_files": [
                {
                  "id": 70,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/oxmfu8dyt4lbhujaauog",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670829332/bakery/products/oxmfu8dyt4lbhujaauog.jpg",
                  "active": true,
                  "product_id": 57,
                  "category_id": null,
                  "created_at": "2022-12-12T07:15:33.000000Z",
                  "updated_at": "2022-12-12T07:15:43.000000Z"
                }
              ]
            },
            {
              "id": 56,
              "name": "Milk Salt Cookies",
              "descriptions": "Milk Salt Cookies 300gm 235",
              "quantity": "1234",
              "weight": "300",
              "price": "235",
              "sku": "WFSW00004",
              "category_id": 3,
              "user_id": null,
              "created_at": "2022-12-12T07:13:18.000000Z",
              "updated_at": "2022-12-12T07:13:18.000000Z",
              "storage_files": [
                {
                  "id": 69,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/rwsvghswcis4cmhdolsq",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670829183/bakery/products/rwsvghswcis4cmhdolsq.jpg",
                  "active": true,
                  "product_id": 56,
                  "category_id": null,
                  "created_at": "2022-12-12T07:13:04.000000Z",
                  "updated_at": "2022-12-12T07:13:18.000000Z"
                }
              ]
            },
            {
              "id": 55,
              "name": "Chocolate Chips",
              "descriptions": "Chocolate Chips Cookies 300gm 330",
              "quantity": "1234",
              "weight": "300",
              "price": "330",
              "sku": "WFSW00004",
              "category_id": 3,
              "user_id": null,
              "created_at": "2022-12-12T07:11:37.000000Z",
              "updated_at": "2022-12-12T07:11:37.000000Z",
              "storage_files": [
                {
                  "id": 68,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/l9ydjv70ypfsytxdynvh",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670829092/bakery/products/l9ydjv70ypfsytxdynvh.jpg",
                  "active": true,
                  "product_id": 55,
                  "category_id": null,
                  "created_at": "2022-12-12T07:11:32.000000Z",
                  "updated_at": "2022-12-12T07:11:37.000000Z"
                }
              ]
            },
            {
              "id": 54,
              "name": "Well Butter Cookies",
              "descriptions": "Well Butter Cookies 300gm 235",
              "quantity": "1234",
              "weight": "300",
              "price": "235",
              "sku": "WFSW00004",
              "category_id": 3,
              "user_id": null,
              "created_at": "2022-12-12T07:09:57.000000Z",
              "updated_at": "2022-12-12T07:09:57.000000Z",
              "storage_files": [
                {
                  "id": 67,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/bmyror9xxxx84fnlpoxt",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670828988/bakery/products/bmyror9xxxx84fnlpoxt.jpg",
                  "active": true,
                  "product_id": 54,
                  "category_id": null,
                  "created_at": "2022-12-12T07:09:48.000000Z",
                  "updated_at": "2022-12-12T07:09:57.000000Z"
                }
              ]
            },
            {
              "id": 53,
              "name": "Cappucino Cake",
              "descriptions": "Cappucino Cake 1000gm 1600",
              "quantity": "1234",
              "weight": "1000",
              "price": "1600",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:39:49.000000Z",
              "updated_at": "2022-12-12T06:39:49.000000Z",
              "storage_files": [
                {
                  "id": 66,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/ne3ro3fenypvbtxpqnsx",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670827181/bakery/products/ne3ro3fenypvbtxpqnsx.jpg",
                  "active": true,
                  "product_id": 53,
                  "category_id": null,
                  "created_at": "2022-12-12T06:39:41.000000Z",
                  "updated_at": "2022-12-12T06:39:49.000000Z"
                }
              ]
            },
            {
              "id": 52,
              "name": "Blueberry Cake",
              "descriptions": "Blueberry Cake 1000gm 2550",
              "quantity": "1234",
              "weight": "1000",
              "price": "2550",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:37:55.000000Z",
              "updated_at": "2022-12-12T06:37:55.000000Z",
              "storage_files": [
                {
                  "id": 65,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/s4vdgrev00tfvk5jitwn",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670827064/bakery/products/s4vdgrev00tfvk5jitwn.jpg",
                  "active": true,
                  "product_id": 52,
                  "category_id": null,
                  "created_at": "2022-12-12T06:37:44.000000Z",
                  "updated_at": "2022-12-12T06:37:55.000000Z"
                }
              ]
            },
            {
              "id": 51,
              "name": "Queen Victoria",
              "descriptions": "Queen Victoria 1000gm 1800",
              "quantity": "1234",
              "weight": "1000",
              "price": "1800",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:37:01.000000Z",
              "updated_at": "2022-12-12T06:37:01.000000Z",
              "storage_files": [
                {
                  "id": 64,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/kh1xgpvswcahcysyxjje",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670827013/bakery/products/kh1xgpvswcahcysyxjje.jpg",
                  "active": true,
                  "product_id": 51,
                  "category_id": null,
                  "created_at": "2022-12-12T06:36:54.000000Z",
                  "updated_at": "2022-12-12T06:37:01.000000Z"
                }
              ]
            },
            {
              "id": 50,
              "name": "Queen Of Heart",
              "descriptions": "Queen Of Heart 1000gm 1800",
              "quantity": "1234",
              "weight": "1000",
              "price": "1800",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:34:57.000000Z",
              "updated_at": "2022-12-12T06:34:57.000000Z",
              "storage_files": [
                {
                  "id": 63,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/r5hsfueojhdpf3zyavuq",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670826888/bakery/products/r5hsfueojhdpf3zyavuq.jpg",
                  "active": true,
                  "product_id": 50,
                  "category_id": null,
                  "created_at": "2022-12-12T06:34:48.000000Z",
                  "updated_at": "2022-12-12T06:34:57.000000Z"
                }
              ]
            },
            {
              "id": 49,
              "name": "OMG Chocolate Cake",
              "descriptions": "OMG Chocolate Cake 1000gm 2500",
              "quantity": "1234",
              "weight": "1000",
              "price": "2500",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:33:54.000000Z",
              "updated_at": "2022-12-12T06:33:54.000000Z",
              "storage_files": [
                {
                  "id": 62,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/jnu4s7xwnlrqworgkmoa",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670826826/bakery/products/jnu4s7xwnlrqworgkmoa.jpg",
                  "active": true,
                  "product_id": 49,
                  "category_id": null,
                  "created_at": "2022-12-12T06:33:47.000000Z",
                  "updated_at": "2022-12-12T06:33:54.000000Z"
                }
              ]
            },
            {
              "id": 48,
              "name": "Rosatte Cake",
              "descriptions": "Rosatte Cake 1000gm 1600",
              "quantity": "1234",
              "weight": "1000",
              "price": "1600",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:25:36.000000Z",
              "updated_at": "2022-12-12T06:25:36.000000Z",
              "storage_files": [
                {
                  "id": 61,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/sz1zkt340pvlcwklvhoo",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670826328/bakery/products/sz1zkt340pvlcwklvhoo.jpg",
                  "active": true,
                  "product_id": 48,
                  "category_id": null,
                  "created_at": "2022-12-12T06:25:28.000000Z",
                  "updated_at": "2022-12-12T06:25:36.000000Z"
                }
              ]
            },
            {
              "id": 47,
              "name": "Premium Chocolate Cake",
              "descriptions": "Premium Chocolate 1000gm 2250",
              "quantity": "1234",
              "weight": "1000",
              "price": "2250",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:22:06.000000Z",
              "updated_at": "2022-12-12T06:22:06.000000Z",
              "storage_files": [
                {
                  "id": 60,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/jz2opolauycpoy6e5s40",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670826117/bakery/products/jz2opolauycpoy6e5s40.jpg",
                  "active": true,
                  "product_id": 47,
                  "category_id": null,
                  "created_at": "2022-12-12T06:21:57.000000Z",
                  "updated_at": "2022-12-12T06:22:06.000000Z"
                }
              ]
            },
            {
              "id": 46,
              "name": "Vanilla Nut Rain",
              "descriptions": "Vanilla Nut Rain Cake 1000gm 2450",
              "quantity": "1234",
              "weight": "1000",
              "price": "2450",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:18:00.000000Z",
              "updated_at": "2022-12-12T06:18:00.000000Z",
              "storage_files": [
                {
                  "id": 59,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/eyqipezcginhdfs3dv2w",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825871/bakery/products/eyqipezcginhdfs3dv2w.jpg",
                  "active": true,
                  "product_id": 46,
                  "category_id": null,
                  "created_at": "2022-12-12T06:17:52.000000Z",
                  "updated_at": "2022-12-12T06:18:00.000000Z"
                }
              ]
            },
            {
              "id": 45,
              "name": "Vanilla Fresh Fruit",
              "descriptions": "Vanilla Fresh Fruit Cake 1000gm 2450",
              "quantity": "1234",
              "weight": "1000",
              "price": "2450",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:14:53.000000Z",
              "updated_at": "2022-12-12T06:14:53.000000Z",
              "storage_files": [
                {
                  "id": 58,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/w7tvjbovbgj5iaty4yn7",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825685/bakery/products/w7tvjbovbgj5iaty4yn7.jpg",
                  "active": true,
                  "product_id": 45,
                  "category_id": null,
                  "created_at": "2022-12-12T06:14:46.000000Z",
                  "updated_at": "2022-12-12T06:14:53.000000Z"
                }
              ]
            },
            {
              "id": 44,
              "name": "Mirror Chocolate Cake",
              "descriptions": "Mirror Chocolate Cake 1000gm 2250",
              "quantity": "1234",
              "weight": "1000",
              "price": "2250",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:13:31.000000Z",
              "updated_at": "2022-12-12T06:13:31.000000Z",
              "storage_files": [
                {
                  "id": 57,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/cywfrcrpv2zt7mcpaw0r",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825605/bakery/products/cywfrcrpv2zt7mcpaw0r.jpg",
                  "active": true,
                  "product_id": 44,
                  "category_id": null,
                  "created_at": "2022-12-12T06:13:26.000000Z",
                  "updated_at": "2022-12-12T06:13:31.000000Z"
                }
              ]
            },
            {
              "id": 43,
              "name": "Premium Black Forest",
              "descriptions": "Premium Black Forest Cake 1000gm 2600",
              "quantity": "1234",
              "weight": "1000",
              "price": "2600",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:11:57.000000Z",
              "updated_at": "2022-12-12T06:11:57.000000Z",
              "storage_files": [
                {
                  "id": 56,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/ipue4p17svyjxa8ilost",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825512/bakery/products/ipue4p17svyjxa8ilost.jpg",
                  "active": true,
                  "product_id": 43,
                  "category_id": null,
                  "created_at": "2022-12-12T06:11:52.000000Z",
                  "updated_at": "2022-12-12T06:11:57.000000Z"
                }
              ]
            },
            {
              "id": 42,
              "name": "Vanilla Anniversary Cake",
              "descriptions": "Vanilla Anniversary Cake 1000gm 2450",
              "quantity": "1234",
              "weight": "1000",
              "price": "2450",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:10:36.000000Z",
              "updated_at": "2022-12-12T06:10:36.000000Z",
              "storage_files": [
                {
                  "id": 55,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/sh8xc4kr3pc1dqvhng93",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825430/bakery/products/sh8xc4kr3pc1dqvhng93.jpg",
                  "active": true,
                  "product_id": 42,
                  "category_id": null,
                  "created_at": "2022-12-12T06:10:30.000000Z",
                  "updated_at": "2022-12-12T06:10:36.000000Z"
                }
              ]
            },
            {
              "id": 41,
              "name": "Ferrero Rocher Choco",
              "descriptions": "Ferrero Rocher Chocolate Cake 1000gm 2250",
              "quantity": "1234",
              "weight": "1000",
              "price": "2250",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:08:21.000000Z",
              "updated_at": "2022-12-12T06:08:21.000000Z",
              "storage_files": [
                {
                  "id": 54,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/gxbjhl01v4j5nphogpqp",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825296/bakery/products/gxbjhl01v4j5nphogpqp.jpg",
                  "active": true,
                  "product_id": 41,
                  "category_id": null,
                  "created_at": "2022-12-12T06:08:16.000000Z",
                  "updated_at": "2022-12-12T06:08:21.000000Z"
                }
              ]
            },
            {
              "id": 40,
              "name": "Red Velvet Cheese Cake",
              "descriptions": "Red Velvet Cheese Cake 1000gm 2400",
              "quantity": "1234",
              "weight": "1000",
              "price": "2400",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:07:05.000000Z",
              "updated_at": "2022-12-12T06:07:05.000000Z",
              "storage_files": [
                {
                  "id": 53,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/jvlbqalbvmzyqcbhcxzz",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825219/bakery/products/jvlbqalbvmzyqcbhcxzz.jpg",
                  "active": true,
                  "product_id": 40,
                  "category_id": null,
                  "created_at": "2022-12-12T06:07:00.000000Z",
                  "updated_at": "2022-12-12T06:07:05.000000Z"
                }
              ]
            },
            {
              "id": 39,
              "name": "Vanilla Lemon Cake",
              "descriptions": "Vanilla Lemon Cake 1000gm 1700",
              "quantity": "1234",
              "weight": "1000",
              "price": "1700",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:06:10.000000Z",
              "updated_at": "2022-12-12T06:06:10.000000Z",
              "storage_files": [
                {
                  "id": 52,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/mipwgm3if9sqir17hies",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825165/bakery/products/mipwgm3if9sqir17hies.jpg",
                  "active": true,
                  "product_id": 39,
                  "category_id": null,
                  "created_at": "2022-12-12T06:06:06.000000Z",
                  "updated_at": "2022-12-12T06:06:10.000000Z"
                }
              ]
            },
            {
              "id": 38,
              "name": "Black Forest Cake",
              "descriptions": "Black Forest Cake 1000gm 2000",
              "quantity": "1234",
              "weight": "1000",
              "price": "2000",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:05:17.000000Z",
              "updated_at": "2022-12-12T06:05:17.000000Z",
              "storage_files": [
                {
                  "id": 51,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/wquxcudcclggtasl0id1",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825111/bakery/products/wquxcudcclggtasl0id1.jpg",
                  "active": true,
                  "product_id": 38,
                  "category_id": null,
                  "created_at": "2022-12-12T06:05:11.000000Z",
                  "updated_at": "2022-12-12T06:05:17.000000Z"
                }
              ]
            },
            {
              "id": 37,
              "name": "White Forest Cake",
              "descriptions": "White Forest Cake 1000gm 2000",
              "quantity": "1234",
              "weight": "1000",
              "price": "2000",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:04:24.000000Z",
              "updated_at": "2022-12-12T06:04:24.000000Z",
              "storage_files": [
                {
                  "id": 50,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/d3yvt5dplgal6tyrjdc0",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670825054/bakery/products/d3yvt5dplgal6tyrjdc0.jpg",
                  "active": true,
                  "product_id": 37,
                  "category_id": null,
                  "created_at": "2022-12-12T06:04:15.000000Z",
                  "updated_at": "2022-12-12T06:04:24.000000Z"
                }
              ]
            },
            {
              "id": 36,
              "name": "Caramel Mousse Cake",
              "descriptions": "Caramel Mousse Cake 1000gm 1800",
              "quantity": "1234",
              "weight": "1000",
              "price": "1800",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:03:16.000000Z",
              "updated_at": "2022-12-12T06:03:16.000000Z",
              "storage_files": [
                {
                  "id": 49,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/dqhydspgdlv0ufxfubjk",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670824982/bakery/products/dqhydspgdlv0ufxfubjk.jpg",
                  "active": true,
                  "product_id": 36,
                  "category_id": null,
                  "created_at": "2022-12-12T06:03:03.000000Z",
                  "updated_at": "2022-12-12T06:03:16.000000Z"
                }
              ]
            },
            {
              "id": 35,
              "name": "Regular Chocolate",
              "descriptions": "Regular Chocolate Cake 1 1000gm 1800",
              "quantity": "1234",
              "weight": "1000",
              "price": "1800",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:02:10.000000Z",
              "updated_at": "2022-12-12T06:02:10.000000Z",
              "storage_files": [
                {
                  "id": 48,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/bzu2s7nkh3vvrzjijcgr",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670824923/bakery/products/bzu2s7nkh3vvrzjijcgr.jpg",
                  "active": true,
                  "product_id": 35,
                  "category_id": null,
                  "created_at": "2022-12-12T06:02:04.000000Z",
                  "updated_at": "2022-12-12T06:02:10.000000Z"
                }
              ]
            },
            {
              "id": 34,
              "name": "Regular Vanilla Cake 1",
              "descriptions": "Regular Vanilla Cake 1 1000gm 1600",
              "quantity": "1234",
              "weight": "1000",
              "price": "1600",
              "sku": "WFSW00004",
              "category_id": 4,
              "user_id": null,
              "created_at": "2022-12-12T06:01:07.000000Z",
              "updated_at": "2022-12-12T06:01:07.000000Z",
              "storage_files": [
                {
                  "id": 47,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/wnz48zwkn4nvkq0vwu1d",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670824859/bakery/products/wnz48zwkn4nvkq0vwu1d.jpg",
                  "active": true,
                  "product_id": 34,
                  "category_id": null,
                  "created_at": "2022-12-12T06:01:00.000000Z",
                  "updated_at": "2022-12-12T06:01:07.000000Z"
                }
              ]
            },
            {
              "id": 33,
              "name": "Well Choco Nimki",
              "descriptions": "Well Choco Nimki 300gm 245",
              "quantity": "1234",
              "weight": "300",
              "price": "245",
              "sku": "WFSW00004",
              "category_id": 5,
              "user_id": null,
              "created_at": "2022-12-11T20:14:54.000000Z",
              "updated_at": "2022-12-11T20:14:54.000000Z",
              "storage_files": [
                {
                  "id": 46,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/ak6xflftbxqcm5uhqhww",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670789669/bakery/products/ak6xflftbxqcm5uhqhww.jpg",
                  "active": true,
                  "product_id": 33,
                  "category_id": null,
                  "created_at": "2022-12-11T20:14:29.000000Z",
                  "updated_at": "2022-12-11T20:14:54.000000Z"
                }
              ]
            },
            {
              "id": 32,
              "name": "Well Choco Bite Premium",
              "descriptions": "Well Choco Bite Premium 300gm 245",
              "quantity": "1234",
              "weight": "300",
              "price": "245",
              "sku": "WFSW00004",
              "category_id": 5,
              "user_id": null,
              "created_at": "2022-12-11T20:14:08.000000Z",
              "updated_at": "2022-12-11T20:14:08.000000Z",
              "storage_files": [
                {
                  "id": 45,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/usuicvzfi65nqidkq6tj",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670789642/bakery/products/usuicvzfi65nqidkq6tj.jpg",
                  "active": true,
                  "product_id": 32,
                  "category_id": null,
                  "created_at": "2022-12-11T20:14:02.000000Z",
                  "updated_at": "2022-12-11T20:14:08.000000Z"
                }
              ]
            },
            {
              "id": 31,
              "name": "Well Oval Plus",
              "descriptions": "Well Oval Plus 300gm 245",
              "quantity": "1234",
              "weight": "300",
              "price": "245",
              "sku": "WFSW00004",
              "category_id": 5,
              "user_id": null,
              "created_at": "2022-12-11T20:13:29.000000Z",
              "updated_at": "2022-12-11T20:13:29.000000Z",
              "storage_files": [
                {
                  "id": 44,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/l1feoqmhkzxguhahjc1f",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670789605/bakery/products/l1feoqmhkzxguhahjc1f.jpg",
                  "active": true,
                  "product_id": 31,
                  "category_id": null,
                  "created_at": "2022-12-11T20:13:26.000000Z",
                  "updated_at": "2022-12-11T20:13:29.000000Z"
                }
              ]
            },
            {
              "id": 30,
              "name": "Well Horli Plus",
              "descriptions": "Well Horli Plus 300gm 245",
              "quantity": "1234",
              "weight": "300",
              "price": "245",
              "sku": "WFSW00004",
              "category_id": 5,
              "user_id": null,
              "created_at": "2022-12-11T20:12:47.000000Z",
              "updated_at": "2022-12-11T20:12:47.000000Z",
              "storage_files": [
                {
                  "id": 43,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/rhyjlgurspxwqmkaokmp",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670789561/bakery/products/rhyjlgurspxwqmkaokmp.jpg",
                  "active": true,
                  "product_id": 30,
                  "category_id": null,
                  "created_at": "2022-12-11T20:12:41.000000Z",
                  "updated_at": "2022-12-11T20:12:47.000000Z"
                }
              ]
            },
            {
              "id": 29,
              "name": "Well Crispy Butter Biscuits",
              "descriptions": "Well Crispy Butter Biscuits 300gm 245",
              "quantity": "1234",
              "weight": "300",
              "price": "245",
              "sku": "WFSW00004",
              "category_id": 5,
              "user_id": null,
              "created_at": "2022-12-11T20:11:50.000000Z",
              "updated_at": "2022-12-11T20:11:50.000000Z",
              "storage_files": [
                {
                  "id": 42,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/yplmqhqr2smksou1qczr",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670789502/bakery/products/yplmqhqr2smksou1qczr.jpg",
                  "active": true,
                  "product_id": 29,
                  "category_id": null,
                  "created_at": "2022-12-11T20:11:42.000000Z",
                  "updated_at": "2022-12-11T20:11:50.000000Z"
                }
              ]
            },
            {
              "id": 28,
              "name": "Well Sugar Free Biscuits",
              "descriptions": "Well Sugar Free Biscuits 300gm 210",
              "quantity": "1234",
              "weight": "300",
              "price": "210",
              "sku": "WFSW00004",
              "category_id": 5,
              "user_id": null,
              "created_at": "2022-12-11T20:10:44.000000Z",
              "updated_at": "2022-12-11T20:10:44.000000Z",
              "storage_files": [
                {
                  "id": 41,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/dnkelbkrqaribhzgebx6",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670789438/bakery/products/dnkelbkrqaribhzgebx6.jpg",
                  "active": true,
                  "product_id": 28,
                  "category_id": null,
                  "created_at": "2022-12-11T20:10:38.000000Z",
                  "updated_at": "2022-12-11T20:10:44.000000Z"
                }
              ]
            },
            {
              "id": 27,
              "name": "Well Dry Cake Premium",
              "descriptions": "Well Chocolate Dry Cake 300gm 245",
              "quantity": "1234",
              "weight": "300",
              "price": "245",
              "sku": "WFSW00004",
              "category_id": 5,
              "user_id": null,
              "created_at": "2022-12-11T20:09:14.000000Z",
              "updated_at": "2022-12-11T20:09:14.000000Z",
              "storage_files": [
                {
                  "id": 40,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/mjb40fi4bcnr5ouxr0xr",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670789347/bakery/products/mjb40fi4bcnr5ouxr0xr.jpg",
                  "active": true,
                  "product_id": 27,
                  "category_id": null,
                  "created_at": "2022-12-11T20:09:08.000000Z",
                  "updated_at": "2022-12-11T20:09:14.000000Z"
                }
              ]
            },
            {
              "id": 26,
              "name": "Well Chocolate Dry Cake",
              "descriptions": "Well Chocolate Dry Cake 300gm 245",
              "quantity": "1234",
              "weight": "300",
              "price": "245",
              "sku": "WFSW00004",
              "category_id": 5,
              "user_id": null,
              "created_at": "2022-12-11T20:08:21.000000Z",
              "updated_at": "2022-12-11T20:08:21.000000Z",
              "storage_files": [
                {
                  "id": 39,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/wqpthck5vhlrbmi6ickr",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670789293/bakery/products/wqpthck5vhlrbmi6ickr.jpg",
                  "active": true,
                  "product_id": 26,
                  "category_id": null,
                  "created_at": "2022-12-11T20:08:14.000000Z",
                  "updated_at": "2022-12-11T20:08:21.000000Z"
                }
              ]
            },
            {
              "id": 25,
              "name": "Well Bela Biscuit",
              "descriptions": "Well Bela Biscuitl 400gm 110",
              "quantity": "1234",
              "weight": "400",
              "price": "110",
              "sku": "WFSW00004",
              "category_id": 5,
              "user_id": null,
              "created_at": "2022-12-11T19:58:31.000000Z",
              "updated_at": "2022-12-11T19:58:31.000000Z",
              "storage_files": [
                {
                  "id": 38,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/yqn7h6hjwoa73hakxifh",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670788693/bakery/products/yqn7h6hjwoa73hakxifh.jpg",
                  "active": true,
                  "product_id": 25,
                  "category_id": null,
                  "created_at": "2022-12-11T19:58:13.000000Z",
                  "updated_at": "2022-12-11T19:58:31.000000Z"
                }
              ]
            },
            {
              "id": 24,
              "name": "Chicken Pizza Roll",
              "descriptions": "Chicken Pizza Roll 1 piece 55",
              "quantity": "1234",
              "weight": "1",
              "price": "55",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:50:13.000000Z",
              "updated_at": "2022-12-11T19:50:13.000000Z",
              "storage_files": [
                {
                  "id": 37,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/iraxuntisgj9ceunfqnb",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670788202/bakery/products/iraxuntisgj9ceunfqnb.jpg",
                  "active": true,
                  "product_id": 24,
                  "category_id": null,
                  "created_at": "2022-12-11T19:50:03.000000Z",
                  "updated_at": "2022-12-11T19:50:13.000000Z"
                }
              ]
            },
            {
              "id": 23,
              "name": "Beef Kolija Singara",
              "descriptions": "Beef Kolija Singara 1 piece 30",
              "quantity": "1234",
              "weight": "1",
              "price": "30",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:48:20.000000Z",
              "updated_at": "2022-12-11T19:48:20.000000Z",
              "storage_files": [
                {
                  "id": 36,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/b8zlrufpgp7kxodryaci",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670788089/bakery/products/b8zlrufpgp7kxodryaci.jpg",
                  "active": true,
                  "product_id": 23,
                  "category_id": null,
                  "created_at": "2022-12-11T19:48:10.000000Z",
                  "updated_at": "2022-12-11T19:48:20.000000Z"
                }
              ]
            },
            {
              "id": 22,
              "name": "Chicken Cheese Puff",
              "descriptions": "Chicken Cheese Puff 1 piece 60",
              "quantity": "1234",
              "weight": "1",
              "price": "60",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:47:20.000000Z",
              "updated_at": "2022-12-11T19:47:20.000000Z",
              "storage_files": [
                {
                  "id": 35,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/zulyw507vygisaz95kyf",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670788033/bakery/products/zulyw507vygisaz95kyf.jpg",
                  "active": true,
                  "product_id": 22,
                  "category_id": null,
                  "created_at": "2022-12-11T19:47:14.000000Z",
                  "updated_at": "2022-12-11T19:47:20.000000Z"
                }
              ]
            },
            {
              "id": 21,
              "name": "Chicken Cutlet Sandwich",
              "descriptions": "Chicken Cutlet Sandwich 1 piece 125",
              "quantity": "1234",
              "weight": "1",
              "price": "125",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:46:20.000000Z",
              "updated_at": "2022-12-11T19:46:20.000000Z",
              "storage_files": [
                {
                  "id": 34,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/xp5ljflcnppwurqiytq8",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670787973/bakery/products/xp5ljflcnppwurqiytq8.jpg",
                  "active": true,
                  "product_id": 21,
                  "category_id": null,
                  "created_at": "2022-12-11T19:46:13.000000Z",
                  "updated_at": "2022-12-11T19:46:20.000000Z"
                }
              ]
            },
            {
              "id": 20,
              "name": "Chicken Shwarma",
              "descriptions": "Chicken Shwarma 1 piece 140",
              "quantity": "1234",
              "weight": "1",
              "price": "140",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:44:43.000000Z",
              "updated_at": "2022-12-11T19:44:43.000000Z",
              "storage_files": [
                {
                  "id": 33,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/hliokmfknehesuqweyr6",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670787832/bakery/products/hliokmfknehesuqweyr6.jpg",
                  "active": true,
                  "product_id": 20,
                  "category_id": null,
                  "created_at": "2022-12-11T19:43:53.000000Z",
                  "updated_at": "2022-12-11T19:44:43.000000Z"
                }
              ]
            },
            {
              "id": 19,
              "name": "Vegetable Singara",
              "descriptions": "Vegetable Singara 1 piece 25",
              "quantity": "1234",
              "weight": "1",
              "price": "25",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:42:06.000000Z",
              "updated_at": "2022-12-11T19:42:06.000000Z",
              "storage_files": [
                {
                  "id": 32,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/jly18zks3fxhkdm1x1c2",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670787684/bakery/products/jly18zks3fxhkdm1x1c2.jpg",
                  "active": true,
                  "product_id": 19,
                  "category_id": null,
                  "created_at": "2022-12-11T19:41:25.000000Z",
                  "updated_at": "2022-12-11T19:42:06.000000Z"
                }
              ]
            },
            {
              "id": 18,
              "name": "Chicken Pettis",
              "descriptions": "Chicken Pettis 1 piece 70",
              "quantity": "1234",
              "weight": "1",
              "price": "70",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:40:09.000000Z",
              "updated_at": "2022-12-11T19:40:09.000000Z",
              "storage_files": [
                {
                  "id": 31,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/qrx17ld0aej2m3ichitu",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670787570/bakery/products/qrx17ld0aej2m3ichitu.jpg",
                  "active": true,
                  "product_id": 18,
                  "category_id": null,
                  "created_at": "2022-12-11T19:39:30.000000Z",
                  "updated_at": "2022-12-11T19:40:09.000000Z"
                }
              ]
            },
            {
              "id": 17,
              "name": "Chicken Kima Porata",
              "descriptions": "Chicken Kima Porata 1 piece 105",
              "quantity": "1234",
              "weight": "1",
              "price": "105",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:38:15.000000Z",
              "updated_at": "2022-12-11T19:38:15.000000Z",
              "storage_files": [
                {
                  "id": 30,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/ojkoguyxpiwg85f7d0hq",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670787482/bakery/products/ojkoguyxpiwg85f7d0hq.jpg",
                  "active": true,
                  "product_id": 17,
                  "category_id": null,
                  "created_at": "2022-12-11T19:38:03.000000Z",
                  "updated_at": "2022-12-11T19:38:15.000000Z"
                }
              ]
            },
            {
              "id": 16,
              "name": "Chicken Burger",
              "descriptions": "Chicken Burger 1 piece 115",
              "quantity": "1234",
              "weight": "1",
              "price": "115",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:36:50.000000Z",
              "updated_at": "2022-12-11T19:36:50.000000Z",
              "storage_files": [
                {
                  "id": 29,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/uw6is3kspdllqpzg37jn",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670787367/bakery/products/uw6is3kspdllqpzg37jn.jpg",
                  "active": true,
                  "product_id": 16,
                  "category_id": null,
                  "created_at": "2022-12-11T19:36:07.000000Z",
                  "updated_at": "2022-12-11T19:36:50.000000Z"
                }
              ]
            },
            {
              "id": 15,
              "name": "Chicken Bread Roll",
              "descriptions": "Chicken Bread Roll 3pieces 95",
              "quantity": "1234",
              "weight": "3",
              "price": "95",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:33:45.000000Z",
              "updated_at": "2022-12-11T19:33:45.000000Z",
              "storage_files": [
                {
                  "id": 28,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/eegeqbmgenubdgq0c5jv",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670787107/bakery/products/eegeqbmgenubdgq0c5jv.jpg",
                  "active": true,
                  "product_id": 15,
                  "category_id": null,
                  "created_at": "2022-12-11T19:31:48.000000Z",
                  "updated_at": "2022-12-11T19:33:45.000000Z"
                }
              ]
            },
            {
              "id": 14,
              "name": "Chicken Samusa Dry",
              "descriptions": "Chicken Samusa Dry 1 piece 25",
              "quantity": "1234",
              "weight": "1",
              "price": "25",
              "sku": "WFSW00004",
              "category_id": 6,
              "user_id": null,
              "created_at": "2022-12-11T19:30:26.000000Z",
              "updated_at": "2022-12-11T19:30:26.000000Z",
              "storage_files": [
                {
                  "id": 27,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/p2zasg1jv2y5d8o4qzbr",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670786945/bakery/products/p2zasg1jv2y5d8o4qzbr.jpg",
                  "active": true,
                  "product_id": 14,
                  "category_id": null,
                  "created_at": "2022-12-11T19:29:05.000000Z",
                  "updated_at": "2022-12-11T19:30:26.000000Z"
                }
              ]
            },
            {
              "id": 13,
              "name": "Lalmohon",
              "descriptions": "Lalmohon wieight 1000 price 450",
              "quantity": "500",
              "weight": "1000",
              "price": "450",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:22:14.000000Z",
              "updated_at": "2022-12-11T19:22:14.000000Z",
              "storage_files": [
                {
                  "id": 26,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/owqj2mncuhjv1zlrqf4m",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670786493/bakery/products/owqj2mncuhjv1zlrqf4m.jpg",
                  "active": true,
                  "product_id": 13,
                  "category_id": null,
                  "created_at": "2022-12-11T19:21:33.000000Z",
                  "updated_at": "2022-12-11T19:22:14.000000Z"
                }
              ]
            },
            {
              "id": 12,
              "name": "Irani Bhogh",
              "descriptions": "Irani Bhogh wieight 1000 price 820",
              "quantity": "500",
              "weight": "1000",
              "price": "820",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:21:07.000000Z",
              "updated_at": "2022-12-11T19:21:07.000000Z",
              "storage_files": [
                {
                  "id": 25,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/kjgcd6tk1wndrbpvoe9p",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670786418/bakery/products/kjgcd6tk1wndrbpvoe9p.jpg",
                  "active": true,
                  "product_id": 12,
                  "category_id": null,
                  "created_at": "2022-12-11T19:20:18.000000Z",
                  "updated_at": "2022-12-11T19:21:07.000000Z"
                }
              ]
            },
            {
              "id": 11,
              "name": "Mawa Laddu",
              "descriptions": "Mawa Laddu wieight 1000 price 530",
              "quantity": "500",
              "weight": "1000",
              "price": "530",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:19:32.000000Z",
              "updated_at": "2022-12-11T19:19:32.000000Z",
              "storage_files": [
                {
                  "id": 24,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/lnroebejmzckdqn8cmvw",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670786326/bakery/products/lnroebejmzckdqn8cmvw.jpg",
                  "active": true,
                  "product_id": 11,
                  "category_id": null,
                  "created_at": "2022-12-11T19:18:46.000000Z",
                  "updated_at": "2022-12-11T19:19:32.000000Z"
                }
              ]
            },
            {
              "id": 10,
              "name": "Kalo Jam",
              "descriptions": "Kalo Jam wieight 1000 price 450",
              "quantity": "500",
              "weight": "1000",
              "price": "450",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:18:19.000000Z",
              "updated_at": "2022-12-11T19:18:19.000000Z",
              "storage_files": [
                {
                  "id": 23,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/uarihh9fatjoltksytli",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670786241/bakery/products/uarihh9fatjoltksytli.jpg",
                  "active": true,
                  "product_id": 10,
                  "category_id": null,
                  "created_at": "2022-12-11T19:17:22.000000Z",
                  "updated_at": "2022-12-11T19:18:19.000000Z"
                }
              ]
            },
            {
              "id": 9,
              "name": "Baby Sweets",
              "descriptions": "Baby Sweets wieight 1000 price 600",
              "quantity": "500",
              "weight": "1000",
              "price": "600",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:16:32.000000Z",
              "updated_at": "2022-12-11T19:16:32.000000Z",
              "storage_files": [
                {
                  "id": 22,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/rjrefqzsyzsi7fchu9zz",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670786156/bakery/products/rjrefqzsyzsi7fchu9zz.jpg",
                  "active": true,
                  "product_id": 9,
                  "category_id": null,
                  "created_at": "2022-12-11T19:15:57.000000Z",
                  "updated_at": "2022-12-11T19:16:32.000000Z"
                }
              ]
            },
            {
              "id": 8,
              "name": "Chamcham",
              "descriptions": "Chamcham wieight 1000 price 500",
              "quantity": "500",
              "weight": "1000",
              "price": "500",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:15:19.000000Z",
              "updated_at": "2022-12-11T19:15:19.000000Z",
              "storage_files": [
                {
                  "id": 21,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/rjxcfvnoxwveemrh1fph",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670786088/bakery/products/rjxcfvnoxwveemrh1fph.jpg",
                  "active": true,
                  "product_id": 8,
                  "category_id": null,
                  "created_at": "2022-12-11T19:14:48.000000Z",
                  "updated_at": "2022-12-11T19:15:19.000000Z"
                }
              ]
            },
            {
              "id": 7,
              "name": "Well Baklava",
              "descriptions": "Well Baklava wieight 1000 price 1000",
              "quantity": "500",
              "weight": "1000",
              "price": "1000",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:14:04.000000Z",
              "updated_at": "2022-12-11T19:14:04.000000Z",
              "storage_files": [
                {
                  "id": 20,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/bzxpzsa1tpig4tccbgip",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670786030/bakery/products/bzxpzsa1tpig4tccbgip.jpg",
                  "active": true,
                  "product_id": 7,
                  "category_id": null,
                  "created_at": "2022-12-11T19:13:51.000000Z",
                  "updated_at": "2022-12-11T19:14:04.000000Z"
                }
              ]
            },
            {
              "id": 6,
              "name": "Mihidana Laddu",
              "descriptions": "Mihidana Laddu wieight 1000 price 510",
              "quantity": "500",
              "weight": "1000",
              "price": "510",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:12:27.000000Z",
              "updated_at": "2022-12-11T19:12:27.000000Z",
              "storage_files": [
                {
                  "id": 19,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/hz9i3v8tgnsymgjkxp4y",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670785895/bakery/products/hz9i3v8tgnsymgjkxp4y.jpg",
                  "active": true,
                  "product_id": 6,
                  "category_id": null,
                  "created_at": "2022-12-11T19:11:36.000000Z",
                  "updated_at": "2022-12-11T19:12:27.000000Z"
                }
              ]
            },
            {
              "id": 5,
              "name": "Kacha Golla",
              "descriptions": "Kacha Golla wieight 1000 price 880",
              "quantity": "500",
              "weight": "1000",
              "price": "880",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:10:48.000000Z",
              "updated_at": "2022-12-11T19:10:48.000000Z",
              "storage_files": [
                {
                  "id": 18,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/l3chkugefabsnqpy6jg7",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670785799/bakery/products/l3chkugefabsnqpy6jg7.jpg",
                  "active": true,
                  "product_id": 5,
                  "category_id": null,
                  "created_at": "2022-12-11T19:09:59.000000Z",
                  "updated_at": "2022-12-11T19:10:48.000000Z"
                }
              ]
            },
            {
              "id": 4,
              "name": "Mawar Balushai",
              "descriptions": "Balushai wieight 1000 price 460",
              "quantity": "500",
              "weight": "1000",
              "price": "460",
              "sku": "WFSW00004",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-11T19:08:33.000000Z",
              "updated_at": "2022-12-11T19:08:33.000000Z",
              "storage_files": [
                {
                  "id": 17,
                  "type": "products",
                  "size": "lg",
                  "public_id": "bakery/products/a64bnvh0mc8wdutlp6mf",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670785647/bakery/products/a64bnvh0mc8wdutlp6mf.jpg",
                  "active": true,
                  "product_id": 4,
                  "category_id": null,
                  "created_at": "2022-12-11T19:07:28.000000Z",
                  "updated_at": "2022-12-11T19:08:33.000000Z"
                }
              ]
            },
            {
              "id": 3,
              "name": "Motichur Laddu",
              "descriptions": "Test description of motichur laddu",
              "quantity": "20",
              "weight": "500",
              "price": "450",
              "sku": "WFSW00001",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-09T12:06:48.000000Z",
              "updated_at": "2022-12-09T12:06:48.000000Z",
              "storage_files": [
                {
                  "id": 15,
                  "type": "product",
                  "size": "lg",
                  "public_id": "bakery/product/h74qgqizginimnn1p71y",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670587578/bakery/product/h74qgqizginimnn1p71y.jpg",
                  "active": true,
                  "product_id": 3,
                  "category_id": null,
                  "created_at": "2022-12-09T12:06:19.000000Z",
                  "updated_at": "2022-12-09T12:06:48.000000Z"
                }
              ]
            },
            {
              "id": 2,
              "name": "Rosh Golla",
              "descriptions": "Test description of rosh golla",
              "quantity": "20",
              "weight": "500",
              "price": "450",
              "sku": "WFSW00001",
              "category_id": 7,
              "user_id": null,
              "created_at": "2022-12-09T11:59:54.000000Z",
              "updated_at": "2022-12-09T11:59:54.000000Z",
              "storage_files": [
                {
                  "id": 14,
                  "type": "product",
                  "size": "lg",
                  "public_id": "bakery/product/rzaerblvstvdlze2zmoe",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670586651/bakery/product/rzaerblvstvdlze2zmoe.jpg",
                  "active": true,
                  "product_id": 2,
                  "category_id": null,
                  "created_at": "2022-12-09T11:50:51.000000Z",
                  "updated_at": "2022-12-09T11:59:54.000000Z"
                }
              ]
            }
          ]';

        return $productsJson;
    }
}
