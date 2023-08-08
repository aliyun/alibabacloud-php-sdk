<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesResponseBody\transitRouterRouteTables;
use AlibabaCloud\Tea\Model;

class ListTransitRouterRouteTablesResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. Valid values:
     *
     *   If **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *   If a value of **NextToken** is not returned, it indicates that no additional results exist.
     *
     * @example dd20****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 82678F4A-C9F7-4CC1-8BF0-D619A63BFC57
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description A list of route tables.
     *
     * @var transitRouterRouteTables[]
     */
    public $transitRouterRouteTables;
    protected $_name = [
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'requestId'                => 'RequestId',
        'totalCount'               => 'TotalCount',
        'transitRouterRouteTables' => 'TransitRouterRouteTables',
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
        if (null !== $this->transitRouterRouteTables) {
            $res['TransitRouterRouteTables'] = [];
            if (null !== $this->transitRouterRouteTables && \is_array($this->transitRouterRouteTables)) {
                $n = 0;
                foreach ($this->transitRouterRouteTables as $item) {
                    $res['TransitRouterRouteTables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterRouteTablesResponseBody
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
        if (isset($map['TransitRouterRouteTables'])) {
            if (!empty($map['TransitRouterRouteTables'])) {
                $model->transitRouterRouteTables = [];
                $n                               = 0;
                foreach ($map['TransitRouterRouteTables'] as $item) {
                    $model->transitRouterRouteTables[$n++] = null !== $item ? transitRouterRouteTables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
