<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class GetArtifactSubscriptionTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $artifactType;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceNamespaceName;

    /**
     * @var string
     */
    public $sourceProvider;

    /**
     * @var string
     */
    public $sourceRepoName;

    /**
     * @var string
     */
    public $sourceRepoType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $tagSubscriptionCount;

    /**
     * @var int
     */
    public $tagTotalCount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskResult;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'artifactType' => 'ArtifactType',
        'code' => 'Code',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'isSuccess' => 'IsSuccess',
        'message' => 'Message',
        'namespaceName' => 'NamespaceName',
        'repoName' => 'RepoName',
        'requestId' => 'RequestId',
        'sourceNamespaceName' => 'SourceNamespaceName',
        'sourceProvider' => 'SourceProvider',
        'sourceRepoName' => 'SourceRepoName',
        'sourceRepoType' => 'SourceRepoType',
        'startTime' => 'StartTime',
        'tagSubscriptionCount' => 'TagSubscriptionCount',
        'tagTotalCount' => 'TagTotalCount',
        'taskId' => 'TaskId',
        'taskResult' => 'TaskResult',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }

        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceNamespaceName) {
            $res['SourceNamespaceName'] = $this->sourceNamespaceName;
        }

        if (null !== $this->sourceProvider) {
            $res['SourceProvider'] = $this->sourceProvider;
        }

        if (null !== $this->sourceRepoName) {
            $res['SourceRepoName'] = $this->sourceRepoName;
        }

        if (null !== $this->sourceRepoType) {
            $res['SourceRepoType'] = $this->sourceRepoType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tagSubscriptionCount) {
            $res['TagSubscriptionCount'] = $this->tagSubscriptionCount;
        }

        if (null !== $this->tagTotalCount) {
            $res['TagTotalCount'] = $this->tagTotalCount;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskResult) {
            $res['TaskResult'] = $this->taskResult;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceNamespaceName'])) {
            $model->sourceNamespaceName = $map['SourceNamespaceName'];
        }

        if (isset($map['SourceProvider'])) {
            $model->sourceProvider = $map['SourceProvider'];
        }

        if (isset($map['SourceRepoName'])) {
            $model->sourceRepoName = $map['SourceRepoName'];
        }

        if (isset($map['SourceRepoType'])) {
            $model->sourceRepoType = $map['SourceRepoType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TagSubscriptionCount'])) {
            $model->tagSubscriptionCount = $map['TagSubscriptionCount'];
        }

        if (isset($map['TagTotalCount'])) {
            $model->tagTotalCount = $map['TagTotalCount'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskResult'])) {
            $model->taskResult = $map['TaskResult'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
