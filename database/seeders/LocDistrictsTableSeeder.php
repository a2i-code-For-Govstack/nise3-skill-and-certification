<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocDistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('loc_districts')->delete();

        \DB::table('loc_districts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'loc_division_id' => 1,
                'division_bbs_code' => '10',
                'title' => 'BARGUNA',
                'bbs_code' => '04',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            1 =>
            array (
                'id' => 2,
                'loc_division_id' => 1,
                'division_bbs_code' => '10',
                'title' => 'BARISAL',
                'bbs_code' => '06',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            2 =>
            array (
                'id' => 3,
                'loc_division_id' => 1,
                'division_bbs_code' => '10',
                'title' => 'BHOLA',
                'bbs_code' => '09',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            3 =>
            array (
                'id' => 4,
                'loc_division_id' => 1,
                'division_bbs_code' => '10',
                'title' => 'JHALOKATI',
                'bbs_code' => '42',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            4 =>
            array (
                'id' => 5,
                'loc_division_id' => 1,
                'division_bbs_code' => '10',
                'title' => 'PATUAKHALI',
                'bbs_code' => '78',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            5 =>
            array (
                'id' => 6,
                'loc_division_id' => 1,
                'division_bbs_code' => '10',
                'title' => 'PIROJPUR',
                'bbs_code' => '79',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            6 =>
            array (
                'id' => 7,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'BANDARBAN',
                'bbs_code' => '03',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            7 =>
            array (
                'id' => 8,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'BRAHMANBARIA',
                'bbs_code' => '12',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            8 =>
            array (
                'id' => 9,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'CHANDPUR',
                'bbs_code' => '13',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            9 =>
            array (
                'id' => 10,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'CHITTAGONG',
                'bbs_code' => '15',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            10 =>
            array (
                'id' => 11,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'COMILLA',
                'bbs_code' => '19',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            11 =>
            array (
                'id' => 12,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'COX\'S BAZAR',
                'bbs_code' => '22',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            12 =>
            array (
                'id' => 13,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'FENI',
                'bbs_code' => '30',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            13 =>
            array (
                'id' => 14,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'KHAGRACHHARI',
                'bbs_code' => '46',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            14 =>
            array (
                'id' => 15,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'LAKSHMIPUR',
                'bbs_code' => '51',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            15 =>
            array (
                'id' => 16,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'NOAKHALI',
                'bbs_code' => '75',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            16 =>
            array (
                'id' => 17,
                'loc_division_id' => 2,
                'division_bbs_code' => '20',
                'title' => 'RANGAMATI',
                'bbs_code' => '84',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            17 =>
            array (
                'id' => 18,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'DHAKA',
                'bbs_code' => '26',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            18 =>
            array (
                'id' => 19,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'FARIDPUR',
                'bbs_code' => '29',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            19 =>
            array (
                'id' => 20,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'GAZIPUR',
                'bbs_code' => '33',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            20 =>
            array (
                'id' => 21,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'GOPALGANJ',
                'bbs_code' => '35',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            21 =>
            array (
                'id' => 22,
                'loc_division_id' => 9,
                'division_bbs_code' => '45',
                'title' => 'JAMALPUR',
                'bbs_code' => '39',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2016-02-09 14:08:46',
            ),
            22 =>
            array (
                'id' => 23,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'KISHOREGONJ',
                'bbs_code' => '48',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            23 =>
            array (
                'id' => 24,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'MADARIPUR',
                'bbs_code' => '54',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            24 =>
            array (
                'id' => 25,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'MANIKGANJ',
                'bbs_code' => '56',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            25 =>
            array (
                'id' => 26,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'MUNSHIGANJ',
                'bbs_code' => '59',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            26 =>
            array (
                'id' => 27,
                'loc_division_id' => 9,
                'division_bbs_code' => '45',
                'title' => 'MYMENSINGH',
                'bbs_code' => '61',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2016-02-09 19:32:20',
            ),
            27 =>
            array (
                'id' => 28,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'NARAYANGANJ',
                'bbs_code' => '67',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            28 =>
            array (
                'id' => 29,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'NARSINGDI',
                'bbs_code' => '68',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            29 =>
            array (
                'id' => 30,
                'loc_division_id' => 9,
                'division_bbs_code' => '45',
                'title' => 'NETRAKONA',
                'bbs_code' => '72',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2016-02-09 19:31:29',
            ),
            30 =>
            array (
                'id' => 31,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'RAJBARI',
                'bbs_code' => '82',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            31 =>
            array (
                'id' => 32,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'SHARIATPUR',
                'bbs_code' => '86',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            32 =>
            array (
                'id' => 33,
                'loc_division_id' => 9,
                'division_bbs_code' => '45',
                'title' => 'শেরপুর ',
                'bbs_code' => '89',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2016-02-09 19:31:55',
            ),
            33 =>
            array (
                'id' => 34,
                'loc_division_id' => 3,
                'division_bbs_code' => '30',
                'title' => 'TANGAIL',
                'bbs_code' => '93',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            34 =>
            array (
                'id' => 35,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'BAGERHAT',
                'bbs_code' => '01',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            35 =>
            array (
                'id' => 36,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'CHUADANGA',
                'bbs_code' => '18',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            36 =>
            array (
                'id' => 37,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'JESSORE',
                'bbs_code' => '41',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            37 =>
            array (
                'id' => 38,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'JHENAIDAH',
                'bbs_code' => '44',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            38 =>
            array (
                'id' => 39,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'KHULNA',
                'bbs_code' => '47',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            39 =>
            array (
                'id' => 40,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'KUSHTIA',
                'bbs_code' => '50',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            40 =>
            array (
                'id' => 41,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'MAGURA',
                'bbs_code' => '55',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            41 =>
            array (
                'id' => 42,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'MEHERPUR',
                'bbs_code' => '57',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            42 =>
            array (
                'id' => 43,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'NARAIL',
                'bbs_code' => '65',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            43 =>
            array (
                'id' => 44,
                'loc_division_id' => 4,
                'division_bbs_code' => '40',
                'title' => 'SATKHIRA',
                'bbs_code' => '87',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            44 =>
            array (
                'id' => 45,
                'loc_division_id' => 5,
                'division_bbs_code' => '50',
                'title' => 'BOGRA',
                'bbs_code' => '10',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            45 =>
            array (
                'id' => 46,
                'loc_division_id' => 5,
                'division_bbs_code' => '50',
                'title' => 'JOYPURHAT',
                'bbs_code' => '38',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            46 =>
            array (
                'id' => 47,
                'loc_division_id' => 5,
                'division_bbs_code' => '50',
                'title' => 'NAOGAON',
                'bbs_code' => '64',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            47 =>
            array (
                'id' => 48,
                'loc_division_id' => 5,
                'division_bbs_code' => '50',
                'title' => 'NATORE',
                'bbs_code' => '69',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            48 =>
            array (
                'id' => 49,
                'loc_division_id' => 5,
                'division_bbs_code' => '50',
                'title' => 'CHAPAI NABABGANJ',
                'bbs_code' => '70',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            49 =>
            array (
                'id' => 50,
                'loc_division_id' => 5,
                'division_bbs_code' => '50',
                'title' => 'PABNA',
                'bbs_code' => '76',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            50 =>
            array (
                'id' => 51,
                'loc_division_id' => 5,
                'division_bbs_code' => '50',
                'title' => 'RAJSHAHI',
                'bbs_code' => '81',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            51 =>
            array (
                'id' => 52,
                'loc_division_id' => 5,
                'division_bbs_code' => '50',
                'title' => 'SIRAJGANJ',
                'bbs_code' => '88',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            52 =>
            array (
                'id' => 53,
                'loc_division_id' => 6,
                'division_bbs_code' => '60',
                'title' => 'DINAJPUR',
                'bbs_code' => '27',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            53 =>
            array (
                'id' => 54,
                'loc_division_id' => 6,
                'division_bbs_code' => '60',
                'title' => 'GAIBANDHA',
                'bbs_code' => '32',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            54 =>
            array (
                'id' => 55,
                'loc_division_id' => 6,
                'division_bbs_code' => '60',
                'title' => 'KURIGRAM',
                'bbs_code' => '49',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            55 =>
            array (
                'id' => 56,
                'loc_division_id' => 6,
                'division_bbs_code' => '60',
                'title' => 'LALMONIRHAT',
                'bbs_code' => '52',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            56 =>
            array (
                'id' => 57,
                'loc_division_id' => 6,
                'division_bbs_code' => '60',
                'title' => 'NILPHAMARI',
                'bbs_code' => '73',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            57 =>
            array (
                'id' => 58,
                'loc_division_id' => 6,
                'division_bbs_code' => '60',
                'title' => 'পঞ্চগড় ',
                'bbs_code' => '77',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            58 =>
            array (
                'id' => 59,
                'loc_division_id' => 6,
                'division_bbs_code' => '60',
                'title' => 'RANGPUR',
                'bbs_code' => '85',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            59 =>
            array (
                'id' => 60,
                'loc_division_id' => 6,
                'division_bbs_code' => '60',
                'title' => 'THAKURGAON',
                'bbs_code' => '94',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            60 =>
            array (
                'id' => 61,
                'loc_division_id' => 7,
                'division_bbs_code' => '70',
                'title' => 'HABIGANJ',
                'bbs_code' => '36',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            61 =>
            array (
                'id' => 62,
                'loc_division_id' => 7,
                'division_bbs_code' => '70',
                'title' => 'MAULVIBAZAR',
                'bbs_code' => '58',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            62 =>
            array (
                'id' => 63,
                'loc_division_id' => 7,
                'division_bbs_code' => '70',
                'title' => 'SUNAMGANJ',
                'bbs_code' => '90',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
            63 =>
            array (
                'id' => 64,
                'loc_division_id' => 7,
                'division_bbs_code' => '70',
                'title' => 'SYLHET',
                'bbs_code' => '91',
                'row_status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2019-01-30 12:36:35',
                'updated_at' => '2019-01-30 12:36:35',
            ),
        ));


    }
}
