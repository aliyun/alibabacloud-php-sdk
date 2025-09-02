<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters;

class ListTrafficMirrorFiltersResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var trafficMirrorFilters[]
     */
    public $trafficMirrorFilters;
    protected $_name = [
        'count' => 'Count',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'trafficMirrorFilters' => 'TrafficMirrorFilters',
    ];

    public function validate()
    {
        if (\is_array($this->trafficMirrorFilters)) {
            Model::validateArray($this->trafficMirrorFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->trafficMirrorFilters) {
            if (\is_array($this->trafficMirrorFilters)) {
                $res['TrafficMirrorFilters'] = [];
                $n1 = 0;
                foreach ($this->trafficMirrorFilters as $item1) {
                    $res['TrafficMirrorFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TrafficMirrorFilters'])) {
            if (!empty($map['TrafficMirrorFilters'])) {
                $model->trafficMirrorFilters = [];
                $n1 = 0;
                foreach ($map['TrafficMirrorFilters'] as $item1) {
                    $model->trafficMirrorFilters[$n1] = trafficMirrorFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
