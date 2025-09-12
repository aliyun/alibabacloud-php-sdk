<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\resourcePools;

class DescribeElasticStrengthResponseBody extends Model
{
    /**
     * @var string
     */
    public $elasticStrength;

    /**
     * @var elasticStrengthModels[]
     */
    public $elasticStrengthModels;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcePools[]
     */
    public $resourcePools;

    /**
     * @var float
     */
    public $totalStrength;
    protected $_name = [
        'elasticStrength' => 'ElasticStrength',
        'elasticStrengthModels' => 'ElasticStrengthModels',
        'requestId' => 'RequestId',
        'resourcePools' => 'ResourcePools',
        'totalStrength' => 'TotalStrength',
    ];

    public function validate()
    {
        if (\is_array($this->elasticStrengthModels)) {
            Model::validateArray($this->elasticStrengthModels);
        }
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

        if (null !== $this->elasticStrengthModels) {
            if (\is_array($this->elasticStrengthModels)) {
                $res['ElasticStrengthModels'] = [];
                $n1 = 0;
                foreach ($this->elasticStrengthModels as $item1) {
                    $res['ElasticStrengthModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['ElasticStrengthModels'])) {
            if (!empty($map['ElasticStrengthModels'])) {
                $model->elasticStrengthModels = [];
                $n1 = 0;
                foreach ($map['ElasticStrengthModels'] as $item1) {
                    $model->elasticStrengthModels[$n1] = elasticStrengthModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        if (isset($map['TotalStrength'])) {
            $model->totalStrength = $map['TotalStrength'];
        }

        return $model;
    }
}
