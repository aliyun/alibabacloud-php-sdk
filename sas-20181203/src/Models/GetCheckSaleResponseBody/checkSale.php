<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSaleResponseBody;

use AlibabaCloud\Tea\Model;

class checkSale extends Model
{
    /**
     * @example 500
     *
     * @var int
     */
    public $consumeCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $loyalUser;

    /**
     * @example 1000
     *
     * @var int
     */
    public $purchaseCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $saleUserType;
    protected $_name = [
        'consumeCount'  => 'ConsumeCount',
        'loyalUser'     => 'LoyalUser',
        'purchaseCount' => 'PurchaseCount',
        'saleUserType'  => 'SaleUserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeCount) {
            $res['ConsumeCount'] = $this->consumeCount;
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

    /**
     * @param array $map
     *
     * @return checkSale
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumeCount'])) {
            $model->consumeCount = $map['ConsumeCount'];
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
