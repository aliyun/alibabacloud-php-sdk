<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineStrategyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineStrategyResponseBody\strategy\baselineItemList;

class strategy extends Model
{
    /**
     * @var string
     */
    public $baselineItem;
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
        'baselineItem'      => 'BaselineItem',
        'baselineItemList'  => 'BaselineItemList',
        'selectedItemCount' => 'SelectedItemCount',
        'strategyId'        => 'StrategyId',
        'strategyName'      => 'StrategyName',
        'totalItemCount'    => 'TotalItemCount',
        'type'              => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->baselineItemList)) {
            Model::validateArray($this->baselineItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineItem) {
            $res['BaselineItem'] = $this->baselineItem;
        }

        if (null !== $this->baselineItemList) {
            if (\is_array($this->baselineItemList)) {
                $res['BaselineItemList'] = [];
                $n1                      = 0;
                foreach ($this->baselineItemList as $item1) {
                    $res['BaselineItemList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineItem'])) {
            $model->baselineItem = $map['BaselineItem'];
        }

        if (isset($map['BaselineItemList'])) {
            if (!empty($map['BaselineItemList'])) {
                $model->baselineItemList = [];
                $n1                      = 0;
                foreach ($map['BaselineItemList'] as $item1) {
                    $model->baselineItemList[$n1++] = baselineItemList::fromMap($item1);
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
