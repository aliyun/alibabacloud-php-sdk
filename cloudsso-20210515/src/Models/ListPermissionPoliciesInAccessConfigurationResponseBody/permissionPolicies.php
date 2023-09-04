<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListPermissionPoliciesInAccessConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class permissionPolicies extends Model
{
    /**
     * @description The time when the policy was created for the access configuration.
     *
     * @example 2021-11-03T06:37:25Z
     *
     * @var string
     */
    public $addTime;

    /**
     * @description The configurations of the inline policy.
     *
     * >  This parameter is returned only when the value of the PermissionPolicyType parameter is Inline.
     * @example {\"Statement\": [{\"Action\": \"*\",\"Effect\": \"Allow\",\"Resource\": \"*\"}],\"Version\": \"1\"}
     *
     * @var string
     */
    public $permissionPolicyDocument;

    /**
     * @description The name of the policy.
     *
     * @example AliyunECSFullAccess
     *
     * @var string
     */
    public $permissionPolicyName;

    /**
     * @description The type of the policy.
     *
     * @example System
     *
     * @var string
     */
    public $permissionPolicyType;
    protected $_name = [
        'addTime'                  => 'AddTime',
        'permissionPolicyDocument' => 'PermissionPolicyDocument',
        'permissionPolicyName'     => 'PermissionPolicyName',
        'permissionPolicyType'     => 'PermissionPolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->permissionPolicyDocument) {
            $res['PermissionPolicyDocument'] = $this->permissionPolicyDocument;
        }
        if (null !== $this->permissionPolicyName) {
            $res['PermissionPolicyName'] = $this->permissionPolicyName;
        }
        if (null !== $this->permissionPolicyType) {
            $res['PermissionPolicyType'] = $this->permissionPolicyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissionPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['PermissionPolicyDocument'])) {
            $model->permissionPolicyDocument = $map['PermissionPolicyDocument'];
        }
        if (isset($map['PermissionPolicyName'])) {
            $model->permissionPolicyName = $map['PermissionPolicyName'];
        }
        if (isset($map['PermissionPolicyType'])) {
            $model->permissionPolicyType = $map['PermissionPolicyType'];
        }

        return $model;
    }
}
