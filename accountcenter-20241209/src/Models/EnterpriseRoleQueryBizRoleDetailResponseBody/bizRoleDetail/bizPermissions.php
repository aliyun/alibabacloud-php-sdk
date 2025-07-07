<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryBizRoleDetailResponseBody\bizRoleDetail;

use AlibabaCloud\Dara\Model;

class bizPermissions extends Model
{
    /**
     * @var string
     */
    public $bizPermissionCode;

    /**
     * @var string
     */
    public $bizPermissionDesc;

    /**
     * @var string
     */
    public $bizPermissionName;
    protected $_name = [
        'bizPermissionCode' => 'BizPermissionCode',
        'bizPermissionDesc' => 'BizPermissionDesc',
        'bizPermissionName' => 'BizPermissionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizPermissionCode) {
            $res['BizPermissionCode'] = $this->bizPermissionCode;
        }

        if (null !== $this->bizPermissionDesc) {
            $res['BizPermissionDesc'] = $this->bizPermissionDesc;
        }

        if (null !== $this->bizPermissionName) {
            $res['BizPermissionName'] = $this->bizPermissionName;
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
        if (isset($map['BizPermissionCode'])) {
            $model->bizPermissionCode = $map['BizPermissionCode'];
        }

        if (isset($map['BizPermissionDesc'])) {
            $model->bizPermissionDesc = $map['BizPermissionDesc'];
        }

        if (isset($map['BizPermissionName'])) {
            $model->bizPermissionName = $map['BizPermissionName'];
        }

        return $model;
    }
}
