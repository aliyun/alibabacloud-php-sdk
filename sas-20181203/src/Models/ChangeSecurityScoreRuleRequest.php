<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeSecurityScoreRuleRequest\securityScoreRuleList;
use AlibabaCloud\Tea\Model;

class ChangeSecurityScoreRuleRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $resetSecurityScoreRule;

    /**
     * @var securityScoreRuleList[]
     */
    public $securityScoreRuleList;
    protected $_name = [
        'resetSecurityScoreRule' => 'ResetSecurityScoreRule',
        'securityScoreRuleList'  => 'SecurityScoreRuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resetSecurityScoreRule) {
            $res['ResetSecurityScoreRule'] = $this->resetSecurityScoreRule;
        }
        if (null !== $this->securityScoreRuleList) {
            $res['SecurityScoreRuleList'] = [];
            if (null !== $this->securityScoreRuleList && \is_array($this->securityScoreRuleList)) {
                $n = 0;
                foreach ($this->securityScoreRuleList as $item) {
                    $res['SecurityScoreRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeSecurityScoreRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResetSecurityScoreRule'])) {
            $model->resetSecurityScoreRule = $map['ResetSecurityScoreRule'];
        }
        if (isset($map['SecurityScoreRuleList'])) {
            if (!empty($map['SecurityScoreRuleList'])) {
                $model->securityScoreRuleList = [];
                $n                            = 0;
                foreach ($map['SecurityScoreRuleList'] as $item) {
                    $model->securityScoreRuleList[$n++] = null !== $item ? securityScoreRuleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
