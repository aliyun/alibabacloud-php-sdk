<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponseBody\data\table;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponseBody\data\timeSeries;

class data extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
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
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'table' => 'Table',
        'timeSeries' => 'TimeSeries',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->table)) {
            Model::validateArray($this->table);
        }
        if (\is_array($this->timeSeries)) {
            Model::validateArray($this->timeSeries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->table) {
            if (\is_array($this->table)) {
                $res['Table'] = [];
                $n1 = 0;
                foreach ($this->table as $item1) {
                    $res['Table'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timeSeries) {
            if (\is_array($this->timeSeries)) {
                $res['TimeSeries'] = [];
                $n1 = 0;
                foreach ($this->timeSeries as $item1) {
                    $res['TimeSeries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Table'])) {
            if (!empty($map['Table'])) {
                $model->table = [];
                $n1 = 0;
                foreach ($map['Table'] as $item1) {
                    $model->table[$n1++] = table::fromMap($item1);
                }
            }
        }

        if (isset($map['TimeSeries'])) {
            if (!empty($map['TimeSeries'])) {
                $model->timeSeries = [];
                $n1 = 0;
                foreach ($map['TimeSeries'] as $item1) {
                    $model->timeSeries[$n1++] = timeSeries::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
