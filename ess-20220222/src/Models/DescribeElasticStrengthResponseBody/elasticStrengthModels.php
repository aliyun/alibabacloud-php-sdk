<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels\resourcePools;
use AlibabaCloud\Tea\Model;

class elasticStrengthModels extends Model
{
    /**
     * @var resourcePools[]
     */
    public $resourcePools;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @example 1.5
     *
     * @var float
     */
    public $totalStrength;
    protected $_name = [
        'resourcePools'  => 'ResourcePools',
        'scalingGroupId' => 'ScalingGroupId',
        'totalStrength'  => 'TotalStrength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePools) {
            $res['ResourcePools'] = [];
            if (null !== $this->resourcePools && \is_array($this->resourcePools)) {
                $n = 0;
                foreach ($this->resourcePools as $item) {
                    $res['ResourcePools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->totalStrength) {
            $res['TotalStrength'] = $this->totalStrength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticStrengthModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourcePools'])) {
            if (!empty($map['ResourcePools'])) {
                $model->resourcePools = [];
                $n                    = 0;
                foreach ($map['ResourcePools'] as $item) {
                    $model->resourcePools[$n++] = null !== $item ? resourcePools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['TotalStrength'])) {
            $model->totalStrength = $map['TotalStrength'];
        }

        return $model;
    }
}
