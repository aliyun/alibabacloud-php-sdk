<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponseBody\vpnPbrRouteEntries;

use AlibabaCloud\Tea\Model;

class vpnPbrRouteEntry extends Model
{
    /**
     * @example 1492747187000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example vco-bp15oes1py4i66rmd****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @example 10
     *
     * @var int
     */
    public $priority;

    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $routeSource;

    /**
     * @example published
     *
     * @var string
     */
    public $state;

    /**
     * @example vpn-bp1a3kqjiiq9legfx****
     *
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'nextHop'       => 'NextHop',
        'priority'      => 'Priority',
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
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
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
