# laravel-tcpdf
Custom Font View PDF Generator

# Requirement
laravel 5.4

# Configure

Find config/app.php in Project Folder
```
'providers' => [
    //...
Elibyy\TCPDF\ServiceProvider::class,
BeyondPlus\TCPDF\TcpdfServiceProvider::class,
]
//...

'aliases' => [
    //...
'MMTCPDF'     => BeyondPlus\TCPDF\Facades\MMTCPDF::class,
]
```
# Usage
```
use MMTCPDF;

At function

$fontname = MMTCPDF::font('Zawgyi-One');
//$fontname = MMTCPDF::font('Myanmar3');
MMTCPDF::SetFont($fontname , 11);
MMTCPDF::SetTitle('Record Report');
MMTCPDF::AddPage('P','A4');
MMTCPDF::writeHtml("Myanmar Words");
MMTCPDF::Output('report.pdf', 'I');
```
# Example
```
$query = Database::get();
$fontname = MMTCPDF::font('Zawgyi-One');
MMTCPDF::SetFont($fontname , 11);
MMTCPDF::SetTitle('Record Report');
MMTCPDF::AddPage('P','A4');
MMTCPDF::writeHtml(view('pdf', array('records'=> $query)));
MMTCPDF::Output('report.pdf', 'I');
```
```
Margin
MMTCPDF::SetMargins(1, 1, 1);

Paper Size
MMTCPDF::AddPage ->
P = Portrait
L = Landscape

MMTCPDF::Output ->
F = localserver download
D = download
I = inline

$pagelayout = array('80', '210');
MMTCPDF::AddPage('P',$pagelayout);

// Background Image (width x height unit mm)
$img_file = public_path('upload/').'images.jpg';
MMTCPDF::setBgImage($img_file, 210, 148);
```
Implemented [elibyy/tcpdf-laravel](https://packagist.org/packages/elibyy/tcpdf-laravel)

## License

The Beyond Plus Laravel TCPDF is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

# Website
[www.beyondplus.biz](http://www.beyondplus.biz)
