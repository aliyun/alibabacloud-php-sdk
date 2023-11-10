<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryResponseBody\module\dataList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 12
     *
     * @var int
     */
    public $category;

    /**
     * @example corp1
     *
     * @var string
     */
    public $corpId;

    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @example 1012039195340093034
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 2022-11-02
     *
     * @var string
     */
    public $periodEnd;

    /**
     * @example 2022-11-01
     *
     * @var string
     */
    public $periodStart;

    /**
     * @example 30
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'category'    => 'category',
        'corpId'      => 'corp_id',
        'dataList'    => 'data_list',
        'orderId'     => 'order_id',
        'periodEnd'   => 'period_end',
        'periodStart' => 'period_start',
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
        if (null !== $this->dataList) {
            $res['data_list'] = [];
            if (null !== $this->dataList && \is_array($this->dataList)) {
                $n = 0;
                foreach ($this->dataList as $item) {
                    $res['data_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['data_list'])) {
            if (!empty($map['data_list'])) {
                $model->dataList = [];
                $n               = 0;
                foreach ($map['data_list'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
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
        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }

        return $model;
    }
}
