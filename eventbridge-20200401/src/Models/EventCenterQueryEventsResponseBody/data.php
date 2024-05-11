<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponseBody\data\table;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponseBody\data\timeSeries;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 100
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var table[]
     */
    public $table;

    /**
     * @var timeSeries[]
     */
    public $timeSeries;

    /**
     * @example 76
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'table'      => 'Table',
        'timeSeries' => 'TimeSeries',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->table) {
            $res['Table'] = [];
            if (null !== $this->table && \is_array($this->table)) {
                $n = 0;
                foreach ($this->table as $item) {
                    $res['Table'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeSeries) {
            $res['TimeSeries'] = [];
            if (null !== $this->timeSeries && \is_array($this->timeSeries)) {
                $n = 0;
                foreach ($this->timeSeries as $item) {
                    $res['TimeSeries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Table'])) {
            if (!empty($map['Table'])) {
                $model->table = [];
                $n            = 0;
                foreach ($map['Table'] as $item) {
                    $model->table[$n++] = null !== $item ? table::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeSeries'])) {
            if (!empty($map['TimeSeries'])) {
                $model->timeSeries = [];
                $n                 = 0;
                foreach ($map['TimeSeries'] as $item) {
                    $model->timeSeries[$n++] = null !== $item ? timeSeries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
