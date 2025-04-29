<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeFlightBillSettlementQueryResponseBody\module\dataList;

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
    public $totalNum;
    protected $_name = [
        'category' => 'category',
        'corpId' => 'corp_id',
        'dataList' => 'data_list',
        'periodEnd' => 'period_end',
        'periodStart' => 'period_start',
        'scrollId' => 'scroll_id',
        'totalNum' => 'total_num',
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
