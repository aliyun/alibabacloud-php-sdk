<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryResponseBody\module\dataList;

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
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var string
     */
    public $orderId;

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
        'dataList' => 'data_list',
        'orderId' => 'order_id',
        'periodEnd' => 'period_end',
        'periodStart' => 'period_start',
        'scrollId' => 'scroll_id',
        'totalSize' => 'total_size',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
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

        if (null !== $this->dataList) {
            if (\is_array($this->dataList)) {
                $res['data_list'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['data_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['data_list'])) {
            if (!empty($map['data_list'])) {
                $model->dataList = [];
                $n1 = 0;
                foreach ($map['data_list'] as $item1) {
                    $model->dataList[$n1++] = dataList::fromMap($item1);
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

        if (isset($map['scroll_id'])) {
            $model->scrollId = $map['scroll_id'];
        }

        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }

        return $model;
    }
}
