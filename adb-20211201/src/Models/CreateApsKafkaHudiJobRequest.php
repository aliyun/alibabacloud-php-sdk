<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsKafkaHudiJobRequest\columns;

class CreateApsKafkaHudiJobRequest extends Model
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
     * @var columns[]
     */
    public $columns;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $dataFormatType;

    /**
     * @var string
     */
    public $dataOutputFormat;

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
    public $jsonParseLevel;

    /**
     * @var string
     */
    public $kafkaClusterId;

    /**
     * @var string
     */
    public $kafkaTopic;

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
     * @var mixed[][]
     */
    public $partitionSpecs;

    /**
     * @var string
     */
    public $primaryKeyDefinition;

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
    public $workloadName;
    protected $_name = [
        'acrossRole' => 'AcrossRole',
        'acrossUid' => 'AcrossUid',
        'advancedConfig' => 'AdvancedConfig',
        'columns' => 'Columns',
        'DBClusterId' => 'DBClusterId',
        'dataFormatType' => 'DataFormatType',
        'dataOutputFormat' => 'DataOutputFormat',
        'datasourceId' => 'DatasourceId',
        'dbName' => 'DbName',
        'fullComputeUnit' => 'FullComputeUnit',
        'hudiAdvancedConfig' => 'HudiAdvancedConfig',
        'incrementalComputeUnit' => 'IncrementalComputeUnit',
        'jsonParseLevel' => 'JsonParseLevel',
        'kafkaClusterId' => 'KafkaClusterId',
        'kafkaTopic' => 'KafkaTopic',
        'lakehouseId' => 'LakehouseId',
        'maxOffsetsPerTrigger' => 'MaxOffsetsPerTrigger',
        'ossLocation' => 'OssLocation',
        'outputFormat' => 'OutputFormat',
        'partitionSpecs' => 'PartitionSpecs',
        'primaryKeyDefinition' => 'PrimaryKeyDefinition',
        'regionId' => 'RegionId',
        'resourceGroup' => 'ResourceGroup',
        'sourceRegionId' => 'SourceRegionId',
        'startingOffsets' => 'StartingOffsets',
        'tableName' => 'TableName',
        'targetGenerateRule' => 'TargetGenerateRule',
        'targetType' => 'TargetType',
        'workloadName' => 'WorkloadName',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->partitionSpecs)) {
            Model::validateArray($this->partitionSpecs);
        }
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

        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->dataFormatType) {
            $res['DataFormatType'] = $this->dataFormatType;
        }

        if (null !== $this->dataOutputFormat) {
            $res['DataOutputFormat'] = $this->dataOutputFormat;
        }

        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
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

        if (null !== $this->jsonParseLevel) {
            $res['JsonParseLevel'] = $this->jsonParseLevel;
        }

        if (null !== $this->kafkaClusterId) {
            $res['KafkaClusterId'] = $this->kafkaClusterId;
        }

        if (null !== $this->kafkaTopic) {
            $res['KafkaTopic'] = $this->kafkaTopic;
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
            if (\is_array($this->partitionSpecs)) {
                $res['PartitionSpecs'] = [];
                $n1 = 0;
                foreach ($this->partitionSpecs as $item1) {
                    if (\is_array($item1)) {
                        $res['PartitionSpecs'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['PartitionSpecs'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->primaryKeyDefinition) {
            $res['PrimaryKeyDefinition'] = $this->primaryKeyDefinition;
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

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->targetGenerateRule) {
            $res['TargetGenerateRule'] = $this->targetGenerateRule;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = columns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DataFormatType'])) {
            $model->dataFormatType = $map['DataFormatType'];
        }

        if (isset($map['DataOutputFormat'])) {
            $model->dataOutputFormat = $map['DataOutputFormat'];
        }

        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
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

        if (isset($map['JsonParseLevel'])) {
            $model->jsonParseLevel = $map['JsonParseLevel'];
        }

        if (isset($map['KafkaClusterId'])) {
            $model->kafkaClusterId = $map['KafkaClusterId'];
        }

        if (isset($map['KafkaTopic'])) {
            $model->kafkaTopic = $map['KafkaTopic'];
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
                $model->partitionSpecs = [];
                $n1 = 0;
                foreach ($map['PartitionSpecs'] as $item1) {
                    if (!empty($item1)) {
                        $model->partitionSpecs[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->partitionSpecs[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['PrimaryKeyDefinition'])) {
            $model->primaryKeyDefinition = $map['PrimaryKeyDefinition'];
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

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TargetGenerateRule'])) {
            $model->targetGenerateRule = $map['TargetGenerateRule'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }

        return $model;
    }
}
