<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QuerySendDetailsRequest extends Model
{
    /**
     * @description The ID of the delivery receipt. The delivery receipt ID is the value of the BizId parameter that is returned when you call the SendSms or SendBatchSms operation.
     *
     * @example 134523^435****
     *
     * @var string
     */
    public $bizId;

    /**
     * @description The page number of the first page.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of items displayed per page.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The mobile numbers of the recipients. Format:
     *
     *   If you send messages in the Chinese mainland, specify an 11-digit mobile number, for example, 1390000\\*\\*\\*\\*.
     *   If you send messages to countries or regions outside the Chinese mainland, specify this parameter in the \\<Area code>\\<Mobile number> format. Example: 8520000\\*\\*\\*\\*.
     *
     * This parameter is required.
     * @example 1390000****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The date when the message was sent. You can query messages that were sent within the last 30 days.
     *
     * This parameter is required.
     * @example 20181228
     *
     * @var string
     */
    public $sendDate;
    protected $_name = [
        'bizId'                => 'BizId',
        'currentPage'          => 'CurrentPage',
        'ownerId'              => 'OwnerId',
        'pageSize'             => 'PageSize',
        'phoneNumber'          => 'PhoneNumber',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sendDate'             => 'SendDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySendDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }

        return $model;
    }
}
