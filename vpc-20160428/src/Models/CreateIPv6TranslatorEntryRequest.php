<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIPv6TranslatorEntryRequest extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var int
     */
    public $allocateIpv6Port;

    /**
     * @var string
     */
    public $backendIpv4Addr;

    /**
     * @var int
     */
    public $backendIpv4Port;

    /**
     * @var int
     */
    public $entryBandwidth;

    /**
     * @var string
     */
    public $entryDescription;

    /**
     * @var string
     */
    public $entryName;

    /**
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
