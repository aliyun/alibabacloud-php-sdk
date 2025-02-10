<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;

class vcoRouteEntries extends Model
{
    /**
     * @var string
     */
    public $asPath;
    /**
     * @var string
     */
    public $community;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $nextHop;
    /**
     * @var string[]
     */
    public $nextHopTunnelIdList;
    /**
     * @var string
     */
    public $routeDest;
    /**
     * @var string
     */
    public $routeEntryType;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $vpnConnectionId;
    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'asPath'              => 'AsPath',
        'community'           => 'Community',
        'createTime'          => 'CreateTime',
        'nextHop'             => 'NextHop',
        'nextHopTunnelIdList' => 'NextHopTunnelIdList',
        'routeDest'           => 'RouteDest',
        'routeEntryType'      => 'RouteEntryType',
        'source'              => 'Source',
        'state'               => 'State',
        'vpnConnectionId'     => 'VpnConnectionId',
        'weight'              => 'Weight',
    ];

    public function validate()
    {
        if (\is_array($this->nextHopTunnelIdList)) {
            Model::validateArray($this->nextHopTunnelIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->nextHopTunnelIdList) {
            if (\is_array($this->nextHopTunnelIdList)) {
                $res['NextHopTunnelIdList'] = [];
                $n1                         = 0;
                foreach ($this->nextHopTunnelIdList as $item1) {
                    $res['NextHopTunnelIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['NextHopTunnelIdList'])) {
            if (!empty($map['NextHopTunnelIdList'])) {
                $model->nextHopTunnelIdList = [];
                $n1                         = 0;
                foreach ($map['NextHopTunnelIdList'] as $item1) {
                    $model->nextHopTunnelIdList[$n1++] = $item1;
                }
            }
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
