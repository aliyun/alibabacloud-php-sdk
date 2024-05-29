<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobRequest\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobRequest\partitionKey;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobRequest\sourceEndpoint;
use AlibabaCloud\Tea\Model;

class ConfigureSynchronizationJobRequest extends Model
{
    /**
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @var partitionKey
     */
    public $partitionKey;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The synchronization checkpoint.
     *
     * @example 1610540493
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description Specifies whether to perform initial full data synchronization. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  Default value: **true**.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $dataInitialization;

    /**
     * @description The reserved parameter of DTS. The value is a JSON string. You can specify this parameter to meet special requirements, for example, whether to automatically start a precheck. For more information, see [MigrationReserved](https://help.aliyun.com/document_detail/176470.html).
     *
     * >  This parameter can be used for data synchronization between ApsaraDB for Redis Enterprise Edition instances. For more information, see [Use OpenAPI Explorer to configure one-way or two-way data synchronization between ApsaraDB for Redis Enterprise Edition instances](https://help.aliyun.com/document_detail/155967.html).
     * @example {     "autoStartModulesAfterConfig": "none",     "targetTableMode": 2 }
     *
     * @var string
     */
    public $migrationReserved;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to perform initial schema synchronization. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  Default value: **true**.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $structureInitialization;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**
     *   **Reverse**
     *
     * >
     *   Default value: **Forward**.
     *   The value **Reverse** takes effect only if the topology of the data synchronization instance is two-way synchronization.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description The ID of the data synchronization instance. You can call the [DescribeSynchronizationJobs](https://help.aliyun.com/document_detail/49454.html) operation to query the instance ID.
     *
     * This parameter is required.
     * @example dtsz4ao1dor13d****
     *
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @description The name of the data synchronization task.
     *
     * >  We recommend that you specify an informative name for easy identification. You do not need to use a unique task name.
     * @var string
     */
    public $synchronizationJobName;

    /**
     * @description The objects that you want to synchronize. The value is a JSON string and can contain regular expressions. For more information, see [SynchronizationObjects](https://help.aliyun.com/document_detail/141901.html).
     *
     * This parameter is required.
     * @example [{"DBName":"dtstestdata","TableIncludes":[{"TableName":"customer"}]}]
     *
     * @var string
     */
    public $synchronizationObjects;
    protected $_name = [
        'destinationEndpoint'      => 'DestinationEndpoint',
        'partitionKey'             => 'PartitionKey',
        'sourceEndpoint'           => 'SourceEndpoint',
        'accountId'                => 'AccountId',
        'checkpoint'               => 'Checkpoint',
        'dataInitialization'       => 'DataInitialization',
        'migrationReserved'        => 'MigrationReserved',
        'ownerId'                  => 'OwnerId',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'structureInitialization'  => 'StructureInitialization',
        'synchronizationDirection' => 'SynchronizationDirection',
        'synchronizationJobId'     => 'SynchronizationJobId',
        'synchronizationJobName'   => 'SynchronizationJobName',
        'synchronizationObjects'   => 'SynchronizationObjects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
        }
        if (null !== $this->partitionKey) {
            $res['PartitionKey'] = null !== $this->partitionKey ? $this->partitionKey->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }
        if (null !== $this->migrationReserved) {
            $res['MigrationReserved'] = $this->migrationReserved;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }
        if (null !== $this->synchronizationJobName) {
            $res['SynchronizationJobName'] = $this->synchronizationJobName;
        }
        if (null !== $this->synchronizationObjects) {
            $res['SynchronizationObjects'] = $this->synchronizationObjects;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureSynchronizationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }
        if (isset($map['PartitionKey'])) {
            $model->partitionKey = partitionKey::fromMap($map['PartitionKey']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }
        if (isset($map['MigrationReserved'])) {
            $model->migrationReserved = $map['MigrationReserved'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }
        if (isset($map['SynchronizationJobName'])) {
            $model->synchronizationJobName = $map['SynchronizationJobName'];
        }
        if (isset($map['SynchronizationObjects'])) {
            $model->synchronizationObjects = $map['SynchronizationObjects'];
        }

        return $model;
    }
}
