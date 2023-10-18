<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVcoRouteEntryResponseBody extends Model
{
    /**
     * @description The timestamp when the destination-based route was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1658387202664
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the destination-based route.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The next hop of the destination-based route.
     *
     * @example vco-p0w2jpkhi2eeop6q6****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The tunneling protocol.
     *
     * The value is set to **Ipsec**, which indicates the IPsec tunneling protocol.
     * @example Ipsec
     *
     * @var string
     */
    public $overlayMode;

    /**
     * @description The request ID.
     *
     * @example CFC4D13B-E680-3985-95B1-87AA155481DF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The destination CIDR block of the destination-based route.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @description The status of the destination-based route.
     *
     * Only **published** is returned, which indicates that the current route is published to the transit router.
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
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'nextHop'         => 'NextHop',
        'overlayMode'     => 'OverlayMode',
        'requestId'       => 'RequestId',
        'routeDest'       => 'RouteDest',
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
     * @return CreateVcoRouteEntryResponseBody
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
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
