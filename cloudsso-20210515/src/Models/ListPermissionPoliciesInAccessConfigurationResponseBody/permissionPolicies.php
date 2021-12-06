<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListPermissionPoliciesInAccessConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class permissionPolicies extends Model
{
    /**
     * @var string
     */
    public $addTime;

    /**
     * @var string
     */
    public $permissionPolicyDocument;

    /**
     * @var string
     */
    public $permissionPolicyName;

    /**
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
