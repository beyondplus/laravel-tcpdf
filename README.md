# laravel-tcpdf
Custom Font View PDF Generator

# Requirement
laravel 5 or greater than

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
MMTCPDF::AddPage ->
P = Portrait
L = Landscape

MMTCPDF::Output ->
F = localserver download
D = download
I = inline
```

## License

The Beyond Plus CMS is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

# Website
[www.beyondplus.net](http://www.beyondplus.net)
