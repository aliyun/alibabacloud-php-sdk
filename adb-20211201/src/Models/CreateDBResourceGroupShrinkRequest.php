<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateDBResourceGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $autoStopInterval;

    /**
     * @var string
     */
    public $clusterMode;

    /**
     * @var string
     */
    public $clusterSizeResource;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $enableSpot;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineParamsShrink;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var int
     */
    public $maxClusterCount;

    /**
     * @var string
     */
    public $maxComputeResource;

    /**
     * @var int
     */
    public $maxGpuQuantity;

    /**
     * @var int
     */
    public $minClusterCount;

    /**
     * @var string
     */
    public $minComputeResource;

    /**
     * @var int
     */
    public $minGpuQuantity;

    /**
     * @var string
     */
    public $rayConfigShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rulesShrink;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $targetResourceGroupName;
    protected $_name = [
        'autoStopInterval' => 'AutoStopInterval',
        'clusterMode' => 'ClusterMode',
        'clusterSizeResource' => 'ClusterSizeResource',
        'DBClusterId' => 'DBClusterId',
        'enableSpot' => 'EnableSpot',
        'engine' => 'Engine',
        'engineParamsShrink' => 'EngineParams',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'maxClusterCount' => 'MaxClusterCount',
        'maxComputeResource' => 'MaxComputeResource',
        'maxGpuQuantity' => 'MaxGpuQuantity',
        'minClusterCount' => 'MinClusterCount',
        'minComputeResource' => 'MinComputeResource',
        'minGpuQuantity' => 'MinGpuQuantity',
        'rayConfigShrink' => 'RayConfig',
        'regionId' => 'RegionId',
        'rulesShrink' => 'Rules',
        'specName' => 'SpecName',
        'targetResourceGroupName' => 'TargetResourceGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoStopInterval) {
            $res['AutoStopInterval'] = $this->autoStopInterval;
        }

        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }

        if (null !== $this->clusterSizeResource) {
            $res['ClusterSizeResource'] = $this->clusterSizeResource;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->enableSpot) {
            $res['EnableSpot'] = $this->enableSpot;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineParamsShrink) {
            $res['EngineParams'] = $this->engineParamsShrink;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->maxClusterCount) {
            $res['MaxClusterCount'] = $this->maxClusterCount;
        }

        if (null !== $this->maxComputeResource) {
            $res['MaxComputeResource'] = $this->maxComputeResource;
        }

        if (null !== $this->maxGpuQuantity) {
            $res['MaxGpuQuantity'] = $this->maxGpuQuantity;
        }

        if (null !== $this->minClusterCount) {
            $res['MinClusterCount'] = $this->minClusterCount;
        }

        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }

        if (null !== $this->minGpuQuantity) {
            $res['MinGpuQuantity'] = $this->minGpuQuantity;
        }

        if (null !== $this->rayConfigShrink) {
            $res['RayConfig'] = $this->rayConfigShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rulesShrink) {
            $res['Rules'] = $this->rulesShrink;
        }

        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }

        if (null !== $this->targetResourceGroupName) {
            $res['TargetResourceGroupName'] = $this->targetResourceGroupName;
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
        if (isset($map['AutoStopInterval'])) {
            $model->autoStopInterval = $map['AutoStopInterval'];
        }

        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }

        if (isset($map['ClusterSizeResource'])) {
            $model->clusterSizeResource = $map['ClusterSizeResource'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EnableSpot'])) {
            $model->enableSpot = $map['EnableSpot'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineParams'])) {
            $model->engineParamsShrink = $map['EngineParams'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['MaxClusterCount'])) {
            $model->maxClusterCount = $map['MaxClusterCount'];
        }

        if (isset($map['MaxComputeResource'])) {
            $model->maxComputeResource = $map['MaxComputeResource'];
        }

        if (isset($map['MaxGpuQuantity'])) {
            $model->maxGpuQuantity = $map['MaxGpuQuantity'];
        }

        if (isset($map['MinClusterCount'])) {
            $model->minClusterCount = $map['MinClusterCount'];
        }

        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }

        if (isset($map['MinGpuQuantity'])) {
            $model->minGpuQuantity = $map['MinGpuQuantity'];
        }

        if (isset($map['RayConfig'])) {
            $model->rayConfigShrink = $map['RayConfig'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Rules'])) {
            $model->rulesShrink = $map['Rules'];
        }

        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        if (isset($map['TargetResourceGroupName'])) {
            $model->targetResourceGroupName = $map['TargetResourceGroupName'];
        }

        return $model;
    }
}
