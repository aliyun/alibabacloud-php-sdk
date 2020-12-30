<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpPeersResponseBody\bgpPeers;

use AlibabaCloud\Tea\Model;

class bgpPeer extends Model
{
    /**
     * @var string
     */
    public $peerIpAddress;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $bgpGroupId;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $bgpStatus;

    /**
     * @var string
     */
    public $peerAsn;

    /**
     * @var int
     */
    public $bfdMultiHop;

    /**
     * @var string
     */
    public $localAsn;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $bgpPeerId;

    /**
     * @var bool
     */
    public $enableBfd;

    /**
     * @var string
     */
    public $hold;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $keepalive;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $routeLimit;

    /**
     * @var string
     */
    public $isFake;

    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'peerIpAddress' => 'PeerIpAddress',
        'status'        => 'Status',
        'bgpGroupId'    => 'BgpGroupId',
        'routerId'      => 'RouterId',
        'bgpStatus'     => 'BgpStatus',
        'peerAsn'       => 'PeerAsn',
        'bfdMultiHop'   => 'BfdMultiHop',
        'localAsn'      => 'LocalAsn',
        'regionId'      => 'RegionId',
        'bgpPeerId'     => 'BgpPeerId',
        'enableBfd'     => 'EnableBfd',
        'hold'          => 'Hold',
        'ipVersion'     => 'IpVersion',
        'keepalive'     => 'Keepalive',
        'description'   => 'Description',
        'routeLimit'    => 'RouteLimit',
        'isFake'        => 'IsFake',
        'authKey'       => 'AuthKey',
        'name'          => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peerIpAddress) {
            $res['PeerIpAddress'] = $this->peerIpAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->bgpStatus) {
            $res['BgpStatus'] = $this->bgpStatus;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
        }
        if (null !== $this->bfdMultiHop) {
            $res['BfdMultiHop'] = $this->bfdMultiHop;
        }
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->bgpPeerId) {
            $res['BgpPeerId'] = $this->bgpPeerId;
        }
        if (null !== $this->enableBfd) {
            $res['EnableBfd'] = $this->enableBfd;
        }
        if (null !== $this->hold) {
            $res['Hold'] = $this->hold;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->routeLimit) {
            $res['RouteLimit'] = $this->routeLimit;
        }
        if (null !== $this->isFake) {
            $res['IsFake'] = $this->isFake;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['PeerIpAddress'])) {
            $model->peerIpAddress = $map['PeerIpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['BgpStatus'])) {
            $model->bgpStatus = $map['BgpStatus'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
        }
        if (isset($map['BfdMultiHop'])) {
            $model->bfdMultiHop = $map['BfdMultiHop'];
        }
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['BgpPeerId'])) {
            $model->bgpPeerId = $map['BgpPeerId'];
        }
        if (isset($map['EnableBfd'])) {
            $model->enableBfd = $map['EnableBfd'];
        }
        if (isset($map['Hold'])) {
            $model->hold = $map['Hold'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RouteLimit'])) {
            $model->routeLimit = $map['RouteLimit'];
        }
        if (isset($map['IsFake'])) {
            $model->isFake = $map['IsFake'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
