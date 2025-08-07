<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponseBody\header\queryContext;

class header extends Model
{
    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var queryContext
     */
    public $queryContext;

    /**
     * @var int
     */
    public $responseTime;
    protected $_name = [
        'event' => 'event',
        'eventId' => 'eventId',
        'queryContext' => 'queryContext',
        'responseTime' => 'responseTime',
    ];

    public function validate()
    {
        if (null !== $this->queryContext) {
            $this->queryContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }

        if (null !== $this->queryContext) {
            $res['queryContext'] = null !== $this->queryContext ? $this->queryContext->toArray($noStream) : $this->queryContext;
        }

        if (null !== $this->responseTime) {
            $res['responseTime'] = $this->responseTime;
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
