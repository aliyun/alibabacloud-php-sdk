<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsHiveWorkloadResponseBody;

use AlibabaCloud\Tea\Model;

class apsWorkload extends Model
{
    /**
     * @example test.adv.config=value
     *
     * @var string
     */
    public $advancedConfig;

    /**
     * @example Intercept
     *
     * @var string
     */
    public $conflictStrategy;

    /**
     * @example -
     *
     * @var string
     */
    public $createTime;

    /**
     * @example amv-*******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 8
     *
     * @var int
     */
    public $datasourceId;

    /**
     * @example sls-******
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @example -
     *
     * @var string
     */
    public $emrClusterId;

    /**
     * @example 16
     *
     * @var string
     */
    public $fullComputeUnit;

    /**
     * @description hive meta store url。
     *
     * @example -
     *
     * @var string
     */
    public $metaStoreUri;

    /**
     * @example oss://******
     *
     * @var string
     */
    public $ossLocation;

    /**
     * @example 2
     *
     * @var int
     */
    public $parallelism;

    /**
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
     * @example COMPLETED
     *
     * @var string
     */
    public $state;

    /**
     * @example abc
     *
     * @var string
     */
    public $syncAllowExpression;

    /**
     * @example def
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
     * @example vsw-******
     *
     * @var string
     */
    public $vswitch;

    /**
     * @example aps-******
     *
     * @var string
     */
    public $workloadId;

    /**
     * @example test
     *
     * @var string
     */
    public $workloadName;

    /**
     * @example test
     *
     * @var string
     */
    public $workloadTypeName;
    protected $_name = [
        'advancedConfig'      => 'AdvancedConfig',
        'conflictStrategy'    => 'ConflictStrategy',
        'createTime'          => 'CreateTime',
        'DBClusterId'         => 'DBClusterId',
        'datasourceId'        => 'DatasourceId',
        'datasourceName'      => 'DatasourceName',
        'emrClusterId'        => 'EmrClusterId',
        'fullComputeUnit'     => 'FullComputeUnit',
        'metaStoreUri'        => 'MetaStoreUri',
        'ossLocation'         => 'OssLocation',
        'parallelism'         => 'Parallelism',
        'regionId'            => 'RegionId',
        'resourceGroup'       => 'ResourceGroup',
        'state'               => 'State',
        'syncAllowExpression' => 'SyncAllowExpression',
        'syncDenyExpression'  => 'SyncDenyExpression',
        'targetType'          => 'TargetType',
        'vswitch'             => 'Vswitch',
        'workloadId'          => 'WorkloadId',
        'workloadName'        => 'WorkloadName',
        'workloadTypeName'    => 'WorkloadTypeName',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }
        if (null !== $this->emrClusterId) {
            $res['EmrClusterId'] = $this->emrClusterId;
        }
        if (null !== $this->fullComputeUnit) {
            $res['FullComputeUnit'] = $this->fullComputeUnit;
        }
        if (null !== $this->metaStoreUri) {
            $res['MetaStoreUri'] = $this->metaStoreUri;
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }
        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }
        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
        }
        if (null !== $this->workloadTypeName) {
            $res['WorkloadTypeName'] = $this->workloadTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apsWorkload
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }
        if (isset($map['EmrClusterId'])) {
            $model->emrClusterId = $map['EmrClusterId'];
        }
        if (isset($map['FullComputeUnit'])) {
            $model->fullComputeUnit = $map['FullComputeUnit'];
        }
        if (isset($map['MetaStoreUri'])) {
            $model->metaStoreUri = $map['MetaStoreUri'];
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
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
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }
        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }
        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }
        if (isset($map['WorkloadTypeName'])) {
            $model->workloadTypeName = $map['WorkloadTypeName'];
        }

        return $model;
    }
}
