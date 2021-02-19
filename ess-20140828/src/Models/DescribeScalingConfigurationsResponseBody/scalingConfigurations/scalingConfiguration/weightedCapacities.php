<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration;

use AlibabaCloud\Tea\Model;

class weightedCapacities extends Model
{
    /**
     * @var string[]
     */
    public $weightedCapacity;
    protected $_name = [
        'weightedCapacity' => 'WeightedCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return weightedCapacities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WeightedCapacity'])) {
            if (!empty($map['WeightedCapacity'])) {
                $model->weightedCapacity = $map['WeightedCapacity'];
            }
        }

        return $model;
    }
}
