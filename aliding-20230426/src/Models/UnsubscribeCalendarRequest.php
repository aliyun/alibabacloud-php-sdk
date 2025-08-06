<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UnsubscribeCalendarRequest extends Model
{
    /**
     * @var string
     */
    public $calendarId;
    protected $_name = [
        'calendarId' => 'CalendarId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
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
        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }

        return $model;
    }
}
