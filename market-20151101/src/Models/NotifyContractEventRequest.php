<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class NotifyContractEventRequest extends Model
{
    /**
     * @var string
     */
    public $eventMessage;

    /**
     * @var string
     */
    public $eventType;
    protected $_name = [
        'eventMessage' => 'EventMessage',
        'eventType'    => 'EventType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventMessage) {
            $res['EventMessage'] = $this->eventMessage;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotifyContractEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventMessage'])) {
            $model->eventMessage = $map['EventMessage'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        return $model;
    }
}
