<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyCreateDistributionOrderRequest;

use AlibabaCloud\Tea\Model;

class itemInfoLists extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $distributionMallId;

    /**
     * @example 10000035-634597869198
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 4562023539561
     *
     * @var string
     */
    public $skuId;
    protected $_name = [
        'distributionMallId' => 'DistributionMallId',
        'lmItemId'           => 'LmItemId',
        'quantity'           => 'Quantity',
        'skuId'              => 'SkuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributionMallId) {
            $res['DistributionMallId'] = $this->distributionMallId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemInfoLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributionMallId'])) {
            $model->distributionMallId = $map['DistributionMallId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        return $model;
    }
}
