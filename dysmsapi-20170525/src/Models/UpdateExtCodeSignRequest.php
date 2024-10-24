<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class UpdateExtCodeSignRequest extends Model
{
    /**
     * @description 要修改的扩展码A3
     *
     * This parameter is required.
     * @example 01
     *
     * @var string
     */
    public $existExtCode;

    /**
     * @description 修改后的扩展码A3
     *
     * This parameter is required.
     * @example 02
     *
     * @var string
     */
    public $newExtCode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description 签名
     *
     * This parameter is required.
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $signName;
    protected $_name = [
        'existExtCode'         => 'ExistExtCode',
        'newExtCode'           => 'NewExtCode',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'signName'             => 'SignName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->existExtCode) {
            $res['ExistExtCode'] = $this->existExtCode;
        }
        if (null !== $this->newExtCode) {
            $res['NewExtCode'] = $this->newExtCode;
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
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateExtCodeSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExistExtCode'])) {
            $model->existExtCode = $map['ExistExtCode'];
        }
        if (isset($map['NewExtCode'])) {
            $model->newExtCode = $map['NewExtCode'];
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
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
