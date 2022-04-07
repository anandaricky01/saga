<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Konten;
use App\Models\Kupon;
use App\Models\Artikel;
use App\Models\Category;
use App\Models\JumlahPoin;
use App\Models\JenisSampah;
use App\Models\RiwayatKupon;
use App\Models\StatusVoucher;
use App\Models\Kolega;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * 2return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        RiwayatKupon::factory(50)->create();

        // category ---------------------
            Category::create([
                'name' => 'Fun Fact',
                'slug' => 'fun-fact'
            ]);

            Category::create([
                'name' => 'Tips',
                'slug' => 'tips'
            ]);

            Category::create([
                'name' => 'Inovasi',
                'slug' => 'inovasi'
            ]);

            Category::create([
                'name' => 'Aksi',
                'slug' => 'aksi'
            ]);
            
            Category::create([
                'name' => 'Kebersihan',
                'slug' => 'kebersihan'
            ]);
        // akhir category ---------------

        // role --------------------------
            Role::create(['role_name' => 'penyetor']);

            Role::create(['role_name' => 'admin']);
        // akhir role --------------------

        // kupon -------------------------
            Kupon::create([
                'name' => "Kupon Diskon 10%",
                'diskon' => "10%",
                'poin' => 100 
            ]);
        // akhir kupon -------------------

        // status voucher ----------------
            StatusVoucher::create([
                'status' => 'Belum Digunakan'
            ]);

            StatusVoucher::create([
                'status' => 'Sudah Digunakan'
            ]);
        // akhir status voucher ----------

        // Jenis Sampah ------------------
            JenisSampah::create([
                'jenis_sampah' => 'Kardus',
                'slug' => 'kardus',
                'gambar' => 'kardus.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Kaca',
                'slug' => 'kaca',
                'gambar' => 'kaca.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Kertas',
                'slug' => 'kertas',
                'gambar' => 'kertas.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Botol Plastik',
                'slug' => 'botol-plastik',
                'gambar' => 'botol-plastik.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Kemasan',
                'slug' => 'kemasan',
                'gambar' => 'kemasan.png'
            ]);
            
            JenisSampah::create([
                'jenis_sampah' => 'Kain',
                'slug' => 'kain',
                'gambar' => 'kain.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Kaleng',
                'slug' => 'kaleng',
                'gambar' => 'kaleng.png'
            ]);
        // akhir jenis sampah ------------

        // kolega ------------------------
            // 1
            Kolega::create([
                'jenis_sampah_id' => 1,
                'nama_kolega' => 'Tajinan Shop',
                'slug' => 'tajinan_shop',
                'deskripsi' => 'Tajinan shop adalah toko daur ulang yang khusus memproduksi mainan anak',
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'tajinan_shop',
                'gambar' => '/img/kolega/toko1.png'
            ]);

            // 2
            Kolega::create([
                'jenis_sampah_id' => 2,
                'nama_kolega' => 'Saikuru',
                'slug' => 'saikuru',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'saikuru',
                'gambar' => '/img/kolega/toko2.png'
            ]);
            
            // 3
            Kolega::create([
                'jenis_sampah_id' => 3,
                'nama_kolega' => 'AntHill',
                'slug' => 'ant-hill',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'ant_hill.id',
                'gambar' => '/img/kolega/toko3.png'
            ]);
            
            // 4
            Kolega::create([
                'jenis_sampah_id' => 4,
                'nama_kolega' => 'Daur.Ajalah',
                'slug' => 'daur-ajalah',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'daur.ajalah',
                'gambar' => '/img/kolega/toko4.png'
            ]);
            
            // 5
            Kolega::create([
                'jenis_sampah_id' => 6,
                'nama_kolega' => 'bersih.in',
                'slug' => 'bersih-in',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'bersih.in',
                'gambar' => '/img/kolega/toko5.png'
            ]);
            
            // 6
            Kolega::create([
                'jenis_sampah_id' => 5,
                'nama_kolega' => 'agreenoind',
                'slug' => 'agreenoind',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'agreenoind',
                'gambar' => '/img/kolega/toko6.png'
            ]);
            
            // 7
            Kolega::create([
                'jenis_sampah_id' => 7,
                'nama_kolega' => 'Toko Segitiga',
                'slug' => 'toko-segitiga',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'toko_segi_tiga',
                'gambar' => '/img/kolega/toko7.png'
            ]);

        // akhir jenis sampah ------------

        // konten ------------------------
            Konten::create([
                'konten' => 'Tentang Saga',
                'link' => '/tentang/saga'
            ]);

            Konten::create([
                'konten' => 'Tentang Tim',
                'link' => '/tentang/tim'
            ]);
            
            Konten::create([
                'konten' => 'Layanan Mitra',
                'link' => '/layanan/kolega'
            ]);

            Konten::create([
                'konten' => 'Layanan Kurir',
                'link' => '/layanan/kurir'
            ]);

            Konten::create([
                'konten' => 'Layanan setor',
                'link' => '/layanan/setor'
            ]);

            Konten::create([
                'konten' => 'Artikel',
                'link' => '/artikel'
            ]);

            Konten::create([
                'konten' => 'FAQ',
                'link' => '/faq'
            ]);

        // akhir konten ------------------

        // artikel -----------------------
            // 1
            Artikel::create([
                'category_id' => 1,
                'title' => 'Mengelola sampah, apa sih pentingnya',
                'slug' => 'mengelola-sampah-apa-sih-pentingnya',
                'body' => "Hai Sobat SAGA… Taukah kamu bahwa grafik sampah di Indonesia sangatlah meningkat, bahkan menjadi penyumbang sampah terbanyak no 2 di dunia? Sebagai generasi muda penggerak perubahan bangsa, yuk kita mulai mengelola sampah kita!
                Mungkin banyak yang bertanya-tanya, Kenapa sih sampah di sekitar kita harus dikelola? Apabila sampah tidak dikelola dan hanya langsung dibuang ke lingkungan, maka akan menyebabkan dampak yang besar. Lalu, apa aja sih dampaknya?
                1)	Mengurangi nilai kebersihan, keindahan, dan kenyamanan
                Seperti yang kita tahu,  apabila sampah tidak dikelola dan dibuang begitu saja, maka akan mengurangi nilai kebersihan dan juga keindahan atau estetika. Selain itu, sampah yang berserakan akan menimbulkan bau yang tidak sedap, sehingga hal tersebut dapat mengganggu kenyamanan lingkungan. 
                2)	Menjadi media penularan penyakit
                Sampah yang dibiarkan begitu saja dan tidak dikelola juga akan menjadi media perkembangbiakan vektor dan binatang pembawa penyakit. Vektor adalah artropoda yang dapat menularkan, memindahkan, dan menjadi sumber penularan penyakit, contohnya seperti lalat, nyamuk, dan kecoa. Sedangkan Binatang Pembawa Penyakit adalah binatang selain artropoda yang dapat menularkan, memindahkan, dan menjadi sumber penular penyakit seperti tikus. 
                3)	Menurunkan kualitas lingkungan 
                Indonesia menunjukkan adanya penurunan kualitas lingkungan, baik udara, air, dan tanah. Penurunan kualitas tersebut terjadi melalui kegiatan yang dilakukan manusia seperti dengan membuang sampah sembarangan yang menyebabkan pencemaran. Ada tiga jenis pencemaran yang ditimbulkan :
                a.	Pencemaran Udara
                Seperti yang sudah dijelaskan sebelumnya, sampah yang menumpuk dapat menyebabkan bau tidak sedap dan menyengat. Apabila bau tersebut tercium oleh orang yang sensitif, maka menimbulkan reaksi berlebihan dan bisa menyebabkan infeksi saluran pernafasan.
                b.	Pencemaran Air
                Sampah yang dibuang ke sungai akan menyebabkan air menjadi keruh, sehingga dapat menghambat pertumbuhan dan kehidupan dari biota air dan airnya tidak dapat dimanfaatkan sebagaimana mestinya. Selain itu, kondisi air bawah tanah yang berdekatan dengan lokasi pembuangan sampah bisa saja berpengaruh terhadap kesehatan khususnya pencernaan.
                c.	Pencemaran Tanah
                Sampah anorganik menjadi salah satu penyebab pencemaran tanah yang sulit untuk diuraikan atau bisa diuraikan namun dalam jangka waktu yang sangat lama. Sampah yang tidak terurai dengan baik dapat menyebarkan zat-zat berbahaya dalam tanah. Selain itu tanah akan kehilangan humus dan mengganggu kehidupan ekosistem tanah. 
                Nah, sekarang sudah tau kan apa saja dampak yang ditimbulkan bila kita tidak mengelola sampah kita dengan baik? Oleh karena itu, ayo mulai peduli sampah dengan selalu mendukung gerakan Sampah Juga Berharga. Bersama Sobat SAGA, hijaukan bumi, wujudkan perubahan pada negeri.
                "]);

            // 2
            Artikel::create([
                'category_id' => 2,
                'title' => 'Bagaimana cara mengelola sampah yang baik?',
                'slug' => 'bagaimana-cara-mengelola-sampah-yang-baik',
                'body' => "Tahukah kamu bagaimana cara mengelola sampah yang baik? Seiring meningkatkan pencemaran lingkungan, sampah menjadi masalah utama yang begitu menyulitkan bagi kita semua. Berdasarkan data, 62% sampah di Indonesia berasal dari rumah tangga. Sampah rumah tangga tersebut pastinya bisa kita kelola terlebih dahulu kan sebelum kita buang begitu saja?
                Mengelola sampah dapat dilakukan dengan cara pengurangan. Pengurangan sampah dilakukan melalui prinsip 3R, yaitu Reduce, Reuse, dan Recycle.
                Apa sih itu? Yuk kita bahas
                1)	Reduce
                Reduce adalah pengurangan atau pembatasan sampah. Pengurangan disini berarti mengurangi penggunaan barang yang nantinya berpotensi menjadi sampah. Reduce dapat dilakukan untuk sampah sekali pakai, misalkan kantong plastik belanja. Kita bisa mengurangi penggunaannya dengan cara membawa tas belanja dan wadah sendiri dari rumah. Selain itu kita juga bisa memakai peralatan makan sendiri saat menghidangkan makanan, seperti piring dan juga gelas. 
                2)	Reuse
                Reuse adalah menggunakan kembali sampah yang masih digunakan untuk fungsi yang sama atau fungsi yang lainnya. Reuse ini dapat dilakukan dengan menggunakan produk yang sudah terpakai, seperti menggunakan botol minum bekas atau kaleng cat bekas sebagai pot tanaman dan menggunakan kaleng biscuit bekas sebagai kotak penyimpanan. Dengan menerapkan reuse ini, dapat mengurangi penyebaran sampah dengan menggunakannya kembali.
                3)	Recycle
                Recycle artinya mendaur ulang sampah. Pada tahap recycle, kita bisa mendaur ulang sampah menjadi barang baru yang dapat kita manfaatkan dalam kehidupan sehari-hari. Misalnya sampah plastik didaur ulang menjadi produk kerajinan. Dengan recycle ini dapat memanfaatkan nilai sampah yang awalnya tidak terpakai hingga memiliki nilai ekonomis yang tinggi. 
                Nah, sekarang sudah paham kan bagaimana cara untuk mengelola sampah? Dari sini kita harus mulai merubah pola pikir kita, bahwa sampah bukan lagi sebuah benda yang tidak ada artinya, melainkan sesuatu yang dapat bermanfaat bagi kita semua. Mengelola sampah itu mudah dan juga sederhana. Oleh karena itu, ayo kita kelola sampah kita, karena Sampah Juga Berharga!
                "]);

            // 3
            Artikel::create([
                'category_id' => 2,
                'title' => 'Limbah pandemi, harus diapain nih? ',
                'slug' => 'limbah-pandemi-harus-diapain-nih',
                'body' => "Merebaknya wabah Coronavirus Dissease 2019 (Covid-19) di seluruh dunia sejak tahun 2019 silam, telah menyebabkan peningkatan jumlah sampah, terutama di Indonesia. Hal itu tentu saja disebabkan oleh beberapa faktor. Peningkatan jumlah sampah rumah selama pandemi ini merupakan akibat dari kebijakan work from home dan pembelajaran daring. Hal itu menyebabkan kebiasaan masyarakan yang suka berbelanja online meningkat dengan pesatnya. Sampah plastic, kardus, styrofoam, dan sampah yang biasa digunakan untuk membungkus paket meningkat hingga 27 sampai 36 persen. Waduh, banyak juga ya Sobat?

                Selain itu, melonjaknya permintaan alat perlindungan diri (APD) dan masker untuk mencegah penyebaran virus juga menyebabkan peningkatan jumlah limbah medis. Asia Development Bank (ADB) memprediksi Jakarta dapat menghasilkan tambahan 12.720 ton limbah medis berupa sarung tangan, baju APD, masker, dan kantong infus selama 60 hari selama pandemi. 
                Pemerintah dan instansi terkait kini telah mengeluarkan panduan dan juga protocol pengelolaan limbah medis di masa pandemic. Setidaknya ada empat cara untuk mengelola mengelola limbah APD dan masker, apa saja sih? Yuk simak!
                a)	Potong-potong dan buang
                Cara pertama untuk mengelola sampah medis adalah dengan memotong-motong atau merusak sampah tersebut sebelum dibuang. Cara ini bisa kita terapkan pada pengelolaan limbah masker. Hmmm pasti banyak yang bertanya-tanya kenapa harus dirusak terlebih dulu? Dengan memotong-motong atau merusak masker sekali pakai yang telah kita gunakan, maka kita dapat mencegah penyalahgunaan pada sampah tersebut, seperti dijual kembali contohnya.
                Namun, dengan cara ini tidak dapat mengurangi sampah secara efektif, sehingga masyarakat disarankan untuk menggunakan masker kain yang dapat dicuci dan digunakan kembali. Sobat Saga masih ingat dengan prinsip Reduce kan? 
                b)	Tempat penampungan sementara (TPS) atau depo transit
                WHO dan Public Health England menyarankan untuk memasukkan limbah APD kedalam kantong plastic kuning dua lapis dan ditampung selama 72 jam sebelum dibuang ke fasilitas pengolahan. Dengan menampung sementara limbah APD, diharapkan virus yang menempel sudah mati dan akan lebih aman untuk dikelola nantinya.
                c)	Metode penguapan atau autoklaf
                Metode penguapan atau autoklaf memperlakukan limbah medis menjadi steril dengan cara menggunakan uap panas yang kemudian dicacah dan akan dibuang ke TPA. Motide ini berfungsi sebagai pengganti metode pembakaran dan untuk mencegah penyebaran senyawa organic yang bersifat racun. Namun sayangnya, di Indonesia sendiri baru ada empat dari 54 rumah sakit yang telah mendapatkan izin pengoperasian.
                d)	Pembakaran atau insinerasi
                Proses pembakaran dapat menimbulkan masalah baru yang serius, yaitu munculnya limbah B3. Limbah B3 yang berbentuk abu, kerak sisa pembakaran, dan emisi dari tungku pembakaran mengandung dioksin dan logam berat. Kedua partikel tersebut dapat mencemari lingkungan. Kementerian Lingungan Hidup dan Kehutanan merekomendasikan untuk membakar sampah di tungku dengan temperature diatas 800 derajat celcius untuk menjamin semua virus tidak menyebar ke lingkungan. Akan tetapi, dari 2889 rumah sakit di Indonesia, hanya 82 Rumah sakit yang memiliki izin incinerator dan hanya ada 63 unit yang dapat berfungsi.
                
                Nah, itu dia 4 cara yang dapat dilakukan untuk menglola limbah selama pandemi. Lalu, mana sih yang paling efektif untuk dilakukan? Untuk saat ini, WHO merekomendasikan untuk meminimalkan kebutuhan APD. Artinya, sebisa mungkin kita harus membatasi penggunaan masker dan APD sekali pakai agar tidak menambah kenaikan jumlah sampah terutama di Indonesia. Semoga pandemi ini segera usai ya Sobat!
                "]);

            // 4
            Artikel::create([
                'category_id' => 2,
                'title' => 'Mengurangi sampah bersama SAGA yuk!',
                'slug' => 'mengurangi-sampah-bersama-saga-yuk',
                'body' => "Halo Sobat SAGA…! How’s your day? Semoga Sobat SAGA dimanapun kalian berada sehat selalu ya!
                Semenjak adanya pandemi Covid-19 secara tidak sadar telah mengubah banyak hal di dalam kehidupan kita ya. Salah satunya adalah kesadaran kita terhadap kebersihan. Bagaimana tidak? Kita selalu memakai masker saat bepergian dan mencuci tangan atau memakai hand sanitizer secara berkala untuk menghindari virus. Namun tahu kah kalian, bahwa kebiasaan baru kita ini bisa meningkatkan kenaikan jumlah sampah loh! Penggunaan masker, tisu basah, hand sanitizer, dan disinfektan yang kita gunakan setiap hari telah meningkatkan jumlah sampah dari bekas kemasan barang-barang tersebut. 
                Sampah yang dihasilkan tentu saja bukan hanya dari produk medis saja, tetapi juga sampah rumah tangga. Selama pandemi ini, kita diharuskan untuk bekerja dan belajar dari rumah yang membuat kita menjadi sering berbelanja secara online dan menggunakan jasa pesan antar. Hal itu mengakibatkan sampah plastic, kardus, styrofoam, dan sampah yang biasa digunakan untuk membungkus paket meningkat begitu pesatnya. 
                Meskipun beberapa kebiasaan pada era pandemi dapat  meningkatkan produksi sampah, perlu Sobat SAGA ingat, bukan berarti kita harus berhenti menggunakan masker dan berhenti menggunakan jasa pesan antar, loh ya.
                Yang harus kita perhatikan adalah bagaimana cara kita untuk mengurangi sampah di sekitar kita selama pandemi ini. Bagaimana caranya? Yuk, simak beberapa tips berikut. 
                1)	Mengurangi penggunaan masker medis
                Berdasarkan hasil penelitian dari Lembaga Ilmu Pengetahuan Indonesia, sebanyak 780 item seberat 130 kg sampah masker dan APD menumpuk di muara sungai menuju Teluk Jakarta setiap hari. Oleh sebab itu, kita harus mengurangi penggunaan masker medis dan mulai menggunakan masker kain. Namun, ada kriteria tertentu siapa saja yang wajib menggunakan masker medis, diantaranya tenaga kesehatan, lansia yang berusia 60 tahun keatas, orang yang memiliki penyakit komorbid, dan pemberi layanan atau orang yang berkegiatan di tempat orang yang terkonfirmasi positif Covid-19
                2)	Belajar untuk memilah sampah di rumah
                Sampah medis seperti masker dan APD yang tidak terpilah dengan baik bisa berpotensi menularkan virus, terutama kepada petugas Tempat Pembuangan Akhir. Penting banget nih buat Sobat SAGA untuk mulai memilah sampah sebelum sampah dibuang. Kita bisa memilah sampah berdasarkan jenisnya. Pada sampah organic bisa kita sendiri oleh menjadi kompos, sedangkan sampah anorganik dapat didaur ulang dan dijadikan hiasan yang memikiki nilai ekonomis yang tinggi. Nah, untuk sampah B3 kita bisa menyalurkannya ke bank sampah, karena pada sampah ini mengandung bahan yang berbahaya dan beracun. 
                3)	Menerapkan metode decluttering
                Apa itu decluttering? Decluttering adalah menyingkirkan barang-barang yang tidak dibutuhkan dan hanya menyimpan barang-barang yang memang dibutuhkan. Barang-barang yang tidak digunakan lagi bisa dijual atau mungkin didonasikan apabila masih layak digunakan. Metode ini dapat mengurangi sampah bekas pakaian, aksesoris, dan barang lainnya. 
                Nah, itu dia beberapa tips yang bisa Sobat SAGA lakukan untuk mengurangi sampah selama pandemic. Mudah kan? Yuk mulai membiasakan diri untuk melakukan kebiasaan baru yang baik. Bersama SAGA, kita pasti bisa!
                "
            ]);

            // 5
            Artikel::create([
                'category_id' => 1,
                'title' => '62% sampah di Indonesia merupakan sampah rumah tangga',
                'slug' => 'sampah-di-indonesia-merupakan-sampah-rumah-tangga',
                'body' => 'Hai Sobat SAGA! Tahukah kalian bahwa sebanyak 62% sampah yang ada di Indonesia itu merupakan sampah rumah tangga? Sampah rumah tangga menjadi penyumbang sampah terbesar berdasarkan sumber timbunan sampah pada tahun 2018.  Kemudian disusul dengan sampah tradisional sebesar 13%, dan pusat perniagaan 7%. Sedangkan berdasarkan pada komposisinya, sampah sisa makanan menempati urutan pertama yaitu sebesar 44%, diikuti sampah plastik 15%, kertas 13%, tekstil 3%, dan jenis sampah lainnya sebesar 12%. 
                Pada tahun 2019, Data Kementrian Lingkungan Hidup dan Kehutanan mengungkapkan bahwa setiap tahunnya Indonesia menghasilkan setidaknya 64 juta ton sampah. Sekitar 60% sampah diangkut dan ditimbun ke TPA, 10% didaur ulang, dan 30% sisanya tidak dikelola dan mencemari lingkungan.
                Masalah sampah ini merupakan tanggung jawab semua orang, karena kita semua turut andil dalam menghasilkan sampah. Sebagai generasi muda penerus bangsa, kita harus mengambil aksi untuk turut serta melakukan pengolahan sampah. Bagaimana caranya? Ada beberapa upaya yang bisa Sobat SAGA lakukan untuk membenahi tata kelola sampah, yaitu seperti penerapan 3R (Reduce, Reuse, dan Recycle) dan juga melalui bank sampah.
                Nah, semua itu bisa kita lakukan bersama SAGA loh! Makanya, ayo bergabung bersama kami, dan jadilah bagian dari perubahan baik!
                '
            ]);

            // 6
            Artikel::create([
                'category_id' => 1,
                'title' => 'Tidak semua sampah plastik bisa didaur ulang loh!',
                'slug' => 'tidak-semua-sampah-plastik-bisa-didaur-ulang-loh',
                'body' => 'Berdasarkan sifatnya, Sobat SAGA pasti tahu bahwa limbah dapat dibagi menjadi dua, yaitu limbah organic dan limbah anorganik. Dari berbagai jenis limbah anorganik, limbah plastic adalah salah satu jenis limbah yang paling banyak dihasilkan.

                Apakah Sobat SAGA tahu bahwa sampah plastic sebanyak 1,3 miliar ton diperkirakan akan mencemari daratan dan lautan dunia dalam kurang lebih 20 tahun mendatang? Temuan ini disampaikan oleh Dr. Costas Velis dari Universitas Leeds, Inggris. Limbah mikroplastik yang mencemari lautan secara tidak langsung akan ditelan oleh ikan, tiram, dan biota laut lainnya. Apabila kita memakan ikan dan juga tiram tersebut, maka secara tanpa sadar tubuh kita pun akan menyerap racun-racun plastic yang berbahaya bagi kesehatan kita. 
                
                Untuk itu, kita bisa membantu mengurangi sampah plastic dengan cara yang paling sederhana seperti 3R (reduce, Reuse, dan Recycle). Recycle merupakan cara yang paling sering dipakai masyarakat selama ini untuk mengelola sampah yang dihasilkan. Nah, penting bagi kita untuk mengetahui jenis plastic yang akan kita daur ulang nantinya, karena tidak semua plastic bisa didaur ulang dengan mudah. Untuk membedakannya, plastic memiliki kode masing-masing yang bisa ditemukan pada kemasan. Apa saja itu?
                a.	PET atau PET
                Polythylene terephthalate adalah jenis plastic yang paling sering kita temukan. PET atau PETE ini biasanya digunakan pada botol kemasan air minum, minyak, toples selai kacang, dan masih banyak produk makanan lainnya. Jenis ini merupakan jenis plastic yang dapat didaur ulang.
                b.	HDPE
                High density polyethylene atau HDPE juga termasuk jenis plastic yang sering kita jumpai. Biasanya, jenis ini digunakan untuk botol shampoo, susu, dan detergen. HDPE merupakan jenis plastic yang bisa kita daur ulang.
                c.	PVC
                Polyvinyl chloride adalah salah satu jenis plastic yang sulit untuk didaur ulang. Polyvinyl chloride atau PVC bersifat lunak dan fleksibel. Biasanya sering digunakan untuk membuat pipa, mainan anak-anak, dan peralatan rumah tangga.
                d.	LDPE
                Low density polyethylene merupakan jenis plastic yang sering digunakan untuk membungkus roti, sayuran, Koran, dan digunakan sebagai kantong belanja. Jenis ini termasuk kedalam jenis yang sulit untuk didaur ulang.
                e.	PP
                PP atau Polypropylene digunakan untuk kemasan makanan seperti margarin dan yogurt. Selain itu plastic jenis PP juga digunakan sebagai sedotan, karet, karpet, dan tutup botol. 
                f.	PS
                Plastik jenis polystyrene ini merupakan salah satu jenis yang sangat sulit untuk didaur ulang. Contohnya adalah Styrofoam yang sering kita gunakan sebagai wadah makanan yang dibungkus. Oleh karena itu, usahakan untuk menggunakan jenis lain atau lebih baiknya membawa wadah sendiri ya ketika kalian membeli makanan!
                g.	Lain-lain
                Semua produk yang tidak termasuk dalam kategori yang sudah disebutkan atau bahkan campuran dari jenis diatas, termasuk dalam jenis lain-lain. Jenis tersebut diantaranya adalah polycarbonate dan polyactic acid (PLA) yang terbuat dari tanaman dan ramah lingkungan. Contoh dari jenis ini adalah bahan antipeluru, DVD, kacamata hitam, dan peralatan elektronik.
                
                Nah, gimana Sobat SAGA? Sekarang sudah tahu kan jenis-jenis dari plastic? Sekarang kita bisa lebih mudah untuk memilah sampah plastic mana yang bisa kita daur ulang nantinya. Oh iya, dengan SAGA, kita juga akan lebih mudah untuk mengelola sampah kita nantinya, yang pastinya no ribet! Yuk bergabung bersama kami!
                ']);

            // 7
            Artikel::create([
                'category_id' => 4,
                'title' => 'Edukasi Pengolahan Sampah bersama Mahasiswa UI',
                'slug' => 'edukasi-pengolahan-sampah-bersama-mahasiswa-ui',
                'body' => 'Tim Pengabdian Masyarakat Program Pendidikan Vokasi Universitas Indonesia menggelar kegiatan Green Action : Edukasi Pengolahan Sampah Menjadi Barang Bernilai Manfaat di RW 13 Kelurahan Tanah Baru, Kecamatan Beji, kota Depok.

                Kegiatan yang dilaksanakan pada tanggal 1 Desember 2020 ini terbagi dalam dua tahap. Tahap pertama yaitu tutorial membuat pot plastic dari botol air mineral dan tahap kedua merupakan edukasi mencacah daun untuk diolah menjadi kompos dan pemberian hibah pencacah daun. Captain Greco (Green Compost) diciptakan sebagai mascot dari acara yang dilaksanakan oleh dua dosen Program Studi Hubungan Masyarakat dan tiga mahasiswa Vokasi UI untuk memudahkan penangkapan informasi. 
                
                Kegiatan ini bertujuan untuk tertransformasinya kesadaran, komitmen, kemauan, pengetahuan, keterampilan, dan afeksi komunitas masyarakat sekitar mengenai pengelolaan sampah yang baik. Selain itu, Green Action ini juga bertujuan untuk membangun pengetahuan tentang pengelolaan sampah khususnya daun, ranting, dan juga plastic. Edukasi ini disampaikan secara tatap muka serta dalam bentuk video tutorial, poster, dan banner edukasi. Dalam video, pengurus RW dan kader PKK diajarkan bagaimana cara membuat pot dari botol bekas air minuman.
                Kegiatan ini disambut baik oleh Ketua RW 13, Sutarto. Sampah daun dan plastic memang memiliki volume yang tinggi dan perlu dikelola dengan baik. Pada masa pendemi ini masyarakat menjadi suka bercocok tanam, sehingga kegiatan membuat pot dari botol plastic bisa menjadi alternative untuk menjadi wadah tanam, ujarnya.
                
                Waah seru sekali ya Sobat SAGA! Kegiatan apa saja nih yang sudah kalian lakukan dalam mengatasi permasalahan pada sampah selama pandemic ini? Jangan lupa ajak teman kalian dalam melakukan hal yang baik juga ya!
                '
            ]);

            // 8
            Artikel::create([
                'category_id' => 4,
                'title' => 'Yuk Kita Kelola Limbah Masker Bersama Mahasiswa',
                'slug' => 'yuk-kita-kelola-limbah-masker-bersama-mahasiswa',
                'body' => 'Mahasiswa KKN Tim II tahun 2021 dari prodi Rekayasa Perancangan Mekanik, Fakultas Vokasi Universitas Diponegoro mengadakan kegiatan pemberdayaan masyarakat dalam mengelola limbah masker sekali pakai. Kegiatan itu dilakukan di Desa Pasuruhan Lor pada tanggal 22 Juli 2021. Sasaran kegiatan ini bukan hanya untuk masyarakat yang masih muda saja, tetapi juga lansia. Wih, sepertinya menarik ya Sobat!

                Program ini dilaksanakan karena rendahnya kesadaran masyarakat mengenai pengelolaan sampah masker. Masker medis sekali pakai merupakan sampah yang infeksius sehingga dapat menjadi media penyebaran virus Covid-19 jika tidak dikelola terlebih dahulu dengan benar sebelum dibuang. Oleh karena itu, mereka berupaya untuk memberikan penyuluhan dan edukasi kepada masyarakat mengenai cara pengelolaan sampah masker dalam rumah tangga. Seiring dengan meningkatnya kasus penyebaran virus Covid-19 di Kabupaten Kudus beberapa minggu ini, diharapan masyarakat dapat terhindar dari penularan virus, sehingga dapat menekan angka kenaikan kasusnya.
                
                Yuk kita intip rangkaian kegiatannya!
                Kegiatan ini diawali dengan survey lingkungan warga sekitar lelalui sosial media, selanjutnya mereka memberikan edukasi mengenai pengelolaan limbah masker yang dilakukan secara online menggunakan Zoom meeting serta menjelaskan secara langsung ke masyarakat dan memberikan poster. Komitmen masyarakat untuk melaksanakan pengelolaan limbah masker medis secara mandiri menunjukkan antusiasme masyarakat yang tinggi. Selain itu, mereka juga bersedia untuk mengajak masyarakat yang lain untuk melakukan kegiatan tersebut. 
                
                Senang sekali ya masyarakat luas mulai mengenal bagaimana cara untuk mengelola limbah, terutama limbah masker selama pandemi ini. Berkat bantuan teman-teman mahasiswa Undip juga pastinya! Sobat SAGA jangan mau kalah yaaa, yuk share artikel dari SAGA agar makin banyak masyarakat yang tahu bagaimana cara mengelola sampah yang baik!
                ']);

            // 9
            Artikel::create([
                'category_id' => 3,
                'title' => 'Limbah jerami sebagai pengganti plastik, kok bisa?',
                'slug' => 'limbah-jerami-sebagai-pengganti-plastik-kok-bisa',
                'body' =>'Pandemi Covid-19 membuat penggunaan plastic semakin meningkat. Berdasarkan data dari Kementerian Lingkungan Hidup dan Kehutanan (KLHK) tahun 2020 sebesar 17% komposisi sampah di Indonesia merupakan sampah plastic. Tingginya peningkatan jumlah sampah plastic mendorong teman-teman kita dari Universitas Diponegoro untuk membuat kemasan alternative pengganti plastic yang ramah lingkungan yaitu biofoam nih Sobat! Melalui Program Kreativitas Mahasiswa Pengabdian Masyarakat, team yang beranggotakan Nur Chofifa, Fitri Dwi Nurlaili, Jelita Mutiara Hati, dan Karina Harry Purbawati ini memanfaatkan limbah jerami sebagai bahan baku biofoam. Kegiatan yang dibimbing oleh Ibu Heny Kusumayanti, S.T., M.T. ini dilaksanakan di Desa Sumbergedong, Kecamatan Trenggalek. 

                Kenapa pakai jerami ya?
                Limbah jerami dipilih karena merupakan bahan lignoselulosa yang mengandung 37,71% selulosa yang memiliki sifat termoplastik sehingga mudah untuk dibentuk. Selain itu, limbah jerami juga mudah ditemukan di Desa Sumbergedong yang dihasilkan dari lahan pertanian pasca panen. Jadi, selain menghasilkan produk biofoam yang ramah lingkungan, kegiatan ini juga bermanfaat untuk mengurangi limbah dan pencemaran lingkungan.
                
                Bahan untuk membuat biofoam apa aja sih?
                Jerami dan tepung terigu adalah bahan baku utama dari pembuatan biofoam ini. Selain itu bahan lain digunakan yaitu bubuk NaOH 10% dan PVA. NaOH sendiri berfungsi sebagai bahan aktif untuk melarutkan lignin dan karbohidrat sehingga selulosa dapat terlepas dari ikatannya. 
                
                Lalu, gimana cara pembuatannya?
                Cara pembuatannya terdiri atas 3 tahap, yaitu pulping, pembuatan adonan, dan yang terakhir adalah pencetakan. Pada tahap pulping, jerami dicuci lalu potong menjadi kecil-kecil. selanjutnya ditambahkan NaOH dengan perbandingan jerami:NaOH sebanyak 4:1. Setelah itu, menambahkan air secukupnya lalu direbus selama kurang lebih 60 menit. Pada tahap pembuatan adonan, dimulai dengan mencuci rebusan jerami lalu diblender hingga halus. Setelah halus, adonan ditambahkan tepung tapioca dengan perbandingan 1:4. Tahap terakhir adalah pencetakan yaitu press adonan biofoam, lalu dioven hingga kadar air hilang selama 25 menit. Biofoam pun siap untuk digunakan.
                
                Nah, Sobat SAGA tahu tidak kalau biofoam ini lebih baik bila dibandingkan dengan Styrofoam? Biofoam sendiri dapat diuraikan secara alami dan mudah dalam pembuatannya serta tidak mengandung bahan kimia yang berbahaya bagi lingkungan loh! Dengan adanya program ini diharapkan bisa menjadi salah satu upaya dalam meningkatkan kesadaran masyarakat tentang pentingnya menjaga lingkungan, salah satunya dengan pemanfaatan sampah atau limbah yang tidak terpakai.
                ']);
        // akhir artikel -----------------
    }
}
