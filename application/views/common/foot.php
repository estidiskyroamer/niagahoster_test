    <footer>
        <div class='container'>
            <div class='row'>
                <div class='col'>
                    <h5>HUBUNGI KAMI</h5>
                    <p>0274-5305505<br>Senin - Minggu<br>24 Jam Nonstop</p>
                    <p>Jl. Selokan Mataram Monjali<br>Karangjati MT I/304<br>Sinduadi, Mlati, Sleman<br>Yogyakarta 55284</p>
                </div>
                <div class='col'>
                    <h5>LAYANAN</h5>
                    <p><a href='#'>Domain</a><br><a href='#'>Shared Hosting</a><br><a href='#'>Cloud VPS Hosting</a><br><a href='#'>Managed VPS Hosting</a><br><a href='#'>Web Builder</a><br><a href='#'>Keamanan SSL/HTTPS</a><br><a href='#'>Jasa Pembuatan Website</a><br><a href='#'>Program Afiliasi</a><br></p>
                </div>
                <div class='col'>
                    <h5>SERVICE HOSTING</h5>
                    <p><a href='#'>Hosting Murah</a><br><a href='#'>Hosting Indonesia</a><br><a href='#'>Hosting Singapura SG</a><br><a href='#'>Hosting PHP</a><br><a href='#'>Hosting Wordpress</a><br><a href='#'>Hosting Laravel</a><br></p>
                </div>
                <div class='col'>
                    <h5>TUTORIAL</h5>
                    <p><a href='#'>Knowledgebase</a><br><a href='#'>Blog</a><br><a href='#'>Cara Pembayaran</a><br></p>
                </div>
            </div>
            <div class='row'>
                <div class='col'>
                    <h5>TENTANG KAMI</h5>
                    <p><a href='#'>Tim Niagahoster</a><br><a href='#'>Karir</a><br><a href='#'>Events</a><br><a href='#'>Penawaran & Promo Spesial</a><br><a href='#'>Kontak Kami</a><br></p>
                </div>
                <div class='col'>
                    <h5>KENAPA PILIH NIAGAHOSTER?</h5>
                    <p><a href='#'>Support Terbaik</a><br><a href='#'>Garansi Harga Termurah</a><br><a href='#'>Domain Gratis Selamanya</a><br><a href='#'>Datacenter Hosting Terbaik</a><br><a href='#'>Review Pelanggan</a><br></p>
                </div>
                <div class='col'>
                    <h5>NEWSLETTER</h5>
                    <div class='input-group rounded-pill'>
                        <input type='text' placeholder="Email" class='form-control rounded-pill'>
                        <div class='input-group-append'><button class='btn btn-primary rounded-pill'>Berlangganan</button></div>
                    </div>
                    
                    <p class='footer_caption'>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</p>
                </div>                
                <div class='col' id='social_media'>
                    <a href='#'><img src='<?php echo base_url('public/images/fb.jpeg'); ?>'></a>
                    <a href='#'><img src='<?php echo base_url('public/images/tw.jpeg'); ?>'></a>
                    <a href='#'><img src='<?php echo base_url('public/images/gp.jpeg'); ?>'></a>
                </div>
            </div>
            <div class='row'>
                <div class='col'>
                    <h5>PEMBAYARAN</h5>
                    <img src='<?php echo base_url('public/images/payment.jpeg'); ?>'>
                    <br><br>
                    <p class='footer_caption'>Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
                </div>
            </div>
            <hr>
            <div class='row bottom_notes'>
                <div class='col-lg-8'>
                    <p>Copyright &copy;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta<br>
                    Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
                </div>
                <div class='col-lg-4'>
                    <p class='text-right'><a href='#'>Syarat dan Ketentuan</a> | <a href='#'>Kebijakan Privasi</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url('public/plugins/jquery-3.6.0/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('public/plugins/bootstrap-5.1.3/js/bootstrap.bundle.min.js')?>"></script>
    <script>
        function get_pricing(){
            $.getJSON('public/js/pricing.json', function(data){
                $.each(data, function(i, obj){
                    var id_paket = obj.paket.toLowerCase();
                    $('#'+id_paket+' .old_price').html(obj.price_old);
                    var new_price = obj.price_new.split('.');
                    $('#'+id_paket+' .new_price').html('<span class="price_highlight">'+new_price[0]+'</span>.'+new_price[1]);
                })
            })
        }
        $(document).ready(function(){
            get_pricing();
        })
    </script>
</html>p