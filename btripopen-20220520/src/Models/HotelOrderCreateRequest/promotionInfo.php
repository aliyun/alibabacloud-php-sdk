<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateRequest\promotionInfo\promotionDetailInfoList;

class promotionInfo extends Model
{
    /**
     * @var promotionDetailInfoList[]
     */
    public $promotionDetailInfoList;

    /**
     * @var int
     */
    public $promotionTotalPrice;
    protected $_name = [
        'promotionDetailInfoList' => 'promotion_detail_info_list',
        'promotionTotalPrice' => 'promotion_total_price',
    ];

    public function validate()
    {
        if (\is_array($this->promotionDetailInfoList)) {
            Model::validateArray($this->promotionDetailInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promotionDetailInfoList) {
            if (\is_array($this->promotionDetailInfoList)) {
                $res['promotion_detail_info_list'] = [];
                $n1 = 0;
                foreach ($this->promotionDetailInfoList as $item1) {
                    $res['promotion_detail_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->promotionTotalPrice) {
            $res['promotion_total_price'] = $this->promotionTotalPrice;
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
        if (isset($map['promotion_detail_info_list'])) {
            if (!empty($map['promotion_detail_info_list'])) {
                $model->promotionDetailInfoList = [];
                $n1 = 0;
                foreach ($map['promotion_detail_info_list'] as $item1) {
                    $model->promotionDetailInfoList[$n1++] = promotionDetailInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['promotion_total_price'])) {
            $model->promotionTotalPrice = $map['promotion_total_price'];
        }

        return $model;
    }
}
