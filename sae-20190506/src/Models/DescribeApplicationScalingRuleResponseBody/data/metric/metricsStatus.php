<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric\metricsStatus\currentMetrics;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric\metricsStatus\nextScaleMetrics;

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
        'currentMetrics' => 'CurrentMetrics',
        'currentReplicas' => 'CurrentReplicas',
        'desiredReplicas' => 'DesiredReplicas',
        'lastScaleTime' => 'LastScaleTime',
        'nextScaleMetrics' => 'NextScaleMetrics',
        'nextScaleTimePeriod' => 'NextScaleTimePeriod',
    ];

    public function validate()
    {
        if (\is_array($this->currentMetrics)) {
            Model::validateArray($this->currentMetrics);
        }
        if (\is_array($this->nextScaleMetrics)) {
            Model::validateArray($this->nextScaleMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentMetrics) {
            if (\is_array($this->currentMetrics)) {
                $res['CurrentMetrics'] = [];
                $n1 = 0;
                foreach ($this->currentMetrics as $item1) {
                    $res['CurrentMetrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->nextScaleMetrics)) {
                $res['NextScaleMetrics'] = [];
                $n1 = 0;
                foreach ($this->nextScaleMetrics as $item1) {
                    $res['NextScaleMetrics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextScaleTimePeriod) {
            $res['NextScaleTimePeriod'] = $this->nextScaleTimePeriod;
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
        if (isset($map['CurrentMetrics'])) {
            if (!empty($map['CurrentMetrics'])) {
                $model->currentMetrics = [];
                $n1 = 0;
                foreach ($map['CurrentMetrics'] as $item1) {
                    $model->currentMetrics[$n1++] = currentMetrics::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['NextScaleMetrics'] as $item1) {
                    $model->nextScaleMetrics[$n1++] = nextScaleMetrics::fromMap($item1);
                }
            }
        }

        if (isset($map['NextScaleTimePeriod'])) {
            $model->nextScaleTimePeriod = $map['NextScaleTimePeriod'];
        }

        return $model;
    }
}
