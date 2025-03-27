<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody;

use AlibabaCloud\Dara\Model;

class securityEventTimeSeries extends Model
{
    /**
     * @var string
     */
    public $metric;

    /**
     * @var string[]
     */
    public $timestamps;

    /**
     * @var int[]
     */
    public $values;
    protected $_name = [
        'metric' => 'Metric',
        'timestamps' => 'Timestamps',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->timestamps)) {
            Model::validateArray($this->timestamps);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        if (null !== $this->timestamps) {
            if (\is_array($this->timestamps)) {
                $res['Timestamps'] = [];
                $n1 = 0;
                foreach ($this->timestamps as $item1) {
                    $res['Timestamps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['Timestamps'])) {
            if (!empty($map['Timestamps'])) {
                $model->timestamps = [];
                $n1 = 0;
                foreach ($map['Timestamps'] as $item1) {
                    $model->timestamps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
