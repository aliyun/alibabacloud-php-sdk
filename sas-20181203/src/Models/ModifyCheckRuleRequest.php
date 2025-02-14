<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCheckRuleRequest\addInstanceList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCheckRuleRequest\deleteInstanceList;

class ModifyCheckRuleRequest extends Model
{
    /**
     * @var addInstanceList[]
     */
    public $addInstanceList;
    /**
     * @var deleteInstanceList[]
     */
    public $deleteInstanceList;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var int
     */
    public $ruleId;
    /**
     * @var string
     */
    public $ruleType;
    /**
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'addInstanceList'    => 'AddInstanceList',
        'deleteInstanceList' => 'DeleteInstanceList',
        'remark'             => 'Remark',
        'ruleId'             => 'RuleId',
        'ruleType'           => 'RuleType',
        'scopeType'          => 'ScopeType',
    ];

    public function validate()
    {
        if (\is_array($this->addInstanceList)) {
            Model::validateArray($this->addInstanceList);
        }
        if (\is_array($this->deleteInstanceList)) {
            Model::validateArray($this->deleteInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addInstanceList) {
            if (\is_array($this->addInstanceList)) {
                $res['AddInstanceList'] = [];
                $n1                     = 0;
                foreach ($this->addInstanceList as $item1) {
                    $res['AddInstanceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->deleteInstanceList) {
            if (\is_array($this->deleteInstanceList)) {
                $res['DeleteInstanceList'] = [];
                $n1                        = 0;
                foreach ($this->deleteInstanceList as $item1) {
                    $res['DeleteInstanceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
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
        if (isset($map['AddInstanceList'])) {
            if (!empty($map['AddInstanceList'])) {
                $model->addInstanceList = [];
                $n1                     = 0;
                foreach ($map['AddInstanceList'] as $item1) {
                    $model->addInstanceList[$n1++] = addInstanceList::fromMap($item1);
                }
            }
        }

        if (isset($map['DeleteInstanceList'])) {
            if (!empty($map['DeleteInstanceList'])) {
                $model->deleteInstanceList = [];
                $n1                        = 0;
                foreach ($map['DeleteInstanceList'] as $item1) {
                    $model->deleteInstanceList[$n1++] = deleteInstanceList::fromMap($item1);
                }
            }
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
