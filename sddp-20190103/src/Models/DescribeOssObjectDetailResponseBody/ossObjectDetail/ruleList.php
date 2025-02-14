<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody\ossObjectDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody\ossObjectDetail\ruleList\modelTags;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $categoryName;
    /**
     * @var int
     */
    public $count;
    /**
     * @var modelTags[]
     */
    public $modelTags;
    /**
     * @var int
     */
    public $riskLevelId;
    /**
     * @var string
     */
    public $riskLevelName;
    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'categoryName'  => 'CategoryName',
        'count'         => 'Count',
        'modelTags'     => 'ModelTags',
        'riskLevelId'   => 'RiskLevelId',
        'riskLevelName' => 'RiskLevelName',
        'ruleName'      => 'RuleName',
    ];

    public function validate()
    {
        if (\is_array($this->modelTags)) {
            Model::validateArray($this->modelTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->modelTags) {
            if (\is_array($this->modelTags)) {
                $res['ModelTags'] = [];
                $n1               = 0;
                foreach ($this->modelTags as $item1) {
                    $res['ModelTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }

        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['ModelTags'])) {
            if (!empty($map['ModelTags'])) {
                $model->modelTags = [];
                $n1               = 0;
                foreach ($map['ModelTags'] as $item1) {
                    $model->modelTags[$n1++] = modelTags::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
