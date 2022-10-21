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
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var int
     */
    public $dataDiskCount;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var int
     */
    public $defaultCoolDownTime;

    /**
     * @var instanceTypeList[]
     */
    public $instanceTypeList;

    /**
     * @var multiAvailablePolicy
     */
    public $multiAvailablePolicy;

    /**
     * @var nodeOfflinePolicy
     */
    public $nodeOfflinePolicy;

    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @var int
     */
    public $scalingMaxSize;

    /**
     * @var int
     */
    public $scalingMinSize;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $sysDiskCategory;

    /**
     * @var int
     */
    public $sysDiskSize;

    /**
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
