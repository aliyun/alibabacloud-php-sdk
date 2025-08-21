<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlarmsResponseBody\result\model\scheduleInfo;

use AlibabaCloud\Dara\Model;

class statutoryWorkingDay extends Model
{
    /**
     * @var int
     */
    public $hour;

    /**
     * @var int
     */
    public $minute;
    protected $_name = [
        'hour' => 'Hour',
        'minute' => 'Minute',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }

        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }

        return $model;
    }
}
