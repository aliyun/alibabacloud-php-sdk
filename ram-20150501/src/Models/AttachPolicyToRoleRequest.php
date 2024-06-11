<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class AttachPolicyToRoleRequest extends Model
{
    /**
     * @description The name of the policy.
     *
     * @example OSS-Administrator
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of the policy. Valid values: `System` and `Custom`.
     *
     * @example Custom
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The name of the RAM role.
     *
     * @example OSSAdminRole
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
        'roleName'   => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachPolicyToRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
