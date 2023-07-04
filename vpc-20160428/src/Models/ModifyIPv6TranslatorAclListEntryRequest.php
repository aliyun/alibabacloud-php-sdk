<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyIPv6TranslatorAclListEntryRequest extends Model
{
    /**
     * @description The remarks of the ACL rule.
     *
     * It must be 2 to 100 characters in length, and can contain digits, underscores (\_), and hyphens (-). It must start with a letter.
     * @example client IP
     *
     * @var string
     */
    public $aclEntryComment;

    /**
     * @description The ID of the ACL rule to which the IP entry belongs.
     *
     * @example ipv6transaclentry-bp1jzyn7ra8pyxehd****
     *
     * @var string
     */
    public $aclEntryId;

    /**
     * @description The ID of the ACL to which the IP entry belongs.
     *
     * @example ipv6transacl-bp1b4z3tleyhq1s50****
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
     * @description The region of the ACL.
     *
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
        'aclEntryId'           => 'AclEntryId',
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
        if (null !== $this->aclEntryId) {
            $res['AclEntryId'] = $this->aclEntryId;
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
     * @return ModifyIPv6TranslatorAclListEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntryComment'])) {
            $model->aclEntryComment = $map['AclEntryComment'];
        }
        if (isset($map['AclEntryId'])) {
            $model->aclEntryId = $map['AclEntryId'];
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
