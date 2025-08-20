<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderResponseBody\model\remindResponses;

use AlibabaCloud\Dara\Model;

class recurrenceRule extends Model
{
    /**
     * @var int
     */
    public $day;

    /**
     * @var int[]
     */
    public $daysOfMonth;

    /**
     * @var int[]
     */
    public $daysOfWeek;

    /**
     * @var string
     */
    public $endDateTime;

    /**
     * @var string
     */
    public $freq;

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
    public $second;

    /**
     * @var string
     */
    public $startDateTime;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'day' => 'Day',
        'daysOfMonth' => 'DaysOfMonth',
        'daysOfWeek' => 'DaysOfWeek',
        'endDateTime' => 'EndDateTime',
        'freq' => 'Freq',
        'hour' => 'Hour',
        'minute' => 'Minute',
        'month' => 'Month',
        'second' => 'Second',
        'startDateTime' => 'StartDateTime',
        'year' => 'Year',
    ];

    public function validate()
    {
        if (\is_array($this->daysOfMonth)) {
            Model::validateArray($this->daysOfMonth);
        }
        if (\is_array($this->daysOfWeek)) {
            Model::validateArray($this->daysOfWeek);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }

        if (null !== $this->daysOfMonth) {
            if (\is_array($this->daysOfMonth)) {
                $res['DaysOfMonth'] = [];
                $n1 = 0;
                foreach ($this->daysOfMonth as $item1) {
                    $res['DaysOfMonth'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->daysOfWeek) {
            if (\is_array($this->daysOfWeek)) {
                $res['DaysOfWeek'] = [];
                $n1 = 0;
                foreach ($this->daysOfWeek as $item1) {
                    $res['DaysOfWeek'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endDateTime) {
            $res['EndDateTime'] = $this->endDateTime;
        }

        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
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

        if (null !== $this->second) {
            $res['Second'] = $this->second;
        }

        if (null !== $this->startDateTime) {
            $res['StartDateTime'] = $this->startDateTime;
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

        if (isset($map['DaysOfMonth'])) {
            if (!empty($map['DaysOfMonth'])) {
                $model->daysOfMonth = [];
                $n1 = 0;
                foreach ($map['DaysOfMonth'] as $item1) {
                    $model->daysOfMonth[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DaysOfWeek'])) {
            if (!empty($map['DaysOfWeek'])) {
                $model->daysOfWeek = [];
                $n1 = 0;
                foreach ($map['DaysOfWeek'] as $item1) {
                    $model->daysOfWeek[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndDateTime'])) {
            $model->endDateTime = $map['EndDateTime'];
        }

        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
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

        if (isset($map['Second'])) {
            $model->second = $map['Second'];
        }

        if (isset($map['StartDateTime'])) {
            $model->startDateTime = $map['StartDateTime'];
        }

        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
