<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }

    public function productsJson(){
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
            }
          ]';

          return $productsJson;
    }
}
