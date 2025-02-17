<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsResponseBody\eventIdSet;

class CreateSimulatedSystemEventsResponseBody extends Model
{
    /**
     * @var eventIdSet
     */
    public $eventIdSet;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventIdSet' => 'EventIdSet',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->eventIdSet) {
            $this->eventIdSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventIdSet) {
            $res['EventIdSet'] = null !== $this->eventIdSet ? $this->eventIdSet->toArray($noStream) : $this->eventIdSet;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EventIdSet'])) {
            $model->eventIdSet = eventIdSet::fromMap($map['EventIdSet']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
