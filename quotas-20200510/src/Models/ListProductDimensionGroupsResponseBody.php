<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductDimensionGroupsResponseBody\dimensionGroups;
use AlibabaCloud\Tea\Model;

class ListProductDimensionGroupsResponseBody extends Model
{
    /**
     * @description The dimension groups.
     *
     * @var dimensionGroups[]
     */
    public $dimensionGroups;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the position at which the query ends. An empty value indicates that all data is returned.
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 057D210F-F2FC-5329-A536-26C16628BB09
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of records that are returned for the query.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dimensionGroups' => 'DimensionGroups',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensionGroups) {
            $res['DimensionGroups'] = [];
            if (null !== $this->dimensionGroups && \is_array($this->dimensionGroups)) {
                $n = 0;
                foreach ($this->dimensionGroups as $item) {
                    $res['DimensionGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductDimensionGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DimensionGroups'])) {
            if (!empty($map['DimensionGroups'])) {
                $model->dimensionGroups = [];
                $n                      = 0;
                foreach ($map['DimensionGroups'] as $item) {
                    $model->dimensionGroups[$n++] = null !== $item ? dimensionGroups::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
