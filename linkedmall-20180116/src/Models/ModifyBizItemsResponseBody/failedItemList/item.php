<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsResponseBody\failedItemList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsResponseBody\failedItemList\item\skuIdList;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @example 65305223****
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10000102-65305223****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @var skuIdList
     */
    public $skuIdList;
    protected $_name = [
        'itemId'    => 'ItemId',
        'lmItemId'  => 'LmItemId',
        'skuIdList' => 'SkuIdList',
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
        if (null !== $this->skuIdList) {
            $res['SkuIdList'] = null !== $this->skuIdList ? $this->skuIdList->toMap() : null;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['SkuIdList'])) {
            $model->skuIdList = skuIdList::fromMap($map['SkuIdList']);
        }

        return $model;
    }
}
