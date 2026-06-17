
<?php
$curUrl = current_url(true);
//$curUrl = $current_url;
$url = new \CodeIgniter\HTTP\URI($curUrl);


$uri = $url->getSegment(3);
$uri2 = $url->getSegment(4);
$uri3 = $url->getSegment(4);



$displayinv = '';
$backinv = 'display: none';
if ($uri == 'Invoice') {$displayinv = 'display: none';}
if (($uri == 'Invoice') && ($uri2 == 'view') || ($uri3 == 'view') || ($uri2 == 'search') ) {$backinv = ''; }
if ($uri == 'Invoice_ajax') {$displayinv = 'display: none';}
if (($uri == 'Invoice_ajax') && ($uri2 == 'view') || ($uri3 == 'view') || ($uri2 == 'search') ) {$backinv = ''; }

if (($uri == 'Purchase_report')  && ($uri2 == 'search') ) {$backinv = 'display: none'; }
if (($uri == 'Purchase_report_ajax')  && ($uri2 == 'search') ) {$backinv = 'display: none'; }
?>

<a href="#" onclick="showData('<?php echo site_url('/Admin/Invoice_ajax') ?>','/Admin/Invoice')" class="btn btn-default" style="<?php echo $displayinv;?>">Invoice</a>

<a href="#" onclick="showData('<?php echo site_url('/Admin/Invoice_ajax') ?>','/Admin/Invoice')" class="btn btn-default" style="<?php echo $backinv;?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>


<a href="#" onclick="showData('<?php echo site_url('/Admin/Stock_report_ajax') ?>','/Admin/Stock_report')" class="btn btn-default">Stock Report</a>



