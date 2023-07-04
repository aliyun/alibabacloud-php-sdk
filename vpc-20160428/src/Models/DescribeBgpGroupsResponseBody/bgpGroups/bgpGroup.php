<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsResponseBody\bgpGroups;

use AlibabaCloud\Tea\Model;

class bgpGroup extends Model
{
    /**
     * @description The key used by the BGP group.
     *
     * @example !PWZ****
     *
     * @var string
     */
    public $authKey;

    /**
     * @description The ID of the BGP group.
     *
     * @example bgpg-bp1k25cyp26cllath****
     *
     * @var string
     */
    public $bgpGroupId;

    /**
     * @description The description of the BGP group.
     *
     * @var string
     */
    public $description;

    /**
     * @description The hold time to receive BGP messages. Unit: seconds.
     *
     * >  If no message is received within the hold time, the BGP peer is considered disconnected.
     * @example 30
     *
     * @var string
     */
    public $hold;

    /**
     * @description The IP version of the BGP group. Valid values:
     *
     *   **ipv4**: IPv4
     *   **ipv6**: IPv6. IPv6 is supported only if the VBR of the BGP group has IPv6 enabled.
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description Indicates whether the ASN is fake. Valid values:
     *
     *   **false**: no
     *   **true**: yes
     *
     * @example true
     *
     * @var string
     */
    public $isFake;

    /**
     * @description The keepalive time. Unit: seconds.
     *
     * @example 10
     *
     * @var string
     */
    public $keepalive;

    /**
     * @description The ASN of the VBR.
     *
     * @example 45104
     *
     * @var string
     */
    public $localAsn;

    /**
     * @description The name of the BGP group.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The autonomous system number (ASN) of the gateway device in the data center.
     *
     * @example 1****
     *
     * @var string
     */
    public $peerAsn;

    /**
     * @description The ID of the region to which the BGP group belongs.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The maximum number of route entries for BGP dynamic route learning.
     *
     * @example 99
     *
     * @var string
     */
    public $routeLimit;

    /**
     * @description The ID of the VBR.
     *
     * @example vbr-bp1ctxy813985gkuk****
     *
     * @var string
     */
    public $routerId;

    /**
     * @description The status of the BGP group.
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'authKey'     => 'AuthKey',
        'bgpGroupId'  => 'BgpGroupId',
        'description' => 'Description',
        'hold'        => 'Hold',
        'ipVersion'   => 'IpVersion',
        'isFake'      => 'IsFake',
        'keepalive'   => 'Keepalive',
        'localAsn'    => 'LocalAsn',
        'name'        => 'Name',
        'peerAsn'     => 'PeerAsn',
        'regionId'    => 'RegionId',
        'routeLimit'  => 'RouteLimit',
        'routerId'    => 'RouterId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return bgpGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
