<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkProvisioningConfig;

use AlibabaCloud\Tea\Model;

class authedDepartmentIds extends Model
{
    /**
     * @description 钉钉部门Id
     *
     * @example 123xxx444
     *
     * @var string
     */
    public $deptId;

    /**
     * @description 钉钉部门名称
     *
     * @example 测试部门
     *
     * @var string
     */
    public $deptName;
    protected $_name = [
        'deptId'   => 'DeptId',
        'deptName' => 'DeptName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return authedDepartmentIds
     */
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
