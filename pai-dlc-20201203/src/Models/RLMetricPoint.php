<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLMetricPoint extends Model
{
    /**
     * @var string
     */
    public $gmtTime;

    /**
     * @var int
     */
    public $sampleCount;

    /**
     * @var int
     */
    public $startStep;

    /**
     * @var int
     */
    public $step;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'gmtTime' => 'GmtTime',
        'sampleCount' => 'SampleCount',
        'startStep' => 'StartStep',
        'step' => 'Step',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtTime) {
            $res['GmtTime'] = $this->gmtTime;
        }

        if (null !== $this->sampleCount) {
            $res['SampleCount'] = $this->sampleCount;
        }

        if (null !== $this->startStep) {
            $res['StartStep'] = $this->startStep;
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['GmtTime'])) {
            $model->gmtTime = $map['GmtTime'];
        }

        if (isset($map['SampleCount'])) {
            $model->sampleCount = $map['SampleCount'];
        }

        if (isset($map['StartStep'])) {
            $model->startStep = $map['StartStep'];
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
