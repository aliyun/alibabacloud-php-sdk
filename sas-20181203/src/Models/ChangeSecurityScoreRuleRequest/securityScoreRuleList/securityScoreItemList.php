<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeSecurityScoreRuleRequest\securityScoreRuleList;

use AlibabaCloud\Dara\Model;

class securityScoreItemList extends Model
{
    /**
     * @var int
     */
    public $score;

    /**
     * @var int
     */
    public $scoreThreshold;

    /**
     * @var string
     */
    public $subRuleType;
    protected $_name = [
        'score' => 'Score',
        'scoreThreshold' => 'ScoreThreshold',
        'subRuleType' => 'SubRuleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        return $model;
    }
}
