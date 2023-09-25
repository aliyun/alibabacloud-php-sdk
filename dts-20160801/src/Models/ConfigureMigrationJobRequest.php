<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models;

use AlibabaCloud\SDK\Dts\V20160801\Models\ConfigureMigrationJobRequest\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20160801\Models\ConfigureMigrationJobRequest\migrationMode;
use AlibabaCloud\SDK\Dts\V20160801\Models\ConfigureMigrationJobRequest\sourceEndpoint;
use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'destinationEndpoint' => 'DestinationEndpoint',
        'migrationMode'       => 'MigrationMode',
        'sourceEndpoint'      => 'SourceEndpoint',
        'checkpoint'          => 'Checkpoint',
        'migrationJobId'      => 'MigrationJobId',
        'migrationJobName'    => 'MigrationJobName',
        'migrationObject'     => 'MigrationObject',
        'migrationReserved'   => 'MigrationReserved',
        'ownerId'             => 'OwnerId',
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
        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureMigrationJobRequest
     */
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

        return $model;
    }
}
