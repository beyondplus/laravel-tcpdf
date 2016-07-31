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
$fontname = TCPDF::font('Zawgyi-One');
//$fontname = TCPDF::font('Myanmar3');
TCPDF::SetFont($fontname , 11);
TCPDF::SetTitle('Record Report');
TCPDF::AddPage('P','A4');
TCPDF::writeHtml("Myanmar Words");
TCPDF::Output('report.pdf', 'I');
```
# Example
```
$query = Database::get();
$fontname = TCPDF::font('Zawgyi-One');
TCPDF::SetFont($fontname , 11);
TCPDF::SetTitle('Record Report');
TCPDF::AddPage('P','A4');
TCPDF::writeHtml(view('pdf', array('records'=> $query)));
TCPDF::Output('report.pdf', 'I');
```

TCPDF::Output param  -> F localserver download, D download, I inline


# Website
[www.beyondplus.net](http://www.beyondplus.net)
