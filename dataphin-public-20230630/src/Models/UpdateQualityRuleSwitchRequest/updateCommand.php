<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateQualityRuleSwitchRequest;

use AlibabaCloud\Dara\Model;

class updateCommand extends Model
{
    /**
     * @var bool
     */
    public $open;

    /**
     * @var int[]
     */
    public $ruleIdList;
    protected $_name = [
        'open' => 'Open',
        'ruleIdList' => 'RuleIdList',
    ];

    public function validate()
    {
        if (\is_array($this->ruleIdList)) {
            Model::validateArray($this->ruleIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }

        if (null !== $this->ruleIdList) {
            if (\is_array($this->ruleIdList)) {
                $res['RuleIdList'] = [];
                $n1 = 0;
                foreach ($this->ruleIdList as $item1) {
                    $res['RuleIdList'][$n1] = $item1;
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
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }

        if (isset($map['RuleIdList'])) {
            if (!empty($map['RuleIdList'])) {
                $model->ruleIdList = [];
                $n1 = 0;
                foreach ($map['RuleIdList'] as $item1) {
                    $model->ruleIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
