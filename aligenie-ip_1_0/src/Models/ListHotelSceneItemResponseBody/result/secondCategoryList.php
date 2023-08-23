<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemResponseBody\result\secondCategoryList\itemList;
use AlibabaCloud\Tea\Model;

class secondCategoryList extends Model
{
    /**
     * @var itemList[]
     */
    public $itemList;

    /**
     * @example 客用品类
     *
     * @var string
     */
    public $secondCategoryName;
    protected $_name = [
        'itemList'           => 'ItemList',
        'secondCategoryName' => 'SecondCategoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemList) {
            $res['ItemList'] = [];
            if (null !== $this->itemList && \is_array($this->itemList)) {
                $n = 0;
                foreach ($this->itemList as $item) {
                    $res['ItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->secondCategoryName) {
            $res['SecondCategoryName'] = $this->secondCategoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secondCategoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemList'])) {
            if (!empty($map['ItemList'])) {
                $model->itemList = [];
                $n               = 0;
                foreach ($map['ItemList'] as $item) {
                    $model->itemList[$n++] = null !== $item ? itemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecondCategoryName'])) {
            $model->secondCategoryName = $map['SecondCategoryName'];
        }

        return $model;
    }
}
