<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveTaskInfoResponseBody\taskInfos;

use AlibabaCloud\Dara\Model;

class taskInfo extends Model
{
    /**
     * @var int
     */
    public $maxValue;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'maxValue' => 'MaxValue',
        'minValue' => 'MinValue',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
