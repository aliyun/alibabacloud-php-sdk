<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumDailyBillsByItemResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumDailyBillsByItemResponseBody\data\itemSummaryBills;

class data extends Model
{
    /**
     * @var itemSummaryBills[]
     */
    public $itemSummaryBills;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'itemSummaryBills' => 'itemSummaryBills',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->itemSummaryBills)) {
            Model::validateArray($this->itemSummaryBills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemSummaryBills) {
            if (\is_array($this->itemSummaryBills)) {
                $res['itemSummaryBills'] = [];
                $n1 = 0;
                foreach ($this->itemSummaryBills as $item1) {
                    $res['itemSummaryBills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['itemSummaryBills'])) {
            if (!empty($map['itemSummaryBills'])) {
                $model->itemSummaryBills = [];
                $n1 = 0;
                foreach ($map['itemSummaryBills'] as $item1) {
                    $model->itemSummaryBills[$n1] = itemSummaryBills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
