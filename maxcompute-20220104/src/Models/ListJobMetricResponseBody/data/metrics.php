<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobMetricResponseBody\data;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var string[]
     */
    public $metric;

    /**
     * @var float[][]
     */
    public $values;
    protected $_name = [
        'metric' => 'metric',
        'values' => 'values',
    ];

    public function validate()
    {
        if (\is_array($this->metric)) {
            Model::validateArray($this->metric);
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
            if (\is_array($this->metric)) {
                $res['metric'] = [];
                foreach ($this->metric as $key1 => $value1) {
                    $res['metric'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    if (\is_array($item1)) {
                        $res['values'][$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['values'][$n1++][$n2++] = $item2;
                        }
                    }
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
        if (isset($map['metric'])) {
            if (!empty($map['metric'])) {
                $model->metric = [];
                foreach ($map['metric'] as $key1 => $value1) {
                    $model->metric[$key1] = $value1;
                }
            }
        }

        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['values'] as $item1) {
                    if (!empty($item1)) {
                        $model->values[$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->values[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
