<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryTracedEventByEventIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryTracedEventByEventIdResponseBody\data\events;

class data extends Model
{
    /**
     * @var events[]
     */
    public $events;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'events' => 'Events',
        'nextToken' => 'NextToken',
        'total' => 'Total',
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
                    $res['Events'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
                    $model->events[$n1] = events::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
