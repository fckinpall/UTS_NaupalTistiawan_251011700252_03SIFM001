<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('recipes')->insert([
            [
                'name' => 'Nasi Goreng Spesial',
                'description' => 'Nasi goreng gurih dengan bumbu rempah pilihan, dilengkapi telur dan irisan ayam.',
                'price' => 18000,
                'ingredients' => 'Nasi putih, Bawang merah, Bawang putih, Cabai, Telur, Kecap manis, Garam, Minyak goreng',
                'steps' => "1. Haluskan bawang dan cabai.\n2. Tumis bumbu hingga harum.\n3. Masukkan telur, orak-arik.\n4. Masukkan nasi putih dan kecap manis, aduk rata hingga matang.",
                'cook_time' => '15 Menit',
                'image' => 'nasigoreng.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'name' => 'Soto Ayam Lamongan',
                'description' => 'Soto ayam khas Lamongan berkuah kuning gurih dengan koya kelapa yang lezat.',
                'price' => 22000,
                'ingredients' => 'Ayam, Serai, Daun jeruk, Kunyit, Jahe, Bawang merah, Bawang putih, Bihun, Kol',
                'steps' => "1. Rebus ayam hingga empuk lalu suwir-suwir.\n2. Haluskan bumbu kuah lalu tumis.\n3. Masukkan bumbu ke dalam air kaldu ayam.\n4. Tata bihun, kol, dan ayam suwir di mangkuk, siram dengan kuah panas.",
                'cook_time' => '45 Menit',
                'image' => 'sotoayam.jpg',
                'category' => 'Makanan Berkuah'
            ],
            [
                'name' => 'Rendang Daging Sapi',
                'description' => 'Daging sapi pilihan yang dimasak lama dengan santan dan rempah kaya rasa.',
                'price' => 35000,
                'ingredients' => 'Daging sapi, Santan kental, Serai, Daun jeruk, Lengkuas, Bumbu halus',
                'steps' => "1. Tumis bumbu halus bersama rempah hingga harum.\n2. Masukkan daging sapi, aduk hingga berubah warna.\n3. Tuang santan, masak dengan api kecil sambil diaduk sesekali.\n4. Masak hingga santan mengering dan berminyak.",
                'cook_time' => '180 Menit',
                'image' => 'rendang.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'name' => 'Sate Ayam Madura',
                'description' => 'Sate ayam empuk berlumur bumbu kacang kental khas Madura yang menggugah selera.',
                'price' => 25000,
                'ingredients' => 'Daging ayam, Kacang tanah, Kecap manis, Bawang merah, Cabai rawit',
                'steps' => "1. Potong dadu daging ayam, tusuk dengan tusukan sate.\n2. Bakar sate setengah matang, olesi kecap, lalu bakar kembali hingga matang.\n3. Haluskan kacang tanah, campur air hangat dan kecap manis.\n4. Sajikan sate dengan bumbu kacang.",
                'cook_time' => '30 Menit',
                'image' => 'sateayam.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'name' => 'Gado-Gado Jakarta',
                'description' => 'Salad tradisional Indonesia dengan siram bumbu kacang gurih dan kerupuk renyah.',
                'price' => 15000,
                'ingredients' => 'Tahu, Tempe, Kentang rebus, Kol, Kacang panjang, Tauge, Bumbu kacang',
                'steps' => "1. Goreng tahu dan tempe, rebus sayuran hingga matang.\n2. Siapkan bumbu kacang dengan mencampur kacang halus, gula merah, dan asam jawa.\n3. Tata sayuran di piring, siram dengan bumbu kacang.",
                'cook_time' => '25 Menit',
                'image' => 'gadogado.jpg',
                'category' => 'Sayuran'
            ],
            [
                'name' => 'Es Campur Segar',
                'description' => 'Minuman dingin menyegarkan berisi aneka buah segar, cincau, dan sirup manis.',
                'price' => 12000,
                'ingredients' => 'Alpukat, Nangka, Cincau hitam, Kolang-kaling, Sirup merah, Susu kental manis, Es serut',
                'steps' => "1. Potong buah alpukat, nangka, dan cincau hitam.\n2. Masukkan ke dalam mangkuk.\n3. Tambahkan es serut secukupnya.\n4. Beri siraman sirup merah dan susu kental manis.",
                'cook_time' => '10 Menit',
                'image' => 'escampur.jpg',
                'category' => 'Minuman & Dessert'
            ],
        ]);
    }
}