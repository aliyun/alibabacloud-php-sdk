<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablePropagationsResponseBody\transitRouterPropagations;
use AlibabaCloud\Tea\Model;

class ListTransitRouterRouteTablePropagationsResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query.
     *
     * @example dd20****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 04C81E0D-945E-4D61-A561-3DEA322F243B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description A list of route learning correlations.
     *
     * @var transitRouterPropagations[]
     */
    public $transitRouterPropagations;
    protected $_name = [
        'maxResults'                => 'MaxResults',
        'nextToken'                 => 'NextToken',
        'requestId'                 => 'RequestId',
        'totalCount'                => 'TotalCount',
        'transitRouterPropagations' => 'TransitRouterPropagations',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->transitRouterPropagations) {
            $res['TransitRouterPropagations'] = [];
            if (null !== $this->transitRouterPropagations && \is_array($this->transitRouterPropagations)) {
                $n = 0;
                foreach ($this->transitRouterPropagations as $item) {
                    $res['TransitRouterPropagations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterRouteTablePropagationsResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TransitRouterPropagations'])) {
            if (!empty($map['TransitRouterPropagations'])) {
                $model->transitRouterPropagations = [];
                $n                                = 0;
                foreach ($map['TransitRouterPropagations'] as $item) {
                    $model->transitRouterPropagations[$n++] = null !== $item ? transitRouterPropagations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
