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
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var bool
     */
    public $dataInitialization;

    /**
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
     * @var bool
     */
    public $structureInitialization;

    /**
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @var string
     */
    public $synchronizationJobName;

    /**
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
