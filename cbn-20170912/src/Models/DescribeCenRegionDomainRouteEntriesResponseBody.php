<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries;
use AlibabaCloud\Tea\Model;

class DescribeCenRegionDomainRouteEntriesResponseBody extends Model
{
    /**
     * @description The status of the route. Valid values:
     *
     * - **Active**: The route is active.
     * - **Candidate**: The route is a standby route.
     * - **Rejected**: The route is rejected.
     * - **Prohibited**: The route is prohibited.
     * @var cenRouteEntries
     */
    public $cenRouteEntries;

    /**
     * @description The route maps that the routes match in the outbound direction.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the route map.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 004E99FB-E996-5777-888E-BA1D8F215407
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the instance specified as the next hop in the route.
     *
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cenRouteEntries' => 'CenRouteEntries',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenRouteEntries) {
            $res['CenRouteEntries'] = null !== $this->cenRouteEntries ? $this->cenRouteEntries->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeCenRegionDomainRouteEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenRouteEntries'])) {
            $model->cenRouteEntries = cenRouteEntries::fromMap($map['CenRouteEntries']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
