<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class MetricInfo extends Model
{
    /**
     * @var float
     */
    public $average;

    /**
     * @var float
     */
    public $count;

    /**
     * @var float
     */
    public $maximum;

    /**
     * @var float
     */
    public $minimum;

    /**
     * @var float
     */
    public $sum;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'average' => 'Average',
        'count' => 'Count',
        'maximum' => 'Maximum',
        'minimum' => 'Minimum',
        'sum' => 'Sum',
        'timestamp' => 'timestamp',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }

        if (null !== $this->minimum) {
            $res['Minimum'] = $this->minimum;
        }

        if (null !== $this->sum) {
            $res['Sum'] = $this->sum;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }

        if (isset($map['Minimum'])) {
            $model->minimum = $map['Minimum'];
        }

        if (isset($map['Sum'])) {
            $model->sum = $map['Sum'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
