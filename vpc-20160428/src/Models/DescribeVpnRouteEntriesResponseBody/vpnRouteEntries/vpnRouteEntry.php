<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteEntries;

use AlibabaCloud\Tea\Model;

class vpnRouteEntry extends Model
{
    /**
     * @description The AS path of the route entry.
     *
     * @example 65501,65001,60011
     *
     * @var string
     */
    public $asPath;

    /**
     * @description The community attributes of the route entry.
     *
     * @example 65001:1000,65501:2000
     *
     * @var string
     */
    public $community;

    /**
     * @description The timestamp when the route entry was created.
     *
     * @example 1563874074000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The next hop of the route entry.
     *
     * @example vco-bp1tui07ob10fmuro****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The ID of the tunnel associated with the next hop.
     *
     *
     * > This parameter is returned only if the VPN gateway supports the dual-tunnel mode.
     * @example tun-36cfgpwjn58axj****
     *
     * @var string
     */
    public $nextHopTunnelId;

    /**
     * @description The destination CIDR block of the route entry.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @description The type of the route entry. Valid values:
     *
     *   **Custom**: custom
     *   **System**: system
     *
     * @example System
     *
     * @var string
     */
    public $routeEntryType;

    /**
     * @description The source CIDR block of the route entry.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $source;

    /**
     * @description The status of the route entry. Valid values:
     *
     *   **published**: advertised
     *   **normal**: not advertised
     *
     * @example normal
     *
     * @var string
     */
    public $state;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1cmw7jh1nfe43m9****
     *
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @description The weight of the route entry. Valid values: **0** and **100**.
     *
     *   **0**: a low priority
     *   **100**: a high priority
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'asPath'          => 'AsPath',
        'community'       => 'Community',
        'createTime'      => 'CreateTime',
        'nextHop'         => 'NextHop',
        'nextHopTunnelId' => 'NextHopTunnelId',
        'routeDest'       => 'RouteDest',
        'routeEntryType'  => 'RouteEntryType',
        'source'          => 'Source',
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
        if (null !== $this->asPath) {
            $res['AsPath'] = $this->asPath;
        }
        if (null !== $this->community) {
            $res['Community'] = $this->community;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->nextHopTunnelId) {
            $res['NextHopTunnelId'] = $this->nextHopTunnelId;
        }
        if (null !== $this->routeDest) {
            $res['RouteDest'] = $this->routeDest;
        }
        if (null !== $this->routeEntryType) {
            $res['RouteEntryType'] = $this->routeEntryType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
     * @return vpnRouteEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPath'])) {
            $model->asPath = $map['AsPath'];
        }
        if (isset($map['Community'])) {
            $model->community = $map['Community'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['NextHopTunnelId'])) {
            $model->nextHopTunnelId = $map['NextHopTunnelId'];
        }
        if (isset($map['RouteDest'])) {
            $model->routeDest = $map['RouteDest'];
        }
        if (isset($map['RouteEntryType'])) {
            $model->routeEntryType = $map['RouteEntryType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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
