<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckResultsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckResultsResponseBody\data\viewGroup\checkItems;

class viewGroup extends Model
{
    /**
     * @var checkItems[]
     */
    public $checkItems;

    /**
     * @var string
     */
    public $groupCode;

    /**
     * @var int
     */
    public $groupCount;

    /**
     * @var float
     */
    public $groupExpectedSavingCost;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'checkItems' => 'CheckItems',
        'groupCode' => 'GroupCode',
        'groupCount' => 'GroupCount',
        'groupExpectedSavingCost' => 'GroupExpectedSavingCost',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
        if (\is_array($this->checkItems)) {
            Model::validateArray($this->checkItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkItems) {
            if (\is_array($this->checkItems)) {
                $res['CheckItems'] = [];
                $n1 = 0;
                foreach ($this->checkItems as $item1) {
                    $res['CheckItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->groupCode) {
            $res['GroupCode'] = $this->groupCode;
        }

        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }

        if (null !== $this->groupExpectedSavingCost) {
            $res['GroupExpectedSavingCost'] = $this->groupExpectedSavingCost;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['CheckItems'])) {
            if (!empty($map['CheckItems'])) {
                $model->checkItems = [];
                $n1 = 0;
                foreach ($map['CheckItems'] as $item1) {
                    $model->checkItems[$n1++] = checkItems::fromMap($item1);
                }
            }
        }

        if (isset($map['GroupCode'])) {
            $model->groupCode = $map['GroupCode'];
        }

        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }

        if (isset($map['GroupExpectedSavingCost'])) {
            $model->groupExpectedSavingCost = $map['GroupExpectedSavingCost'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
