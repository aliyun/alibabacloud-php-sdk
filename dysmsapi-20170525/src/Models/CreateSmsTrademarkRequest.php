<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CreateSmsTrademarkRequest extends Model
{
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
     * @var string
     */
    public $trademarkApplicantName;

    /**
     * @var string
     */
    public $trademarkEffExpDate;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @var string
     */
    public $trademarkPic;

    /**
     * @var string
     */
    public $trademarkRegistrationNumber;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'trademarkApplicantName' => 'TrademarkApplicantName',
        'trademarkEffExpDate' => 'TrademarkEffExpDate',
        'trademarkName' => 'TrademarkName',
        'trademarkPic' => 'TrademarkPic',
        'trademarkRegistrationNumber' => 'TrademarkRegistrationNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->trademarkApplicantName) {
            $res['TrademarkApplicantName'] = $this->trademarkApplicantName;
        }

        if (null !== $this->trademarkEffExpDate) {
            $res['TrademarkEffExpDate'] = $this->trademarkEffExpDate;
        }

        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }

        if (null !== $this->trademarkPic) {
            $res['TrademarkPic'] = $this->trademarkPic;
        }

        if (null !== $this->trademarkRegistrationNumber) {
            $res['TrademarkRegistrationNumber'] = $this->trademarkRegistrationNumber;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['TrademarkApplicantName'])) {
            $model->trademarkApplicantName = $map['TrademarkApplicantName'];
        }

        if (isset($map['TrademarkEffExpDate'])) {
            $model->trademarkEffExpDate = $map['TrademarkEffExpDate'];
        }

        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }

        if (isset($map['TrademarkPic'])) {
            $model->trademarkPic = $map['TrademarkPic'];
        }

        if (isset($map['TrademarkRegistrationNumber'])) {
            $model->trademarkRegistrationNumber = $map['TrademarkRegistrationNumber'];
        }

        return $model;
    }
}
