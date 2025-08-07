<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo;

class conditionHitInfoList extends Model
{
    /**
     * @var conditionHitInfo[]
     */
    public $conditionHitInfo;
    protected $_name = [
        'conditionHitInfo' => 'ConditionHitInfo',
    ];

    public function validate()
    {
        if (\is_array($this->conditionHitInfo)) {
            Model::validateArray($this->conditionHitInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionHitInfo) {
            if (\is_array($this->conditionHitInfo)) {
                $res['ConditionHitInfo'] = [];
                $n1 = 0;
                foreach ($this->conditionHitInfo as $item1) {
                    $res['ConditionHitInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ConditionHitInfo'])) {
            if (!empty($map['ConditionHitInfo'])) {
                $model->conditionHitInfo = [];
                $n1 = 0;
                foreach ($map['ConditionHitInfo'] as $item1) {
                    $model->conditionHitInfo[$n1] = conditionHitInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
