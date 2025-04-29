<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\discountDesc\discountDetail;

class discountDesc extends Model
{
    /**
     * @var string
     */
    public $cashReduceTotal;

    /**
     * @var string
     */
    public $dinamicLabel;

    /**
     * @var discountDetail[]
     */
    public $discountDetail;

    /**
     * @var string
     */
    public $subTitle;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'cashReduceTotal' => 'cash_reduce_total',
        'dinamicLabel' => 'dinamic_label',
        'discountDetail' => 'discount_detail',
        'subTitle' => 'sub_title',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->discountDetail)) {
            Model::validateArray($this->discountDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cashReduceTotal) {
            $res['cash_reduce_total'] = $this->cashReduceTotal;
        }

        if (null !== $this->dinamicLabel) {
            $res['dinamic_label'] = $this->dinamicLabel;
        }

        if (null !== $this->discountDetail) {
            if (\is_array($this->discountDetail)) {
                $res['discount_detail'] = [];
                $n1 = 0;
                foreach ($this->discountDetail as $item1) {
                    $res['discount_detail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->subTitle) {
            $res['sub_title'] = $this->subTitle;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['cash_reduce_total'])) {
            $model->cashReduceTotal = $map['cash_reduce_total'];
        }

        if (isset($map['dinamic_label'])) {
            $model->dinamicLabel = $map['dinamic_label'];
        }

        if (isset($map['discount_detail'])) {
            if (!empty($map['discount_detail'])) {
                $model->discountDetail = [];
                $n1 = 0;
                foreach ($map['discount_detail'] as $item1) {
                    $model->discountDetail[$n1++] = discountDetail::fromMap($item1);
                }
            }
        }

        if (isset($map['sub_title'])) {
            $model->subTitle = $map['sub_title'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
