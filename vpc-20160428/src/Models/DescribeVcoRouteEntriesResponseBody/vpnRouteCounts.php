<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class vpnRouteCounts extends Model
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
     *   **custom**: destination-based route.
     *   **bgp**: BGP route.
     *
     * @example bgp
     *
     * @var string
     */
    public $routeEntryType;

    /**
     * @description The source of the BGP route. Valid values:
     *
     *   **CLOUD**: The current BGP route is learned by the IPsec connection from the transit router.
     *   **VPN_BGP**: The current BGP route is learned by the IPsec connection from the data center.
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
     * @return vpnRouteCounts
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
