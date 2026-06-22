<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSaleResponseBody;

use AlibabaCloud\Dara\Model;

class checkSale extends Model
{
    /**
     * @var int
     */
    public $consumeCount;

    /**
     * @var int
     */
    public $instanceConsumeCount;

    /**
     * @var int
     */
    public $instanceHybridPostLatestCycledResourceCount;

    /**
     * @var int
     */
    public $instancePostConsumeCount;

    /**
     * @var int
     */
    public $instancePurchaseCount;

    /**
     * @var bool
     */
    public $loyalUser;

    /**
     * @var int
     */
    public $purchaseCount;

    /**
     * @var int
     */
    public $saleUserType;
    protected $_name = [
        'consumeCount' => 'ConsumeCount',
        'instanceConsumeCount' => 'InstanceConsumeCount',
        'instanceHybridPostLatestCycledResourceCount' => 'InstanceHybridPostLatestCycledResourceCount',
        'instancePostConsumeCount' => 'InstancePostConsumeCount',
        'instancePurchaseCount' => 'InstancePurchaseCount',
        'loyalUser' => 'LoyalUser',
        'purchaseCount' => 'PurchaseCount',
        'saleUserType' => 'SaleUserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeCount) {
            $res['ConsumeCount'] = $this->consumeCount;
        }

        if (null !== $this->instanceConsumeCount) {
            $res['InstanceConsumeCount'] = $this->instanceConsumeCount;
        }

        if (null !== $this->instanceHybridPostLatestCycledResourceCount) {
            $res['InstanceHybridPostLatestCycledResourceCount'] = $this->instanceHybridPostLatestCycledResourceCount;
        }

        if (null !== $this->instancePostConsumeCount) {
            $res['InstancePostConsumeCount'] = $this->instancePostConsumeCount;
        }

        if (null !== $this->instancePurchaseCount) {
            $res['InstancePurchaseCount'] = $this->instancePurchaseCount;
        }

        if (null !== $this->loyalUser) {
            $res['LoyalUser'] = $this->loyalUser;
        }

        if (null !== $this->purchaseCount) {
            $res['PurchaseCount'] = $this->purchaseCount;
        }

        if (null !== $this->saleUserType) {
            $res['SaleUserType'] = $this->saleUserType;
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
        if (isset($map['ConsumeCount'])) {
            $model->consumeCount = $map['ConsumeCount'];
        }

        if (isset($map['InstanceConsumeCount'])) {
            $model->instanceConsumeCount = $map['InstanceConsumeCount'];
        }

        if (isset($map['InstanceHybridPostLatestCycledResourceCount'])) {
            $model->instanceHybridPostLatestCycledResourceCount = $map['InstanceHybridPostLatestCycledResourceCount'];
        }

        if (isset($map['InstancePostConsumeCount'])) {
            $model->instancePostConsumeCount = $map['InstancePostConsumeCount'];
        }

        if (isset($map['InstancePurchaseCount'])) {
            $model->instancePurchaseCount = $map['InstancePurchaseCount'];
        }

        if (isset($map['LoyalUser'])) {
            $model->loyalUser = $map['LoyalUser'];
        }

        if (isset($map['PurchaseCount'])) {
            $model->purchaseCount = $map['PurchaseCount'];
        }

        if (isset($map['SaleUserType'])) {
            $model->saleUserType = $map['SaleUserType'];
        }

        return $model;
    }
}
