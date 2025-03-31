<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateApsHiveJobRequest extends Model
{
    /**
     * @var string
     */
    public $advancedConfig;

    /**
     * @var string
     */
    public $conflictStrategy;

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
    public $fullComputeUnit;

    /**
     * @var string
     */
    public $ossLocation;

    /**
     * @var int
     */
    public $parallelism;

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
    public $syncAllowExpression;

    /**
     * @var string
     */
    public $syncDenyExpression;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'advancedConfig' => 'AdvancedConfig',
        'conflictStrategy' => 'ConflictStrategy',
        'DBClusterId' => 'DBClusterId',
        'datasourceId' => 'DatasourceId',
        'fullComputeUnit' => 'FullComputeUnit',
        'ossLocation' => 'OssLocation',
        'parallelism' => 'Parallelism',
        'regionId' => 'RegionId',
        'resourceGroup' => 'ResourceGroup',
        'syncAllowExpression' => 'SyncAllowExpression',
        'syncDenyExpression' => 'SyncDenyExpression',
        'targetType' => 'TargetType',
        'workloadName' => 'WorkloadName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedConfig) {
            $res['AdvancedConfig'] = $this->advancedConfig;
        }

        if (null !== $this->conflictStrategy) {
            $res['ConflictStrategy'] = $this->conflictStrategy;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }

        if (null !== $this->fullComputeUnit) {
            $res['FullComputeUnit'] = $this->fullComputeUnit;
        }

        if (null !== $this->ossLocation) {
            $res['OssLocation'] = $this->ossLocation;
        }

        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        if (null !== $this->syncAllowExpression) {
            $res['SyncAllowExpression'] = $this->syncAllowExpression;
        }

        if (null !== $this->syncDenyExpression) {
            $res['SyncDenyExpression'] = $this->syncDenyExpression;
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
        if (isset($map['AdvancedConfig'])) {
            $model->advancedConfig = $map['AdvancedConfig'];
        }

        if (isset($map['ConflictStrategy'])) {
            $model->conflictStrategy = $map['ConflictStrategy'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }

        if (isset($map['FullComputeUnit'])) {
            $model->fullComputeUnit = $map['FullComputeUnit'];
        }

        if (isset($map['OssLocation'])) {
            $model->ossLocation = $map['OssLocation'];
        }

        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        if (isset($map['SyncAllowExpression'])) {
            $model->syncAllowExpression = $map['SyncAllowExpression'];
        }

        if (isset($map['SyncDenyExpression'])) {
            $model->syncDenyExpression = $map['SyncDenyExpression'];
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
