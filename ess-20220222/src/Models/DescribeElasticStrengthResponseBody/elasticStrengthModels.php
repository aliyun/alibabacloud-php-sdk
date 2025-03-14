<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels\resourcePools;
use AlibabaCloud\Tea\Model;

class elasticStrengthModels extends Model
{
    /**
     * @description The scaling strength level of the scaling group. Valid values:
     *
     *   Strong
     *   Medium
     *   Weak
     *
     * @example Strong
     *
     * @var string
     */
    public $elasticStrength;

    /**
     * @description The resource pools.
     *
     * @var resourcePools[]
     */
    public $resourcePools;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-wz98mnj7nblv9gc****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The scaling strength score of the scaling group. Each combination of instance type + zone is scored from 0 to 1 based on its availability, with 0 being the weakest scaling strength and 1 being the strongest. The scaling strength score of the scaling group is measured by the combined scores of all the combinations of instance type + zone.
     **Warning** This parameter is deprecated.
     * @example 1.5
     *
     * @var float
     */
    public $totalStrength;
    protected $_name = [
        'elasticStrength' => 'ElasticStrength',
        'resourcePools' => 'ResourcePools',
        'scalingGroupId' => 'ScalingGroupId',
        'totalStrength' => 'TotalStrength',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticStrength) {
            $res['ElasticStrength'] = $this->elasticStrength;
        }
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
        if (isset($map['ElasticStrength'])) {
            $model->elasticStrength = $map['ElasticStrength'];
        }
        if (isset($map['ResourcePools'])) {
            if (!empty($map['ResourcePools'])) {
                $model->resourcePools = [];
                $n = 0;
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
