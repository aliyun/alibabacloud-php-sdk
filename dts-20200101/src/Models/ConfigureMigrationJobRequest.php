<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest\sourceEndpoint;
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
     * @description The objects that you want to migrate. The value is a JSON string and can contain regular expressions.
     *
     * For more information, see [MigrationObject](https://help.aliyun.com/document_detail/141227.html).
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description Specifies whether to perform incremental data migration. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  For more information about databases that support incremental data migration, see [Supported databases and migration types](https://help.aliyun.com/document_detail/26618.html).
     *
     * @example 111
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description system
     *
     * This parameter is required.
     *
     * @example The operation that you want to perform. Set the value to **ConfigureMigrationJob**.
     *
     * @var string
     */
    public $migrationJobId;

    /**
     * @description The ID of the region where the data migration instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * >  The region ID of the data migration instance is the same as that of the destination database.
     *
     * This parameter is required.
     *
     * @example MySQL_TO_RDS
     *
     * @var string
     */
    public $migrationJobName;

    /**
     * @description Specifies whether to perform schema migration. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  For more information about databases that support schema migration, see [Supported databases and migration types](https://help.aliyun.com/document_detail/26618.html).
     *
     * This parameter is required.
     *
     * @example [{"DBName":"dtstestdata","TableIncludes":[{"TableName":"customer"}]}]
     *
     * @var string
     */
    public $migrationObject;

    /**
     * @description Specifies whether to perform full data migration. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  For more information about databases that support full data migration, see [Supported databases and migration types](https://help.aliyun.com/document_detail/26618.html).
     *
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource GroupId
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'destinationEndpoint' => 'DestinationEndpoint',
        'migrationMode' => 'MigrationMode',
        'sourceEndpoint' => 'SourceEndpoint',
        'accountId' => 'AccountId',
        'checkpoint' => 'Checkpoint',
        'migrationJobId' => 'MigrationJobId',
        'migrationJobName' => 'MigrationJobName',
        'migrationObject' => 'MigrationObject',
        'migrationReserved' => 'MigrationReserved',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

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
