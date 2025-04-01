<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckResultsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckResultsResponseBody\data\viewGroup;

class data extends Model
{
    /**
     * @var int
     */
    public $adviceResourceCount;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var int
     */
    public $normalCount;

    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var viewGroup[]
     */
    public $viewGroup;

    /**
     * @var int
     */
    public $warningCount;
    protected $_name = [
        'adviceResourceCount' => 'AdviceResourceCount',
        'groupBy' => 'GroupBy',
        'normalCount' => 'NormalCount',
        'resourceCount' => 'ResourceCount',
        'totalCount' => 'TotalCount',
        'viewGroup' => 'ViewGroup',
        'warningCount' => 'WarningCount',
    ];

    public function validate()
    {
        if (\is_array($this->viewGroup)) {
            Model::validateArray($this->viewGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adviceResourceCount) {
            $res['AdviceResourceCount'] = $this->adviceResourceCount;
        }

        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }

        if (null !== $this->normalCount) {
            $res['NormalCount'] = $this->normalCount;
        }

        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->viewGroup) {
            if (\is_array($this->viewGroup)) {
                $res['ViewGroup'] = [];
                $n1 = 0;
                foreach ($this->viewGroup as $item1) {
                    $res['ViewGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->warningCount) {
            $res['WarningCount'] = $this->warningCount;
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
        if (isset($map['AdviceResourceCount'])) {
            $model->adviceResourceCount = $map['AdviceResourceCount'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }

        if (isset($map['NormalCount'])) {
            $model->normalCount = $map['NormalCount'];
        }

        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['ViewGroup'])) {
            if (!empty($map['ViewGroup'])) {
                $model->viewGroup = [];
                $n1 = 0;
                foreach ($map['ViewGroup'] as $item1) {
                    $model->viewGroup[$n1++] = viewGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['WarningCount'])) {
            $model->warningCount = $map['WarningCount'];
        }

        return $model;
    }
}
