<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo;

class unhitRuleReviewInfoList extends Model
{
    /**
     * @var ConditionBasicInfo[]
     */
    public $conditionInfoList;

    /**
     * @var bool
     */
    public $matched;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var int
     */
    public $taskFlowType;
    protected $_name = [
        'conditionInfoList' => 'ConditionInfoList',
        'matched' => 'Matched',
        'rid' => 'Rid',
        'taskFlowType' => 'TaskFlowType',
    ];

    public function validate()
    {
        if (\is_array($this->conditionInfoList)) {
            Model::validateArray($this->conditionInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionInfoList) {
            if (\is_array($this->conditionInfoList)) {
                $res['ConditionInfoList'] = [];
                $n1 = 0;
                foreach ($this->conditionInfoList as $item1) {
                    $res['ConditionInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionInfoList'])) {
            if (!empty($map['ConditionInfoList'])) {
                $model->conditionInfoList = [];
                $n1 = 0;
                foreach ($map['ConditionInfoList'] as $item1) {
                    $model->conditionInfoList[$n1++] = ConditionBasicInfo::fromMap($item1);
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
