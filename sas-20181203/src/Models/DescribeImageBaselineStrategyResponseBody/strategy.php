<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineStrategyResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineStrategyResponseBody\strategy\baselineItemList;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @var baselineItemList[]
     */
    public $baselineItemList;

    /**
     * @var int
     */
    public $selectedItemCount;

    /**
     * @var int
     */
    public $strategyId;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var int
     */
    public $totalItemCount;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'baselineItemList'  => 'BaselineItemList',
        'selectedItemCount' => 'SelectedItemCount',
        'strategyId'        => 'StrategyId',
        'strategyName'      => 'StrategyName',
        'totalItemCount'    => 'TotalItemCount',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineItemList) {
            $res['BaselineItemList'] = [];
            if (null !== $this->baselineItemList && \is_array($this->baselineItemList)) {
                $n = 0;
                foreach ($this->baselineItemList as $item) {
                    $res['BaselineItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->selectedItemCount) {
            $res['SelectedItemCount'] = $this->selectedItemCount;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->totalItemCount) {
            $res['TotalItemCount'] = $this->totalItemCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineItemList'])) {
            if (!empty($map['BaselineItemList'])) {
                $model->baselineItemList = [];
                $n                       = 0;
                foreach ($map['BaselineItemList'] as $item) {
                    $model->baselineItemList[$n++] = null !== $item ? baselineItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SelectedItemCount'])) {
            $model->selectedItemCount = $map['SelectedItemCount'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['TotalItemCount'])) {
            $model->totalItemCount = $map['TotalItemCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
