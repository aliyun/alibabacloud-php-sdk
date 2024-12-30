<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsSlsADBJobRequest\columns;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsSlsADBJobRequest\unixTimestampConvert;
use AlibabaCloud\Tea\Model;

class CreateApsSlsADBJobRequest extends Model
{
    /**
     * @example test-role
     *
     * @var string
     */
    public $acrossRole;

    /**
     * @example 123456
     *
     * @var string
     */
    public $acrossUid;

    /**
     * @example -
     *
     * @var string
     */
    public $advancedConfig;

    /**
     * @description This parameter is required.
     *
     * @example -
     *
     * @var columns[]
     */
    public $columns;

    /**
     * @description This parameter is required.
     *
     * @example amv-*********
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 327
     *
     * @var int
     */
    public $datasourceId;

    /**
     * @description This parameter is required.
     *
     * @example dbName
     *
     * @var string
     */
    public $dbName;

    /**
     * @description This parameter is required.
     *
     * @example -
     *
     * @var string
     */
    public $dirtyDataHandleMode;

    /**
     * @example STOP
     *
     * @var string
     */
    public $dirtyDataProcessPattern;

    /**
     * @example false
     *
     * @var string
     */
    public $exactlyOnce;

    /**
     * @example 16
     *
     * @var string
     */
    public $fullComputeUnit;

    /**
     * @example -
     *
     * @var string
     */
    public $hudiAdvancedConfig;

    /**
     * @example 168
     *
     * @var string
     */
    public $incrementalComputeUnit;

    /**
     * @description lakehosue ID。
     *
     * @example 123
     *
     * @var int
     */
    public $lakehouseId;

    /**
     * @example -
     *
     * @var int
     */
    public $maxOffsetsPerTrigger;

    /**
     * @example oss://test*
     *
     * @var string
     */
    public $ossLocation;

    /**
     * @example -
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @example -
     *
     * @var mixed[][]
     */
    public $partitionSpecs;

    /**
     * @description This parameter is required.
     *
     * @example test_user
     *
     * @var string
     */
    public $password;

    /**
     * @example -
     *
     * @var string
     */
    public $primaryKeyDefinition;

    /**
     * @example test
     *
     * @var string
     */
    public $project;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceRegionId;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $startingOffsets;

    /**
     * @description sls Store。
     *
     * @example test
     *
     * @var string
     */
    public $store;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $tableName;

    /**
     * @example -
     *
     * @var string
     */
    public $targetGenerateRule;

    /**
     * @example ADB
     *
     * @var string
     */
    public $targetType;

    /**
     * @example -
     *
     * @var unixTimestampConvert
     */
    public $unixTimestampConvert;

