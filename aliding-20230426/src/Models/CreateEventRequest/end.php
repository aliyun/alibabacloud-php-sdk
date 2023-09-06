<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest;

use AlibabaCloud\Tea\Model;

class end extends Model
{
    /**
     * @example "2020-09-21"
     *
     * @var string
     */
    public $date;

    /**
     * @example "2021-09-20T10:15:30+08:00"
     *
     * @var string
     */
    public $dateTime;

    /**
     * @example "Asia/Shanghai"
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'date'     => 'date',
        'dateTime' => 'dateTime',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->dateTime) {
            $res['dateTime'] = $this->dateTime;
        }
        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return end
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['dateTime'])) {
            $model->dateTime = $map['dateTime'];
        }
        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
