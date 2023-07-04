<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnRouteEntryResponseBody extends Model
{
    /**
     * @description The timestamp when the destination-based route was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1492747187000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the destination-based route.
     *
     * @example mytest
     *
     * @var string
     */
    public $description;

    /**
     * @description The next hop of the destination-based route.
     *
     * @example vco-bp15oes1py4i66rmd****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The tunneling protocol. The value is set to **Ipsec**, which indicates the IPsec tunneling protocol.
     *
     * @example Ipsec
     *
     * @var string
     */
    public $overlayMode;

    /**
     * @description The ID of the request.
     *
     * @example 5BE01CD7-5A50-472D-AC14-CA181C5C03BE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The destination CIDR block of the destination-based route.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @description The status of the destination-based route.
     *
     *   **published**: advertised to the VPC route table.
     *   **normal**: not advertised to the VPC route table.
     *
     * @example published
     *
     * @var string
     */
    public $state;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1a3kqjiiq9legfx****
     *
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @description The weight of the destination-based route. Valid values:
     *
     *   **100**: a high priority
     *   **0**: a low priority
     *
     * @example 0
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'nextHop'       => 'NextHop',
        'overlayMode'   => 'OverlayMode',
        'requestId'     => 'RequestId',
        'routeDest'     => 'RouteDest',
        'state'         => 'State',
        'vpnInstanceId' => 'VpnInstanceId',
        'weight'        => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->overlayMode) {
            $res['OverlayMode'] = $this->overlayMode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeDest) {
            $res['RouteDest'] = $this->routeDest;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->vpnInstanceId) {
            $res['VpnInstanceId'] = $this->vpnInstanceId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpnRouteEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['OverlayMode'])) {
            $model->overlayMode = $map['OverlayMode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteDest'])) {
            $model->routeDest = $map['RouteDest'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['VpnInstanceId'])) {
            $model->vpnInstanceId = $map['VpnInstanceId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
