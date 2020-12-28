<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateSimulatedSystemEventsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $eventIdSet;
    protected $_name = [
        'requestId'  => 'RequestId',
        'eventIdSet' => 'EventIdSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eventIdSet) {
            $res['EventIdSet'] = $this->eventIdSet;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EventIdSet'])) {
            if (!empty($map['EventIdSet'])) {
                $model->eventIdSet = $map['EventIdSet'];
            }
        }

        return $model;
    }
}
