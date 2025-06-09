<?php
include 'header.php';
?>
<div id="cetakIni2" class="container-fluid pt-5">
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example p-3 rounded-2" tabindex="0">
        <h4 class="text-black pt-3 pb-3" id="scrollspyHeading1" >🧠 Struktur data</h4>
        <div class="pb-3 animate__animated animate__zoomIn">Struktur data adalah cara atau metode yang digunakan untuk mengatur, menyimpan, dan mengelola data di dalam komputer, agar data tersebut bisa digunakan dengan efisien dan mudah diakses.
            Dalam dunia informatika, data sangat penting. Tanpa cara yang baik untuk menyimpan dan mengelola data, maka program komputer akan sulit bekerja dengan baik. Struktur data membantu komputer mengetahui di mana letak data, bagaimana cara mengambilnya, dan apa yang harus dilakukan terhadap data tersebut.
        </div>
        <div class="mt-2 mb-4">
            <div class="container animate__animated animate__zoomIn">
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="card shadow1">
                            <img src="../img/strukturdata.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">Ilustrasi struktur data</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="text-black pt-3 pb-3" id="scrollspyHeading2" >Contoh</h4>
        <div class="row mt-4 mb-4 d-flex align-items-stretch">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card mx-auto shadow1" style="width: 18rem;">
                    <img src="../img/data1.jpg" class="card-img-top img-fluid" alt="...">
                    <!-- <div class="card-body">
                        <p class="card-text text-center">Ilustrasi informatika</p>
                    </div> -->
                </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card h-100 shadow2 " style="background: linear-gradient(to right, #8e2de2, #4a00e0); color: white;">
                    <div class="card-body">
                        <h5 class="card-title">📋 Mengapa Struktur Data Penting?</h5>
                        <div class="card-text">
                            <p>1. Membuat program lebih teratur dan rapi </p>
                            <p>2. Membantu komputer dalam menyimpan dan mencari data dengan cepat </p>
                            <p>3. Mengurangi penggunaan memori yang berlebihan </p>
                            <p>4. Membantu mengolah data lebih efisien</p>
                            <p>Tanpa struktur data, data akan berantakan dan sulit digunakan. Misalnya, bayangkan jika perpustakaan tidak memiliki rak atau label — akan sangat sulit mencari buku yang diinginkan. Begitu juga di komputer, data perlu diatur dengan baik agar bisa digunakan dengan mudah.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card mx-auto shadow1" style="width: 18rem;">
                    <img src="../img/data2.jpg" class="card-img-top img-fluid" alt="...">
                    <!-- <div class="card-body">
                        <p class="card-text text-center">Ilustrasi informatika</p>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4 d-flex justify-content-center">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card h-100 shadow2 " style="background: linear-gradient(to right, #6441a5, #2a0845); color:white;">
                    <div class="card-body">
                        <h5 class="card-title">📦 Contoh Nyata:</h5>
                        <div class="card-text">
                            <p>Jika kamu menyimpan daftar nilai ulangan teman-teman sekelasmu, kamu bisa menggunakan array, yaitu struktur data yang menyimpan data secara berurutan. Jika kamu ingin membuat sistem antrean untuk cetak tugas di laboratorium komputer, kamu bisa memakai struktur data queue (antrian), di mana yang datang lebih dulu akan dilayani lebih dulu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="text-black pt-3 pb-3" id="scrollspyHeading3" >jenis struktur data</h4>
        <div class="row mt-4 mb-4 d-flex align-items-stretch">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card h-100 shadow2 " style="background: linear-gradient(to right, #8e2de2, #4a00e0); color: white;">
                    <div class="card-body">
                        <h5 class="card-title"> ✅ Jenis Struktur Data Linear :</h5>
                        <div class="card-text">
                            <p>1. Array</p>
                            <p>Menyimpan elemen dalam indeks yang berurutan.</p>
                            <p>2. Linked List </p>
                            <p>Setiap elemen (node) memiliki data dan referensi ke elemen berikutnya.</p>
                            <p>3. Stack (Tumpukan)</p>
                            <p>Prinsip LIFO (Last In First Out) elemen terakhir yang masuk, dikeluarkan pertama.</p>
                            <p>4. Queue (Antrian)</p>
                            <p>Prinsip FIFO (First In First Out) elemen pertama yang masuk, dikeluarkan pertama.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card h-100 shadow2" style="background: linear-gradient(to left, #8e2de2, #4a00e0); color: white;">
                    <div class="card-body">
                        <h5 class="card-title">✅ Jenis Struktur Data non-Linear :</h5>
                        <div class="card-text">
                            <p>1. Tree (Pohon)</p>
                            <p>Terdiri dari node yang memiliki hubungan hierarki (misalnya pohon biner).</p>
                            <p>2. Graph (Graf) </p>
                            <p>Terdiri dari node (simpul) dan edge (sisi) yang menghubungkan antar node, bisa membentuk hubungan kompleks antar data.</p>
                            <p>3. Heap</p>
                            <p>Pohon khusus yang memenuhi sifat heap, biasa digunakan dalam algoritma pengurutan atau penjadwalan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="text-black pt-3 pb-3" id="scrollspyHeading4" >Fungsi Struktur data</h4>
        <div class="row mt-4 mb-4 d-flex align-items-stretch">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card h-100 shadow2 " style="background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                    <div class="card-body">
                        <h5 class="card-title">📋Efisiensi Penyimpanan (Storage Efficiency)</h5>
                        <div class="card-text">
                            <p>
                                Struktur data membantu dalam mengelola memori secara efisien dengan
                                menyusun data dalam format yang sesuai. Misalnya, array menggunakan
                                ruang memori yang tetap, sementara linked list bisa menggunakan memori
                                secara dinamis sesuai kebutuhan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card h-100 shadow2 " style="background-image: linear-gradient(180deg, #2af598 0%, #009efd 100%); color: white;">
                    <div class="card-body">
                        <h5 class="card-title">📋 Akses Data yang Cepat (Fast Data Access)</h5>
                        <div class="card-text">
                            <p>
                                Struktur data memungkinkan akses cepat ke data tertentu. Misalnya, hash
                                table memungkinkan pencarian data dengan kompleksitas waktu rata-rata
                                O(1), yang sangat cepat dibandingkan dengan metode pencarian lainnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card h-100 shadow2 " style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%); color: white;">
                    <div class="card-body">
                        <h5 class="card-title">📋 MManipulasi Data yang Mudah (Ease of Data Manipulation)</h5>
                        <div class="card-text">
                            <p>Dengan struktur data yang tepat, manipulasi data seperti penambahan,
                                penghapusan, dan modifikasi dapat dilakukan dengan lebih efisien.
                                Contoh: linked list memungkinkan penambahan dan penghapusan elemen
                                di tengah-tengah struktur dengan mudah, dibandingkan dengan array.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4 d-flex align-items-stretch justify-content-center">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card h-100 shadow2 " style="background-image: linear-gradient(to right, #b8cbb8 0%, #b8cbb8 0%, #b465da 0%, #cf6cc9 33%, #ee609c 66%, #ee609c 100%); color: white;">
                    <div class="card-body">
                        <h5 class="card-title">📋Efisiensi Penyimpanan (Storage Efficiency)</h5>
                        <div class="card-text">
                            <p>
                                Struktur data membantu dalam mengelola memori secara efisien dengan
                                menyusun data dalam format yang sesuai. Misalnya, array menggunakan
                                ruang memori yang tetap, sementara linked list bisa menggunakan memori
                                secara dinamis sesuai kebutuhan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card h-100 shadow2 " style="background-image: linear-gradient(to top, #0ba360 0%, #3cba92 100%); color: white;">
                    <div class="card-body">
                        <h5 class="card-title">📋 Akses Data yang Cepat (Fast Data Access)</h5>
                        <div class="card-text">
                            <p>
                                Struktur data memungkinkan akses cepat ke data tertentu. Misalnya, hash
                                table memungkinkan pencarian data dengan kompleksitas waktu rata-rata
                                O(1), yang sangat cepat dibandingkan dengan metode pencarian lainnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="text-black pt-3 pb-3" id="scrollspyHeading5">Video</h4>
        <div class="row">
            <div class="col-md-12 p-3">
                <h4>Untuk lebih memahami materi bisa membuka video berikut:</h4>
                <div class="ratio ratio-16x9 mx-auto" style="max-width: 800px;"> <--- Tambahkan mx-auto dan max-width
                        <iframe src="https://www.youtube.com/embed/YzvWKMb1bgQ?si=prGH5VHFeVwHgu3j" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>