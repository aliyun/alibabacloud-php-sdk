<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleResponseBody\appScalingRule;

use AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleResponseBody\appScalingRule\metric\metrics;
use AlibabaCloud\Tea\Model;

class metric extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $maxReplicas;

    /**
     * @description This parameter is deprecated.
     *
     * @var metrics[]
     */
    public $metrics;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $minReplicas;
    protected $_name = [
        'maxReplicas' => 'MaxReplicas',
        'metrics'     => 'Metrics',
        'minReplicas' => 'MinReplicas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = [];
            if (null !== $this->metrics && \is_array($this->metrics)) {
                $n = 0;
                foreach ($this->metrics as $item) {
                    $res['Metrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n              = 0;
                foreach ($map['Metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? metrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
        }

        return $model;
    }
}
