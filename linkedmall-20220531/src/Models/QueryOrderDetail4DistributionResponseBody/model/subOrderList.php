<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryOrderDetail4DistributionResponseBody\model;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryOrderDetail4DistributionResponseBody\model\subOrderList\itemPrice;
use AlibabaCloud\Tea\Model;

class subOrderList extends Model
{
    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemPic;

    /**
     * @var itemPrice[]
     */
    public $itemPrice;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $logisticsStatus;

    /**
     * @var string
     */
    public $mainDistributionOrderId;

    /**
     * @example 1
     *
     * @var string
     */
    public $number;

    /**
     * @example 6
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @example 4771634532960
     *
     * @var string
     */
    public $skuId;

    /**
     * @example 500g
     *
     * @var string
     */
    public $skuName;

    /**
     * @var string
     */
    public $subDistributionOrderId;
    protected $_name = [
        'itemId'                  => 'ItemId',
        'itemPic'                 => 'ItemPic',
        'itemPrice'               => 'ItemPrice',
        'itemTitle'               => 'ItemTitle',
        'logisticsStatus'         => 'LogisticsStatus',
        'mainDistributionOrderId' => 'MainDistributionOrderId',
        'number'                  => 'Number',
        'orderStatus'             => 'OrderStatus',
        'skuId'                   => 'SkuId',
        'skuName'                 => 'SkuName',
        'subDistributionOrderId'  => 'SubDistributionOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemPic) {
            $res['ItemPic'] = $this->itemPic;
        }
        if (null !== $this->itemPrice) {
            $res['ItemPrice'] = [];
            if (null !== $this->itemPrice && \is_array($this->itemPrice)) {
                $n = 0;
                foreach ($this->itemPrice as $item) {
                    $res['ItemPrice'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->mainDistributionOrderId) {
            $res['MainDistributionOrderId'] = $this->mainDistributionOrderId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->subDistributionOrderId) {
            $res['SubDistributionOrderId'] = $this->subDistributionOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemPic'])) {
            $model->itemPic = $map['ItemPic'];
        }
        if (isset($map['ItemPrice'])) {
            if (!empty($map['ItemPrice'])) {
                $model->itemPrice = [];
                $n                = 0;
                foreach ($map['ItemPrice'] as $item) {
                    $model->itemPrice[$n++] = null !== $item ? itemPrice::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }
        if (isset($map['MainDistributionOrderId'])) {
            $model->mainDistributionOrderId = $map['MainDistributionOrderId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['SubDistributionOrderId'])) {
            $model->subDistributionOrderId = $map['SubDistributionOrderId'];
        }

        return $model;
    }
}
