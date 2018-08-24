<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 27,
                'role_id' => 2,
            ),
            24 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 28,
                'role_id' => 2,
            ),
            26 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 29,
                'role_id' => 2,
            ),
            28 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 30,
                'role_id' => 2,
            ),
            30 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 31,
                'role_id' => 2,
            ),
            32 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            33 => 
            array (
                'permission_id' => 42,
                'role_id' => 2,
            ),
            34 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            35 => 
            array (
                'permission_id' => 43,
                'role_id' => 2,
            ),
            36 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 44,
                'role_id' => 2,
            ),
            38 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            39 => 
            array (
                'permission_id' => 45,
                'role_id' => 2,
            ),
            40 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 46,
                'role_id' => 2,
            ),
            42 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 47,
                'role_id' => 2,
            ),
            44 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            45 => 
            array (
                'permission_id' => 48,
                'role_id' => 2,
            ),
            46 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            47 => 
            array (
                'permission_id' => 49,
                'role_id' => 2,
            ),
            48 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            49 => 
            array (
                'permission_id' => 50,
                'role_id' => 2,
            ),
            50 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            51 => 
            array (
                'permission_id' => 51,
                'role_id' => 2,
            ),
            52 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            53 => 
            array (
                'permission_id' => 57,
                'role_id' => 2,
            ),
            54 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            55 => 
            array (
                'permission_id' => 58,
                'role_id' => 2,
            ),
            56 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 59,
                'role_id' => 2,
            ),
            58 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 60,
                'role_id' => 2,
            ),
            60 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            61 => 
            array (
                'permission_id' => 61,
                'role_id' => 2,
            ),
            62 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 62,
                'role_id' => 2,
            ),
            64 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            65 => 
            array (
                'permission_id' => 63,
                'role_id' => 2,
            ),
            66 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 64,
                'role_id' => 2,
            ),
            68 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            69 => 
            array (
                'permission_id' => 65,
                'role_id' => 2,
            ),
            70 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 66,
                'role_id' => 2,
            ),
            72 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 67,
                'role_id' => 2,
            ),
            74 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 68,
                'role_id' => 2,
            ),
            76 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            77 => 
            array (
                'permission_id' => 69,
                'role_id' => 2,
            ),
            78 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            79 => 
            array (
                'permission_id' => 70,
                'role_id' => 2,
            ),
            80 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            81 => 
            array (
                'permission_id' => 71,
                'role_id' => 2,
            ),
            82 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            83 => 
            array (
                'permission_id' => 72,
                'role_id' => 2,
            ),
            84 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            85 => 
            array (
                'permission_id' => 73,
                'role_id' => 2,
            ),
            86 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            87 => 
            array (
                'permission_id' => 74,
                'role_id' => 2,
            ),
            88 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            89 => 
            array (
                'permission_id' => 75,
                'role_id' => 2,
            ),
            90 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 76,
                'role_id' => 2,
            ),
            92 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            93 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            94 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            95 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            96 => 
            array (
                'permission_id' => 86,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 87,
                'role_id' => 1,
            ),
            98 => 
            array (
                'permission_id' => 87,
                'role_id' => 2,
            ),
            99 => 
            array (
                'permission_id' => 88,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 88,
                'role_id' => 2,
            ),
            101 => 
            array (
                'permission_id' => 89,
                'role_id' => 1,
            ),
            102 => 
            array (
                'permission_id' => 89,
                'role_id' => 2,
            ),
            103 => 
            array (
                'permission_id' => 90,
                'role_id' => 1,
            ),
            104 => 
            array (
                'permission_id' => 90,
                'role_id' => 2,
            ),
            105 => 
            array (
                'permission_id' => 91,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 91,
                'role_id' => 2,
            ),
            107 => 
            array (
                'permission_id' => 92,
                'role_id' => 1,
            ),
            108 => 
            array (
                'permission_id' => 93,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 94,
                'role_id' => 1,
            ),
            110 => 
            array (
                'permission_id' => 95,
                'role_id' => 1,
            ),
            111 => 
            array (
                'permission_id' => 96,
                'role_id' => 1,
            ),
            112 => 
            array (
                'permission_id' => 97,
                'role_id' => 1,
            ),
            113 => 
            array (
                'permission_id' => 97,
                'role_id' => 2,
            ),
            114 => 
            array (
                'permission_id' => 98,
                'role_id' => 1,
            ),
            115 => 
            array (
                'permission_id' => 98,
                'role_id' => 2,
            ),
            116 => 
            array (
                'permission_id' => 99,
                'role_id' => 1,
            ),
            117 => 
            array (
                'permission_id' => 99,
                'role_id' => 2,
            ),
            118 => 
            array (
                'permission_id' => 100,
                'role_id' => 1,
            ),
            119 => 
            array (
                'permission_id' => 100,
                'role_id' => 2,
            ),
            120 => 
            array (
                'permission_id' => 101,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 101,
                'role_id' => 2,
            ),
            122 => 
            array (
                'permission_id' => 102,
                'role_id' => 1,
            ),
            123 => 
            array (
                'permission_id' => 103,
                'role_id' => 1,
            ),
            124 => 
            array (
                'permission_id' => 104,
                'role_id' => 1,
            ),
            125 => 
            array (
                'permission_id' => 105,
                'role_id' => 1,
            ),
            126 => 
            array (
                'permission_id' => 106,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 107,
                'role_id' => 1,
            ),
            128 => 
            array (
                'permission_id' => 108,
                'role_id' => 1,
            ),
            129 => 
            array (
                'permission_id' => 109,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 110,
                'role_id' => 1,
            ),
            131 => 
            array (
                'permission_id' => 111,
                'role_id' => 1,
            ),
            132 => 
            array (
                'permission_id' => 112,
                'role_id' => 1,
            ),
            133 => 
            array (
                'permission_id' => 113,
                'role_id' => 1,
            ),
            134 => 
            array (
                'permission_id' => 114,
                'role_id' => 1,
            ),
            135 => 
            array (
                'permission_id' => 115,
                'role_id' => 1,
            ),
            136 => 
            array (
                'permission_id' => 116,
                'role_id' => 1,
            ),
        ));
        
        
    }
}