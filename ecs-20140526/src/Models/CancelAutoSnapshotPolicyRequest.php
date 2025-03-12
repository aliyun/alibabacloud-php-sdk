<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CancelAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description RAM用户的虚拟账号ID。
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

    /**
     * @description The IDs of the disks for which you want to disable the automatic snapshot policy. To disable the automatic snapshot policy for multiple disks, you can set this parameter to a JSON array that consists of multiple disk IDs, such as ["dxxxxxxxxx", "dyyyyyyyyy", … "dzzzzzzzzz"]. Separate the disk IDs with commas (,).
     *
     * This parameter is required.
     * @example ["d-bp14k9cxvr5uzy54****", "d-bp1dtj8v7x6u08iw****", "d-bp1c0tyj9tfli2r8****"]
     *
     * @var string
     */
    public $diskIds;

    /**
     * @description The region ID of the automatic snapshot policy and the disks. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'diskIds'              => 'diskIds',
        'regionId'             => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->diskIds) {
            $res['diskIds'] = $this->diskIds;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['diskIds'])) {
            $model->diskIds = $map['diskIds'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
