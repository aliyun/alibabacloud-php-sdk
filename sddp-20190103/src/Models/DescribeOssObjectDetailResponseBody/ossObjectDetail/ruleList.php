<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody\ossObjectDetail;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'riskLevelName' => 'RiskLevelName',
        'categoryName'  => 'CategoryName',
        'riskLevelId'   => 'RiskLevelId',
        'count'         => 'Count',
        'ruleName'      => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
