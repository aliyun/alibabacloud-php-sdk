<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetCardSmsDetailsRequest extends Model
{
    /**
     * @example 123456^0
     *
     * @var string
     */
    public $bizCardId;

    /**
     * @example 12346^0
     *
     * @var string
     */
    public $bizDigitId;

    /**
     * @example 1234576^0
     *
     * @var string
     */
    public $bizSmsId;

    /**
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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @example 20240112
     *
     * @var string
     */
    public $sendDate;
    protected $_name = [
        'bizCardId'            => 'BizCardId',
        'bizDigitId'           => 'BizDigitId',
        'bizSmsId'             => 'BizSmsId',
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
        if (null !== $this->bizCardId) {
            $res['BizCardId'] = $this->bizCardId;
        }
        if (null !== $this->bizDigitId) {
            $res['BizDigitId'] = $this->bizDigitId;
        }
        if (null !== $this->bizSmsId) {
            $res['BizSmsId'] = $this->bizSmsId;
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
     * @return GetCardSmsDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCardId'])) {
            $model->bizCardId = $map['BizCardId'];
        }
        if (isset($map['BizDigitId'])) {
            $model->bizDigitId = $map['BizDigitId'];
        }
        if (isset($map['BizSmsId'])) {
            $model->bizSmsId = $map['BizSmsId'];
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
