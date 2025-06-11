<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningEventResponseBody;

use AlibabaCloud\Dara\Model;

class userProvisioningEvent extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deletionStrategy;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $duplicationStrategy;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $latestAsyncTime;

    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $principalType;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetPath;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userProvisioningId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'deletionStrategy' => 'DeletionStrategy',
        'directoryId' => 'DirectoryId',
        'duplicationStrategy' => 'DuplicationStrategy',
        'errorCount' => 'ErrorCount',
        'errorInfo' => 'ErrorInfo',
        'eventId' => 'EventId',
        'latestAsyncTime' => 'LatestAsyncTime',
        'principalId' => 'PrincipalId',
        'principalName' => 'PrincipalName',
        'principalType' => 'PrincipalType',
        'sourceType' => 'SourceType',
        'targetId' => 'TargetId',
        'targetName' => 'TargetName',
        'targetPath' => 'TargetPath',
        'targetType' => 'TargetType',
        'updateTime' => 'UpdateTime',
        'userProvisioningId' => 'UserProvisioningId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
