<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemResponseBody\result\secondCategoryList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var secondCategoryList[]
     */
    public $secondCategoryList;
    protected $_name = [
        'secondCategoryList' => 'SecondCategoryList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secondCategoryList) {
            $res['SecondCategoryList'] = [];
            if (null !== $this->secondCategoryList && \is_array($this->secondCategoryList)) {
                $n = 0;
                foreach ($this->secondCategoryList as $item) {
                    $res['SecondCategoryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecondCategoryList'])) {
            if (!empty($map['SecondCategoryList'])) {
                $model->secondCategoryList = [];
                $n                         = 0;
                foreach ($map['SecondCategoryList'] as $item) {
                    $model->secondCategoryList[$n++] = null !== $item ? secondCategoryList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
