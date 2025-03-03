<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class TestEventPatternRequest extends Model
{
    /**
     * @var string
     */
    public $event;
    /**
     * @var string
     */
    public $eventPattern;
    protected $_name = [
        'event'        => 'Event',
        'eventPattern' => 'EventPattern',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->eventPattern) {
            $res['EventPattern'] = $this->eventPattern;
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
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['EventPattern'])) {
            $model->eventPattern = $map['EventPattern'];
        }

        return $model;
    }
}
