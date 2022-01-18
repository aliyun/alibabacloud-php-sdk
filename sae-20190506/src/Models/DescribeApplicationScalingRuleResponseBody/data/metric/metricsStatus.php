<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric\metricsStatus\currentMetrics;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric\metricsStatus\nextScaleMetrics;
use AlibabaCloud\Tea\Model;

class metricsStatus extends Model
{
    /**
     * @var currentMetrics[]
     */
    public $currentMetrics;

    /**
     * @var int
     */
    public $currentReplicas;

    /**
     * @var int
     */
    public $desiredReplicas;

    /**
     * @var string
     */
    public $lastScaleTime;

    /**
     * @var nextScaleMetrics[]
     */
    public $nextScaleMetrics;

    /**
     * @var int
     */
    public $nextScaleTimePeriod;
    protected $_name = [
        'currentMetrics'      => 'CurrentMetrics',
        'currentReplicas'     => 'CurrentReplicas',
        'desiredReplicas'     => 'DesiredReplicas',
        'lastScaleTime'       => 'LastScaleTime',
        'nextScaleMetrics'    => 'NextScaleMetrics',
        'nextScaleTimePeriod' => 'NextScaleTimePeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentMetrics) {
            $res['CurrentMetrics'] = [];
            if (null !== $this->currentMetrics && \is_array($this->currentMetrics)) {
                $n = 0;
                foreach ($this->currentMetrics as $item) {
                    $res['CurrentMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentReplicas) {
            $res['CurrentReplicas'] = $this->currentReplicas;
        }
        if (null !== $this->desiredReplicas) {
            $res['DesiredReplicas'] = $this->desiredReplicas;
        }
        if (null !== $this->lastScaleTime) {
            $res['LastScaleTime'] = $this->lastScaleTime;
        }
        if (null !== $this->nextScaleMetrics) {
            $res['NextScaleMetrics'] = [];
            if (null !== $this->nextScaleMetrics && \is_array($this->nextScaleMetrics)) {
                $n = 0;
                foreach ($this->nextScaleMetrics as $item) {
                    $res['NextScaleMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextScaleTimePeriod) {
            $res['NextScaleTimePeriod'] = $this->nextScaleTimePeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricsStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentMetrics'])) {
            if (!empty($map['CurrentMetrics'])) {
                $model->currentMetrics = [];
                $n                     = 0;
                foreach ($map['CurrentMetrics'] as $item) {
                    $model->currentMetrics[$n++] = null !== $item ? currentMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentReplicas'])) {
            $model->currentReplicas = $map['CurrentReplicas'];
        }
        if (isset($map['DesiredReplicas'])) {
            $model->desiredReplicas = $map['DesiredReplicas'];
        }
        if (isset($map['LastScaleTime'])) {
            $model->lastScaleTime = $map['LastScaleTime'];
        }
        if (isset($map['NextScaleMetrics'])) {
            if (!empty($map['NextScaleMetrics'])) {
                $model->nextScaleMetrics = [];
                $n                       = 0;
                foreach ($map['NextScaleMetrics'] as $item) {
                    $model->nextScaleMetrics[$n++] = null !== $item ? nextScaleMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextScaleTimePeriod'])) {
            $model->nextScaleTimePeriod = $map['NextScaleTimePeriod'];
        }

        return $model;
    }
}
