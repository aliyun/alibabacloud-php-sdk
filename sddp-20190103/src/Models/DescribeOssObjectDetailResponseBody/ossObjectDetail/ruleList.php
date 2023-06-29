<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody\ossObjectDetail;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody\ossObjectDetail\ruleList\modelTags;
use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @description The type of the OSS object.
     *
     * @example Excel file
     *
     * @var string
     */
    public $categoryName;

    /**
     * @description The number of times that the OSS object hits the sensitive data detection rule.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @var modelTags[]
     */
    public $modelTags;

    /**
     * @description The sensitivity level of the OSS object.
     *
     *   **1**: No sensitive data is detected.
     *   **2**: indicates the low sensitivity level.
     *   **3**: indicates the medium sensitivity level.
     *   **4**: indicates the high sensitivity level.
     *   **5**: indicates the highest sensitivity level.
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The name of the sensitivity level for the OSS object.
     *
     * @example Medium sensitivity level
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @description The name of the sensitive data detection rule.
     *
     * @example \*\*\* rule
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->modelTags) {
            $res['ModelTags'] = [];
            if (null !== $this->modelTags && \is_array($this->modelTags)) {
                $n = 0;
                foreach ($this->modelTags as $item) {
                    $res['ModelTags'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ruleList
     */
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
                $n                = 0;
                foreach ($map['ModelTags'] as $item) {
                    $model->modelTags[$n++] = null !== $item ? modelTags::fromMap($item) : $item;
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
