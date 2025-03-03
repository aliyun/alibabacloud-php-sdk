<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class DeleteEventSourceRequest extends Model
{
    /**
     * @var string
     */
    public $eventBusName;
    /**
     * @var string
     */
    public $eventSourceName;
    protected $_name = [
        'eventBusName'    => 'EventBusName',
        'eventSourceName' => 'EventSourceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->eventSourceName) {
            $res['EventSourceName'] = $this->eventSourceName;
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
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['EventSourceName'])) {
            $model->eventSourceName = $map['EventSourceName'];
        }

        return $model;
    }
}
