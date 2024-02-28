<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The event streams.
     *
     * @var eventStreamings[]
     */
    public $eventStreamings;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists. You must specify the pagination token in the next request.
     *
     * @example 177
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of records.
     *
     * @example 10
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventStreamings) {
            $res['EventStreamings'] = [];
            if (null !== $this->eventStreamings && \is_array($this->eventStreamings)) {
                $n = 0;
                foreach ($this->eventStreamings as $item) {
                    $res['EventStreamings'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['EventStreamings'])) {
            if (!empty($map['EventStreamings'])) {
                $model->eventStreamings = [];
                $n                      = 0;
                foreach ($map['EventStreamings'] as $item) {
                    $model->eventStreamings[$n++] = null !== $item ? eventStreamings::fromMap($item) : $item;
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
