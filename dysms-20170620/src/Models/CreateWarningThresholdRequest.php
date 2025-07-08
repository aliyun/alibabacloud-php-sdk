<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CreateWarningThresholdRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $dailyHaltLimit;

    /**
     * @var int
     */
    public $dailyWarningLimit;

    /**
     * @var int
     */
    public $monthlyHaltLimit;

    /**
     * @var int
     */
    public $monthlyWarningLimit;

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
        'dailyHaltLimit' => 'DailyHaltLimit',
        'dailyWarningLimit' => 'DailyWarningLimit',
        'monthlyHaltLimit' => 'MonthlyHaltLimit',
        'monthlyWarningLimit' => 'MonthlyWarningLimit',
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

        if (null !== $this->dailyHaltLimit) {
            $res['DailyHaltLimit'] = $this->dailyHaltLimit;
        }

        if (null !== $this->dailyWarningLimit) {
            $res['DailyWarningLimit'] = $this->dailyWarningLimit;
        }

        if (null !== $this->monthlyHaltLimit) {
            $res['MonthlyHaltLimit'] = $this->monthlyHaltLimit;
        }

        if (null !== $this->monthlyWarningLimit) {
            $res['MonthlyWarningLimit'] = $this->monthlyWarningLimit;
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

        if (isset($map['DailyHaltLimit'])) {
            $model->dailyHaltLimit = $map['DailyHaltLimit'];
        }

        if (isset($map['DailyWarningLimit'])) {
            $model->dailyWarningLimit = $map['DailyWarningLimit'];
        }

        if (isset($map['MonthlyHaltLimit'])) {
            $model->monthlyHaltLimit = $map['MonthlyHaltLimit'];
        }

        if (isset($map['MonthlyWarningLimit'])) {
            $model->monthlyWarningLimit = $map['MonthlyWarningLimit'];
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
