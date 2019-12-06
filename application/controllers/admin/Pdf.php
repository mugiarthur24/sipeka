<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Admin_m');
        $this->load->library('TCPDF/tcpdf');
    }
 
    public function index()
    {
    	// $this->load->library('pdf');
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(false);
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->AddPage('');
        $pdf->Write(0, 'Simpan ke PDF', '', 0, 'L', true, 0, false, false, 0);
        $pdf->SetFont('');
 
        $tabel = '
        <div class="row" style="margin-top: 9px;">
      <div class="col text-center">
        <table width="100%">';
        $table .= '<tr>
            <td align="text-center"><img src="'.<?php echo base_url('asset/img/lembaga/logo-garuda-pancasila-gold.jpg') ?>.'" width="100px" height="100"></td>
          </tr>

          $tabel .= '<tr>
            <td><h5>BUPATI BUTON SELATAN</h5></td>
          </tr>
        </table>
      </div>
    </div>



        <p align="right">Bekasi, 17 Maret 2012<br>
         Hal: Lamaran Pekerjaan<br>
         <br>
         <p align="left">Kepada Yth,<br>
         Bpk.Fadli Restu Dharmawan<br>
         PT. Asuransi Jiwa Sinarmas MSIG<br>
         Jl. Wisma Eka Jiwa lt.9<br>
         Jakarta Pusat<br>
         <br>
         <p align="left">Dengan hormat,<br>
         <br>
         <p align="left"> Bersama ini saya sampaikan keinginan saya untuk melamar pekerjaan sebagaimana dimaksud dalam iklan lowongan pekerjaan diharian pos kota tanggal 15 Maret 2012. Data singkat saya, seperti berikut ini:<br>
         Nama: Lisa Apriany<br>
         Tempat & Tgl lahir : Jakarta 06 April 1995<br>
         Pendidikan terakhir : SMK Sederajat<br>
         Alamat : Kavling, kelapadua Rt.03/07 No.104 Padurenan, Bekasi.<br>
         Telpon, Hp, e-mail : 021-94588567, 083875701080, chaa.tiicha@yahoo.com.<br>
         Status Perkawinan : Lajang<br>
         Sebagai bahan pertimbangan bersama ini saya lampirkan:<br>
         1. Surat Permohonan<br>
         2. Daftar Riwayat Hidup<br>
         3. Foto copy Ijazah<br>
         4. Foto copy KTP<br>
         5. Foto copy SKCK<br>
         6. Pas foto 4x6 : 2 lembar<br>
         <br>
         <p align="left">Saya berharap Bapak/Ibu bersedia meluangkan waktu untuk memberikan kesempatan wawancara, sehingga saya dapat menjelaskan secara lebih terinci tentang potensi diri saya.<br>
         <br>
         <p align="left"> Atas perhatian Bapak/Ibu, saya ucapkan terima kasih.<br>
         <br>
         <p align="left">Hormat saya,<br>
         <br>
         <p align="left">Lisa Apriany
        ';
        $pdf->writeHTML($tabel);
        $pdf->Output('file-pdf-codeigniter.pdf', 'D');
    }
 
}