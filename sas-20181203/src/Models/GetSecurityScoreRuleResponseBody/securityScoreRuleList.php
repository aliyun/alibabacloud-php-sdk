<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody\securityScoreRuleList\securityScoreItemList;
use AlibabaCloud\Tea\Model;

class securityScoreRuleList extends Model
{
    /**
     * @description The deducted module that is supported by the security score feature. Valid values:
     *
     *   SS_REINFORCE: issue in key feature configuration
     *   SS_ALARM: unhandled alert
     *   SS_VUL: unfixed vulnerability
     *   SS_HC: baseline risk
     *   SS_CLOUD_HC: risk item of configuration assessment
     *   SS_AK: risk of AccessKey pair leaks
     *
     * @example SS_ALARM
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The deduction threshold of the deduction module.
     *
     * >  Valid values: 0 to 100. The sum of the deduction thresholds for all deduction modules must be equal to 100.
     * @example 20
     *
     * @var int
     */
    public $score;

    /**
     * @description The deduction items of the deduction module.
     *
     * @var securityScoreItemList[]
     */
    public $securityScoreItemList;

    /**
     * @description The description of the deduction module.
     *
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
