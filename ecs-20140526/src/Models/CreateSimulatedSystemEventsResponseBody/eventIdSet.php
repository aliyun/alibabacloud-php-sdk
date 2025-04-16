<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->eventId)) {
            Model::validateArray($this->eventId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventId) {
            if (\is_array($this->eventId)) {
                $res['EventId'] = [];
                $n1 = 0;
                foreach ($this->eventId as $item1) {
                    $res['EventId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['EventId'])) {
            if (!empty($map['EventId'])) {
                $model->eventId = [];
                $n1 = 0;
                foreach ($map['EventId'] as $item1) {
                    $model->eventId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
