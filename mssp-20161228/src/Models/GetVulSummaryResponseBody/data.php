<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulSummaryResponseBody\data\trendList;

class data extends Model
{
    /**
     * @var int
     */
    public $completedCount;
    /**
     * @var string
     */
    public $dealRate;
    /**
     * @var trendList[]
     */
    public $trendList;
    /**
     * @var int
     */
    public $waitHandleCount;
    protected $_name = [
        'completedCount'  => 'CompletedCount',
        'dealRate'        => 'DealRate',
        'trendList'       => 'TrendList',
        'waitHandleCount' => 'WaitHandleCount',
    ];

    public function validate()
    {
        if (\is_array($this->trendList)) {
            Model::validateArray($this->trendList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedCount) {
            $res['CompletedCount'] = $this->completedCount;
        }

        if (null !== $this->dealRate) {
            $res['DealRate'] = $this->dealRate;
        }

        if (null !== $this->trendList) {
            if (\is_array($this->trendList)) {
                $res['TrendList'] = [];
                $n1               = 0;
                foreach ($this->trendList as $item1) {
                    $res['TrendList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->waitHandleCount) {
            $res['WaitHandleCount'] = $this->waitHandleCount;
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
        if (isset($map['CompletedCount'])) {
            $model->completedCount = $map['CompletedCount'];
        }

        if (isset($map['DealRate'])) {
            $model->dealRate = $map['DealRate'];
        }

        if (isset($map['TrendList'])) {
            if (!empty($map['TrendList'])) {
                $model->trendList = [];
                $n1               = 0;
                foreach ($map['TrendList'] as $item1) {
                    $model->trendList[$n1++] = trendList::fromMap($item1);
                }
            }
        }

        if (isset($map['WaitHandleCount'])) {
            $model->waitHandleCount = $map['WaitHandleCount'];
        }

        return $model;
    }
}
