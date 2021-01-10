<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponseBody\data\hitRuleReviewInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList;
use AlibabaCloud\Tea\Model;

class hitRuleReviewInfo extends Model
{
    /**
     * @var conditionHitInfoList
     */
    public $conditionHitInfoList;

    /**
     * @var int
     */
    public $rid;
    protected $_name = [
        'conditionHitInfoList' => 'ConditionHitInfoList',
        'rid'                  => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionHitInfoList) {
            $res['ConditionHitInfoList'] = null !== $this->conditionHitInfoList ? $this->conditionHitInfoList->toMap() : null;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitRuleReviewInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionHitInfoList'])) {
            $model->conditionHitInfoList = conditionHitInfoList::fromMap($map['ConditionHitInfoList']);
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}
