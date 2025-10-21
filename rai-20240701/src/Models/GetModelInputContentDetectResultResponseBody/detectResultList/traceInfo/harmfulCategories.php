<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetModelInputContentDetectResultResponseBody\detectResultList\traceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelInputContentDetectResultResponseBody\detectResultList\traceInfo\harmfulCategories\harmfulCategoryInfoList;

class harmfulCategories extends Model
{
    /**
     * @var float
     */
    public $confidenceScore;

    /**
     * @var harmfulCategoryInfoList[]
     */
    public $harmfulCategoryInfoList;

    /**
     * @var int
     */
    public $riskResult;
    protected $_name = [
        'confidenceScore' => 'ConfidenceScore',
        'harmfulCategoryInfoList' => 'HarmfulCategoryInfoList',
        'riskResult' => 'RiskResult',
    ];

    public function validate()
    {
        if (\is_array($this->harmfulCategoryInfoList)) {
            Model::validateArray($this->harmfulCategoryInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidenceScore) {
            $res['ConfidenceScore'] = $this->confidenceScore;
        }

        if (null !== $this->harmfulCategoryInfoList) {
            if (\is_array($this->harmfulCategoryInfoList)) {
                $res['HarmfulCategoryInfoList'] = [];
                $n1 = 0;
                foreach ($this->harmfulCategoryInfoList as $item1) {
                    $res['HarmfulCategoryInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
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
        if (isset($map['ConfidenceScore'])) {
            $model->confidenceScore = $map['ConfidenceScore'];
        }

        if (isset($map['HarmfulCategoryInfoList'])) {
            if (!empty($map['HarmfulCategoryInfoList'])) {
                $model->harmfulCategoryInfoList = [];
                $n1 = 0;
                foreach ($map['HarmfulCategoryInfoList'] as $item1) {
                    $model->harmfulCategoryInfoList[$n1] = harmfulCategoryInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        return $model;
    }
}
