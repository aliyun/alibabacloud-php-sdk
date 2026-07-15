<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationPerformanceResponseBody\performanceKeys\performanceItem\points;

use AlibabaCloud\Dara\Model;

class performanceItemValue extends Model
{
    /**
     * @var int
     */
    public $step;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'step' => 'Step',
        'timestamp' => 'Timestamp',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
