<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumComputeMetricsByRecordResponseBody\data;

use AlibabaCloud\Dara\Model;

class dailyComputeRecords extends Model
{
    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var float
     */
    public $percentage;

    /**
     * @var string
     */
    public $record;
    protected $_name = [
        'dateTime' => 'dateTime',
        'percentage' => 'percentage',
        'record' => 'record',
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

        if (null !== $this->percentage) {
            $res['percentage'] = $this->percentage;
        }

        if (null !== $this->record) {
            $res['record'] = $this->record;
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

        if (isset($map['percentage'])) {
            $model->percentage = $map['percentage'];
        }

        if (isset($map['record'])) {
            $model->record = $map['record'];
        }

        return $model;
    }
}
