<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductResponseBody\recommendProducts\recommendProduct\recommendInstanceTypes;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductResponseBody\recommendProducts\recommendProduct\recommendInstanceTypes\recommendInstanceType\instanceType;
use AlibabaCloud\Tea\Model;

class recommendInstanceType extends Model
{
    /**
     * @var string
     */
    public $capacitySpecification;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var instanceType
     */
    public $instanceType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var float
     */
    public $price;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $spotStrategy;
    protected $_name = [
        'capacitySpecification' => 'CapacitySpecification',
        'instanceChargeType'    => 'InstanceChargeType',
        'instanceType'          => 'InstanceType',
        'networkType'           => 'NetworkType',
        'price'                 => 'Price',
        'priority'              => 'Priority',
        'spotStrategy'          => 'SpotStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacitySpecification) {
            $res['CapacitySpecification'] = $this->capacitySpecification;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = null !== $this->instanceType ? $this->instanceType->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendInstanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacitySpecification'])) {
            $model->capacitySpecification = $map['CapacitySpecification'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = instanceType::fromMap($map['InstanceType']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        return $model;
    }
}
