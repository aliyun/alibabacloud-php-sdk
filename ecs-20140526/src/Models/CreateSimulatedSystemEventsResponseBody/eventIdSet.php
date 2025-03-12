<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsResponseBody;

use AlibabaCloud\Tea\Model;

class eventIdSet extends Model
{
    /**
     * @var string[]
     */
    public $eventId;
    protected $_name = [
        'eventId' => 'EventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventIdSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            if (!empty($map['EventId'])) {
                $model->eventId = $map['EventId'];
            }
        }

        return $model;
    }
}
