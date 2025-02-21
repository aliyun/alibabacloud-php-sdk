<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest\sourceEndpoint;

class ConfigureMigrationJobRequest extends Model
{
    /**
     * @var destinationEndpoint
     */
    public $destinationEndpoint;
    /**
     * @var migrationMode
     */
    public $migrationMode;
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
    public $migrationObject;
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
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'destinationEndpoint' => 'DestinationEndpoint',
        'migrationMode'       => 'MigrationMode',
        'sourceEndpoint'      => 'SourceEndpoint',
        'accountId'           => 'AccountId',
        'checkpoint'          => 'Checkpoint',
        'migrationJobId'      => 'MigrationJobId',
        'migrationJobName'    => 'MigrationJobName',
        'migrationObject'     => 'MigrationObject',
        'migrationReserved'   => 'MigrationReserved',
        'ownerId'             => 'OwnerId',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
    ];

    public function validate()
    {
        if (null !== $this->destinationEndpoint) {
            $this->destinationEndpoint->validate();
        }
        if (null !== $this->migrationMode) {
            $this->migrationMode->validate();
        }
        if (null !== $this->sourceEndpoint) {
            $this->sourceEndpoint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toArray($noStream) : $this->destinationEndpoint;
        }

        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toArray($noStream) : $this->migrationMode;
        }

        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toArray($noStream) : $this->sourceEndpoint;
        }

        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }

        if (null !== $this->migrationJobId) {
            $res['MigrationJobId'] = $this->migrationJobId;
        }

        if (null !== $this->migrationJobName) {
            $res['MigrationJobName'] = $this->migrationJobName;
        }

        if (null !== $this->migrationObject) {
            $res['MigrationObject'] = $this->migrationObject;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }

        if (isset($map['MigrationMode'])) {
            $model->migrationMode = migrationMode::fromMap($map['MigrationMode']);
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

        if (isset($map['MigrationJobId'])) {
            $model->migrationJobId = $map['MigrationJobId'];
        }

        if (isset($map['MigrationJobName'])) {
            $model->migrationJobName = $map['MigrationJobName'];
        }

        if (isset($map['MigrationObject'])) {
            $model->migrationObject = $map['MigrationObject'];
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

        return $model;
    }
}
