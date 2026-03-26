<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class LookupInsightEventsResponseBody extends Model
{
    /**
     * @var mixed[][]
     */
    public $events;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'events' => 'Events',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['Events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    if (\is_array($item1)) {
                        $res['Events'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Events'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['Events'] as $item1) {
                    if (!empty($item1)) {
                        $model->events[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->events[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
