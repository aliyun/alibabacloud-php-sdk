<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeIPv6TranslatorEntriesRequest extends Model
{
    /**
     * @description The ID of the network ACL.
     *
     * @example ipv6transacl-bp1de2****
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
     * @example off
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The ACL type. Valid values:
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
     * @description The IPv6 address allocated to the IPv6 Translation Service instance.
     *
     * @example 2400:3200:1600::XX
     *
     * @var string
     */
    public $allocateIpv6Addr;

    /**
     * @description The port used by the IPv6 address allocated to the IPv6 Translation Service instance.
     *
     * @example 80
     *
     * @var int
     */
    public $allocateIpv6Port;

    /**
     * @description The public IPv4 address that needs to provide IPv6 services.
     *
     * @example 47.99.XX.XX
     *
     * @var string
     */
    public $backendIpv4Addr;

    /**
     * @description The port used by the public IPv4 address that needs to provide IPv6 services.
     *
     * @example 80
     *
     * @var int
     */
    public $backendIpv4Port;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of the IPv6 mapping entry.
     *
     * @example entryname
     *
     * @var string
     */
    public $entryName;

    /**
     * @description The ID of the IPv6 mapping entry.
     *
     * > If **Ipv6TranslatorId** and **Ipv6TranslatorEntryId** are empty, information about all IPv6 mapping entries is returned. If only **Ipv6TranslatorEntryId** is empty, information about the IPv6 mapping entries of the current IPv6 Translation Service instance is returned.
     * @example ipv6transentry-bp1g8bhrde****
     *
     * @var string
     */
    public $ipv6TranslatorEntryId;

    /**
     * @description The ID of the IPv6 Translation Service instance.
     *
     * @example ipv6trans-bp1858ysxx****
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
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
     * @description The protocol used by the data to be forwarded.
     *
     * @example tcp
     *
     * @var string
     */
    public $transProtocol;
    protected $_name = [
        'aclId'                 => 'AclId',
        'aclStatus'             => 'AclStatus',
        'aclType'               => 'AclType',
        'allocateIpv6Addr'      => 'AllocateIpv6Addr',
        'allocateIpv6Port'      => 'AllocateIpv6Port',
        'backendIpv4Addr'       => 'BackendIpv4Addr',
        'backendIpv4Port'       => 'BackendIpv4Port',
        'clientToken'           => 'ClientToken',
        'entryName'             => 'EntryName',
        'ipv6TranslatorEntryId' => 'Ipv6TranslatorEntryId',
        'ipv6TranslatorId'      => 'Ipv6TranslatorId',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'transProtocol'         => 'TransProtocol',
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
        if (null !== $this->allocateIpv6Addr) {
            $res['AllocateIpv6Addr'] = $this->allocateIpv6Addr;
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->entryName) {
            $res['EntryName'] = $this->entryName;
        }
        if (null !== $this->ipv6TranslatorEntryId) {
            $res['Ipv6TranslatorEntryId'] = $this->ipv6TranslatorEntryId;
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeIPv6TranslatorEntriesRequest
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
        if (isset($map['AllocateIpv6Addr'])) {
            $model->allocateIpv6Addr = $map['AllocateIpv6Addr'];
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EntryName'])) {
            $model->entryName = $map['EntryName'];
        }
        if (isset($map['Ipv6TranslatorEntryId'])) {
            $model->ipv6TranslatorEntryId = $map['Ipv6TranslatorEntryId'];
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
