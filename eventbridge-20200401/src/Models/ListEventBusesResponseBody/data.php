<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesResponseBody\data\eventBuses;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The timestamp that indicates when the event bus was created.
     *
     * @var eventBuses[]
     */
    public $eventBuses;

    /**
     * @description If excess return values exist, this parameter is returned.
     *
     * @example 10
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of entries.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'eventBuses' => 'EventBuses',
        'nextToken'  => 'NextToken',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBuses) {
            $res['EventBuses'] = [];
            if (null !== $this->eventBuses && \is_array($this->eventBuses)) {
                $n = 0;
                foreach ($this->eventBuses as $item) {
                    $res['EventBuses'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBuses'])) {
            if (!empty($map['EventBuses'])) {
                $model->eventBuses = [];
                $n                 = 0;
                foreach ($map['EventBuses'] as $item) {
                    $model->eventBuses[$n++] = null !== $item ? eventBuses::fromMap($item) : $item;
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
