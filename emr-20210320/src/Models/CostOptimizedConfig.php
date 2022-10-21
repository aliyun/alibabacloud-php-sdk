<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CostOptimizedConfig extends Model
{
    /**
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @var int
     */
    public $spotInstancePools;
    protected $_name = [
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'spotInstancePools'                   => 'SpotInstancePools',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onDemandBaseCapacity) {
            $res['OnDemandBaseCapacity'] = $this->onDemandBaseCapacity;
        }
        if (null !== $this->onDemandPercentageAboveBaseCapacity) {
            $res['OnDemandPercentageAboveBaseCapacity'] = $this->onDemandPercentageAboveBaseCapacity;
        }
        if (null !== $this->spotInstancePools) {
            $res['SpotInstancePools'] = $this->spotInstancePools;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CostOptimizedConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnDemandBaseCapacity'])) {
            $model->onDemandBaseCapacity = $map['OnDemandBaseCapacity'];
        }
        if (isset($map['OnDemandPercentageAboveBaseCapacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['OnDemandPercentageAboveBaseCapacity'];
        }
        if (isset($map['SpotInstancePools'])) {
            $model->spotInstancePools = $map['SpotInstancePools'];
        }

        return $model;
    }
}
