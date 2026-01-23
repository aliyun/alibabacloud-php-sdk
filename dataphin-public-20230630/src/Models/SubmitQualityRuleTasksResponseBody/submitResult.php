<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitQualityRuleTasksResponseBody;

use AlibabaCloud\Dara\Model;

class submitResult extends Model
{
    /**
     * @var int[]
     */
    public $ruleTaskIdList;

    /**
     * @var int[]
     */
    public $watchTaskIdList;
    protected $_name = [
        'ruleTaskIdList' => 'RuleTaskIdList',
        'watchTaskIdList' => 'WatchTaskIdList',
    ];

    public function validate()
    {
        if (\is_array($this->ruleTaskIdList)) {
            Model::validateArray($this->ruleTaskIdList);
        }
        if (\is_array($this->watchTaskIdList)) {
            Model::validateArray($this->watchTaskIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleTaskIdList) {
            if (\is_array($this->ruleTaskIdList)) {
                $res['RuleTaskIdList'] = [];
                $n1 = 0;
                foreach ($this->ruleTaskIdList as $item1) {
                    $res['RuleTaskIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->watchTaskIdList) {
            if (\is_array($this->watchTaskIdList)) {
                $res['WatchTaskIdList'] = [];
                $n1 = 0;
                foreach ($this->watchTaskIdList as $item1) {
                    $res['WatchTaskIdList'][$n1] = $item1;
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
        if (isset($map['RuleTaskIdList'])) {
            if (!empty($map['RuleTaskIdList'])) {
                $model->ruleTaskIdList = [];
                $n1 = 0;
                foreach ($map['RuleTaskIdList'] as $item1) {
                    $model->ruleTaskIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WatchTaskIdList'])) {
            if (!empty($map['WatchTaskIdList'])) {
                $model->watchTaskIdList = [];
                $n1 = 0;
                foreach ($map['WatchTaskIdList'] as $item1) {
                    $model->watchTaskIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
