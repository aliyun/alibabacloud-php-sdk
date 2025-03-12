<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsResponseBody\eventIdSet;
use AlibabaCloud\Tea\Model;

class CreateSimulatedSystemEventsResponseBody extends Model
{
    /**
     * @description The IDs of the simulated events.
     *
     * @var eventIdSet
     */
    public $eventIdSet;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventIdSet' => 'EventIdSet',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventIdSet) {
            $res['EventIdSet'] = null !== $this->eventIdSet ? $this->eventIdSet->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimulatedSystemEventsResponseBody
     */
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
