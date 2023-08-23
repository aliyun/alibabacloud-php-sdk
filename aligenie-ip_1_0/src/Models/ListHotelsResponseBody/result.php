<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsResponseBody\result\hotelInfoList;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsResponseBody\result\page;
use AlibabaCloud\Tea\Model;

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
        'page'          => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelInfoList) {
            $res['HotelInfoList'] = [];
            if (null !== $this->hotelInfoList && \is_array($this->hotelInfoList)) {
                $n = 0;
                foreach ($this->hotelInfoList as $item) {
                    $res['HotelInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
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
        if (isset($map['HotelInfoList'])) {
            if (!empty($map['HotelInfoList'])) {
                $model->hotelInfoList = [];
                $n                    = 0;
                foreach ($map['HotelInfoList'] as $item) {
                    $model->hotelInfoList[$n++] = null !== $item ? hotelInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        return $model;
    }
}
