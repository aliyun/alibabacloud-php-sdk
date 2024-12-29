<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateApsHiveJobRequest extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $advancedConfig;

    /**
     * @var string
     */
    public $conflictStrategy;

    /**
     * @description This parameter is required.
     *
     * @example amv-****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 40
     *
     * @var int
     */
    public $datasourceId;

    /**
     * @description This parameter is required.
     *
     * @example 16
     *
     * @var string
     */
    public $fullComputeUnit;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ossLocation;

    /**
     * @example 8
     *
     * @var int
     */
    public $parallelism;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example user_default
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @example *
     *
     * @var string
     */
    public $syncAllowExpression;

    /**
     * @example abc
     *
     * @var string
     */
    public $syncDenyExpression;

    /**
     * @example OSS
     *
     * @var string
     */
    public $targetType;

    /**
     * @description This parameter is required.
     *
     * @example xxx-20240224100253
     *
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'advancedConfig'      => 'AdvancedConfig',
        'conflictStrategy'    => 'ConflictStrategy',
        'DBClusterId'         => 'DBClusterId',
        'datasourceId'        => 'DatasourceId',
        'fullComputeUnit'     => 'FullComputeUnit',
        'ossLocation'         => 'OssLocation',
        'parallelism'         => 'Parallelism',
        'regionId'            => 'RegionId',
        'resourceGroup'       => 'ResourceGroup',
        'syncAllowExpression' => 'SyncAllowExpression',
        'syncDenyExpression'  => 'SyncDenyExpression',
        'targetType'          => 'TargetType',
        'workloadName'        => 'WorkloadName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateApsHiveJobRequest
     */
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
