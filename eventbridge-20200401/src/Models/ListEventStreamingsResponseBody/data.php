<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings;

class data extends Model
{
    /**
     * @var eventStreamings[]
     */
    public $eventStreamings;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'eventStreamings' => 'EventStreamings',
        'nextToken'       => 'NextToken',
        'total'           => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->eventStreamings)) {
            Model::validateArray($this->eventStreamings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventStreamings) {
            if (\is_array($this->eventStreamings)) {
                $res['EventStreamings'] = [];
                $n1                     = 0;
                foreach ($this->eventStreamings as $item1) {
                    $res['EventStreamings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventStreamings'])) {
            if (!empty($map['EventStreamings'])) {
                $model->eventStreamings = [];
                $n1                     = 0;
                foreach ($map['EventStreamings'] as $item1) {
                    $model->eventStreamings[$n1++] = eventStreamings::fromMap($item1);
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
