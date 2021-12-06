<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccessConfigurationRequest extends Model
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
     * @var bool
     */
    public $forceRemovePermissionPolicies;
    protected $_name = [
        'accessConfigurationId'         => 'AccessConfigurationId',
        'directoryId'                   => 'DirectoryId',
        'forceRemovePermissionPolicies' => 'ForceRemovePermissionPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->forceRemovePermissionPolicies) {
            $res['ForceRemovePermissionPolicies'] = $this->forceRemovePermissionPolicies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccessConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['ForceRemovePermissionPolicies'])) {
            $model->forceRemovePermissionPolicies = $map['ForceRemovePermissionPolicies'];
        }

        return $model;
    }
}
