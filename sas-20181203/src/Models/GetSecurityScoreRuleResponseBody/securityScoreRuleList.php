<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody\securityScoreRuleList\securityScoreItemList;
use AlibabaCloud\Tea\Model;

class securityScoreRuleList extends Model
{
    /**
     * @example SS_ALARM
     *
     * @var string
     */
    public $ruleType;

    /**
     * @example 20
     *
     * @var int
     */
    public $score;

    /**
     * @var securityScoreItemList[]
     */
    public $securityScoreItemList;

    /**
     * @example Unhandled Alerts
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'ruleType'              => 'RuleType',
        'score'                 => 'Score',
        'securityScoreItemList' => 'SecurityScoreItemList',
        'title'                 => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->securityScoreItemList) {
            $res['SecurityScoreItemList'] = [];
            if (null !== $this->securityScoreItemList && \is_array($this->securityScoreItemList)) {
                $n = 0;
                foreach ($this->securityScoreItemList as $item) {
                    $res['SecurityScoreItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityScoreRuleList
     */
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
                $n                            = 0;
                foreach ($map['SecurityScoreItemList'] as $item) {
                    $model->securityScoreItemList[$n++] = null !== $item ? securityScoreItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
