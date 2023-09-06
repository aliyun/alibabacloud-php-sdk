<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events;
use AlibabaCloud\Tea\Model;

class ListEventsResponseBody extends Model
{
    /**
     * @var events[]
     */
    public $events;

    /**
     * @example cnNTbW1YbxxxxdlQrQT09
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description requestId
     *
     * @example 4248DCC9-785F-5A14-8BE0-830FD52E1261
     *
     * @var string
     */
    public $requestId;

    /**
     * @example zxcasdfvc000009
     *
     * @var string
     */
    public $syncToken;
    protected $_name = [
        'events'    => 'events',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'syncToken' => 'syncToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->events) {
            $res['events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->syncToken) {
            $res['syncToken'] = $this->syncToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['syncToken'])) {
            $model->syncToken = $map['syncToken'];
        }

        return $model;
    }
}
