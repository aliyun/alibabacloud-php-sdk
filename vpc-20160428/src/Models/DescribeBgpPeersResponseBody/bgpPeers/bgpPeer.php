<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpPeersResponseBody\bgpPeers;

use AlibabaCloud\Tea\Model;

class bgpPeer extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $advertisedRouteCount;

    /**
     * @example !PWZ****
     *
     * @var string
     */
    public $authKey;

    /**
     * @example 3
     *
     * @var int
     */
    public $bfdMultiHop;

    /**
     * @example bgpg-2zev8h2wo414sfh****
     *
     * @var string
     */
    public $bgpGroupId;

    /**
     * @example bgp-2ze3un0ft1jd1xd****
     *
     * @var string
     */
    public $bgpPeerId;

    /**
     * @example Connect
     *
     * @var string
     */
    public $bgpStatus;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableBfd;

    /**
     * @example 2022-05-20T07:29:08Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 30
     *
     * @var string
     */
    public $hold;

    /**
     * @example ipv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $isFake;

    /**
     * @example 10
     *
     * @var string
     */
    public $keepalive;

    /**
     * @example 45104
     *
     * @var string
     */
    public $localAsn;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 65515
     *
     * @var string
     */
    public $peerAsn;

    /**
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $peerIpAddress;

    /**
     * @example 0
     *
     * @var int
     */
    public $receivedRouteCount;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 110
     *
     * @var string
     */
    public $routeLimit;

    /**
     * @example vbr-2zecmmvg5gvu8i4te****
     *
     * @var string
     */
    public $routerId;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'advertisedRouteCount' => 'AdvertisedRouteCount',
        'authKey'              => 'AuthKey',
        'bfdMultiHop'          => 'BfdMultiHop',
        'bgpGroupId'           => 'BgpGroupId',
        'bgpPeerId'            => 'BgpPeerId',
        'bgpStatus'            => 'BgpStatus',
        'description'          => 'Description',
        'enableBfd'            => 'EnableBfd',
        'gmtModified'          => 'GmtModified',
        'hold'                 => 'Hold',
        'ipVersion'            => 'IpVersion',
        'isFake'               => 'IsFake',
        'keepalive'            => 'Keepalive',
        'localAsn'             => 'LocalAsn',
        'name'                 => 'Name',
        'peerAsn'              => 'PeerAsn',
        'peerIpAddress'        => 'PeerIpAddress',
        'receivedRouteCount'   => 'ReceivedRouteCount',
        'regionId'             => 'RegionId',
        'routeLimit'           => 'RouteLimit',
        'routerId'             => 'RouterId',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advertisedRouteCount) {
            $res['AdvertisedRouteCount'] = $this->advertisedRouteCount;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->bfdMultiHop) {
            $res['BfdMultiHop'] = $this->bfdMultiHop;
        }
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->bgpPeerId) {
            $res['BgpPeerId'] = $this->bgpPeerId;
        }
        if (null !== $this->bgpStatus) {
            $res['BgpStatus'] = $this->bgpStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableBfd) {
            $res['EnableBfd'] = $this->enableBfd;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hold) {
            $res['Hold'] = $this->hold;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->isFake) {
            $res['IsFake'] = $this->isFake;
        }
        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
        }
        if (null !== $this->peerIpAddress) {
            $res['PeerIpAddress'] = $this->peerIpAddress;
        }
        if (null !== $this->receivedRouteCount) {
            $res['ReceivedRouteCount'] = $this->receivedRouteCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->routeLimit) {
            $res['RouteLimit'] = $this->routeLimit;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpPeer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvertisedRouteCount'])) {
            $model->advertisedRouteCount = $map['AdvertisedRouteCount'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['BfdMultiHop'])) {
            $model->bfdMultiHop = $map['BfdMultiHop'];
        }
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['BgpPeerId'])) {
            $model->bgpPeerId = $map['BgpPeerId'];
        }
        if (isset($map['BgpStatus'])) {
            $model->bgpStatus = $map['BgpStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableBfd'])) {
            $model->enableBfd = $map['EnableBfd'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Hold'])) {
            $model->hold = $map['Hold'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IsFake'])) {
            $model->isFake = $map['IsFake'];
        }
        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
        }
        if (isset($map['PeerIpAddress'])) {
            $model->peerIpAddress = $map['PeerIpAddress'];
        }
        if (isset($map['ReceivedRouteCount'])) {
            $model->receivedRouteCount = $map['ReceivedRouteCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RouteLimit'])) {
            $model->routeLimit = $map['RouteLimit'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
