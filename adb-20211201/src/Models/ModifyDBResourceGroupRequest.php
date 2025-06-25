<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupRequest\rayConfig;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupRequest\rules;

class ModifyDBResourceGroupRequest extends Model
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
     * @var mixed[]
     */
    public $engineParams;

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
     * @var rayConfig
     */
    public $rayConfig;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $status;

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
        'engineParams' => 'EngineParams',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'maxClusterCount' => 'MaxClusterCount',
        'maxComputeResource' => 'MaxComputeResource',
        'maxGpuQuantity' => 'MaxGpuQuantity',
        'minClusterCount' => 'MinClusterCount',
        'minComputeResource' => 'MinComputeResource',
        'minGpuQuantity' => 'MinGpuQuantity',
        'rayConfig' => 'RayConfig',
        'regionId' => 'RegionId',
        'rules' => 'Rules',
        'specName' => 'SpecName',
        'status' => 'Status',
        'targetResourceGroupName' => 'TargetResourceGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->engineParams)) {
            Model::validateArray($this->engineParams);
        }
        if (null !== $this->rayConfig) {
            $this->rayConfig->validate();
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
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

        if (null !== $this->engineParams) {
            if (\is_array($this->engineParams)) {
                $res['EngineParams'] = [];
                foreach ($this->engineParams as $key1 => $value1) {
                    $res['EngineParams'][$key1] = $value1;
                }
            }
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

        if (null !== $this->rayConfig) {
            $res['RayConfig'] = null !== $this->rayConfig ? $this->rayConfig->toArray($noStream) : $this->rayConfig;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['EngineParams'])) {
            if (!empty($map['EngineParams'])) {
                $model->engineParams = [];
                foreach ($map['EngineParams'] as $key1 => $value1) {
                    $model->engineParams[$key1] = $value1;
                }
            }
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
            $model->rayConfig = rayConfig::fromMap($map['RayConfig']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetResourceGroupName'])) {
            $model->targetResourceGroupName = $map['TargetResourceGroupName'];
        }

        return $model;
    }
}
