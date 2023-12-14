<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\owners\masterDataDepartments;
use AlibabaCloud\Tea\Model;

class owners extends Model
{
    /**
     * @example 开发部成立于2000年
     *
     * @var string
     */
    public $departmentDescription;

    /**
     * @example ZhangSan
     *
     * @var string
     */
    public $displayEnName;

    /**
     * @example 测试应用
     *
     * @var string
     */
    public $displayName;

    /**
     * @var masterDataDepartments[]
     */
    public $masterDataDepartments;

    /**
     * @example o-YDJKINSxxx
     *
     * @var string
     */
    public $orderNumber;

    /**
     * @example https://abc.com/a.png
     *
     * @var string
     */
    public $personalPhoto;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example wang123
     *
     * @var string
     */
    public $tbWang;

    /**
     * @example manager123
     *
     * @var string
     */
    public $userId;

    /**
     * @example 张三
     *
     * @var string
     */
    public $userInfo;
    protected $_name = [
        'departmentDescription' => 'DepartmentDescription',
        'displayEnName'         => 'DisplayEnName',
        'displayName'           => 'DisplayName',
        'masterDataDepartments' => 'MasterDataDepartments',
        'orderNumber'           => 'OrderNumber',
        'personalPhoto'         => 'PersonalPhoto',
        'status'                => 'Status',
        'tbWang'                => 'TbWang',
        'userId'                => 'UserId',
        'userInfo'              => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['MasterDataDepartments'] = [];
            if (null !== $this->masterDataDepartments && \is_array($this->masterDataDepartments)) {
                $n = 0;
                foreach ($this->masterDataDepartments as $item) {
                    $res['MasterDataDepartments'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return owners
     */
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
                $n                            = 0;
                foreach ($map['MasterDataDepartments'] as $item) {
                    $model->masterDataDepartments[$n++] = null !== $item ? masterDataDepartments::fromMap($item) : $item;
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
