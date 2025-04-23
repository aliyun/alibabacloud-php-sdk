<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryTunnelMetricDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var string[]
     */
    public $metric;

    /**
     * @var mixed[]
     */
    public $value;
    protected $_name = [
        'metric' => 'metric',
        'value' => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->metric)) {
            Model::validateArray($this->metric);
        }
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
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

        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['value'] = [];
                foreach ($this->value as $key1 => $value1) {
                    $res['value'][$key1] = $value1;
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

        if (isset($map['value'])) {
            if (!empty($map['value'])) {
                $model->value = [];
                foreach ($map['value'] as $key1 => $value1) {
                    $model->value[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
