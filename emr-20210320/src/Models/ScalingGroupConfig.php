<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\instanceTypeList;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\multiAvailablePolicy;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\nodeOfflinePolicy;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\privatePoolOptions;
use AlibabaCloud\Tea\Model;

class ScalingGroupConfig extends Model
{
    /**
     * @description 数据盘类型。
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description 数据盘个数。
     *
     * @example 4
     *
     * @var int
     */
    public $dataDiskCount;

    /**
     * @description 数据盘大小,单位GB。
     *
     * @example 40
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @description 默认冷却时间。
     *
     * @example 0
     *
     * @var int
     */
    public $defaultCoolDownTime;

    /**
     * @description 抢占实例列表。
     *
     * @var instanceTypeList[]
     */
    public $instanceTypeList;

    /**
     * @description 资源可用性策略(成本优化参数)。
     *
     * @var multiAvailablePolicy
     */
    public $multiAvailablePolicy;

    /**
     * @description 节点下线策略。
     *
     * @var nodeOfflinePolicy
     */
    public $nodeOfflinePolicy;

    /**
     * @description 私有池选项	。
     *
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @description 伸缩组节点最大个数。
     *
     * @example 10
     *
     * @var int
     */
    public $scalingMaxSize;

    /**
     * @description 伸缩组节点最小个数。
     *
     * @example 1
     *
     * @var int
     */
    public $scalingMinSize;

    /**
     * @description 抢占式Spot实例策略。
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description 系统盘类型。
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $sysDiskCategory;

    /**
     * @description 系统盘大小,单位GB。
     *
     * @example 80
     *
     * @var int
     */
    public $sysDiskSize;

    /**
     * @description 伸缩活动触发模式。
     *
     * @example ByLoad
     *
     * @var string
     */
    public $triggerMode;
    protected $_name = [
        'dataDiskCategory'     => 'DataDiskCategory',
        'dataDiskCount'        => 'DataDiskCount',
        'dataDiskSize'         => 'DataDiskSize',
        'defaultCoolDownTime'  => 'DefaultCoolDownTime',
        'instanceTypeList'     => 'InstanceTypeList',
        'multiAvailablePolicy' => 'MultiAvailablePolicy',
        'nodeOfflinePolicy'    => 'NodeOfflinePolicy',
        'privatePoolOptions'   => 'PrivatePoolOptions',
        'scalingMaxSize'       => 'ScalingMaxSize',
        'scalingMinSize'       => 'ScalingMinSize',
        'spotStrategy'         => 'SpotStrategy',
        'sysDiskCategory'      => 'SysDiskCategory',
        'sysDiskSize'          => 'SysDiskSize',
        'triggerMode'          => 'TriggerMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskCount) {
            $res['DataDiskCount'] = $this->dataDiskCount;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->defaultCoolDownTime) {
            $res['DefaultCoolDownTime'] = $this->defaultCoolDownTime;
        }
        if (null !== $this->instanceTypeList) {
            $res['InstanceTypeList'] = [];
            if (null !== $this->instanceTypeList && \is_array($this->instanceTypeList)) {
                $n = 0;
                foreach ($this->instanceTypeList as $item) {
                    $res['InstanceTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->multiAvailablePolicy) {
            $res['MultiAvailablePolicy'] = null !== $this->multiAvailablePolicy ? $this->multiAvailablePolicy->toMap() : null;
        }
        if (null !== $this->nodeOfflinePolicy) {
            $res['NodeOfflinePolicy'] = null !== $this->nodeOfflinePolicy ? $this->nodeOfflinePolicy->toMap() : null;
        }
        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }
        if (null !== $this->scalingMaxSize) {
            $res['ScalingMaxSize'] = $this->scalingMaxSize;
        }
        if (null !== $this->scalingMinSize) {
            $res['ScalingMinSize'] = $this->scalingMinSize;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->sysDiskCategory) {
            $res['SysDiskCategory'] = $this->sysDiskCategory;
        }
        if (null !== $this->sysDiskSize) {
            $res['SysDiskSize'] = $this->sysDiskSize;
        }
        if (null !== $this->triggerMode) {
            $res['TriggerMode'] = $this->triggerMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScalingGroupConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskCount'])) {
            $model->dataDiskCount = $map['DataDiskCount'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DefaultCoolDownTime'])) {
            $model->defaultCoolDownTime = $map['DefaultCoolDownTime'];
        }
        if (isset($map['InstanceTypeList'])) {
            if (!empty($map['InstanceTypeList'])) {
                $model->instanceTypeList = [];
                $n                       = 0;
                foreach ($map['InstanceTypeList'] as $item) {
                    $model->instanceTypeList[$n++] = null !== $item ? instanceTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MultiAvailablePolicy'])) {
            $model->multiAvailablePolicy = multiAvailablePolicy::fromMap($map['MultiAvailablePolicy']);
        }
        if (isset($map['NodeOfflinePolicy'])) {
            $model->nodeOfflinePolicy = nodeOfflinePolicy::fromMap($map['NodeOfflinePolicy']);
        }
        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }
        if (isset($map['ScalingMaxSize'])) {
            $model->scalingMaxSize = $map['ScalingMaxSize'];
        }
        if (isset($map['ScalingMinSize'])) {
            $model->scalingMinSize = $map['ScalingMinSize'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SysDiskCategory'])) {
            $model->sysDiskCategory = $map['SysDiskCategory'];
        }
        if (isset($map['SysDiskSize'])) {
            $model->sysDiskSize = $map['SysDiskSize'];
        }
        if (isset($map['TriggerMode'])) {
            $model->triggerMode = $map['TriggerMode'];
        }

        return $model;
    }
}
