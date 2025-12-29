<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelAlarmResponseBody\result\scheduleInfo;

use AlibabaCloud\Dara\Model;

class weekly extends Model
{
    /**
     * @var int[]
     */
    public $daysOfWeek;

    /**
     * @var int
     */
    public $hour;

    /**
     * @var int
     */
    public $minute;
    protected $_name = [
        'daysOfWeek' => 'DaysOfWeek',
        'hour' => 'Hour',
        'minute' => 'Minute',
    ];

    public function validate()
    {
        if (\is_array($this->daysOfWeek)) {
            Model::validateArray($this->daysOfWeek);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }

        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
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

        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }

        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }

        return $model;
    }
}
