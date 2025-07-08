<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CreateFlowLimitNewRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $dailyLimit;

    /**
     * @var string
     */
    public $hourLimit;

    /**
     * @var string
     */
    public $minuteLimit;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'bizType' => 'BizType',
        'dailyLimit' => 'DailyLimit',
        'hourLimit' => 'HourLimit',
        'minuteLimit' => 'MinuteLimit',
        'ownerId' => 'OwnerId',
        'prodCode' => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->dailyLimit) {
            $res['DailyLimit'] = $this->dailyLimit;
        }

        if (null !== $this->hourLimit) {
            $res['HourLimit'] = $this->hourLimit;
        }

        if (null !== $this->minuteLimit) {
            $res['MinuteLimit'] = $this->minuteLimit;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['DailyLimit'])) {
            $model->dailyLimit = $map['DailyLimit'];
        }

        if (isset($map['HourLimit'])) {
            $model->hourLimit = $map['HourLimit'];
        }

        if (isset($map['MinuteLimit'])) {
            $model->minuteLimit = $map['MinuteLimit'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
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
