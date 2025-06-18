<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesResponseBody\data\eventBuses;

class data extends Model
{
    /**
     * @var eventBuses[]
     */
    public $eventBuses;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'eventBuses' => 'EventBuses',
        'nextToken' => 'NextToken',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->eventBuses)) {
            Model::validateArray($this->eventBuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventBuses) {
            if (\is_array($this->eventBuses)) {
                $res['EventBuses'] = [];
                $n1 = 0;
                foreach ($this->eventBuses as $item1) {
                    $res['EventBuses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventBuses'])) {
            if (!empty($map['EventBuses'])) {
                $model->eventBuses = [];
                $n1 = 0;
                foreach ($map['EventBuses'] as $item1) {
                    $model->eventBuses[$n1] = eventBuses::fromMap($item1);
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
