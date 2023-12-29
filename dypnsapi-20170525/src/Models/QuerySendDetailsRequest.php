<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QuerySendDetailsRequest extends Model
{
    /**
     * @description The unique ID of the business, which is provided by Alibaba Cloud.
     *
     * @example 1231891289318923^12
     *
     * @var string
     */
    public $bizId;

    /**
     * @description The number of the page on which you are reading the text message. Pages start from page 1. The value of this parameter cannot exceed the maximum page number.
     *
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
     * @description The number of entries per page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The phone number.
     *
     * @example 186****9399
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
     * @description The date when the text message was sent. You can query text messages that were sent within the last 30 days.
     *
     * Specify the date in the yyyyMMdd format. Example: 20181225.
     * @example 20181225
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
