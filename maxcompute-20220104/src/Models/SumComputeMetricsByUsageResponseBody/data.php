<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumComputeMetricsByUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumComputeMetricsByUsageResponseBody\data\dailyComputeMetrics;

class data extends Model
{
    /**
     * @var dailyComputeMetrics[]
     */
    public $dailyComputeMetrics;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dailyComputeMetrics' => 'dailyComputeMetrics',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->dailyComputeMetrics)) {
            Model::validateArray($this->dailyComputeMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyComputeMetrics) {
            if (\is_array($this->dailyComputeMetrics)) {
                $res['dailyComputeMetrics'] = [];
                $n1 = 0;
                foreach ($this->dailyComputeMetrics as $item1) {
                    $res['dailyComputeMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['dailyComputeMetrics'])) {
            if (!empty($map['dailyComputeMetrics'])) {
                $model->dailyComputeMetrics = [];
                $n1 = 0;
                foreach ($map['dailyComputeMetrics'] as $item1) {
                    $model->dailyComputeMetrics[$n1] = dailyComputeMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
