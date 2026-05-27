<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumComputeMetricsByUsageResponseBody\data;

use AlibabaCloud\Dara\Model;

class dailyComputeMetrics extends Model
{
    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'dateTime' => 'dateTime',
        'unit' => 'unit',
        'usage' => 'usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateTime) {
            $res['dateTime'] = $this->dateTime;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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
        if (isset($map['dateTime'])) {
            $model->dateTime = $map['dateTime'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
