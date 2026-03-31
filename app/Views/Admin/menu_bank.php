
<?php
$curUrl = current_url(true);
//$curUrl = $current_url;
$url = new \CodeIgniter\HTTP\URI($curUrl);


$uri = $url->getSegment(3);
$uri2 = $url->getSegment(4);
$uri3 = $url->getSegment(4);



$bankBack ='display: none';
$bankAdd ='display: none';
$bank ='';

if ($uri == 'Bank') { $bank ='display: none'; $bankAdd = '';}
if (($uri == 'Bank') && ($uri2 == 'create') || ($uri == 'Bank') && ($uri3 == 'create') || ($uri == 'Bank') && ($uri2 == 'read') || ($uri == 'Bank') && ($uri3 == 'read') || ($uri == 'Bank') && ($uri2 == 'update') || ($uri == 'Bank') && ($uri3 == 'update')){ $bank ='display: none'; $bankAdd = 'display: none'; $bankBack ='';}

if ($uri == 'Bank_ajax') { $bank ='display: none'; $bankAdd = '';}
if (($uri == 'Bank_ajax') && ($uri2 == 'create') || ($uri == 'Bank_ajax') && ($uri3 == 'create') || ($uri == 'Bank_ajax') && ($uri2 == 'read') || ($uri == 'Bank_ajax') && ($uri3 == 'read') || ($uri == 'Bank_ajax') && ($uri2 == 'update') || ($uri == 'Bank_ajax') && ($uri3 == 'update')){ $bank ='display: none'; $bankAdd = 'display: none'; $bankBack ='';}

?>

<a href="#" onclick="showData('<?php echo site_url('Admin/Bank_ajax/create/'); ?>','<?php echo '/Admin/Bank/create/';?>')"  class="btn btn-default" style="<?php echo $bankAdd;?>">Add</a>
<a href="#" onclick="showData('<?php echo site_url('/Admin/Bank_ajax') ?>','/Admin/Bank/')" class="btn btn-default" style="<?php echo $bankBack;?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>







<a href="#" onclick="showData('<?php echo site_url('/Admin/Bank_ajax') ?>','/Admin/Bank')" class="btn btn-default" style="<?php echo $bank;?>">Bank</a>



<a href="#" onclick="showData('<?php echo site_url('/Admin/Chaque_ajax') ?>','/Admin/Chaque')" class="btn btn-default">Chaque</a>