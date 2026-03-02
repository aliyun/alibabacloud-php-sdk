<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MetricData extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $measures;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $typeValue;
    protected $_name = [
        'data' => 'data',
        'measures' => 'measures',
        'metric' => 'metric',
        'time' => 'time',
        'type' => 'type',
        'typeValue' => 'typeValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->measures) {
            $res['measures'] = $this->measures;
        }

        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->typeValue) {
            $res['typeValue'] = $this->typeValue;
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
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['measures'])) {
            $model->measures = $map['measures'];
        }

        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['typeValue'])) {
            $model->typeValue = $map['typeValue'];
        }

        return $model;
    }
}
