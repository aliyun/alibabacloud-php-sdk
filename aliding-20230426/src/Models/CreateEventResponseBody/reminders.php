<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventResponseBody;

use AlibabaCloud\Dara\Model;

class reminders extends Model
{
    /**
     * @var string
     */
    public $method;
    /**
     * @var string
     */
    public $minutes;
    protected $_name = [
        'method'  => 'Method',
        'minutes' => 'Minutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
