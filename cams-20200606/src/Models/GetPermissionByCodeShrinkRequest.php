<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetPermissionByCodeShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $code;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $permissionsShrink;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'code' => 'Code',
        'custSpaceId' => 'CustSpaceId',
        'ownerId' => 'OwnerId',
        'permissionsShrink' => 'Permissions',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->permissionsShrink) {
            $res['Permissions'] = $this->permissionsShrink;
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
     * @return GetPermissionByCodeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Permissions'])) {
            $model->permissionsShrink = $map['Permissions'];
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
