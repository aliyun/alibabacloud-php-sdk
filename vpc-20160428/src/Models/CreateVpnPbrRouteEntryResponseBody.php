<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnPbrRouteEntryResponseBody extends Model
{
    /**
     * @description The time when the policy-based route was created.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1492747187000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the policy-based route.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The next hop of the policy-based route.
     *
     * @example vco-bp15oes1py4i66rmd****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The tunneling protocol. The value is **Ipsec**.
     *
     * @example Ipsec
     *
     * @var string
     */
    public $overlayMode;

    /**
     * @description The priority of the policy-based route.
     *
     * @example 10
     *
     * @var int
     */
    public $priority;

    /**
     * @description The request ID.
     *
     * @example 5BE01CD7-5A50-472D-AC14-CA181C5C03BE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The destination CIDR block of the policy-based route.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @description The source CIDR block of the policy-based route.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $routeSource;

    /**
     * @description The status of the policy-based route. Valid values:
     *
     *   **published**: advertised to the VPC route table.
     *   **normal**: not advertised to the VPC route table.
     *
     * @example normal
     *
     * @var string
     */
    public $state;

    /**
     * @description The VPN gateway ID.
     *
     * @example vpn-bp1cmw7jh1nfe43m9****
     *
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @description The weight of the policy-based route. Valid values:
     *
     *   **100**: The IPsec-VPN connection associated with the policy-based route serves as an active connection.
     *   **0**: The IPsec-VPN connection associated with the policy-based route serves as a standby connection.
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
        'priority'      => 'Priority',
        'requestId'     => 'RequestId',
        'routeDest'     => 'RouteDest',
        'routeSource'   => 'RouteSource',
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
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeDest) {
            $res['RouteDest'] = $this->routeDest;
        }
        if (null !== $this->routeSource) {
            $res['RouteSource'] = $this->routeSource;
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
     * @return CreateVpnPbrRouteEntryResponseBody
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
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteDest'])) {
            $model->routeDest = $map['RouteDest'];
        }
        if (isset($map['RouteSource'])) {
            $model->routeSource = $map['RouteSource'];
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
