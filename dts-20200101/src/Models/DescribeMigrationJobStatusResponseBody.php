<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\dataInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\precheckStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\structureInitializationStatus;

class DescribeMigrationJobStatusResponseBody extends Model
{
    /**
     * @var dataInitializationStatus
     */
    public $dataInitializationStatus;
    /**
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;
    /**
     * @var destinationEndpoint
     */
    public $destinationEndpoint;
    /**
     * @var string
     */
    public $errCode;
    /**
     * @var string
     */
    public $errMessage;
    /**
     * @var string
     */
    public $migrationJobClass;
    /**
     * @var string
     */
    public $migrationJobId;
    /**
     * @var string
     */
    public $migrationJobName;
    /**
     * @var string
     */
    public $migrationJobStatus;
    /**
     * @var migrationMode
     */
    public $migrationMode;
    /**
     * @var string
     */
    public $migrationObject;
    /**
     * @var string
     */
    public $payType;
    /**
     * @var precheckStatus
     */
    public $precheckStatus;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;
    /**
     * @var structureInitializationStatus
     */
    public $structureInitializationStatus;
    /**
     * @var string
     */
    public $success;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'dataInitializationStatus'      => 'DataInitializationStatus',
        'dataSynchronizationStatus'     => 'DataSynchronizationStatus',
        'destinationEndpoint'           => 'DestinationEndpoint',
        'errCode'                       => 'ErrCode',
        'errMessage'                    => 'ErrMessage',
        'migrationJobClass'             => 'MigrationJobClass',
        'migrationJobId'                => 'MigrationJobId',
        'migrationJobName'              => 'MigrationJobName',
        'migrationJobStatus'            => 'MigrationJobStatus',
        'migrationMode'                 => 'MigrationMode',
        'migrationObject'               => 'MigrationObject',
        'payType'                       => 'PayType',
        'precheckStatus'                => 'PrecheckStatus',
        'requestId'                     => 'RequestId',
        'sourceEndpoint'                => 'SourceEndpoint',
        'structureInitializationStatus' => 'StructureInitializationStatus',
        'success'                       => 'Success',
        'taskId'                        => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->dataInitializationStatus) {
            $this->dataInitializationStatus->validate();
        }
        if (null !== $this->dataSynchronizationStatus) {
            $this->dataSynchronizationStatus->validate();
        }
        if (null !== $this->destinationEndpoint) {
            $this->destinationEndpoint->validate();
        }
        if (null !== $this->migrationMode) {
            $this->migrationMode->validate();
        }
        if (null !== $this->precheckStatus) {
            $this->precheckStatus->validate();
        }
        if (null !== $this->sourceEndpoint) {
            $this->sourceEndpoint->validate();
        }
        if (null !== $this->structureInitializationStatus) {
            $this->structureInitializationStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInitializationStatus) {
            $res['DataInitializationStatus'] = null !== $this->dataInitializationStatus ? $this->dataInitializationStatus->toArray($noStream) : $this->dataInitializationStatus;
        }

        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toArray($noStream) : $this->dataSynchronizationStatus;
        }

        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toArray($noStream) : $this->destinationEndpoint;
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->migrationJobClass) {
            $res['MigrationJobClass'] = $this->migrationJobClass;
        }

        if (null !== $this->migrationJobId) {
            $res['MigrationJobId'] = $this->migrationJobId;
        }

        if (null !== $this->migrationJobName) {
            $res['MigrationJobName'] = $this->migrationJobName;
        }

        if (null !== $this->migrationJobStatus) {
            $res['MigrationJobStatus'] = $this->migrationJobStatus;
        }

        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toArray($noStream) : $this->migrationMode;
        }

        if (null !== $this->migrationObject) {
            $res['MigrationObject'] = $this->migrationObject;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = null !== $this->precheckStatus ? $this->precheckStatus->toArray($noStream) : $this->precheckStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toArray($noStream) : $this->sourceEndpoint;
        }

        if (null !== $this->structureInitializationStatus) {
            $res['StructureInitializationStatus'] = null !== $this->structureInitializationStatus ? $this->structureInitializationStatus->toArray($noStream) : $this->structureInitializationStatus;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['DataInitializationStatus'])) {
            $model->dataInitializationStatus = dataInitializationStatus::fromMap($map['DataInitializationStatus']);
        }

        if (isset($map['DataSynchronizationStatus'])) {
            $model->dataSynchronizationStatus = dataSynchronizationStatus::fromMap($map['DataSynchronizationStatus']);
        }

        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['MigrationJobClass'])) {
            $model->migrationJobClass = $map['MigrationJobClass'];
        }

        if (isset($map['MigrationJobId'])) {
            $model->migrationJobId = $map['MigrationJobId'];
        }

        if (isset($map['MigrationJobName'])) {
            $model->migrationJobName = $map['MigrationJobName'];
        }

        if (isset($map['MigrationJobStatus'])) {
            $model->migrationJobStatus = $map['MigrationJobStatus'];
        }

        if (isset($map['MigrationMode'])) {
            $model->migrationMode = migrationMode::fromMap($map['MigrationMode']);
        }

        if (isset($map['MigrationObject'])) {
            $model->migrationObject = $map['MigrationObject'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = precheckStatus::fromMap($map['PrecheckStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }

        if (isset($map['StructureInitializationStatus'])) {
            $model->structureInitializationStatus = structureInitializationStatus::fromMap($map['StructureInitializationStatus']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
