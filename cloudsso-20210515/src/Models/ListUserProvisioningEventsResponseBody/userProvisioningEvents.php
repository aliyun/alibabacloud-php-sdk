<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUserProvisioningEventsResponseBody;

use AlibabaCloud\Tea\Model;

class userProvisioningEvents extends Model
{
    /**
     * @description The creation time.
     *
     * @example 2022-11-28T03:55:55Z
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
     * @example Keep
     *
     * @var string
     */
    public $deletionStrategy;

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
     * @description The number of execution failures.
     *
     * @example 1
     *
     * @var int
     */
    public $errorCount;

    /**
     * @description The error message that is displayed when the last execution of the RAM user provisioning event failed.
     *
     * @example OperationConflict.UserProvisioning.Process.fail.ImsUserExists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The ID of the RAM user provisioning event.
     *
     * @example upe-wjKyNDmZvyZOiRcJ****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The time at which the RAM user provisioning event was last executed.
     *
     * @example 2022-11-28T03:55:55Z
     *
     * @var string
     */
    public $latestAsyncTime;

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
     * @example exampleGroupName
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
     * @description The type of the source operation. Valid values:
     *
     *   StartProvisioning: enables the RAM user provisioning.
     *   DeleteProvisioning: deletes the RAM user provisioning.
     *   AddUserToGroup: adds a user to a user group.
     *   RemoveUserFromGroup: removes a user from a user group.
     *   UserProvisioningDeletionClearing: deletes the RAM user provisioning and clears resources in the background.
     *
     * @example StartProvisioning
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The ID of the object for which you create the RAM user provisioning.
     *
     * The value is fixed as the ID of the account in the resource directory.````
     * @example 153218*******
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the object for which you create the RAM user provisioning.
     *
     * If `RD-Account` is returned, the value of this parameter is the name of the account that is used to access the instance.``
     * @example exampleRdMember
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The path of the resource directory in which you create the RAM user provisioning for the object.
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
     * @example 2022-11-28T03:55:55Z
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
        'directoryId'         => 'DirectoryId',
        'duplicationStrategy' => 'DuplicationStrategy',
        'errorCount'          => 'ErrorCount',
        'errorInfo'           => 'ErrorInfo',
        'eventId'             => 'EventId',
        'latestAsyncTime'     => 'LatestAsyncTime',
        'principalId'         => 'PrincipalId',
        'principalName'       => 'PrincipalName',
        'principalType'       => 'PrincipalType',
        'sourceType'          => 'SourceType',
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
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->duplicationStrategy) {
            $res['DuplicationStrategy'] = $this->duplicationStrategy;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->latestAsyncTime) {
            $res['LatestAsyncTime'] = $this->latestAsyncTime;
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
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
     * @return userProvisioningEvents
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DuplicationStrategy'])) {
            $model->duplicationStrategy = $map['DuplicationStrategy'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['LatestAsyncTime'])) {
            $model->latestAsyncTime = $map['LatestAsyncTime'];
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
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
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
