<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponseBody\gatewayRouteEntryModels;

use AlibabaCloud\Tea\Model;

class nextHops extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $enabled;

    /**
     * @description The weight of the route.
     *
     * @example vpn-bp10zyaph5cc8b7c7****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description Indicates whether the route is available. Valid values:
     *
     *   **0**: unavailable
     *   **1**: available
     *
     * @example Instance
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @example 100
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'enabled'     => 'Enabled',
        'nextHopId'   => 'NextHopId',
        'nextHopType' => 'NextHopType',
        'weight'      => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextHops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
