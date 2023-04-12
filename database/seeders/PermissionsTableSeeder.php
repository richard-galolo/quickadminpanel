<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'team_create',
            ],
            [
                'id'    => 19,
                'title' => 'team_edit',
            ],
            [
                'id'    => 20,
                'title' => 'team_show',
            ],
            [
                'id'    => 21,
                'title' => 'team_delete',
            ],
            [
                'id'    => 22,
                'title' => 'team_access',
            ],
            [
                'id'    => 23,
                'title' => 'post_create',
            ],
            [
                'id'    => 24,
                'title' => 'post_edit',
            ],
            [
                'id'    => 25,
                'title' => 'post_show',
            ],
            [
                'id'    => 26,
                'title' => 'post_delete',
            ],
            [
                'id'    => 27,
                'title' => 'post_access',
            ],
            [
                'id'    => 28,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 29,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 30,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 31,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 32,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 33,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 34,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 35,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 36,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 37,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 38,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 39,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 40,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 41,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 42,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 43,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 44,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 45,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 46,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 47,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 48,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 49,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 50,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 51,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 52,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 53,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 54,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 55,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 56,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 57,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 58,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 59,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 60,
                'title' => 'product_create',
            ],
            [
                'id'    => 61,
                'title' => 'product_edit',
            ],
            [
                'id'    => 62,
                'title' => 'product_show',
            ],
            [
                'id'    => 63,
                'title' => 'product_delete',
            ],
            [
                'id'    => 64,
                'title' => 'product_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
