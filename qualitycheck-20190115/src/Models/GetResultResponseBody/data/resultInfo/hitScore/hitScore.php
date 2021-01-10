<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitScore;

use AlibabaCloud\Tea\Model;

class hitScore extends Model
{
    /**
     * @var string
     */
    public $scoreName;

    /**
     * @var string
     */
    public $scoreNumber;

    /**
     * @var string
     */
    public $scoreId;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'scoreName'   => 'ScoreName',
        'scoreNumber' => 'ScoreNumber',
        'scoreId'     => 'ScoreId',
        'ruleId'      => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scoreName) {
            $res['ScoreName'] = $this->scoreName;
        }
        if (null !== $this->scoreNumber) {
            $res['ScoreNumber'] = $this->scoreNumber;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitScore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScoreName'])) {
            $model->scoreName = $map['ScoreName'];
        }
        if (isset($map['ScoreNumber'])) {
            $model->scoreNumber = $map['ScoreNumber'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
