<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class RemovePermissionPolicyFromAccessConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $permissionPolicyName;

    /**
     * @var string
     */
    public $permissionPolicyType;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'directoryId' => 'DirectoryId',
        'permissionPolicyName' => 'PermissionPolicyName',
        'permissionPolicyType' => 'PermissionPolicyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->permissionPolicyName) {
            $res['PermissionPolicyName'] = $this->permissionPolicyName;
        }

        if (null !== $this->permissionPolicyType) {
            $res['PermissionPolicyType'] = $this->permissionPolicyType;
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
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
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
