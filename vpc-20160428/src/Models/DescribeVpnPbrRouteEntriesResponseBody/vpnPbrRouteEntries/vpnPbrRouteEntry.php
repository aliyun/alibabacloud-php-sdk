<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponseBody\vpnPbrRouteEntries;

use AlibabaCloud\Tea\Model;

class vpnPbrRouteEntry extends Model
{
    /**
     * @description The time when the policy-based route was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1492747187000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The next hop of the policy-based route.
     *
     * @example vco-bp15oes1py4i66rmd****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The ID of the tunnel associated with the next hop of the policy-based route.
     *
     * This parameter is returned only if the VPN gateway supports the dual-tunnel mode.
     * @example tun-opsqc4d97wni2****
     *
     * @var string
     */
    public $nextHopTunnelId;

    /**
     * @description The priority of the policy-based route.
     *
     * A smaller value indicates a higher priority.
     * @example 10
     *
     * @var int
     */
    public $priority;

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
     * @example 192.168.0.0/24
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
     * @example published
     *
     * @var string
     */
    public $state;

    /**
     * @description The VPN gateway ID.
     *
     * @example vpn-bp1a3kqjiiq9legfx****
     *
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @description The weight of the policy-based route. Valid values:
     *
     *   For a VPN gateway that supports the dual-tunnel mode, the default value is **100**.
     *
     *   For a VPN gateway that supports the single-tunnel mode, the weight specifies the priority of the policy-based route.
     *
     *   **100**: a high priority If multiple policy-based routes with the same source CIDR block and destination CIDR block exist, the IPsec-VPN connection associated with the policy-based route is the active connection.
     *   **0**: a low priority If multiple policy-based routes with the same source CIDR block and destination CIDR block exist, the IPsec-VPN connection associated with the policy-based route is the standby connection.
     *
     * @example 0
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'nextHop'         => 'NextHop',
        'nextHopTunnelId' => 'NextHopTunnelId',
        'priority'        => 'Priority',
        'routeDest'       => 'RouteDest',
        'routeSource'     => 'RouteSource',
        'state'           => 'State',
        'vpnInstanceId'   => 'VpnInstanceId',
        'weight'          => 'Weight',
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
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->nextHopTunnelId) {
            $res['NextHopTunnelId'] = $this->nextHopTunnelId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
     * @return vpnPbrRouteEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['NextHopTunnelId'])) {
            $model->nextHopTunnelId = $map['NextHopTunnelId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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
