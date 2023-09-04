<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccessAssignmentRequest extends Model
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
     * @description Specifies whether to de-provision the access configuration when you remove the access permissions from the CloudSSO identity. The access configuration is used to assign the access permissions, and the identity is the only one that uses the access configuration and is associated with the account. Valid values:
     *
     *   DeprovisionForLastAccessAssignmentOnAccount: de-provisions the access configuration.
     *   None: does not de-provision the access configuration. This is the default value.
     *
     * @example None
     *
     * @var string
     */
    public $deprovisionStrategy;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the CloudSSO identity.
     *
     *   If you set `PrincipalType` to `User`, set `PrincipalId` to the ID of the CloudSSO user.
     *   If you set `PrincipalType` to `Group`, set `PrincipalId` to the ID of the CloudSSO group.
     *
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $principalId;

    /**
     * @description The type of the CloudSSO identity. Valid values:
     *
     *   User
     *   Group
     *
     * @example User
     *
     * @var string
     */
    public $principalType;

    /**
     * @description The ID of the task object.
     *
     * @example 114240524784****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the task object. The value is fixed as RD-Account, which indicates the accounts in the resource directory.
     *
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'deprovisionStrategy'   => 'DeprovisionStrategy',
        'directoryId'           => 'DirectoryId',
        'principalId'           => 'PrincipalId',
        'principalType'         => 'PrincipalType',
        'targetId'              => 'TargetId',
        'targetType'            => 'TargetType',
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
        if (null !== $this->deprovisionStrategy) {
            $res['DeprovisionStrategy'] = $this->deprovisionStrategy;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccessAssignmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }
        if (isset($map['DeprovisionStrategy'])) {
            $model->deprovisionStrategy = $map['DeprovisionStrategy'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
