<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Permission;
use App\Models\LicenseModel;
use App\Models\ShopsModel;
use App\Models\UsersModel;
use CodeIgniter\HTTP\RedirectResponse;

class DashboardAjax extends BaseController
{
    protected $usersModel;
    protected $licenseModel;
    protected $shopsModel;
    protected $permission;
    protected $validation;
    protected $session;
    private $module_name = 'Dashboard';

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->licenseModel = new LicenseModel();
        $this->shopsModel = new ShopsModel();
        $this->permission = new Permission();
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }

    /**
     * @description This method provides view
     * @return RedirectResponse|void
     */
    public function index()
    {
        $isLoggedIn = $this->session->isLoggedIn;
        $role_id = $this->session->role;
        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {

            $shopId = $this->session->shopId;
            // Total Product count (start)
            $proTable = DB()->table('products');
            $totalProduct = $proTable->where('sch_id', $shopId)->countAllResults();
            // Total Product count (end)

            // Total Customer count (start)
            $cousTable = DB()->table('customers');
            $totalCustomer = $cousTable->where('sch_id', $shopId)->countAllResults();
            // Total Customer count (end)

            $data = array(
                'totalProduct' => $totalProduct,
                'totalCustomer' => $totalCustomer,
            );

            // All Permissions
            //$perm = array('create','read','update','delete','mod_access');
            $perm = $this->permission->module_permission_list($role_id, $this->module_name);
            foreach ($perm as $key => $val) {
                $data[$key] = $this->permission->have_access($role_id, $this->module_name, $key);
            }

            if (isset($data['mod_access']) and $data['mod_access'] == 1) {
                echo view('Admin/Dashboard/dashboard', $data);
            } else {
                echo view('no_permission');
            }

        }
    }
}