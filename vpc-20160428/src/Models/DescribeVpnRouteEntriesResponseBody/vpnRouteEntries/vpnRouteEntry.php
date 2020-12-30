<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponseBody\vpnRouteEntries;

use AlibabaCloud\Tea\Model;

class vpnRouteEntry extends Model
{
    /**
     * @var string
     */
    public $routeEntryType;

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
    public $asPath;

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
    public $community;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $vpnInstanceId;
    protected $_name = [
        'routeEntryType' => 'RouteEntryType',
        'nextHop'        => 'NextHop',
        'weight'         => 'Weight',
        'routeDest'      => 'RouteDest',
        'asPath'         => 'AsPath',
        'state'          => 'State',
        'createTime'     => 'CreateTime',
        'community'      => 'Community',
        'source'         => 'Source',
        'vpnInstanceId'  => 'VpnInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeEntryType) {
            $res['RouteEntryType'] = $this->routeEntryType;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->routeDest) {
            $res['RouteDest'] = $this->routeDest;
        }
        if (null !== $this->asPath) {
            $res['AsPath'] = $this->asPath;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->community) {
            $res['Community'] = $this->community;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->vpnInstanceId) {
            $res['VpnInstanceId'] = $this->vpnInstanceId;
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
        if (isset($map['RouteEntryType'])) {
            $model->routeEntryType = $map['RouteEntryType'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['RouteDest'])) {
            $model->routeDest = $map['RouteDest'];
        }
        if (isset($map['AsPath'])) {
            $model->asPath = $map['AsPath'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Community'])) {
            $model->community = $map['Community'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['VpnInstanceId'])) {
            $model->vpnInstanceId = $map['VpnInstanceId'];
        }

        return $model;
    }
}
