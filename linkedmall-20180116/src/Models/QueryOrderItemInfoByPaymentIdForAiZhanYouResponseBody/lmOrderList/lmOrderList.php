<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderItemInfoByPaymentIdForAiZhanYouResponseBody\lmOrderList;

use AlibabaCloud\Tea\Model;

class lmOrderList extends Model
{
    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $skuName;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $itemId;
    protected $_name = [
        'lmOrderId' => 'LmOrderId',
        'itemName'  => 'ItemName',
        'skuName'   => 'SkuName',
        'skuId'     => 'SkuId',
        'lmItemId'  => 'LmItemId',
        'itemId'    => 'ItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
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
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        return $model;
    }
}
