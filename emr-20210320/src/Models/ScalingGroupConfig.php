<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\instanceTypeList;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\multiAvailablePolicy;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\nodeOfflinePolicy;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\privatePoolOptions;

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
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskCount' => 'DataDiskCount',
        'dataDiskSize' => 'DataDiskSize',
        'defaultCoolDownTime' => 'DefaultCoolDownTime',
        'instanceTypeList' => 'InstanceTypeList',
        'multiAvailablePolicy' => 'MultiAvailablePolicy',
        'nodeOfflinePolicy' => 'NodeOfflinePolicy',
        'privatePoolOptions' => 'PrivatePoolOptions',
        'scalingMaxSize' => 'ScalingMaxSize',
        'scalingMinSize' => 'ScalingMinSize',
        'spotStrategy' => 'SpotStrategy',
        'sysDiskCategory' => 'SysDiskCategory',
        'sysDiskSize' => 'SysDiskSize',
        'triggerMode' => 'TriggerMode',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTypeList)) {
            Model::validateArray($this->instanceTypeList);
        }
        if (null !== $this->multiAvailablePolicy) {
            $this->multiAvailablePolicy->validate();
        }
        if (null !== $this->nodeOfflinePolicy) {
            $this->nodeOfflinePolicy->validate();
        }
        if (null !== $this->privatePoolOptions) {
            $this->privatePoolOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instanceTypeList)) {
                $res['InstanceTypeList'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeList as $item1) {
                    $res['InstanceTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->multiAvailablePolicy) {
            $res['MultiAvailablePolicy'] = null !== $this->multiAvailablePolicy ? $this->multiAvailablePolicy->toArray($noStream) : $this->multiAvailablePolicy;
        }

        if (null !== $this->nodeOfflinePolicy) {
            $res['NodeOfflinePolicy'] = null !== $this->nodeOfflinePolicy ? $this->nodeOfflinePolicy->toArray($noStream) : $this->nodeOfflinePolicy;
        }

        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toArray($noStream) : $this->privatePoolOptions;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['InstanceTypeList'] as $item1) {
                    $model->instanceTypeList[$n1] = instanceTypeList::fromMap($item1);
                    ++$n1;
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
