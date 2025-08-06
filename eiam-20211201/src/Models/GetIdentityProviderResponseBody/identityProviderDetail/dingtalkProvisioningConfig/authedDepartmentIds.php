<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkProvisioningConfig;

use AlibabaCloud\Dara\Model;

class authedDepartmentIds extends Model
{
    /**
     * @var string
     */
    public $deptId;

    /**
     * @var string
     */
    public $deptName;
    protected $_name = [
        'deptId' => 'DeptId',
        'deptName' => 'DeptName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deptId) {
            $res['DeptId'] = $this->deptId;
        }

        if (null !== $this->deptName) {
            $res['DeptName'] = $this->deptName;
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
        if (isset($map['DeptId'])) {
            $model->deptId = $map['DeptId'];
        }

        if (isset($map['DeptName'])) {
            $model->deptName = $map['DeptName'];
        }

        return $model;
    }
}
