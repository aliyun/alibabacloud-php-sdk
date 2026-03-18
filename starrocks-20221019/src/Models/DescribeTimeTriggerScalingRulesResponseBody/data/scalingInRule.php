<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeTimeTriggerScalingRulesResponseBody\data;

use AlibabaCloud\Dara\Model;

class scalingInRule extends Model
{
    /**
     * @var int
     */
    public $day;

    /**
     * @var int
     */
    public $hour;

    /**
     * @var int
     */
    public $minute;

    /**
     * @var int
     */
    public $month;

    /**
     * @var int
     */
    public $recurrenceInterval;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var string[]
     */
    public $recurrenceValues;

    /**
     * @var int
     */
    public $second;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'day' => 'Day',
        'hour' => 'Hour',
        'minute' => 'Minute',
        'month' => 'Month',
        'recurrenceInterval' => 'RecurrenceInterval',
        'recurrenceType' => 'RecurrenceType',
        'recurrenceValues' => 'RecurrenceValues',
        'second' => 'Second',
        'year' => 'Year',
    ];

    public function validate()
    {
        if (\is_array($this->recurrenceValues)) {
            Model::validateArray($this->recurrenceValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }

        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }

        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }

        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }

        if (null !== $this->recurrenceInterval) {
            $res['RecurrenceInterval'] = $this->recurrenceInterval;
        }

        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }

        if (null !== $this->recurrenceValues) {
            if (\is_array($this->recurrenceValues)) {
                $res['RecurrenceValues'] = [];
                $n1 = 0;
                foreach ($this->recurrenceValues as $item1) {
                    $res['RecurrenceValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->second) {
            $res['Second'] = $this->second;
        }

        if (null !== $this->year) {
            $res['Year'] = $this->year;
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
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }

        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }

        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }

        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }

        if (isset($map['RecurrenceInterval'])) {
            $model->recurrenceInterval = $map['RecurrenceInterval'];
        }

        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }

        if (isset($map['RecurrenceValues'])) {
            if (!empty($map['RecurrenceValues'])) {
                $model->recurrenceValues = [];
                $n1 = 0;
                foreach ($map['RecurrenceValues'] as $item1) {
                    $model->recurrenceValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Second'])) {
            $model->second = $map['Second'];
        }

        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
