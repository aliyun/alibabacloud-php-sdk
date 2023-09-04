<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccessConfigurationRequest extends Model
{
    /**
     * @description The ID of the access configuration.
     *
     * @example ac-001j9mcm3k7335bc****
     *
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description Specifies whether to forcibly remove system policies and inline policies. Valid values:
     *
     *   true: When you delete the access configuration, the associated system policies and inline policies are forcibly removed.
     *   false: When you delete the access configuration, the associated system policies and inline policies are not forcibly removed. This is the default value. If these policies exist in the access configuration, the deletion fails. Before you delete the access configuration, you must remove the system policies and inline policies. For more information, see [RemovePermissionPolicyFromAccessConfiguration](~~336904~~).
     *
     * @example false
     *
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
