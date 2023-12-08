<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSaleResponseBody;

use AlibabaCloud\Tea\Model;

class checkSale extends Model
{
    /**
     * @description The consumed quota.
     *
     * @example 500
     *
     * @var int
     */
    public $consumeCount;

    /**
     * @description Indicates whether the user is an existing user and whether the user uses the configuration assessment feature before the feature is released for sale on July 07, 2023. Valid values:
     *
     *   **true**: existing user
     *   **false**: new user
     *
     * @example true
     *
     * @var bool
     */
    public $loyalUser;

    /**
     * @description The purchased quota.
     *
     * @example 1000
     *
     * @var int
     */
    public $purchaseCount;

    /**
     * @description The type of the user. Valid values:
     *
     *   **1**: a user who can use all check items.
     *   **2**: an user who can only use the check items before the release of the feature on July 07, 2023. This type of users must upgrade Security Center before the users can use all check items.
     *   **3**: a new user who cannot use the configuration assessment feature. This type of users must make a purchase before the users can use the feature.
     *
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
