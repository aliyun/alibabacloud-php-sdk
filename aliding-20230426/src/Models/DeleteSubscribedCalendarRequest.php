<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class DeleteSubscribedCalendarRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example MzM5Mxxx
     *
     * @var string
     */
    public $calendarId;
    protected $_name = [
        'calendarId' => 'CalendarId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSubscribedCalendarRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }

        return $model;
    }
}
