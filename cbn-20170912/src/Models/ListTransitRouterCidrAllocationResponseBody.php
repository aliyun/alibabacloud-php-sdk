<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrAllocationResponseBody\transitRouterCidrAllocations;
use AlibabaCloud\Tea\Model;

class ListTransitRouterCidrAllocationResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     *   If no value is specified for **MaxResults**, query results are returned in one batch. The value of **MaxResults** indicates the total number of entries.
     *   If a value is specified for **MaxResults**, query results are returned in batches. The value of **MaxResults** in the response indicates the number of entries in the current batch.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. Valid values:
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
     * @example 0876E54E-3E36-5C31-89F0-9EE8A9266F9A
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
     * @description The information about the CIDR blocks that have IP addresses allocated to network instances.
     *
     * @var transitRouterCidrAllocations[]
     */
    public $transitRouterCidrAllocations;
    protected $_name = [
        'maxResults'                   => 'MaxResults',
        'nextToken'                    => 'NextToken',
        'requestId'                    => 'RequestId',
        'totalCount'                   => 'TotalCount',
        'transitRouterCidrAllocations' => 'TransitRouterCidrAllocations',
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
        if (null !== $this->transitRouterCidrAllocations) {
            $res['TransitRouterCidrAllocations'] = [];
            if (null !== $this->transitRouterCidrAllocations && \is_array($this->transitRouterCidrAllocations)) {
                $n = 0;
                foreach ($this->transitRouterCidrAllocations as $item) {
                    $res['TransitRouterCidrAllocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterCidrAllocationResponseBody
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
        if (isset($map['TransitRouterCidrAllocations'])) {
            if (!empty($map['TransitRouterCidrAllocations'])) {
                $model->transitRouterCidrAllocations = [];
                $n                                   = 0;
                foreach ($map['TransitRouterCidrAllocations'] as $item) {
                    $model->transitRouterCidrAllocations[$n++] = null !== $item ? transitRouterCidrAllocations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
