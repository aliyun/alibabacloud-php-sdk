<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIPv6TranslatorEntryRequest extends Model
{
    /**
     * @description The ID of the associated ACL.
     *
     * @example ipv6transacl-bp1g8bhrdexnrxxxx
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Specifies whether to enable access control lists (ACLs). Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description Specifies whether to enable ACLs. Valid values:
     *
     *   **white**: a whitelist. IPv6 addresses in the ACL are allowed to access backend services.
     *   **black**: a blacklist. IPv6 addresses in the ACL are not allowed to access backend services.
     *
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The port that is used by the IPv6 address allocated to the IPv6 Translation Service instance.
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $allocateIpv6Port;

    /**
     * @description The public IPv4 address that needs to provide IPv6 services.
     *
     * This parameter is required.
     * @example 46.22.xx.xx
     *
     * @var string
     */
    public $backendIpv4Addr;

    /**
     * @description The port of the public IPv4 address that needs to provide IPv6 services.
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $backendIpv4Port;

    /**
     * @description The maximum bandwidth specified in the IPv6 mapping entry. Valid values:
     *
     *   \\-1 (default): does not limit the maximum bandwidth specified in the IPv6 mapping entry.
     *   1 to 200: the bandwidth value specified in the IPv6 mapping entry. Unit: Mbit/s.
     *
     * > The sum of the maximum bandwidth values specified in all IPv6 entries cannot exceed the maximum bandwidth supported by the instance.
     * @example 2
     *
     * @var int
     */
    public $entryBandwidth;

    /**
     * @description The description of the IPv6 mapping entry.
     *
     * @example description
     *
     * @var string
     */
    public $entryDescription;

    /**
     * @description The name of the IPv6 mapping entry. It must be 2 to 100 characters in length and can contain letters, digits, periods (.), underscores (_), and hyphens (-). It must start with a letter. It cannot start with `http://` or `https://`.
     *
     * @example name1
     *
     * @var string
     */
    public $entryName;

    /**
     * @description The ID of the IPv6 Translation Service instance.
     *
     * This parameter is required.
     * @example ipv6trans-bp1858ys57xxxxxx
     *
     * @var string
     */
    public $ipv6TranslatorId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region of the IPv6 Translation Service instance. You can call the **DescribeRegions** operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
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
     * @description The protocol. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * This parameter is required.
     * @example tcp
     *
     * @var string
     */
    public $transProtocol;
    protected $_name = [
        'aclId'                => 'AclId',
        'aclStatus'            => 'AclStatus',
        'aclType'              => 'AclType',
        'allocateIpv6Port'     => 'AllocateIpv6Port',
        'backendIpv4Addr'      => 'BackendIpv4Addr',
        'backendIpv4Port'      => 'BackendIpv4Port',
        'entryBandwidth'       => 'EntryBandwidth',
        'entryDescription'     => 'EntryDescription',
        'entryName'            => 'EntryName',
        'ipv6TranslatorId'     => 'Ipv6TranslatorId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'transProtocol'        => 'TransProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->allocateIpv6Port) {
            $res['AllocateIpv6Port'] = $this->allocateIpv6Port;
        }
        if (null !== $this->backendIpv4Addr) {
            $res['BackendIpv4Addr'] = $this->backendIpv4Addr;
        }
        if (null !== $this->backendIpv4Port) {
            $res['BackendIpv4Port'] = $this->backendIpv4Port;
        }
        if (null !== $this->entryBandwidth) {
            $res['EntryBandwidth'] = $this->entryBandwidth;
        }
        if (null !== $this->entryDescription) {
            $res['EntryDescription'] = $this->entryDescription;
        }
        if (null !== $this->entryName) {
            $res['EntryName'] = $this->entryName;
        }
        if (null !== $this->ipv6TranslatorId) {
            $res['Ipv6TranslatorId'] = $this->ipv6TranslatorId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->transProtocol) {
            $res['TransProtocol'] = $this->transProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIPv6TranslatorEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['AllocateIpv6Port'])) {
            $model->allocateIpv6Port = $map['AllocateIpv6Port'];
        }
        if (isset($map['BackendIpv4Addr'])) {
            $model->backendIpv4Addr = $map['BackendIpv4Addr'];
        }
        if (isset($map['BackendIpv4Port'])) {
            $model->backendIpv4Port = $map['BackendIpv4Port'];
        }
        if (isset($map['EntryBandwidth'])) {
            $model->entryBandwidth = $map['EntryBandwidth'];
        }
        if (isset($map['EntryDescription'])) {
            $model->entryDescription = $map['EntryDescription'];
        }
        if (isset($map['EntryName'])) {
            $model->entryName = $map['EntryName'];
        }
        if (isset($map['Ipv6TranslatorId'])) {
            $model->ipv6TranslatorId = $map['Ipv6TranslatorId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['TransProtocol'])) {
            $model->transProtocol = $map['TransProtocol'];
        }

        return $model;
    }
}
