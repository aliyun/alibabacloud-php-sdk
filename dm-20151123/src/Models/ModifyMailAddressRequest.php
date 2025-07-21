<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class ModifyMailAddressRequest extends Model
{
    /**
     * @description Sending address ID
     *
     * This parameter is required.
     *
     * @example 1344565
     *
     * @var int
     */
    public $mailAddressId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description - Length should be 10 to 20 characters, and must include numbers, uppercase letters, and lowercase letters.
     *
     * - Must contain at least 2 digits, 2 uppercase letters, and 2 lowercase letters, and neither the digits nor the letters can consist of a single character repeated.
     *
     * - Cannot be the same as the last set password.
     *
     * @example DM1mail1234
     *
     * @var string
     */
    public $password;

    /**
     * @description Reply address
     *
     * @example a***@example.net
     *
     * @var string
     */
    public $replyAddress;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'mailAddressId' => 'MailAddressId',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'replyAddress' => 'ReplyAddress',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mailAddressId) {
            $res['MailAddressId'] = $this->mailAddressId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->replyAddress) {
            $res['ReplyAddress'] = $this->replyAddress;
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
     * @return ModifyMailAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MailAddressId'])) {
            $model->mailAddressId = $map['MailAddressId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ReplyAddress'])) {
            $model->replyAddress = $map['ReplyAddress'];
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
