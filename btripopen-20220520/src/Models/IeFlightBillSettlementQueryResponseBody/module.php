<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryResponseBody\module\dataList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 11
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
     * @example 2021-10-14
     *
     * @var string
     */
    public $periodEnd;

    /**
     * @example 2021-10-13
     *
     * @var string
     */
    public $periodStart;

    /**
     * @var string
     */
    public $scrollId;

    /**
     * @example 1402
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'category'    => 'category',
        'corpId'      => 'corp_id',
        'dataList'    => 'data_list',
        'periodEnd'   => 'period_end',
        'periodStart' => 'period_start',
        'scrollId'    => 'scroll_id',
        'totalNum'    => 'total_num',
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
        if (null !== $this->periodEnd) {
            $res['period_end'] = $this->periodEnd;
        }
        if (null !== $this->periodStart) {
            $res['period_start'] = $this->periodStart;
        }
        if (null !== $this->scrollId) {
            $res['scroll_id'] = $this->scrollId;
        }
        if (null !== $this->totalNum) {
            $res['total_num'] = $this->totalNum;
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
        if (isset($map['period_end'])) {
            $model->periodEnd = $map['period_end'];
        }
        if (isset($map['period_start'])) {
            $model->periodStart = $map['period_start'];
        }
        if (isset($map['scroll_id'])) {
            $model->scrollId = $map['scroll_id'];
        }
        if (isset($map['total_num'])) {
            $model->totalNum = $map['total_num'];
        }

        return $model;
    }
}
