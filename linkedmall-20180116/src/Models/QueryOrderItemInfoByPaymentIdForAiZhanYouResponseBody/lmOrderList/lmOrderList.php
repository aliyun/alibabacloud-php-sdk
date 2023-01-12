<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderItemInfoByPaymentIdForAiZhanYouResponseBody\lmOrderList;

use AlibabaCloud\Tea\Model;

class lmOrderList extends Model
{
    /**
     * @example 599******711
     *
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @example 10000035-******31758
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 42******18
     *
     * @var int
     */
    public $lmOrderId;

    /**
     * @example 433******8350
     *
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuName;
    protected $_name = [
        'itemId'    => 'ItemId',
        'itemName'  => 'ItemName',
        'lmItemId'  => 'LmItemId',
        'lmOrderId' => 'LmOrderId',
        'skuId'     => 'SkuId',
        'skuName'   => 'SkuName',
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
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }

        return $model;
    }
}
