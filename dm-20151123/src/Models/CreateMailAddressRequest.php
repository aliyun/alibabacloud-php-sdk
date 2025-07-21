<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CreateMailAddressRequest extends Model
{
    /**
     * @description Sender\\"s email address
     *
     * This parameter is required.
     *
     * @example test1@example.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Reply-to address
     *
     * @example test2@example.com
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

    /**
     * @description Type of sending. Values:
     *
     * - batch: Bulk emails
     *
     * - trigger: Triggered emails
     *
     * This parameter is required.
     *
     * @example batch
     *
     * @var string
     */
    public $sendtype;
    protected $_name = [
        'accountName' => 'AccountName',
        'ownerId' => 'OwnerId',
        'replyAddress' => 'ReplyAddress',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sendtype' => 'Sendtype',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->sendtype) {
            $res['Sendtype'] = $this->sendtype;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMailAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['Sendtype'])) {
            $model->sendtype = $map['Sendtype'];
        }

        return $model;
    }
}
