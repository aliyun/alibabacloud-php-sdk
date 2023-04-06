<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceRequest\orders\components;
use AlibabaCloud\Tea\Model;

class orders extends Model
{
    /**
     * @description The billing method. Set the value to **PREPAY**, which specifies the subscription billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The commodity code.
     *
     * Examples for the China site (aliyun.com):
     *
     *   **ga_gapluspre_public_cn**: GA instance.
     *   **ga_plusbwppre_public_cn**: basic bandwidth plan.
     *
     * Examples for the international site (alibabacloud.com):
     *
     *   **ga_pluspre_public_intl**: GA instance.
     *   **ga_bwppreintl_public_intl**: basic bandwidth plan.
     *
     * @example ga_gapluspre_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The information about the commodity module.
     *
     * The information varies based on the commodity module.
     * @var components[]
     */
    public $components;

    /**
     * @description The subscription duration of the instance.
     *
     *   If the **PricingCycle** parameter is set to **Month**, the valid values of the Duration parameter are **1** to **9**.
     *   If the **PricingCycle** parameter is set to **Year**, the valid values of the Duration parameter are **1** to **3**.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The type of order. Valid values:
     *
     *   **BUY**: purchase order
     *   **RENEW**: renewal order
     *   **UPGRADE**: upgrade order
     *
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The billing cycle of the GA instance. Valid values:
     *
     *   **Month**: billed on a monthly basis.
     *   **Year**: billed on an annual basis.
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The number of instances that you want to purchase.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;
    protected $_name = [
        'chargeType'    => 'ChargeType',
        'commodityCode' => 'CommodityCode',
        'components'    => 'Components',
        'duration'      => 'Duration',
        'orderType'     => 'OrderType',
        'pricingCycle'  => 'PricingCycle',
        'quantity'      => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->components) {
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
