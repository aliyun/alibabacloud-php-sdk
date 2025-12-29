<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsResponseBody\result\hotelInfoList;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsResponseBody\result\page;

class result extends Model
{
    /**
     * @var hotelInfoList[]
     */
    public $hotelInfoList;

    /**
     * @var page
     */
    public $page;
    protected $_name = [
        'hotelInfoList' => 'HotelInfoList',
        'page' => 'Page',
    ];

    public function validate()
    {
        if (\is_array($this->hotelInfoList)) {
            Model::validateArray($this->hotelInfoList);
        }
        if (null !== $this->page) {
            $this->page->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelInfoList) {
            if (\is_array($this->hotelInfoList)) {
                $res['HotelInfoList'] = [];
                $n1 = 0;
                foreach ($this->hotelInfoList as $item1) {
                    $res['HotelInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
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
        if (isset($map['HotelInfoList'])) {
            if (!empty($map['HotelInfoList'])) {
                $model->hotelInfoList = [];
                $n1 = 0;
                foreach ($map['HotelInfoList'] as $item1) {
                    $model->hotelInfoList[$n1] = hotelInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        return $model;
    }
}
