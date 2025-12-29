<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemResponseBody\result\secondCategoryList;

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
        if (\is_array($this->secondCategoryList)) {
            Model::validateArray($this->secondCategoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secondCategoryList) {
            if (\is_array($this->secondCategoryList)) {
                $res['SecondCategoryList'] = [];
                $n1 = 0;
                foreach ($this->secondCategoryList as $item1) {
                    $res['SecondCategoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecondCategoryList'])) {
            if (!empty($map['SecondCategoryList'])) {
                $model->secondCategoryList = [];
                $n1 = 0;
                foreach ($map['SecondCategoryList'] as $item1) {
                    $model->secondCategoryList[$n1] = secondCategoryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
