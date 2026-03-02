<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorMetricMeasurePointData extends Model
{
    /**
     * @var string
     */
    public $measure;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueWithUnit;
    protected $_name = [
        'measure' => 'measure',
        'timeStamp' => 'timeStamp',
        'value' => 'value',
        'valueWithUnit' => 'valueWithUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->measure) {
            $res['measure'] = $this->measure;
        }

        if (null !== $this->timeStamp) {
            $res['timeStamp'] = $this->timeStamp;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        if (null !== $this->valueWithUnit) {
            $res['valueWithUnit'] = $this->valueWithUnit;
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
        if (isset($map['measure'])) {
            $model->measure = $map['measure'];
        }

        if (isset($map['timeStamp'])) {
            $model->timeStamp = $map['timeStamp'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        if (isset($map['valueWithUnit'])) {
            $model->valueWithUnit = $map['valueWithUnit'];
        }

        return $model;
    }
}
