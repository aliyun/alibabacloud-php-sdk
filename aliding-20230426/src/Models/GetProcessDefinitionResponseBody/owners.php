<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\owners\masterDataDepartments;

class owners extends Model
{
    /**
     * @var string
     */
    public $departmentDescription;

    /**
     * @var string
     */
    public $displayEnName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var masterDataDepartments[]
     */
    public $masterDataDepartments;

    /**
     * @var string
     */
    public $orderNumber;

    /**
     * @var string
     */
    public $personalPhoto;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tbWang;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userInfo;
    protected $_name = [
        'departmentDescription' => 'DepartmentDescription',
        'displayEnName' => 'DisplayEnName',
        'displayName' => 'DisplayName',
        'masterDataDepartments' => 'MasterDataDepartments',
        'orderNumber' => 'OrderNumber',
        'personalPhoto' => 'PersonalPhoto',
        'status' => 'Status',
        'tbWang' => 'TbWang',
        'userId' => 'UserId',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (\is_array($this->masterDataDepartments)) {
            Model::validateArray($this->masterDataDepartments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentDescription) {
            $res['DepartmentDescription'] = $this->departmentDescription;
        }

        if (null !== $this->displayEnName) {
            $res['DisplayEnName'] = $this->displayEnName;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->masterDataDepartments) {
            if (\is_array($this->masterDataDepartments)) {
                $res['MasterDataDepartments'] = [];
                $n1 = 0;
                foreach ($this->masterDataDepartments as $item1) {
                    $res['MasterDataDepartments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }

        if (null !== $this->personalPhoto) {
            $res['PersonalPhoto'] = $this->personalPhoto;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tbWang) {
            $res['TbWang'] = $this->tbWang;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = $this->userInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentDescription'])) {
            $model->departmentDescription = $map['DepartmentDescription'];
        }

        if (isset($map['DisplayEnName'])) {
            $model->displayEnName = $map['DisplayEnName'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['MasterDataDepartments'])) {
            if (!empty($map['MasterDataDepartments'])) {
                $model->masterDataDepartments = [];
                $n1 = 0;
                foreach ($map['MasterDataDepartments'] as $item1) {
                    $model->masterDataDepartments[$n1] = masterDataDepartments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }

        if (isset($map['PersonalPhoto'])) {
            $model->personalPhoto = $map['PersonalPhoto'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TbWang'])) {
            $model->tbWang = $map['TbWang'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = $map['UserInfo'];
        }

        return $model;
    }
}
