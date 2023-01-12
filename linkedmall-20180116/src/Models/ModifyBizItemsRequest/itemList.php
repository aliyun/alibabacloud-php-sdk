<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsRequest;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsRequest\itemList\skuList;
use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @example 62553137****
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10000035-61936646****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @var skuList[]
     */
    public $skuList;
    protected $_name = [
        'itemId'   => 'ItemId',
        'lmItemId' => 'LmItemId',
        'skuList'  => 'SkuList',
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
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->skuList) {
            $res['SkuList'] = [];
            if (null !== $this->skuList && \is_array($this->skuList)) {
                $n = 0;
                foreach ($this->skuList as $item) {
                    $res['SkuList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['SkuList'])) {
            if (!empty($map['SkuList'])) {
                $model->skuList = [];
                $n              = 0;
                foreach ($map['SkuList'] as $item) {
                    $model->skuList[$n++] = null !== $item ? skuList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
