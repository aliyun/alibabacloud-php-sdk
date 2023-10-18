<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientsResponseBody\clientInfoList;
use AlibabaCloud\Tea\Model;

class DescribeSslVpnClientsResponseBody extends Model
{
    /**
     * @description The list of clients.
     *
     * @var clientInfoList[]
     */
    public $clientInfoList;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * @example eu-central-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 885E117D-06A9-38A3-8DD2-40BDAC429FFC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of returned entries.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-gw8gfb947ctddabja****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'clientInfoList' => 'ClientInfoList',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'regionId'       => 'RegionId',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
        'vpnGatewayId'   => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInfoList) {
            $res['ClientInfoList'] = [];
            if (null !== $this->clientInfoList && \is_array($this->clientInfoList)) {
                $n = 0;
                foreach ($this->clientInfoList as $item) {
                    $res['ClientInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSslVpnClientsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInfoList'])) {
            if (!empty($map['ClientInfoList'])) {
                $model->clientInfoList = [];
                $n                     = 0;
                foreach ($map['ClientInfoList'] as $item) {
                    $model->clientInfoList[$n++] = null !== $item ? clientInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
