<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningResponseBody;

use AlibabaCloud\Tea\Model;

class userProvisioning extends Model
{
    /**
     * @example 2022-11-28T03:55:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example Delete
     *
     * @var string
     */
    public $deletionStrategy;

    /**
     * @example This is a user provisioning.
     *
     * @var string
     */
    public $description;

    /**
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example KeepBoth
     *
     * @var string
     */
    public $duplicationStrategy;

    /**
     * @example 1639738******
     *
     * @var string
     */
    public $ownerPk;

    /**
     * @example g-02ha881d*****
     *
     * @var string
     */
    public $principalId;

    /**
     * @example testGroupName
     *
     * @var string
     */
    public $principalName;

    /**
     * @example Group
     *
     * @var string
     */
    public $principalType;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example 1743382******
     *
     * @var string
     */
    public $targetId;

    /**
     * @example testRdMember
     *
     * @var string
     */
    public $targetName;

    /**
     * @example rd-******\/root/test**
     *
     * @var string
     */
    public $targetPath;

    /**
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;

    /**
     * @example 2022-11-28T03:55:42Z
     *
     * @var string
     */
    public $updateTime;

    /**
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
