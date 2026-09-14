<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListCrossProjectPipelineRunsResponseBody\data;

use AlibabaCloud\Dara\Model;

class pipelineRuns extends Model
{
    /**
     * @var int
     */
    public $abolishTime;

    /**
     * @var string
     */
    public $abolisher;

    /**
     * @var string
     */
    public $changeType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $deploymentEnvironmentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $executeTime;

    /**
     * @var string
     */
    public $executor;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $objectVersion;

    /**
     * @var string
     */
    public $pipelineRunId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'abolishTime' => 'AbolishTime',
        'abolisher' => 'Abolisher',
        'changeType' => 'ChangeType',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'deploymentEnvironmentId' => 'DeploymentEnvironmentId',
        'description' => 'Description',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'executeTime' => 'ExecuteTime',
        'executor' => 'Executor',
        'finishTime' => 'FinishTime',
        'objectId' => 'ObjectId',
        'objectName' => 'ObjectName',
        'objectType' => 'ObjectType',
        'objectVersion' => 'ObjectVersion',
        'pipelineRunId' => 'PipelineRunId',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abolishTime) {
            $res['AbolishTime'] = $this->abolishTime;
        }

        if (null !== $this->abolisher) {
            $res['Abolisher'] = $this->abolisher;
        }

        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->deploymentEnvironmentId) {
            $res['DeploymentEnvironmentId'] = $this->deploymentEnvironmentId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }

        if (null !== $this->executor) {
            $res['Executor'] = $this->executor;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->objectVersion) {
            $res['ObjectVersion'] = $this->objectVersion;
        }

        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AbolishTime'])) {
            $model->abolishTime = $map['AbolishTime'];
        }

        if (isset($map['Abolisher'])) {
            $model->abolisher = $map['Abolisher'];
        }

        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DeploymentEnvironmentId'])) {
            $model->deploymentEnvironmentId = $map['DeploymentEnvironmentId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }

        if (isset($map['Executor'])) {
            $model->executor = $map['Executor'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['ObjectVersion'])) {
            $model->objectVersion = $map['ObjectVersion'];
        }

        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
