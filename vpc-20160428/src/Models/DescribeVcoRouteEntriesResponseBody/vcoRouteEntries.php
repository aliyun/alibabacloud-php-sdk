<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class vcoRouteEntries extends Model
{
    /**
     * @example [12000]
     *
     * @var string
     */
    public $asPath;

    /**
     * @example 65535:65510
     *
     * @var string
     */
    public $community;

    /**
     * @example 1658217008000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example vco-p0w2jpkhi2eeop6q6****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $routeDest;

    /**
     * @example custom
     *
     * @var string
     */
    public $routeEntryType;

    /**
     * @example CLOUD
     *
     * @var string
     */
    public $source;

    /**
     * @example published
     *
     * @var string
     */
    public $state;

    /**
     * @example vco-p0w2jpkhi2eeop6q6****
     *
     * @var string
     */
    public $vpnConnectionId;

    /**
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
