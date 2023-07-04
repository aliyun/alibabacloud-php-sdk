<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class vcoRouteEntries extends Model
{
    /**
     * @description The list of autonomous system (AS) numbers that the BGP route goes through.
     *
     * @example [12000]
     *
     * @var string
     */
    public $asPath;

    /**
     * @description The community value carried by the BGP route.
     *
     * @example 65535:65510
     *
     * @var string
     */
    public $community;

    /**
     * @description The timestamp when the route was created.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1658217008000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The next hop of the route.
     *
     * @example vco-p0w2jpkhi2eeop6q6****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @description The route type. Valid values:
     *
     *   **custom**: a destination-based route
     *   **bgp**: a BGP route
     *
     * @example custom
     *
     * @var string
     */
    public $routeEntryType;

    /**
     * @description The source of the BGP route. Valid values:
     *
     *   **CLOUD**: indicates that the current BGP route is learned by the IPsec-VPN connection from the transit router.
     *   **VPN_BGP**: indicates that the current BGP route is learned by the IPsec-VPN connection from the data center.
     *
     * @example CLOUD
     *
     * @var string
     */
    public $source;

    /**
     * @description The status of the route.
     *
     *   **published**: indicates that the current route is advertised to the transit router.
     *   **Active**: indicates that the current BGP route is available.
     *
     * @example published
     *
     * @var string
     */
    public $state;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-p0w2jpkhi2eeop6q6****
     *
     * @var string
     */
    public $vpnConnectionId;

    /**
     * @description The weight of the destination-based route. Valid values:
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
        'routeDest'       => 'RouteDest',
        'routeEntryType'  => 'RouteEntryType',
        'source'          => 'Source',
        'state'           => 'State',
        'vpnConnectionId' => 'VpnConnectionId',
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
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vcoRouteEntries
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
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
