<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateBgpPeerRequest extends Model
{
    /**
     * @description The BFD hop count. Valid values: **1** to **255**.
     *
     * The parameter specifies the maximum number of network devices that a packet can traverse from the source to the destination. Set a value based on your network topology.
     * @example 3
     *
     * @var int
     */
    public $bfdMultiHop;

    /**
     * @description The ID of the BGP group.
     *
     * This parameter is required.
     * @example bgpg-wz9f62v4fbg****
     *
     * @var string
     */
    public $bgpGroupId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that the value is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not set this parameter, the system uses the value of **RequestId** as **ClientToken**. The value of **RequestId** for each API request is different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable the Bidirectional Forwarding Detection (BFD) feature. Valid values:
     *
     *   **true**: enables BFD.
     *   **false**: disables BFD.
     *
     * @example true
     *
     * @var bool
     */
    public $enableBfd;

    /**
     * @description The IP version. Valid values:
     *
     *   **IPv4**: This is the default value.
     *   **IPv6**: IPv6 is supported only if the VBR for which you want to create the BGP group has IPv6 enabled.
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The IP address of the BGP peer.
     *
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $peerIpAddress;

    /**
     * @description The ID of the region to which the BGP group belongs.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'bfdMultiHop'          => 'BfdMultiHop',
        'bgpGroupId'           => 'BgpGroupId',
        'clientToken'          => 'ClientToken',
        'enableBfd'            => 'EnableBfd',
        'ipVersion'            => 'IpVersion',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'peerIpAddress'        => 'PeerIpAddress',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bfdMultiHop) {
            $res['BfdMultiHop'] = $this->bfdMultiHop;
        }
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableBfd) {
            $res['EnableBfd'] = $this->enableBfd;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->peerIpAddress) {
            $res['PeerIpAddress'] = $this->peerIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBgpPeerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BfdMultiHop'])) {
            $model->bfdMultiHop = $map['BfdMultiHop'];
        }
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableBfd'])) {
            $model->enableBfd = $map['EnableBfd'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PeerIpAddress'])) {
            $model->peerIpAddress = $map['PeerIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
