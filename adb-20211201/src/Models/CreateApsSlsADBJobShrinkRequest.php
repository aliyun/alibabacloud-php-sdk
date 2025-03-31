<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateApsSlsADBJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acrossRole;

    /**
     * @var string
     */
    public $acrossUid;

    /**
     * @var string
     */
    public $advancedConfig;

    /**
     * @var string
     */
    public $columnsShrink;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var int
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dirtyDataHandleMode;

    /**
     * @var string
     */
    public $dirtyDataProcessPattern;

    /**
     * @var string
     */
    public $exactlyOnce;

    /**
     * @var string
     */
    public $fullComputeUnit;

    /**
     * @var string
     */
    public $hudiAdvancedConfig;

    /**
     * @var string
     */
    public $incrementalComputeUnit;

    /**
     * @var int
     */
    public $lakehouseId;

    /**
     * @var int
     */
    public $maxOffsetsPerTrigger;

    /**
     * @var string
     */
    public $ossLocation;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var string
     */
    public $partitionSpecsShrink;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $primaryKeyDefinition;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $sourceRegionId;

    /**
     * @var string
     */
    public $startingOffsets;

    /**
     * @var string
     */
    public $store;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $targetGenerateRule;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $unixTimestampConvertShrink;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'acrossRole' => 'AcrossRole',
        'acrossUid' => 'AcrossUid',
        'advancedConfig' => 'AdvancedConfig',
        'columnsShrink' => 'Columns',
        'DBClusterId' => 'DBClusterId',
        'datasourceId' => 'DatasourceId',
        'dbName' => 'DbName',
        'dirtyDataHandleMode' => 'DirtyDataHandleMode',
        'dirtyDataProcessPattern' => 'DirtyDataProcessPattern',
        'exactlyOnce' => 'ExactlyOnce',
        'fullComputeUnit' => 'FullComputeUnit',
        'hudiAdvancedConfig' => 'HudiAdvancedConfig',
        'incrementalComputeUnit' => 'IncrementalComputeUnit',
        'lakehouseId' => 'LakehouseId',
        'maxOffsetsPerTrigger' => 'MaxOffsetsPerTrigger',
        'ossLocation' => 'OssLocation',
        'outputFormat' => 'OutputFormat',
        'partitionSpecsShrink' => 'PartitionSpecs',
        'password' => 'Password',
        'primaryKeyDefinition' => 'PrimaryKeyDefinition',
        'project' => 'Project',
        'regionId' => 'RegionId',
        'resourceGroup' => 'ResourceGroup',
        'sourceRegionId' => 'SourceRegionId',
        'startingOffsets' => 'StartingOffsets',
        'store' => 'Store',
        'tableName' => 'TableName',
        'targetGenerateRule' => 'TargetGenerateRule',
        'targetType' => 'TargetType',
        'unixTimestampConvertShrink' => 'UnixTimestampConvert',
        'userName' => 'UserName',
        'workloadName' => 'WorkloadName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->columnsShrink) {
            $res['Columns'] = $this->columnsShrink;
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

        if (null !== $this->partitionSpecsShrink) {
            $res['PartitionSpecs'] = $this->partitionSpecsShrink;
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

        if (null !== $this->unixTimestampConvertShrink) {
            $res['UnixTimestampConvert'] = $this->unixTimestampConvertShrink;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
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
            $model->columnsShrink = $map['Columns'];
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
            $model->partitionSpecsShrink = $map['PartitionSpecs'];
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
            $model->unixTimestampConvertShrink = $map['UnixTimestampConvert'];
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
