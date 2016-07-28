# laravel-tcpdf
Custom Font View PDF Generator

# Requirement
laravel 5 or greater than

# Configure
config/app.php

provider
BeyondPlus\TCPDF\TcpdfServiceProvider::class,
Elibyy\TCPDF\ServiceProvider::class,

aliases
'MMTCPDF'     => BeyondPlus\TCPDF\Facades\MMTCPDF::class,

# Usage
$fontname = TCPDF::font('Zawgyi-One');
TCPDF::SetFont($fontname , 11);
TCPDF::SetTitle('Record Report');
TCPDF::AddPage('P','A4');
TCPDF::writeHtml("Myanmar Words");
TCPDF::Output('report.pdf', 'I');

# Example
$query = Database::get();
$fontname = TCPDF::font('Zawgyi-One');
TCPDF::SetFont($fontname , 11);
TCPDF::SetTitle('Record Report');
TCPDF::AddPage('P','A4');
TCPDF::writeHtml(view('pdf', array('records'=> $query)));
TCPDF::Output('report.pdf', 'I');

# Website
[www.beyondplus.net](http://www.beyondplus.net)
