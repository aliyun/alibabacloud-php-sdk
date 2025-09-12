<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels\resourcePools;

class elasticStrengthModels extends Model
{
    /**
     * @var string
     */
    public $elasticStrength;

    /**
     * @var resourcePools[]
     */
    public $resourcePools;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var float
     */
    public $totalStrength;
    protected $_name = [
        'elasticStrength' => 'ElasticStrength',
        'resourcePools' => 'ResourcePools',
        'scalingGroupId' => 'ScalingGroupId',
        'totalStrength' => 'TotalStrength',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePools)) {
            Model::validateArray($this->resourcePools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticStrength) {
            $res['ElasticStrength'] = $this->elasticStrength;
        }

        if (null !== $this->resourcePools) {
            if (\is_array($this->resourcePools)) {
                $res['ResourcePools'] = [];
                $n1 = 0;
                foreach ($this->resourcePools as $item1) {
                    $res['ResourcePools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticStrength'])) {
            $model->elasticStrength = $map['ElasticStrength'];
        }

        if (isset($map['ResourcePools'])) {
            if (!empty($map['ResourcePools'])) {
                $model->resourcePools = [];
                $n1 = 0;
                foreach ($map['ResourcePools'] as $item1) {
                    $model->resourcePools[$n1] = resourcePools::fromMap($item1);
                    ++$n1;
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
