<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters;
use AlibabaCloud\Tea\Model;

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
     * @description The token that is used for the next query. Valid values:
     *
     *   If no value is returned for **NextToken**, no next queries are sent.
     *   If the return value of **NextToken** is not empty, the value indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 739CA01C-92EB-4C69-BCC0-280149C6F41E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;

    /**
     * @description The details about the filters.
     *
     * @var trafficMirrorFilters[]
     */
    public $trafficMirrorFilters;
    protected $_name = [
        'count'                => 'Count',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
        'trafficMirrorFilters' => 'TrafficMirrorFilters',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TrafficMirrorFilters'] = [];
            if (null !== $this->trafficMirrorFilters && \is_array($this->trafficMirrorFilters)) {
                $n = 0;
                foreach ($this->trafficMirrorFilters as $item) {
                    $res['TrafficMirrorFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrafficMirrorFiltersResponseBody
     */
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
                $n                           = 0;
                foreach ($map['TrafficMirrorFilters'] as $item) {
                    $model->trafficMirrorFilters[$n++] = null !== $item ? trafficMirrorFilters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
