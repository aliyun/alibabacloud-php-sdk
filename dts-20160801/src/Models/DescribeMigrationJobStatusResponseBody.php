<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models;

use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobStatusResponseBody\dataInitializationStatus;
use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobStatusResponseBody\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobStatusResponseBody\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobStatusResponseBody\migrationMode;
use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobStatusResponseBody\precheckStatus;
use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobStatusResponseBody\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobStatusResponseBody\structureInitializationStatus;
use AlibabaCloud\Tea\Model;

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
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var structureInitializationStatus
     */
    public $structureInitializationStatus;
    protected $_name = [
        'dataInitializationStatus'      => 'DataInitializationStatus',
        'dataSynchronizationStatus'     => 'DataSynchronizationStatus',
        'destinationEndpoint'           => 'DestinationEndpoint',
        'migrationJobClass'             => 'MigrationJobClass',
        'migrationJobId'                => 'MigrationJobId',
        'migrationJobName'              => 'MigrationJobName',
        'migrationJobStatus'            => 'MigrationJobStatus',
        'migrationMode'                 => 'MigrationMode',
        'migrationObject'               => 'MigrationObject',
        'payType'                       => 'PayType',
        'precheckStatus'                => 'PrecheckStatus',
        'sourceEndpoint'                => 'SourceEndpoint',
        'structureInitializationStatus' => 'StructureInitializationStatus',
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
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->structureInitializationStatus) {
            $res['StructureInitializationStatus'] = null !== $this->structureInitializationStatus ? $this->structureInitializationStatus->toMap() : null;
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
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['StructureInitializationStatus'])) {
            $model->structureInitializationStatus = structureInitializationStatus::fromMap($map['StructureInitializationStatus']);
        }

        return $model;
    }
}
