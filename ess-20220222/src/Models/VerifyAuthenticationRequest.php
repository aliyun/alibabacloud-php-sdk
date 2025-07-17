<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class VerifyAuthenticationRequest extends Model
{
    /**
     * @description Specifies whether to check only the authorization status. Valid values:
     *
     *   true: checks only the authorization status. The service-linked role is not created.
     *   false (default): checks the authorization status and resource usage.
     *
     * @example false
     *
     * @var bool
     */
    public $onlyCheck;

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
     * @description The ID of your Alibaba Cloud account.
     *
     * @example 12345678123*****
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'onlyCheck' => 'OnlyCheck',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'uid' => 'Uid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlyCheck) {
            $res['OnlyCheck'] = $this->onlyCheck;
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
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyAuthenticationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlyCheck'])) {
            $model->onlyCheck = $map['OnlyCheck'];
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
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
