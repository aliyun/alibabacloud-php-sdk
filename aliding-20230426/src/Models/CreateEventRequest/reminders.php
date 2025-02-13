<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest;

use AlibabaCloud\Dara\Model;

class reminders extends Model
{
    /**
     * @var string
     */
    public $method;
    /**
     * @var int
     */
    public $minutes;
    protected $_name = [
        'method'  => 'method',
        'minutes' => 'minutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->minutes) {
            $res['minutes'] = $this->minutes;
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
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['minutes'])) {
            $model->minutes = $map['minutes'];
        }

        return $model;
    }
}
