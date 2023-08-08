<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesResponseBody\transitRouterRouteEntries;
use AlibabaCloud\Tea\Model;

class ListTransitRouterRouteEntriesResponseBody extends Model
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
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If the **NextToken** parameter is empty, no next page exists.
     *   If a value of **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example fce19****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example C3835E5E-1504-4344-B1BB-98A4110F1079
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 6
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The queried routes.
     *
     * @var transitRouterRouteEntries[]
     */
    public $transitRouterRouteEntries;
    protected $_name = [
        'maxResults'                => 'MaxResults',
        'nextToken'                 => 'NextToken',
        'requestId'                 => 'RequestId',
        'totalCount'                => 'TotalCount',
        'transitRouterRouteEntries' => 'TransitRouterRouteEntries',
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
        if (null !== $this->transitRouterRouteEntries) {
            $res['TransitRouterRouteEntries'] = [];
            if (null !== $this->transitRouterRouteEntries && \is_array($this->transitRouterRouteEntries)) {
                $n = 0;
                foreach ($this->transitRouterRouteEntries as $item) {
                    $res['TransitRouterRouteEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterRouteEntriesResponseBody
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
        if (isset($map['TransitRouterRouteEntries'])) {
            if (!empty($map['TransitRouterRouteEntries'])) {
                $model->transitRouterRouteEntries = [];
                $n                                = 0;
                foreach ($map['TransitRouterRouteEntries'] as $item) {
                    $model->transitRouterRouteEntries[$n++] = null !== $item ? transitRouterRouteEntries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
