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
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The start offset of incremental data migration. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 111
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description The ID of the data migration instance. You can call the **DescribeMigrationJobs** operation to query the instance ID.
     *
     * This parameter is required.
     * @example dtsl3m1213ye7l****
     *
     * @var string
     */
    public $migrationJobId;

    /**
     * @description The name of the data migration task. The name can be up to 32 characters in length. We recommend that you specify an informative name to identify the task. You do not need to use a unique task name.
     *
     * This parameter is required.
     * @example MySQL_TO_RDS
     *
     * @var string
     */
    public $migrationJobName;

    /**
     * @description The objects that you want to migrate. The value is a JSON string and can contain regular expressions.
     *
     * This parameter is required.
     * @example [{"DBName":"dtstestdata","TableIncludes":[{"TableName":"customer"}]}]
     *
     * @var string
     */
    public $migrationObject;

    /**
     * @description The reserved parameter of DTS. The value is a JSON string. You can specify this parameter to meet special requirements, for example, whether to automatically start a precheck. For more information, see [MigrationReserved](https://help.aliyun.com/document_detail/176470.html).
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
     * @description The ID of the region where the data migration instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * >  The region ID of the data migration instance is the same as that of the destination database.
     * @example cn-hangzhou
     *
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
