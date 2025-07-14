<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationScalingRuleResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationScalingRuleResponseBody\data\metric\metrics;
use AlibabaCloud\Tea\Model;

class metric extends Model
{
    /**
     * @description The maximum number of instances.
     *
     * @example 3
     *
     * @var int
     */
    public $maxReplicas;

    /**
     * @description The metrics that are used to trigger the auto scaling policy.
     *
     * @var metrics[]
     */
    public $metrics;

    /**
     * @description The minimum number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $minReplicas;
    protected $_name = [
        'maxReplicas' => 'MaxReplicas',
        'metrics' => 'Metrics',
        'minReplicas' => 'MinReplicas',
    ];

    public function validate() {}

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
                $n = 0;
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
