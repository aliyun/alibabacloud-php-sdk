<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class CreateUserProvisioningRequest extends Model
{
    /**
     * @description The deletion policy. The policy is used to manage synchronized users when you delete the RAM user provisioning. Valid values:
     *
     *   Delete: When you delete the RAM user provisioning, the system deletes the synchronized users.
     *   Keep: When you delete the RAM user provisioning, the system retains the synchronized users.
     *
     * @example Delete
     *
     * @var string
     */
    public $deletionStrategy;

    /**
     * @description The description.
     *
     * @example This is a user provisioning.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the resource directory.
     *
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The conflict handling policy. The policy is used when a RAM user has the same username as the CloudSSO user who is synchronized to RAM. Valid values:
     *
     *   KeepBoth: When a CloudSSO user is synchronized to RAM, if a RAM user who has the same username as the CloudSSO user exists, the system creates a RAM user whose username is the username of the CloudSSO user plus the suffix `_sso`.
     *   TakeOver: When a CloudSSO user is synchronized to RAM, if a RAM user who has the same username as the CloudSSO user exists, the system replaces the RAM user with the CloudSSO user.
     *
     * @example KeepBoth
     *
     * @var string
     */
    public $duplicationStrategy;

    /**
     * @description The identity ID of the RAM user provisioning. Valid values:
     *
     *   If you set the `PrincipalType` parameter to `Group`, the value of this parameter is the ID of a CloudSSO user group (g-\\*\\*\\*\\*\\*\\*\\*\\*).
     *   If you set the `PrincipalType` parameter to `User`, the value of this parameter is the ID of a CloudSSO user (u-\\*\\*\\*\\*\\*\\*\\*\\*).
     *
     * @example g-02ha881d*****
     *
     * @var string
     */
    public $principalId;

    /**
     * @description The identity type of the RAM user provisioning. Valid values:
     *
     *   User: The identity of the RAM user provisioning is a CloudSSO user.
     *   Group: The identity of the RAM user provisioning is a CloudSSO user group.
     *
     * @example Group
     *
     * @var string
     */
    public $principalType;

    /**
     * @description The ID of the object for which you create the RAM user provisioning. The value is fixed as the ID of the member in the resource directory.
     *
     * @example 1743382******
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The object for which you create the RAM user provisioning. The value is fixed as `RD-Account`.
     *
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'deletionStrategy'    => 'DeletionStrategy',
        'description'         => 'Description',
        'directoryId'         => 'DirectoryId',
        'duplicationStrategy' => 'DuplicationStrategy',
        'principalId'         => 'PrincipalId',
        'principalType'       => 'PrincipalType',
        'targetId'            => 'TargetId',
        'targetType'          => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionStrategy) {
            $res['DeletionStrategy'] = $this->deletionStrategy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->duplicationStrategy) {
            $res['DuplicationStrategy'] = $this->duplicationStrategy;
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
     * @return CreateUserProvisioningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionStrategy'])) {
            $model->deletionStrategy = $map['DeletionStrategy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DuplicationStrategy'])) {
            $model->duplicationStrategy = $map['DuplicationStrategy'];
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
