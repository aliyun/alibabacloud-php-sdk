<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealBillSettlementQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealBillSettlementQueryResponseBody\module\items;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 7
     *
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @example 1002039195025156700
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 2022-07-02
     *
     * @var string
     */
    public $periodEnd;

    /**
     * @example 2022-07-01
     *
     * @var string
     */
    public $periodStart;

    /**
     * @example 2695
     *
     * @var int
     */
    public $totalNum;

    /**
     * @example 30
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'category'    => 'category',
        'corpId'      => 'corp_id',
        'items'       => 'items',
        'orderId'     => 'order_id',
        'periodEnd'   => 'period_end',
        'periodStart' => 'period_start',
        'totalNum'    => 'total_num',
        'totalSize'   => 'total_size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->periodEnd) {
            $res['period_end'] = $this->periodEnd;
        }
        if (null !== $this->periodStart) {
            $res['period_start'] = $this->periodStart;
        }
        if (null !== $this->totalNum) {
            $res['total_num'] = $this->totalNum;
        }
        if (null !== $this->totalSize) {
            $res['total_size'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['period_end'])) {
            $model->periodEnd = $map['period_end'];
        }
        if (isset($map['period_start'])) {
            $model->periodStart = $map['period_start'];
        }
        if (isset($map['total_num'])) {
            $model->totalNum = $map['total_num'];
        }
        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }

        return $model;
    }
}
