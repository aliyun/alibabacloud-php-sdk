<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulSummaryResponseBody;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulSummaryResponseBody\data\trendList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $completedCount;

    /**
     * @example 50
     *
     * @var string
     */
    public $dealRate;

    /**
     * @var trendList[]
     */
    public $trendList;

    /**
     * @example 5
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completedCount) {
            $res['CompletedCount'] = $this->completedCount;
        }
        if (null !== $this->dealRate) {
            $res['DealRate'] = $this->dealRate;
        }
        if (null !== $this->trendList) {
            $res['TrendList'] = [];
            if (null !== $this->trendList && \is_array($this->trendList)) {
                $n = 0;
                foreach ($this->trendList as $item) {
                    $res['TrendList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->waitHandleCount) {
            $res['WaitHandleCount'] = $this->waitHandleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                = 0;
                foreach ($map['TrendList'] as $item) {
                    $model->trendList[$n++] = null !== $item ? trendList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WaitHandleCount'])) {
            $model->waitHandleCount = $map['WaitHandleCount'];
        }

        return $model;
    }
}
