<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryResponseBody\itemList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryResponseBody\itemList\item\skuList;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var skuList
     */
    public $skuList;
    protected $_name = [
        'lmItemId' => 'LmItemId',
        'itemId'   => 'ItemId',
        'skuList'  => 'SkuList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->skuList) {
            $res['SkuList'] = null !== $this->skuList ? $this->skuList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['SkuList'])) {
            $model->skuList = skuList::fromMap($map['SkuList']);
        }

        return $model;
    }
}
