<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorHotelBillSettlementQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorHotelBillSettlementQueryResponseBody\module\items;

class module extends Model
{
    /**
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
     * @var string
     */
    public $periodEnd;

    /**
     * @var string
     */
    public $periodStart;

    /**
     * @var string
     */
    public $scrollId;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'category' => 'category',
        'corpId' => 'corp_id',
        'items' => 'items',
        'periodEnd' => 'period_end',
        'periodStart' => 'period_start',
        'scrollId' => 'scroll_id',
        'totalSize' => 'total_size',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->periodEnd) {
            $res['period_end'] = $this->periodEnd;
        }

        if (null !== $this->periodStart) {
            $res['period_start'] = $this->periodStart;
        }

        if (null !== $this->scrollId) {
            $res['scroll_id'] = $this->scrollId;
        }

        if (null !== $this->totalSize) {
            $res['total_size'] = $this->totalSize;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1++] = items::fromMap($item1);
                }
            }
        }

        if (isset($map['period_end'])) {
            $model->periodEnd = $map['period_end'];
        }

        if (isset($map['period_start'])) {
            $model->periodStart = $map['period_start'];
        }

        if (isset($map['scroll_id'])) {
            $model->scrollId = $map['scroll_id'];
        }

        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }

        return $model;
    }
}
