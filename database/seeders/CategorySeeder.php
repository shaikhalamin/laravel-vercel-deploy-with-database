<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }

    public function categoryJsonData()
    {
        $categoryJson = '{
            "current_page": 1,
            "data": [
              {
                "id": 7,
                "name": "Sweets",
                "alias": "sweets",
                "created_at": "2022-12-09T11:19:59.000000Z",
                "updated_at": "2022-12-09T11:19:59.000000Z",
                "storage_file": {
                  "id": 13,
                  "type": "category",
                  "size": "lg",
                  "public_id": "bakery/category/ek6eszaowyq14ggfowec",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670584780/bakery/category/ek6eszaowyq14ggfowec.png",
                  "active": true,
                  "product_id": null,
                  "category_id": 7,
                  "created_at": "2022-12-09T11:19:41.000000Z",
                  "updated_at": "2022-12-09T11:19:59.000000Z"
                }
              },
              {
                "id": 6,
                "name": "Snacks",
                "alias": "snacks",
                "created_at": "2022-12-09T11:19:24.000000Z",
                "updated_at": "2022-12-09T11:19:24.000000Z",
                "storage_file": {
                  "id": 12,
                  "type": "category",
                  "size": "lg",
                  "public_id": "bakery/category/eejkzbzvrjncwpor0h6o",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670584745/bakery/category/eejkzbzvrjncwpor0h6o.png",
                  "active": true,
                  "product_id": null,
                  "category_id": 6,
                  "created_at": "2022-12-09T11:19:05.000000Z",
                  "updated_at": "2022-12-09T11:19:24.000000Z"
                }
              },
              {
                "id": 5,
                "name": "Buiscuits",
                "alias": "biscuits",
                "created_at": "2022-12-09T11:18:44.000000Z",
                "updated_at": "2022-12-09T11:18:44.000000Z",
                "storage_file": {
                  "id": 11,
                  "type": "category",
                  "size": "lg",
                  "public_id": "bakery/category/sqphn4nhnnkpvr9ktcum",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670584700/bakery/category/sqphn4nhnnkpvr9ktcum.png",
                  "active": true,
                  "product_id": null,
                  "category_id": 5,
                  "created_at": "2022-12-09T11:18:21.000000Z",
                  "updated_at": "2022-12-09T11:18:44.000000Z"
                }
              },
              {
                "id": 4,
                "name": "Cake",
                "alias": "cake",
                "created_at": "2022-12-09T11:18:02.000000Z",
                "updated_at": "2022-12-09T11:18:02.000000Z",
                "storage_file": {
                  "id": 10,
                  "type": "category",
                  "size": "lg",
                  "public_id": "bakery/category/gtkrkdwxdsqhze1rcnjd",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670584667/bakery/category/gtkrkdwxdsqhze1rcnjd.png",
                  "active": true,
                  "product_id": null,
                  "category_id": 4,
                  "created_at": "2022-12-09T11:17:47.000000Z",
                  "updated_at": "2022-12-09T11:18:02.000000Z"
                }
              },
              {
                "id": 3,
                "name": "Coockies",
                "alias": "coockies",
                "created_at": "2022-12-09T11:17:16.000000Z",
                "updated_at": "2022-12-09T11:17:16.000000Z",
                "storage_file": {
                  "id": 9,
                  "type": "category",
                  "size": "lg",
                  "public_id": "bakery/category/gbqykwiywqztdg26fr71",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670584616/bakery/category/gbqykwiywqztdg26fr71.png",
                  "active": true,
                  "product_id": null,
                  "category_id": 3,
                  "created_at": "2022-12-09T11:16:56.000000Z",
                  "updated_at": "2022-12-09T11:17:16.000000Z"
                }
              },
              {
                "id": 2,
                "name": "Bread/Bun",
                "alias": "bread_bun",
                "created_at": "2022-12-09T11:16:37.000000Z",
                "updated_at": "2022-12-09T11:16:37.000000Z",
                "storage_file": {
                  "id": 8,
                  "type": "category",
                  "size": "lg",
                  "public_id": "bakery/category/gxznsvvtlwzzgchqhyql",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670584577/bakery/category/gxznsvvtlwzzgchqhyql.png",
                  "active": true,
                  "product_id": null,
                  "category_id": 2,
                  "created_at": "2022-12-09T11:16:17.000000Z",
                  "updated_at": "2022-12-09T11:16:37.000000Z"
                }
              },
              {
                "id": 1,
                "name": "Others",
                "alias": "others",
                "created_at": "2022-12-09T10:57:19.000000Z",
                "updated_at": "2022-12-09T10:57:19.000000Z",
                "storage_file": {
                  "id": 7,
                  "type": "category",
                  "size": "lg",
                  "public_id": "bakery/category/uckqnhswaqifeyftlerb",
                  "image_url": "https://res.cloudinary.com/deundpsr2/image/upload/v1670583429/bakery/category/uckqnhswaqifeyftlerb.png",
                  "active": true,
                  "product_id": null,
                  "category_id": 1,
                  "created_at": "2022-12-09T10:57:09.000000Z",
                  "updated_at": "2022-12-09T10:57:19.000000Z"
                }
              }
            ],
            "first_page_url": "https://bakery-backend.fly.dev/api/categories?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "https://bakery-backend.fly.dev/api/categories?page=1",
            "links": [
              {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
              },
              {
                "url": "https://bakery-backend.fly.dev/api/categories?page=1",
                "label": "1",
                "active": true
              },
              {
                "url": null,
                "label": "Next &raquo;",
                "active": false
              }
            ],
            "next_page_url": null,
            "path": "https://bakery-backend.fly.dev/api/categories",
            "per_page": 20,
            "prev_page_url": null,
            "to": 7,
            "total": 7
          }';

        return $categoryJson;
    }
}
