# laravel-tcpdf
Custom Font View PDF Generator

# Requirement
laravel 5 or greater than

# Configure

Find config/app.php in Project Folder
```html
Search provider and add this lines

BeyondPlus\TCPDF\TcpdfServiceProvider::class,
Elibyy\TCPDF\ServiceProvider::class,

Search aliases and add this lines

'MMTCPDF'     => BeyondPlus\TCPDF\Facades\MMTCPDF::class,
```
# Usage
```html
$fontname = TCPDF::font('Zawgyi-One');
TCPDF::SetFont($fontname , 11);
TCPDF::SetTitle('Record Report');
TCPDF::AddPage('P','A4');
TCPDF::writeHtml("Myanmar Words");
TCPDF::Output('report.pdf', 'I');
```
# Example
```html
$query = Database::get();
$fontname = TCPDF::font('Zawgyi-One');
TCPDF::SetFont($fontname , 11);
TCPDF::SetTitle('Record Report');
TCPDF::AddPage('P','A4');
TCPDF::writeHtml(view('pdf', array('records'=> $query)));
TCPDF::Output('report.pdf', 'I');
```
# Website
[www.beyondplus.net](http://www.beyondplus.net)
