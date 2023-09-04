<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class AddPermissionPolicyToAccessConfigurationRequest extends Model
{
    /**
     * @description The ID of the access configuration.
     *
     * @example ac-00jhtfl8thteu6uj****
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
     * @description The configurations of the inline policy.
     *
     * If you set `PermissionPolicyType` to `Inline`, you must specify this parameter. For more information about the syntax and structure of RAM policies, see [Policy syntax and structure](~~93739~~).
     * @example {"Statement": [{"Action": "*","Effect": "Allow","Resource": "*"}],"Version": "1"}
     *
     * @var string
     */
    public $inlinePolicyDocument;

    /**
     * @description The name of the policy.
     *
     *   If you set `PermissionPolicyType` to `System`, you must set this parameter to the name of the system policy. You can obtain the name of the system policy from RAM.
     *   If you set `PermissionPolicyType` to `Inline`, you must set this parameter to the name of the inline policy. A custom value is supported.
     *
     * @example AliyunECSFullAccess
     *
     * @var string
     */
    public $permissionPolicyName;

    /**
     * @description The type of the policy. Valid values:
     *
     *   System: system policy. Resource Access Management (RAM) system policies are reused.
     *   Inline: inline policy. Inline policies are created based on the RAM policy syntax and structure.
     *
     * @example System
     *
     * @var string
     */
    public $permissionPolicyType;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'directoryId'           => 'DirectoryId',
        'inlinePolicyDocument'  => 'InlinePolicyDocument',
        'permissionPolicyName'  => 'PermissionPolicyName',
        'permissionPolicyType'  => 'PermissionPolicyType',
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
        if (null !== $this->inlinePolicyDocument) {
            $res['InlinePolicyDocument'] = $this->inlinePolicyDocument;
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
     * @return AddPermissionPolicyToAccessConfigurationRequest
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
        if (isset($map['InlinePolicyDocument'])) {
            $model->inlinePolicyDocument = $map['InlinePolicyDocument'];
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
