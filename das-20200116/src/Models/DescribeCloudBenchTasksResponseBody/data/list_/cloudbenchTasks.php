<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudBenchTasksResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class cloudbenchTasks extends Model
{
    /**
     * @var string
     */
    public $archiveJobId;

    /**
     * @var string
     */
    public $archiveOssTableName;

    /**
     * @var int
     */
    public $archiveState;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $benchStep;

    /**
     * @var string
     */
    public $benchStepStatus;

    /**
     * @var string
     */
    public $clientGatewayId;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dstInstanceUuid;

    /**
     * @var string
     */
    public $dstIp;

    /**
     * @var int
     */
    public $dstPort;

    /**
     * @var string
     */
    public $dstType;

    /**
     * @var string
     */
    public $dtsJobClass;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $dtsJobName;

    /**
     * @var int
     */
    public $dtsJobState;

    /**
     * @var string
     */
    public $dtsJobStatus;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $endState;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $external;

    /**
     * @var int
     */
    public $rate;

    /**
     * @var int
     */
    public $requestDuration;

    /**
     * @var int
     */
    public $smartPressureTime;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sqlCompleteReuse;

    /**
     * @var string
     */
    public $srcInstanceArea;

    /**
     * @var string
     */
    public $srcInstanceUuid;

    /**
     * @var string
     */
    public $srcPublicIp;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tableSchema;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workDir;
    protected $_name = [
        'archiveJobId' => 'ArchiveJobId',
        'archiveOssTableName' => 'ArchiveOssTableName',
        'archiveState' => 'ArchiveState',
        'backupId' => 'BackupId',
        'backupType' => 'BackupType',
        'benchStep' => 'BenchStep',
        'benchStepStatus' => 'BenchStepStatus',
        'clientGatewayId' => 'ClientGatewayId',
        'clientType' => 'ClientType',
        'description' => 'Description',
        'dstInstanceUuid' => 'DstInstanceUuid',
        'dstIp' => 'DstIp',
        'dstPort' => 'DstPort',
        'dstType' => 'DstType',
        'dtsJobClass' => 'DtsJobClass',
        'dtsJobId' => 'DtsJobId',
        'dtsJobName' => 'DtsJobName',
        'dtsJobState' => 'DtsJobState',
        'dtsJobStatus' => 'DtsJobStatus',
        'ecsInstanceId' => 'EcsInstanceId',
        'endState' => 'EndState',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'external' => 'External',
        'rate' => 'Rate',
        'requestDuration' => 'RequestDuration',
        'smartPressureTime' => 'SmartPressureTime',
        'source' => 'Source',
        'sqlCompleteReuse' => 'SqlCompleteReuse',
        'srcInstanceArea' => 'SrcInstanceArea',
        'srcInstanceUuid' => 'SrcInstanceUuid',
        'srcPublicIp' => 'SrcPublicIp',
        'state' => 'State',
        'status' => 'Status',
        'tableSchema' => 'TableSchema',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'topic' => 'Topic',
        'userId' => 'UserId',
        'version' => 'Version',
        'workDir' => 'WorkDir',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveJobId) {
            $res['ArchiveJobId'] = $this->archiveJobId;
        }

        if (null !== $this->archiveOssTableName) {
            $res['ArchiveOssTableName'] = $this->archiveOssTableName;
        }

        if (null !== $this->archiveState) {
            $res['ArchiveState'] = $this->archiveState;
        }

        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->benchStep) {
            $res['BenchStep'] = $this->benchStep;
        }

        if (null !== $this->benchStepStatus) {
            $res['BenchStepStatus'] = $this->benchStepStatus;
        }

        if (null !== $this->clientGatewayId) {
            $res['ClientGatewayId'] = $this->clientGatewayId;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dstInstanceUuid) {
            $res['DstInstanceUuid'] = $this->dstInstanceUuid;
        }

        if (null !== $this->dstIp) {
            $res['DstIp'] = $this->dstIp;
        }

        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }

        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }

        if (null !== $this->dtsJobClass) {
            $res['DtsJobClass'] = $this->dtsJobClass;
        }

        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }

        if (null !== $this->dtsJobState) {
            $res['DtsJobState'] = $this->dtsJobState;
        }

        if (null !== $this->dtsJobStatus) {
            $res['DtsJobStatus'] = $this->dtsJobStatus;
        }

        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }

        if (null !== $this->endState) {
            $res['EndState'] = $this->endState;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->external) {
            $res['External'] = $this->external;
        }

        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        if (null !== $this->requestDuration) {
            $res['RequestDuration'] = $this->requestDuration;
        }

        if (null !== $this->smartPressureTime) {
            $res['SmartPressureTime'] = $this->smartPressureTime;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sqlCompleteReuse) {
            $res['SqlCompleteReuse'] = $this->sqlCompleteReuse;
        }

        if (null !== $this->srcInstanceArea) {
            $res['SrcInstanceArea'] = $this->srcInstanceArea;
        }

        if (null !== $this->srcInstanceUuid) {
            $res['SrcInstanceUuid'] = $this->srcInstanceUuid;
        }

        if (null !== $this->srcPublicIp) {
            $res['SrcPublicIp'] = $this->srcPublicIp;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tableSchema) {
            $res['TableSchema'] = $this->tableSchema;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->workDir) {
            $res['WorkDir'] = $this->workDir;
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
        if (isset($map['ArchiveJobId'])) {
            $model->archiveJobId = $map['ArchiveJobId'];
        }

        if (isset($map['ArchiveOssTableName'])) {
            $model->archiveOssTableName = $map['ArchiveOssTableName'];
        }

        if (isset($map['ArchiveState'])) {
            $model->archiveState = $map['ArchiveState'];
        }

        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['BenchStep'])) {
            $model->benchStep = $map['BenchStep'];
        }

        if (isset($map['BenchStepStatus'])) {
            $model->benchStepStatus = $map['BenchStepStatus'];
        }

        if (isset($map['ClientGatewayId'])) {
            $model->clientGatewayId = $map['ClientGatewayId'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DstInstanceUuid'])) {
            $model->dstInstanceUuid = $map['DstInstanceUuid'];
        }

        if (isset($map['DstIp'])) {
            $model->dstIp = $map['DstIp'];
        }

        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }

        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }

        if (isset($map['DtsJobClass'])) {
            $model->dtsJobClass = $map['DtsJobClass'];
        }

        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }

        if (isset($map['DtsJobState'])) {
            $model->dtsJobState = $map['DtsJobState'];
        }

        if (isset($map['DtsJobStatus'])) {
            $model->dtsJobStatus = $map['DtsJobStatus'];
        }

        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }

        if (isset($map['EndState'])) {
            $model->endState = $map['EndState'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['External'])) {
            $model->external = $map['External'];
        }

        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        if (isset($map['RequestDuration'])) {
            $model->requestDuration = $map['RequestDuration'];
        }

        if (isset($map['SmartPressureTime'])) {
            $model->smartPressureTime = $map['SmartPressureTime'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SqlCompleteReuse'])) {
            $model->sqlCompleteReuse = $map['SqlCompleteReuse'];
        }

        if (isset($map['SrcInstanceArea'])) {
            $model->srcInstanceArea = $map['SrcInstanceArea'];
        }

        if (isset($map['SrcInstanceUuid'])) {
            $model->srcInstanceUuid = $map['SrcInstanceUuid'];
        }

        if (isset($map['SrcPublicIp'])) {
            $model->srcPublicIp = $map['SrcPublicIp'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TableSchema'])) {
            $model->tableSchema = $map['TableSchema'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['WorkDir'])) {
            $model->workDir = $map['WorkDir'];
        }

        return $model;
    }
}
