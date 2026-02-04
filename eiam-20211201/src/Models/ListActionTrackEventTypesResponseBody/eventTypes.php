<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListActionTrackEventTypesResponseBody;

use AlibabaCloud\Dara\Model;

class eventTypes extends Model
{
    /**
     * @var string
     */
    public $eventType;
    protected $_name = [
        'eventType' => 'EventType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
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
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        return $model;
    }
}
