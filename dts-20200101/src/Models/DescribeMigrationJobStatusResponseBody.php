<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\dataInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\precheckStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody\structureInitializationStatus;
use AlibabaCloud\Tea\Model;

class DescribeMigrationJobStatusResponseBody extends Model
{
    /**
     * @description The status of full data migration.
     *
     * @var dataInitializationStatus
     */
    public $dataInitializationStatus;

    /**
     * @description The status of incremental data migration.
     *
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;

    /**
     * @description The connection settings of the destination instance.
     *
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @description The error code returned if the call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The specification of the data migration instance. Valid values: **small**, **medium**, **large**, **xlarge**, and **2xlarge**. For more information, see [Specifications of data migration instances](~~26606~~).
     *
     * @example 2xlarge
     *
     * @var string
     */
    public $migrationJobClass;

    /**
     * @description The ID of the data migration instance.
     *
     * @example dtsz2v12jfo309****
     *
     * @var string
     */
    public $migrationJobId;

    /**
     * @description The name of the data migration task.
     *
     * @var string
     */
    public $migrationJobName;

    /**
     * @description The status of the data migration task. Valid values:
     *
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is being prechecked.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **Migrating**: The task is migrating data.
     *   **Suspending**: The task is paused.
     *   **MigrationFailed**: The task failed to migrate data.
     *   **Finished**: The task is completed.
     *
     * @example Migrating
     *
     * @var string
     */
    public $migrationJobStatus;

    /**
     * @description The migration types.
     *
     * @var migrationMode
     */
    public $migrationMode;

    /**
     * @description The objects that are migrated by the task.
     *
     * @example [{\"DBName\":\"dtstestdata\",\"TableIncludes\":[{\"TableName\":\"customer\"}]}]
     *
     * @var string
     */
    public $migrationObject;

    /**
     * @description The billing method of the data migration instance. The value is **PostPaid** (pay-as-you-go).
     *
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The precheck details.
     *
     * @var precheckStatus
     */
    public $precheckStatus;

    /**
     * @description The ID of the request.
     *
     * @example A032E3B4-929B-48E9-97B9-37587CBF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The connection settings of the source instance.
     *
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @description The status of schema migration.
     *
     * @var structureInitializationStatus
     */
    public $structureInitializationStatus;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @example z2v12jfo309****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInitializationStatus) {
            $res['DataInitializationStatus'] = null !== $this->dataInitializationStatus ? $this->dataInitializationStatus->toMap() : null;
        }
        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toMap() : null;
        }
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
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
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toMap() : null;
        }
        if (null !== $this->migrationObject) {
            $res['MigrationObject'] = $this->migrationObject;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = null !== $this->precheckStatus ? $this->precheckStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->structureInitializationStatus) {
            $res['StructureInitializationStatus'] = null !== $this->structureInitializationStatus ? $this->structureInitializationStatus->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMigrationJobStatusResponseBody
     */
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
