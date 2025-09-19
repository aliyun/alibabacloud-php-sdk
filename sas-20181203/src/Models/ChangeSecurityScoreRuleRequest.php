<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeSecurityScoreRuleRequest\securityScoreCategoryList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeSecurityScoreRuleRequest\securityScoreRuleList;

class ChangeSecurityScoreRuleRequest extends Model
{
    /**
     * @var string
     */
    public $calType;

    /**
     * @var bool
     */
    public $resetSecurityScoreRule;

    /**
     * @var securityScoreCategoryList[]
     */
    public $securityScoreCategoryList;

    /**
     * @var securityScoreRuleList[]
     */
    public $securityScoreRuleList;
    protected $_name = [
        'calType' => 'CalType',
        'resetSecurityScoreRule' => 'ResetSecurityScoreRule',
        'securityScoreCategoryList' => 'SecurityScoreCategoryList',
        'securityScoreRuleList' => 'SecurityScoreRuleList',
    ];

    public function validate()
    {
        if (\is_array($this->securityScoreCategoryList)) {
            Model::validateArray($this->securityScoreCategoryList);
        }
        if (\is_array($this->securityScoreRuleList)) {
            Model::validateArray($this->securityScoreRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calType) {
            $res['CalType'] = $this->calType;
        }

        if (null !== $this->resetSecurityScoreRule) {
            $res['ResetSecurityScoreRule'] = $this->resetSecurityScoreRule;
        }

        if (null !== $this->securityScoreCategoryList) {
            if (\is_array($this->securityScoreCategoryList)) {
                $res['SecurityScoreCategoryList'] = [];
                $n1 = 0;
                foreach ($this->securityScoreCategoryList as $item1) {
                    $res['SecurityScoreCategoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityScoreRuleList) {
            if (\is_array($this->securityScoreRuleList)) {
                $res['SecurityScoreRuleList'] = [];
                $n1 = 0;
                foreach ($this->securityScoreRuleList as $item1) {
                    $res['SecurityScoreRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CalType'])) {
            $model->calType = $map['CalType'];
        }

        if (isset($map['ResetSecurityScoreRule'])) {
            $model->resetSecurityScoreRule = $map['ResetSecurityScoreRule'];
        }

        if (isset($map['SecurityScoreCategoryList'])) {
            if (!empty($map['SecurityScoreCategoryList'])) {
                $model->securityScoreCategoryList = [];
                $n1 = 0;
                foreach ($map['SecurityScoreCategoryList'] as $item1) {
                    $model->securityScoreCategoryList[$n1] = securityScoreCategoryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityScoreRuleList'])) {
            if (!empty($map['SecurityScoreRuleList'])) {
                $model->securityScoreRuleList = [];
                $n1 = 0;
                foreach ($map['SecurityScoreRuleList'] as $item1) {
                    $model->securityScoreRuleList[$n1] = securityScoreRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
