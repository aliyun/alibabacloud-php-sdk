<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\timer\schedules;

class timer extends Model
{
    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $period;

    /**
     * @var schedules[]
     */
    public $schedules;
    protected $_name = [
        'beginDate' => 'BeginDate',
        'endDate' => 'EndDate',
        'period' => 'Period',
        'schedules' => 'Schedules',
    ];

    public function validate()
    {
        if (\is_array($this->schedules)) {
            Model::validateArray($this->schedules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->schedules) {
            if (\is_array($this->schedules)) {
                $res['Schedules'] = [];
                $n1 = 0;
                foreach ($this->schedules as $item1) {
                    $res['Schedules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Schedules'])) {
            if (!empty($map['Schedules'])) {
                $model->schedules = [];
                $n1 = 0;
                foreach ($map['Schedules'] as $item1) {
                    $model->schedules[$n1++] = schedules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
