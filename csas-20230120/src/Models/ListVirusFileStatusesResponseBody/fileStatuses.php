<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusFileStatusesResponseBody;

use AlibabaCloud\Dara\Model;

class fileStatuses extends Model
{
    /**
     * @var string
     */
    public $consoleOperationTime;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $devType;

    /**
     * @var string
     */
    public $discoveryTime;

    /**
     * @var string
     */
    public $fileMd5;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $fileProcessStatus;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $operationTime;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $scanTaskId;

    /**
     * @var string
     */
    public $taskExecutionInfo;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $virusFileSource;

    /**
     * @var string
     */
    public $virusType;
    protected $_name = [
        'consoleOperationTime' => 'ConsoleOperationTime',
        'department' => 'Department',
        'devTag' => 'DevTag',
        'devType' => 'DevType',
        'discoveryTime' => 'DiscoveryTime',
        'fileMd5' => 'FileMd5',
        'filePath' => 'FilePath',
        'fileProcessStatus' => 'FileProcessStatus',
        'fileSize' => 'FileSize',
        'hostname' => 'Hostname',
        'operation' => 'Operation',
        'operationTime' => 'OperationTime',
        'riskLevel' => 'RiskLevel',
        'saseUserId' => 'SaseUserId',
        'scanTaskId' => 'ScanTaskId',
        'taskExecutionInfo' => 'TaskExecutionInfo',
        'username' => 'Username',
        'virusFileSource' => 'VirusFileSource',
        'virusType' => 'VirusType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleOperationTime) {
            $res['ConsoleOperationTime'] = $this->consoleOperationTime;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
        }

        if (null !== $this->discoveryTime) {
            $res['DiscoveryTime'] = $this->discoveryTime;
        }

        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->fileProcessStatus) {
            $res['FileProcessStatus'] = $this->fileProcessStatus;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }

        if (null !== $this->taskExecutionInfo) {
            $res['TaskExecutionInfo'] = $this->taskExecutionInfo;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->virusFileSource) {
            $res['VirusFileSource'] = $this->virusFileSource;
        }

        if (null !== $this->virusType) {
            $res['VirusType'] = $this->virusType;
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
        if (isset($map['ConsoleOperationTime'])) {
            $model->consoleOperationTime = $map['ConsoleOperationTime'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }

        if (isset($map['DiscoveryTime'])) {
            $model->discoveryTime = $map['DiscoveryTime'];
        }

        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['FileProcessStatus'])) {
            $model->fileProcessStatus = $map['FileProcessStatus'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }

        if (isset($map['TaskExecutionInfo'])) {
            $model->taskExecutionInfo = $map['TaskExecutionInfo'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['VirusFileSource'])) {
            $model->virusFileSource = $map['VirusFileSource'];
        }

        if (isset($map['VirusType'])) {
            $model->virusType = $map['VirusType'];
        }

        return $model;
    }
}
