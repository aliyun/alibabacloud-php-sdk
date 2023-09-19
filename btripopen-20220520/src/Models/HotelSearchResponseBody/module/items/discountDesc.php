<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSearchResponseBody\module\items;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSearchResponseBody\module\items\discountDesc\discountDetail;
use AlibabaCloud\Tea\Model;

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
        'dinamicLabel'    => 'dinamic_label',
        'discountDetail'  => 'discount_detail',
        'subTitle'        => 'sub_title',
        'title'           => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cashReduceTotal) {
            $res['cash_reduce_total'] = $this->cashReduceTotal;
        }
        if (null !== $this->dinamicLabel) {
            $res['dinamic_label'] = $this->dinamicLabel;
        }
        if (null !== $this->discountDetail) {
            $res['discount_detail'] = [];
            if (null !== $this->discountDetail && \is_array($this->discountDetail)) {
                $n = 0;
                foreach ($this->discountDetail as $item) {
                    $res['discount_detail'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return discountDesc
     */
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
                $n                     = 0;
                foreach ($map['discount_detail'] as $item) {
                    $model->discountDetail[$n++] = null !== $item ? discountDetail::fromMap($item) : $item;
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
