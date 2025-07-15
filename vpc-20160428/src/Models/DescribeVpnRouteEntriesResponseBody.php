<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteCounts;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteEntries;
use AlibabaCloud\Tea\Model;

class DescribeVpnRouteEntriesResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example BF3995A6-FA4F-4C74-B90F-89ECF4BFF4D5
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
     * @description The information about route entries of the VPN gateway in dual-tunnel mode.
     *
     * > This parameter is returned only if the VPN gateway supports IPsec-VPN connections in dual-tunnel mode.
     *
     * @var vpnRouteCounts
     */
    public $vpnRouteCounts;

    /**
     * @description The route entry list.
     *
     * @var vpnRouteEntries
     */
    public $vpnRouteEntries;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpnRouteCounts' => 'VpnRouteCounts',
        'vpnRouteEntries' => 'VpnRouteEntries',
    ];

    public function validate() {}

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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vpnRouteCounts) {
            $res['VpnRouteCounts'] = null !== $this->vpnRouteCounts ? $this->vpnRouteCounts->toMap() : null;
        }
        if (null !== $this->vpnRouteEntries) {
            $res['VpnRouteEntries'] = null !== $this->vpnRouteEntries ? $this->vpnRouteEntries->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpnRouteEntriesResponseBody
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VpnRouteCounts'])) {
            $model->vpnRouteCounts = vpnRouteCounts::fromMap($map['VpnRouteCounts']);
        }
        if (isset($map['VpnRouteEntries'])) {
            $model->vpnRouteEntries = vpnRouteEntries::fromMap($map['VpnRouteEntries']);
        }

        return $model;
    }
}
