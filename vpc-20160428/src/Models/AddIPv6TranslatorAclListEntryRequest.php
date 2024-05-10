<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AddIPv6TranslatorAclListEntryRequest extends Model
{
    /**
     * @description The remarks of the ACL entry.
     *
     * It must be 2 to 100 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). It must start with a letter.
     * @example clientIP1
     *
     * @var string
     */
    public $aclEntryComment;

    /**
     * @description The IPv6 address or IPv6 CIDR block that you want to add to the ACL entry, for example, 12XX:0:0:XXXX::0102 or 12XX:0:0:XXXX::/60.
     *
     * This parameter is required.
     * @example 12XX:0:0:XXXX::0102
     *
     * @var string
     */
    public $aclEntryIp;

    /**
     * @description The ID of the ACL to which you want to add the IP entry.
     *
     * This parameter is required.
     * @example ipv6transacl-bp1dcdvfe2****
     *
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the ACL.
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
    protected $_name = [
        'aclEntryComment'      => 'AclEntryComment',
        'aclEntryIp'           => 'AclEntryIp',
        'aclId'                => 'AclId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
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
        if (null !== $this->aclEntryComment) {
            $res['AclEntryComment'] = $this->aclEntryComment;
        }
        if (null !== $this->aclEntryIp) {
            $res['AclEntryIp'] = $this->aclEntryIp;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIPv6TranslatorAclListEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntryComment'])) {
            $model->aclEntryComment = $map['AclEntryComment'];
        }
        if (isset($map['AclEntryIp'])) {
            $model->aclEntryIp = $map['AclEntryIp'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
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

        return $model;
    }
}