    /**
     * @description This parameter is required.
     *
     * @example user_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description This parameter is required.
     *
     * @example sls-******
     *
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'acrossRole'              => 'AcrossRole',
        'acrossUid'               => 'AcrossUid',
        'advancedConfig'          => 'AdvancedConfig',
        'columns'                 => 'Columns',
        'DBClusterId'             => 'DBClusterId',
        'datasourceId'            => 'DatasourceId',
        'dbName'                  => 'DbName',
        'dirtyDataHandleMode'     => 'DirtyDataHandleMode',
        'dirtyDataProcessPattern' => 'DirtyDataProcessPattern',
        'exactlyOnce'             => 'ExactlyOnce',
        'fullComputeUnit'         => 'FullComputeUnit',
        'hudiAdvancedConfig'      => 'HudiAdvancedConfig',
        'incrementalComputeUnit'  => 'IncrementalComputeUnit',
        'lakehouseId'             => 'LakehouseId',
        'maxOffsetsPerTrigger'    => 'MaxOffsetsPerTrigger',
        'ossLocation'             => 'OssLocation',
        'outputFormat'            => 'OutputFormat',
        'partitionSpecs'          => 'PartitionSpecs',
        'password'                => 'Password',
        'primaryKeyDefinition'    => 'PrimaryKeyDefinition',
        'project'                 => 'Project',
        'regionId'                => 'RegionId',
        'resourceGroup'           => 'ResourceGroup',
        'sourceRegionId'          => 'SourceRegionId',
        'startingOffsets'         => 'StartingOffsets',
        'store'                   => 'Store',
        'tableName'               => 'TableName',
        'targetGenerateRule'      => 'TargetGenerateRule',
        'targetType'              => 'TargetType',
        'unixTimestampConvert'    => 'UnixTimestampConvert',
        'userName'                => 'UserName',
        'workloadName'            => 'WorkloadName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acrossRole) {
            $res['AcrossRole'] = $this->acrossRole;
        }
        if (null !== $this->acrossUid) {
            $res['AcrossUid'] = $this->acrossUid;
        }
        if (null !== $this->advancedConfig) {
            $res['AdvancedConfig'] = $this->advancedConfig;
        }
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dirtyDataHandleMode) {
            $res['DirtyDataHandleMode'] = $this->dirtyDataHandleMode;
        }
        if (null !== $this->dirtyDataProcessPattern) {
            $res['DirtyDataProcessPattern'] = $this->dirtyDataProcessPattern;
        }
        if (null !== $this->exactlyOnce) {
            $res['ExactlyOnce'] = $this->exactlyOnce;
        }
        if (null !== $this->fullComputeUnit) {
            $res['FullComputeUnit'] = $this->fullComputeUnit;
        }
        if (null !== $this->hudiAdvancedConfig) {
            $res['HudiAdvancedConfig'] = $this->hudiAdvancedConfig;
        }
        if (null !== $this->incrementalComputeUnit) {
            $res['IncrementalComputeUnit'] = $this->incrementalComputeUnit;
        }
        if (null !== $this->lakehouseId) {
            $res['LakehouseId'] = $this->lakehouseId;
        }
        if (null !== $this->maxOffsetsPerTrigger) {
            $res['MaxOffsetsPerTrigger'] = $this->maxOffsetsPerTrigger;
        }
        if (null !== $this->ossLocation) {
            $res['OssLocation'] = $this->ossLocation;
        }
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->partitionSpecs) {
            $res['PartitionSpecs'] = $this->partitionSpecs;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->primaryKeyDefinition) {
            $res['PrimaryKeyDefinition'] = $this->primaryKeyDefinition;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }
        if (null !== $this->startingOffsets) {
            $res['StartingOffsets'] = $this->startingOffsets;
        }
        if (null !== $this->store) {
            $res['Store'] = $this->store;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->targetGenerateRule) {
            $res['TargetGenerateRule'] = $this->targetGenerateRule;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->unixTimestampConvert) {
            $res['UnixTimestampConvert'] = null !== $this->unixTimestampConvert ? $this->unixTimestampConvert->toMap() : null;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApsSlsADBJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcrossRole'])) {
            $model->acrossRole = $map['AcrossRole'];
        }
        if (isset($map['AcrossUid'])) {
            $model->acrossUid = $map['AcrossUid'];
        }
        if (isset($map['AdvancedConfig'])) {
            $model->advancedConfig = $map['AdvancedConfig'];
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DirtyDataHandleMode'])) {
            $model->dirtyDataHandleMode = $map['DirtyDataHandleMode'];
        }
        if (isset($map['DirtyDataProcessPattern'])) {
            $model->dirtyDataProcessPattern = $map['DirtyDataProcessPattern'];
        }
        if (isset($map['ExactlyOnce'])) {
            $model->exactlyOnce = $map['ExactlyOnce'];
        }
        if (isset($map['FullComputeUnit'])) {
            $model->fullComputeUnit = $map['FullComputeUnit'];
        }
        if (isset($map['HudiAdvancedConfig'])) {
            $model->hudiAdvancedConfig = $map['HudiAdvancedConfig'];
        }
        if (isset($map['IncrementalComputeUnit'])) {
            $model->incrementalComputeUnit = $map['IncrementalComputeUnit'];
        }
        if (isset($map['LakehouseId'])) {
            $model->lakehouseId = $map['LakehouseId'];
        }
        if (isset($map['MaxOffsetsPerTrigger'])) {
            $model->maxOffsetsPerTrigger = $map['MaxOffsetsPerTrigger'];
        }
        if (isset($map['OssLocation'])) {
            $model->ossLocation = $map['OssLocation'];
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['PartitionSpecs'])) {
            if (!empty($map['PartitionSpecs'])) {
                $model->partitionSpecs = $map['PartitionSpecs'];
            }
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PrimaryKeyDefinition'])) {
            $model->primaryKeyDefinition = $map['PrimaryKeyDefinition'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }
        if (isset($map['StartingOffsets'])) {
            $model->startingOffsets = $map['StartingOffsets'];
        }
        if (isset($map['Store'])) {
            $model->store = $map['Store'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TargetGenerateRule'])) {
            $model->targetGenerateRule = $map['TargetGenerateRule'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['UnixTimestampConvert'])) {
            $model->unixTimestampConvert = unixTimestampConvert::fromMap($map['UnixTimestampConvert']);
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }

        return $model;
    }
}
