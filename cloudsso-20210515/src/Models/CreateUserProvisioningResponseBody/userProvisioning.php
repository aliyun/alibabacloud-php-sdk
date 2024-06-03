<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateUserProvisioningResponseBody;

use AlibabaCloud\Tea\Model;

class userProvisioning extends Model
{
    /**
     * @description The creation time.
     *
     * @example 2022-11-28T03:55:42Z
     *
     * @var string
     */
    public $createTime;

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
     * @example this is a user provisioning.
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
     * @description The ID of the Alibaba Cloud account to which the resource directory belongs.
     *
     * @example 1639738******
     *
     * @var string
     */
    public $ownerPk;

    /**
     * @description The identity ID of the RAM user provisioning. Valid values:
     *
     *   If `Group` is returned for the `PrincipalType` parameter, the value of this parameter is the ID of a CloudSSO user group (g-\\*\\*\\*\\*\\*\\*\\*\\*).
     *   If `User` is returned for the `PrincipalType` parameter, the value of this parameter is the ID of a CloudSSO user (u-\\*\\*\\*\\*\\*\\*\\*\\*).
     *
     * @example g-02ha881d*****
     *
     * @var string
     */
    public $principalId;

    /**
     * @description The identity name of the RAM user provisioning. Valid values:
     *
     *   If `Group` is returned for the `PrincipalType` parameter, the value of this parameter is the name of a CloudSSO user group.
     *   If `User` is returned for the `PrincipalType` parameter, the value of this parameter is the name of a CloudSSO user.
     *
     * @example testGroupName
     *
     * @var string
     */
    public $principalName;

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
     * @description The status of the RAM user provisioning. Valid values:
     *
     *   Enabled
     *   Disabled
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the object for which you create the RAM user provisioning. The value is fixed as the ID of the member in the resource directory.
     *
     * @example 1743382******
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the object for which you create the RAM user provisioning. The value is fixed as the name of the member in the resource directory.
     *
     * @example testTargetName
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The path of the resource directory in which you create the RAM user provisioning for the member.
     *
     * @example rd-******\/root/test**
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description The object for which you create the RAM user provisioning. The value is fixed as `RD-Account`.
     *
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The modification time.
     *
     * @example 2022-11-28T03:55:42Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The ID of the RAM user provisioning.
     *
     * @example up-002axzhapcbz6e63****
     *
     * @var string
     */
    public $userProvisioningId;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'deletionStrategy'    => 'DeletionStrategy',
        'description'         => 'Description',
        'directoryId'         => 'DirectoryId',
        'duplicationStrategy' => 'DuplicationStrategy',
        'ownerPk'             => 'OwnerPk',
        'principalId'         => 'PrincipalId',
        'principalName'       => 'PrincipalName',
        'principalType'       => 'PrincipalType',
        'status'              => 'Status',
        'targetId'            => 'TargetId',
        'targetName'          => 'TargetName',
        'targetPath'          => 'TargetPath',
        'targetType'          => 'TargetType',
        'updateTime'          => 'UpdateTime',
        'userProvisioningId'  => 'UserProvisioningId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
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
        if (null !== $this->ownerPk) {
            $res['OwnerPk'] = $this->ownerPk;
        }
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userProvisioningId) {
            $res['UserProvisioningId'] = $this->userProvisioningId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userProvisioning
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
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
        if (isset($map['OwnerPk'])) {
            $model->ownerPk = $map['OwnerPk'];
        }
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserProvisioningId'])) {
            $model->userProvisioningId = $map['UserProvisioningId'];
        }

        return $model;
    }
}
