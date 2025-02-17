<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest;

use AlibabaCloud\Dara\Model;

class launchTemplateConfig extends Model
{
    /**
     * @var string[]
     */
    public $architectures;
    /**
     * @var string
     */
    public $burstablePerformance;
    /**
     * @var int[]
     */
    public $cores;
    /**
     * @var string[]
     */
    public $excludedInstanceTypes;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $instanceFamilyLevel;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var float
     */
    public $maxPrice;
    /**
     * @var int
     */
    public $maxQuantity;
    /**
     * @var float[]
     */
    public $memories;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var float
     */
    public $weightedCapacity;
    protected $_name = [
        'architectures'         => 'Architectures',
        'burstablePerformance'  => 'BurstablePerformance',
        'cores'                 => 'Cores',
        'excludedInstanceTypes' => 'ExcludedInstanceTypes',
        'imageId'               => 'ImageId',
        'instanceFamilyLevel'   => 'InstanceFamilyLevel',
        'instanceType'          => 'InstanceType',
        'maxPrice'              => 'MaxPrice',
        'maxQuantity'           => 'MaxQuantity',
        'memories'              => 'Memories',
        'priority'              => 'Priority',
        'vSwitchId'             => 'VSwitchId',
        'weightedCapacity'      => 'WeightedCapacity',
    ];

    public function validate()
    {
        if (\is_array($this->architectures)) {
            Model::validateArray($this->architectures);
        }
        if (\is_array($this->cores)) {
            Model::validateArray($this->cores);
        }
        if (\is_array($this->excludedInstanceTypes)) {
            Model::validateArray($this->excludedInstanceTypes);
        }
        if (\is_array($this->memories)) {
            Model::validateArray($this->memories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architectures) {
            if (\is_array($this->architectures)) {
                $res['Architectures'] = [];
                $n1                   = 0;
                foreach ($this->architectures as $item1) {
                    $res['Architectures'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->burstablePerformance) {
            $res['BurstablePerformance'] = $this->burstablePerformance;
        }

        if (null !== $this->cores) {
            if (\is_array($this->cores)) {
                $res['Cores'] = [];
                $n1           = 0;
                foreach ($this->cores as $item1) {
                    $res['Cores'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->excludedInstanceTypes) {
            if (\is_array($this->excludedInstanceTypes)) {
                $res['ExcludedInstanceTypes'] = [];
                $n1                           = 0;
                foreach ($this->excludedInstanceTypes as $item1) {
                    $res['ExcludedInstanceTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }

        if (null !== $this->maxQuantity) {
            $res['MaxQuantity'] = $this->maxQuantity;
        }

        if (null !== $this->memories) {
            if (\is_array($this->memories)) {
                $res['Memories'] = [];
                $n1              = 0;
                foreach ($this->memories as $item1) {
                    $res['Memories'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
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
        if (isset($map['Architectures'])) {
            if (!empty($map['Architectures'])) {
                $model->architectures = [];
                $n1                   = 0;
                foreach ($map['Architectures'] as $item1) {
                    $model->architectures[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BurstablePerformance'])) {
            $model->burstablePerformance = $map['BurstablePerformance'];
        }

        if (isset($map['Cores'])) {
            if (!empty($map['Cores'])) {
                $model->cores = [];
                $n1           = 0;
                foreach ($map['Cores'] as $item1) {
                    $model->cores[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExcludedInstanceTypes'])) {
            if (!empty($map['ExcludedInstanceTypes'])) {
                $model->excludedInstanceTypes = [];
                $n1                           = 0;
                foreach ($map['ExcludedInstanceTypes'] as $item1) {
                    $model->excludedInstanceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }

        if (isset($map['MaxQuantity'])) {
            $model->maxQuantity = $map['MaxQuantity'];
        }

        if (isset($map['Memories'])) {
            if (!empty($map['Memories'])) {
                $model->memories = [];
                $n1              = 0;
                foreach ($map['Memories'] as $item1) {
                    $model->memories[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }

        return $model;
    }
}
