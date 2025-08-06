<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaLifecycleRuleResponseBody\ruleList;

class GetMediaLifecycleRuleResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $forbiddenRuleIds;

    /**
     * @var string[]
     */
    public $nonExistRuleIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleList[]
     */
    public $ruleList;
    protected $_name = [
        'forbiddenRuleIds' => 'ForbiddenRuleIds',
        'nonExistRuleIds' => 'NonExistRuleIds',
        'requestId' => 'RequestId',
        'ruleList' => 'RuleList',
    ];

    public function validate()
    {
        if (\is_array($this->forbiddenRuleIds)) {
            Model::validateArray($this->forbiddenRuleIds);
        }
        if (\is_array($this->nonExistRuleIds)) {
            Model::validateArray($this->nonExistRuleIds);
        }
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forbiddenRuleIds) {
            if (\is_array($this->forbiddenRuleIds)) {
                $res['ForbiddenRuleIds'] = [];
                $n1 = 0;
                foreach ($this->forbiddenRuleIds as $item1) {
                    $res['ForbiddenRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonExistRuleIds) {
            if (\is_array($this->nonExistRuleIds)) {
                $res['NonExistRuleIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistRuleIds as $item1) {
                    $res['NonExistRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1 = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ForbiddenRuleIds'])) {
            if (!empty($map['ForbiddenRuleIds'])) {
                $model->forbiddenRuleIds = [];
                $n1 = 0;
                foreach ($map['ForbiddenRuleIds'] as $item1) {
                    $model->forbiddenRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NonExistRuleIds'])) {
            if (!empty($map['NonExistRuleIds'])) {
                $model->nonExistRuleIds = [];
                $n1 = 0;
                foreach ($map['NonExistRuleIds'] as $item1) {
                    $model->nonExistRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n1 = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1] = ruleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
