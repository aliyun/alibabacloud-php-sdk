<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateBgpGroupRequest extends Model
{
    /**
     * @description The authentication key of the BGP group.
     *
     * @example !PWZ2****
     *
     * @var string
     */
    public $authKey;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the BGP group.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter and cannot start with `http://` or `https://`.
     * @example BGP
     *
     * @var string
     */
    public $description;

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
     * @description Specifies whether to use a fake ASN. Valid values:
     *
     *   **false** (default): no
     *   **true**: yes
     *
     * >  In most cases, a router that runs BGP belongs to only one AS. If you want to use a different ASN to communicate with the peer but you cannot modify the BGP configuration because it may cause service downtime, you can use a fake ASN. For example, you can use a fake ASN to communicate with the peer when you migrate or merge ASs. This prevents service interruptions.
     * @example true
     *
     * @var bool
     */
    public $isFakeAsn;

    /**
     * @description The custom ASN on the Alibaba Cloud side. Valid values:
     *
     *   **45104**
     *   **64512~65534**
     *   **4200000000~4294967294**
     *
     * >  **65025** is reserved by Alibaba Cloud. By default, Alibaba Cloud uses **45104** as **LocalAsn**. If you use a custom **LocalAsn** in scenarios where multiple connections are used, BGP loops may occur. Proceed with caution.
     * @example 45104
     *
     * @var int
     */
    public $localAsn;

    /**
     * @description The name of the BGP group.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ASN of the gateway device in the data center.
     *
     * @example 1****
     *
     * @var int
     */
    public $peerAsn;

    /**
     * @description The region ID of the VBR.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
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

    /**
     * @description The maximum number of routes supported by a BGP peer. Default value: **110**.
     *
     * @example 110
     *
     * @var int
     */
    public $routeQuota;

    /**
     * @description The ID of the VBR.
     *
     * @example vbr-bp1ctxy813985gkuk****
     *
     * @var string
     */
    public $routerId;
    protected $_name = [
        'authKey'              => 'AuthKey',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'ipVersion'            => 'IpVersion',
        'isFakeAsn'            => 'IsFakeAsn',
        'localAsn'             => 'LocalAsn',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'peerAsn'              => 'PeerAsn',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeQuota'           => 'RouteQuota',
        'routerId'             => 'RouterId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->isFakeAsn) {
            $res['IsFakeAsn'] = $this->isFakeAsn;
        }
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
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
        if (null !== $this->routeQuota) {
            $res['RouteQuota'] = $this->routeQuota;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBgpGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IsFakeAsn'])) {
            $model->isFakeAsn = $map['IsFakeAsn'];
        }
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
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
        if (isset($map['RouteQuota'])) {
            $model->routeQuota = $map['RouteQuota'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }

        return $model;
    }
}
