<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsHiveWorkloadResponseBody;

use AlibabaCloud\Dara\Model;

class apsWorkload extends Model
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
    public $createTime;
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
    public $datasourceName;
    /**
     * @var string
     */
    public $emrClusterId;
    /**
     * @var string
     */
    public $fullComputeUnit;
    /**
     * @var string
     */
    public $metaStoreUri;
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
    public $state;
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
    public $vswitch;
    /**
     * @var string
     */
    public $workloadId;
    /**
     * @var string
     */
    public $workloadName;
    /**
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
