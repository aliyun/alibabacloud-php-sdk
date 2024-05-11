<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class DeleteEventBusRequest extends Model
{
    /**
     * @description The name of the event bus.
     *
     * This parameter is required.
     * @example MyEventBus
     *
     * @var string
     */
    public $eventBusName;
    protected $_name = [
        'eventBusName' => 'EventBusName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEventBusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        return $model;
    }
}
