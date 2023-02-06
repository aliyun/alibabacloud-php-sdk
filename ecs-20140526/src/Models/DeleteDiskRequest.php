<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DeleteDiskRequest extends Model
{
    /**
     * @description The ID of the disk to be released.
     *
     * @example d-bp14k9cxvr5uzy5****
     *
     * @var string
     */
    public $diskId;

    /**
     * @example ECSforCloud@Alibaba.com
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description RAM 用户的虚拟账号ID。
     *
     * @example 155780923770
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description 资源主账号的账号名称。
     *
     * @example ECSforCloud
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description 资源主账号的ID，亦即UID。
     *
     * @example 155780923770
     *
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'diskId'               => 'DiskId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
     * @return DeleteDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
