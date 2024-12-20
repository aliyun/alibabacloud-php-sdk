<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponseBody;

use AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponseBody\header\queryContext;
use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @example on_common_search_end
     *
     * @var string
     */
    public $event;

    /**
     * @example 988021f0-951a-43d0-ba4d-785359e7e7be
     *
     * @var string
     */
    public $eventId;

    /**
     * @var queryContext
     */
    public $queryContext;

    /**
     * @example 1293
     *
     * @var int
     */
    public $responseTime;
    protected $_name = [
        'event'        => 'event',
        'eventId'      => 'eventId',
        'queryContext' => 'queryContext',
        'responseTime' => 'responseTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['event'] = $this->event;
        }
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }
        if (null !== $this->queryContext) {
            $res['queryContext'] = null !== $this->queryContext ? $this->queryContext->toMap() : null;
        }
        if (null !== $this->responseTime) {
            $res['responseTime'] = $this->responseTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return header
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['event'])) {
            $model->event = $map['event'];
        }
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }
        if (isset($map['queryContext'])) {
            $model->queryContext = queryContext::fromMap($map['queryContext']);
        }
        if (isset($map['responseTime'])) {
            $model->responseTime = $map['responseTime'];
        }

        return $model;
    }
}
