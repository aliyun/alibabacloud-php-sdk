<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps;
use AlibabaCloud\Tea\Model;

class DescribeCenRouteMapsResponseBody extends Model
{
    /**
     * @description The community set on which actions are performed.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The IDs of the destination route tables to which the routes belong. You can enter at most 32 route table IDs.
     *
     * >  The destination route table IDs are valid only when the routing policy is applied to scenarios where routes are advertised from the gateway in the current region to route tables in the current region.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 24CE1987-D1D1-5324-9BAD-2750B60E6ABB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the CEN instance.
     *
     * @var routeMaps
     */
    public $routeMaps;

    /**
     * @description Indicates whether the source network instance IDs are excluded.
     *
     *   **false** (default): A route is a match if its source network instance ID is in the list specified by **SourceInstanceIds.N**.
     *   **true**: A route is match if its source network instance ID is not in the list specified by **SourceInstanceIds.N**.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'routeMaps'  => 'RouteMaps',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeMaps) {
            $res['RouteMaps'] = null !== $this->routeMaps ? $this->routeMaps->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenRouteMapsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteMaps'])) {
            $model->routeMaps = routeMaps::fromMap($map['RouteMaps']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
