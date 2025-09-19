<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody\securityScoreRuleList\securityScoreItemList;

class securityScoreRuleList extends Model
{
    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var int
     */
    public $score;

    /**
     * @var securityScoreItemList[]
     */
    public $securityScoreItemList;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'ruleType' => 'RuleType',
        'score' => 'Score',
        'securityScoreItemList' => 'SecurityScoreItemList',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->securityScoreItemList)) {
            Model::validateArray($this->securityScoreItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->securityScoreItemList) {
            if (\is_array($this->securityScoreItemList)) {
                $res['SecurityScoreItemList'] = [];
                $n1 = 0;
                foreach ($this->securityScoreItemList as $item1) {
                    $res['SecurityScoreItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['SecurityScoreItemList'])) {
            if (!empty($map['SecurityScoreItemList'])) {
                $model->securityScoreItemList = [];
                $n1 = 0;
                foreach ($map['SecurityScoreItemList'] as $item1) {
                    $model->securityScoreItemList[$n1] = securityScoreItemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
