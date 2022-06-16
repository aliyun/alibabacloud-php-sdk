<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeDeployOrderDetailResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $appInstanceType;

    /**
     * @var int
     */
    public $currentPartitionNum;

    /**
     * @var int
     */
    public $deployOrderId;

    /**
     * @var string
     */
    public $deployPauseType;

    /**
     * @var string
     */
    public $deployPauseTypeName;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $deployTypeName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $failureRate;

    /**
     * @var int
     */
    public $finishAppInstanceCt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $partitionType;

    /**
     * @var string
     */
    public $partitionTypeName;

    /**
     * @var int
     */
    public $result;

    /**
     * @var string
     */
    public $resultName;

    /**
     * @var int
     */
    public $schemaId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var int
     */
    public $totalAppInstanceCt;

    /**
     * @var int
     */
    public $totalPartitions;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'appInstanceType'     => 'AppInstanceType',
        'currentPartitionNum' => 'CurrentPartitionNum',
        'deployOrderId'       => 'DeployOrderId',
        'deployPauseType'     => 'DeployPauseType',
        'deployPauseTypeName' => 'DeployPauseTypeName',
        'deployType'          => 'DeployType',
        'deployTypeName'      => 'DeployTypeName',
        'description'         => 'Description',
        'elapsedTime'         => 'ElapsedTime',
        'endTime'             => 'EndTime',
        'envId'               => 'EnvId',
        'envType'             => 'EnvType',
        'failureRate'         => 'FailureRate',
        'finishAppInstanceCt' => 'FinishAppInstanceCt',
        'name'                => 'Name',
        'partitionType'       => 'PartitionType',
        'partitionTypeName'   => 'PartitionTypeName',
        'result'              => 'Result',
        'resultName'          => 'ResultName',
        'schemaId'            => 'SchemaId',
        'startTime'           => 'StartTime',
        'status'              => 'Status',
        'statusName'          => 'StatusName',
        'totalAppInstanceCt'  => 'TotalAppInstanceCt',
        'totalPartitions'     => 'TotalPartitions',
        'userId'              => 'UserId',
        'userNick'            => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceType) {
            $res['AppInstanceType'] = $this->appInstanceType;
        }
        if (null !== $this->currentPartitionNum) {
            $res['CurrentPartitionNum'] = $this->currentPartitionNum;
        }
        if (null !== $this->deployOrderId) {
            $res['DeployOrderId'] = $this->deployOrderId;
        }
        if (null !== $this->deployPauseType) {
            $res['DeployPauseType'] = $this->deployPauseType;
        }
        if (null !== $this->deployPauseTypeName) {
            $res['DeployPauseTypeName'] = $this->deployPauseTypeName;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->deployTypeName) {
            $res['DeployTypeName'] = $this->deployTypeName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->failureRate) {
            $res['FailureRate'] = $this->failureRate;
        }
        if (null !== $this->finishAppInstanceCt) {
            $res['FinishAppInstanceCt'] = $this->finishAppInstanceCt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }
        if (null !== $this->partitionTypeName) {
            $res['PartitionTypeName'] = $this->partitionTypeName;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->resultName) {
            $res['ResultName'] = $this->resultName;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->totalAppInstanceCt) {
            $res['TotalAppInstanceCt'] = $this->totalAppInstanceCt;
        }
        if (null !== $this->totalPartitions) {
            $res['TotalPartitions'] = $this->totalPartitions;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceType'])) {
            $model->appInstanceType = $map['AppInstanceType'];
        }
        if (isset($map['CurrentPartitionNum'])) {
            $model->currentPartitionNum = $map['CurrentPartitionNum'];
        }
        if (isset($map['DeployOrderId'])) {
            $model->deployOrderId = $map['DeployOrderId'];
        }
        if (isset($map['DeployPauseType'])) {
            $model->deployPauseType = $map['DeployPauseType'];
        }
        if (isset($map['DeployPauseTypeName'])) {
            $model->deployPauseTypeName = $map['DeployPauseTypeName'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DeployTypeName'])) {
            $model->deployTypeName = $map['DeployTypeName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['FailureRate'])) {
            $model->failureRate = $map['FailureRate'];
        }
        if (isset($map['FinishAppInstanceCt'])) {
            $model->finishAppInstanceCt = $map['FinishAppInstanceCt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }
        if (isset($map['PartitionTypeName'])) {
            $model->partitionTypeName = $map['PartitionTypeName'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ResultName'])) {
            $model->resultName = $map['ResultName'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['TotalAppInstanceCt'])) {
            $model->totalAppInstanceCt = $map['TotalAppInstanceCt'];
        }
        if (isset($map['TotalPartitions'])) {
            $model->totalPartitions = $map['TotalPartitions'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
