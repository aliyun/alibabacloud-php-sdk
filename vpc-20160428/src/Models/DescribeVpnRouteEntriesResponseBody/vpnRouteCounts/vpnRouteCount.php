<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteCounts;

use AlibabaCloud\Tea\Model;

class vpnRouteCount extends Model
{
    /**
     * @description The number of route entries.
     *
     * @example 3
     *
     * @var int
     */
    public $routeCount;

    /**
     * @description The route type. Valid values:
     *
     *   **custom** (default): destination-based route.
     *   **bgp** : BGP route entry.
     *
     * @example bgp
     *
     * @var string
     */
    public $routeEntryType;

    /**
     * @description The source of the BGP route. Valid values:
     *
     *   **CLOUD**: advertised from a cloud service associated with the VPN gateway.
     *   **VPN_BGP**: indicates that the current route is learned by using BGP of the VPN gateway. For example, the BGP is used to learn the route of the on-premises data center.
     *
     * @example VPN_BGP
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'routeCount' => 'RouteCount',
        'routeEntryType' => 'RouteEntryType',
        'source' => 'Source',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeCount) {
            $res['RouteCount'] = $this->routeCount;
        }
        if (null !== $this->routeEntryType) {
            $res['RouteEntryType'] = $this->routeEntryType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnRouteCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteCount'])) {
            $model->routeCount = $map['RouteCount'];
        }
        if (isset($map['RouteEntryType'])) {
            $model->routeEntryType = $map['RouteEntryType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
