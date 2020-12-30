<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponseBody\vpnPbrRouteEntries;

use AlibabaCloud\Tea\Model;

class vpnPbrRouteEntry extends Model
{
    /**
     * @var string
     */
    public $nextHop;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $routeDest;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @var string
     */
    public $routeSource;
    protected $_name = [
        'nextHop'       => 'NextHop',
        'weight'        => 'Weight',
        'routeDest'     => 'RouteDest',
        'state'         => 'State',
        'createTime'    => 'CreateTime',
        'vpnInstanceId' => 'VpnInstanceId',
        'routeSource'   => 'RouteSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->routeDest) {
            $res['RouteDest'] = $this->routeDest;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->vpnInstanceId) {
            $res['VpnInstanceId'] = $this->vpnInstanceId;
        }
        if (null !== $this->routeSource) {
            $res['RouteSource'] = $this->routeSource;
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
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['RouteDest'])) {
            $model->routeDest = $map['RouteDest'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['VpnInstanceId'])) {
            $model->vpnInstanceId = $map['VpnInstanceId'];
        }
        if (isset($map['RouteSource'])) {
            $model->routeSource = $map['RouteSource'];
        }

        return $model;
    }
}
