<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlarmResponseBody\result\scheduleInfo;

use AlibabaCloud\Tea\Model;

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
        'hour'       => 'Hour',
        'minute'     => 'Minute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daysOfWeek) {
            $res['DaysOfWeek'] = $this->daysOfWeek;
        }
        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }
        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return weekly
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DaysOfWeek'])) {
            if (!empty($map['DaysOfWeek'])) {
                $model->daysOfWeek = $map['DaysOfWeek'];
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
