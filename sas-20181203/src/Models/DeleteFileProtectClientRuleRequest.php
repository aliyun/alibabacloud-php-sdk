<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteFileProtectClientRuleRequest extends Model
{
    /**
     * @var int
     */
    public $alertLevel;

    /**
     * @var int[]
     */
    public $excludeIdList;

    /**
     * @var int[]
     */
    public $idList;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var bool
     */
    public $selectAll;
    protected $_name = [
        'alertLevel' => 'AlertLevel',
        'excludeIdList' => 'ExcludeIdList',
        'idList' => 'IdList',
        'platform' => 'Platform',
        'ruleAction' => 'RuleAction',
        'ruleName' => 'RuleName',
        'selectAll' => 'SelectAll',
    ];

    public function validate()
    {
        if (\is_array($this->excludeIdList)) {
            Model::validateArray($this->excludeIdList);
        }
        if (\is_array($this->idList)) {
            Model::validateArray($this->idList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }

        if (null !== $this->excludeIdList) {
            if (\is_array($this->excludeIdList)) {
                $res['ExcludeIdList'] = [];
                $n1 = 0;
                foreach ($this->excludeIdList as $item1) {
                    $res['ExcludeIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->idList) {
            if (\is_array($this->idList)) {
                $res['IdList'] = [];
                $n1 = 0;
                foreach ($this->idList as $item1) {
                    $res['IdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->selectAll) {
            $res['SelectAll'] = $this->selectAll;
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
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }

        if (isset($map['ExcludeIdList'])) {
            if (!empty($map['ExcludeIdList'])) {
                $model->excludeIdList = [];
                $n1 = 0;
                foreach ($map['ExcludeIdList'] as $item1) {
                    $model->excludeIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = [];
                $n1 = 0;
                foreach ($map['IdList'] as $item1) {
                    $model->idList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SelectAll'])) {
            $model->selectAll = $map['SelectAll'];
        }

        return $model;
    }
}
