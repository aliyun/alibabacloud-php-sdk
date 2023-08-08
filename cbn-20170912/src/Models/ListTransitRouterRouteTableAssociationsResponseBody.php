<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTableAssociationsResponseBody\transitRouterAssociations;
use AlibabaCloud\Tea\Model;

class ListTransitRouterRouteTableAssociationsResponseBody extends Model
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
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If **NextToken** was not returned, it indicates that no additional results exist.
     *   If **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example a415****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example F6B1D9AB-176D-4399-801D-8BC576F4EB0D
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
     * @description A list of associated forwarding correlations.
     *
     * @var transitRouterAssociations[]
     */
    public $transitRouterAssociations;
    protected $_name = [
        'maxResults'                => 'MaxResults',
        'nextToken'                 => 'NextToken',
        'requestId'                 => 'RequestId',
        'totalCount'                => 'TotalCount',
        'transitRouterAssociations' => 'TransitRouterAssociations',
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
        if (null !== $this->transitRouterAssociations) {
            $res['TransitRouterAssociations'] = [];
            if (null !== $this->transitRouterAssociations && \is_array($this->transitRouterAssociations)) {
                $n = 0;
                foreach ($this->transitRouterAssociations as $item) {
                    $res['TransitRouterAssociations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterRouteTableAssociationsResponseBody
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
        if (isset($map['TransitRouterAssociations'])) {
            if (!empty($map['TransitRouterAssociations'])) {
                $model->transitRouterAssociations = [];
                $n                                = 0;
                foreach ($map['TransitRouterAssociations'] as $item) {
                    $model->transitRouterAssociations[$n++] = null !== $item ? transitRouterAssociations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
