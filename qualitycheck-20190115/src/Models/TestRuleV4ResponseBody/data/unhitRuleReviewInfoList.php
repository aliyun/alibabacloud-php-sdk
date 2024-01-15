<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo;
use AlibabaCloud\Tea\Model;

class unhitRuleReviewInfoList extends Model
{
    /**
     * @var ConditionBasicInfo[]
     */
    public $conditionInfoList;

    /**
     * @example true
     *
     * @var bool
     */
    public $matched;

    /**
     * @example 2
     *
     * @var int
     */
    public $rid;

    /**
     * @var int
     */
    public $taskFlowType;
    protected $_name = [
        'conditionInfoList' => 'ConditionInfoList',
        'matched'           => 'Matched',
        'rid'               => 'Rid',
        'taskFlowType'      => 'TaskFlowType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionInfoList) {
            $res['ConditionInfoList'] = [];
            if (null !== $this->conditionInfoList && \is_array($this->conditionInfoList)) {
                $n = 0;
                foreach ($this->conditionInfoList as $item) {
                    $res['ConditionInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->matched) {
            $res['Matched'] = $this->matched;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->taskFlowType) {
            $res['TaskFlowType'] = $this->taskFlowType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unhitRuleReviewInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionInfoList'])) {
            if (!empty($map['ConditionInfoList'])) {
                $model->conditionInfoList = [];
                $n                        = 0;
                foreach ($map['ConditionInfoList'] as $item) {
                    $model->conditionInfoList[$n++] = null !== $item ? ConditionBasicInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Matched'])) {
            $model->matched = $map['Matched'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['TaskFlowType'])) {
            $model->taskFlowType = $map['TaskFlowType'];
        }

        return $model;
    }
}
