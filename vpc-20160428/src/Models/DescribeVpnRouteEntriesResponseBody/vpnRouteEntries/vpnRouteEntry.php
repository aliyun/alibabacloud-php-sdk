<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteEntries;

use AlibabaCloud\Tea\Model;

class vpnRouteEntry extends Model
{
    /**
     * @example 65501,65001,60011
     *
     * @var string
     */
    public $asPath;

    /**
     * @example 65001:1000,65501:2000
     *
     * @var string
     */
    public $community;

    /**
     * @example 1563874074000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example vco-bp1tui07ob10fmuro****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @example System
     *
     * @var string
     */
    public $routeEntryType;

    /**
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $source;

    /**
     * @example normal
     *
     * @var string
     */
    public $state;

    /**
     * @example vpn-bp1cmw7jh1nfe43m9****
     *
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'asPath'         => 'AsPath',
        'community'      => 'Community',
        'createTime'     => 'CreateTime',
        'nextHop'        => 'NextHop',
        'routeDest'      => 'RouteDest',
        'routeEntryType' => 'RouteEntryType',
        'source'         => 'Source',
        'state'          => 'State',
        'vpnInstanceId'  => 'VpnInstanceId',
        'weight'         => 'Weight',
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
