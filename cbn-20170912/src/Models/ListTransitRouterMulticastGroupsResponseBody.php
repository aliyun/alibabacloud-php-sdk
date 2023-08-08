<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastGroupsResponseBody\transitRouterMulticastGroups;
use AlibabaCloud\Tea\Model;

class ListTransitRouterMulticastGroupsResponseBody extends Model
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
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If **NextToken** was not returned, it indicates that no additional results exist.
     *   If **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example FB3C4A16-0933-5850-9D43-0C3EA37BCBFB
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
     * @description A list of multicast groups.
     *
     * @var transitRouterMulticastGroups[]
     */
    public $transitRouterMulticastGroups;
    protected $_name = [
        'maxResults'                   => 'MaxResults',
        'nextToken'                    => 'NextToken',
        'requestId'                    => 'RequestId',
        'totalCount'                   => 'TotalCount',
        'transitRouterMulticastGroups' => 'TransitRouterMulticastGroups',
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
        if (null !== $this->transitRouterMulticastGroups) {
            $res['TransitRouterMulticastGroups'] = [];
            if (null !== $this->transitRouterMulticastGroups && \is_array($this->transitRouterMulticastGroups)) {
                $n = 0;
                foreach ($this->transitRouterMulticastGroups as $item) {
                    $res['TransitRouterMulticastGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterMulticastGroupsResponseBody
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
        if (isset($map['TransitRouterMulticastGroups'])) {
            if (!empty($map['TransitRouterMulticastGroups'])) {
                $model->transitRouterMulticastGroups = [];
                $n                                   = 0;
                foreach ($map['TransitRouterMulticastGroups'] as $item) {
                    $model->transitRouterMulticastGroups[$n++] = null !== $item ? transitRouterMulticastGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
