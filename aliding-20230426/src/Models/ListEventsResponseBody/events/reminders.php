<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events;

use AlibabaCloud\Tea\Model;

class reminders extends Model
{
    /**
     * @example dingtalk
     *
     * @var string
     */
    public $method;

    /**
     * @example 15
     *
     * @var string
     */
    public $minutes;
    protected $_name = [
        'method'  => 'Method',
        'minutes' => 'Minutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->minutes) {
            $res['Minutes'] = $this->minutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reminders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Minutes'])) {
            $model->minutes = $map['Minutes'];
        }

        return $model;
    }
}
