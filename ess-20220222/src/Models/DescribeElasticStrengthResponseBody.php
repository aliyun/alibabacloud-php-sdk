<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\resourcePools;
use AlibabaCloud\Tea\Model;

class DescribeElasticStrengthResponseBody extends Model
{
    /**
     * @description The scaling strength models.
     *
     * @var elasticStrengthModels[]
     */
    public $elasticStrengthModels;

    /**
     * @description The request ID.
     *
     * @example 73469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource pools.
     *
     * @var resourcePools[]
     */
    public $resourcePools;

    /**
     * @description The scaling strength score of the scaling group. Each combination of instance type + zone is scored from 0 to 1 based on its availability, with 0 being the weakest scaling strength and 1 being the strongest. The scaling strength score of the scaling group is measured by the combined scores of all the combinations of instance type + zone.
     *
     **
     *
     **Warning** This parameter is deprecated.
     *
     * @example 1.5
     *
     * @var float
     */
    public $totalStrength;
    protected $_name = [
        'elasticStrengthModels' => 'ElasticStrengthModels',
        'requestId'             => 'RequestId',
        'resourcePools'         => 'ResourcePools',
        'totalStrength'         => 'TotalStrength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticStrengthModels) {
            $res['ElasticStrengthModels'] = [];
            if (null !== $this->elasticStrengthModels && \is_array($this->elasticStrengthModels)) {
                $n = 0;
                foreach ($this->elasticStrengthModels as $item) {
                    $res['ElasticStrengthModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->totalStrength) {
            $res['TotalStrength'] = $this->totalStrength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticStrengthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticStrengthModels'])) {
            if (!empty($map['ElasticStrengthModels'])) {
                $model->elasticStrengthModels = [];
                $n                            = 0;
                foreach ($map['ElasticStrengthModels'] as $item) {
                    $model->elasticStrengthModels[$n++] = null !== $item ? elasticStrengthModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourcePools'])) {
            if (!empty($map['ResourcePools'])) {
                $model->resourcePools = [];
                $n                    = 0;
                foreach ($map['ResourcePools'] as $item) {
                    $model->resourcePools[$n++] = null !== $item ? resourcePools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalStrength'])) {
            $model->totalStrength = $map['TotalStrength'];
        }

        return $model;
    }
}
