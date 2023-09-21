<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody\securityScoreRuleList;

use AlibabaCloud\Tea\Model;

class securityScoreItemList extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $score;

    /**
     * @example 5
     *
     * @var int
     */
    public $scoreThreshold;

    /**
     * @example ALARM_SERIOUS
     *
     * @var string
     */
    public $subRuleType;

    /**
     * @example Unhandled Urgent Alert Event Exists
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'score'          => 'Score',
        'scoreThreshold' => 'ScoreThreshold',
        'subRuleType'    => 'SubRuleType',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
        }
        if (null !== $this->subRuleType) {
            $res['SubRuleType'] = $this->subRuleType;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityScoreItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }
        if (isset($map['SubRuleType'])) {
            $model->subRuleType = $map['SubRuleType'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
