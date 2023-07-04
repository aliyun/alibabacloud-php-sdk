<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways;
use AlibabaCloud\Tea\Model;

class DescribeVpnGatewaysResponseBody extends Model
{
    /**
     * @description The public IP address of the VPN gateway.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of SSL-VPN connections supported by the VPN gateway.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The maximum bandwidth of the VPN gateway. **M** indicates Mbit/s.
     *
     * @example DF11D6F6-E35A-41C3-9B20-6FC8A901FE65
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timestamp when the VPN gateway was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Indicates whether BGP routes are automatically advertised to the VPC. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @var vpnGateways
     */
    public $vpnGateways;
    protected $_name = [
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
        'vpnGateways' => 'VpnGateways',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vpnGateways) {
            $res['VpnGateways'] = null !== $this->vpnGateways ? $this->vpnGateways->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpnGatewaysResponseBody
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
        if (isset($map['VpnGateways'])) {
            $model->vpnGateways = vpnGateways::fromMap($map['VpnGateways']);
        }

        return $model;
    }
}
