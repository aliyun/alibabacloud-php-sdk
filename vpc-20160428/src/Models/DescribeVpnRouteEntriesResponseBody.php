<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteCounts;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteEntries;

class DescribeVpnRouteEntriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var vpnRouteCounts
     */
    public $vpnRouteCounts;
    /**
     * @var vpnRouteEntries
     */
    public $vpnRouteEntries;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'vpnRouteCounts'  => 'VpnRouteCounts',
        'vpnRouteEntries' => 'VpnRouteEntries',
    ];

    public function validate()
    {
        if (null !== $this->vpnRouteCounts) {
            $this->vpnRouteCounts->validate();
        }
        if (null !== $this->vpnRouteEntries) {
            $this->vpnRouteEntries->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['VpnRouteCounts'] = null !== $this->vpnRouteCounts ? $this->vpnRouteCounts->toArray($noStream) : $this->vpnRouteCounts;
        }

        if (null !== $this->vpnRouteEntries) {
            $res['VpnRouteEntries'] = null !== $this->vpnRouteEntries ? $this->vpnRouteEntries->toArray($noStream) : $this->vpnRouteEntries;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
