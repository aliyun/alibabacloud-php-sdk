<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitScore;

use AlibabaCloud\Dara\Model;

class hitScore extends Model
{
    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $scoreId;

    /**
     * @var string
     */
    public $scoreName;

    /**
     * @var string
     */
    public $scoreNumber;
    protected $_name = [
        'ruleId' => 'RuleId',
        'scoreId' => 'ScoreId',
        'scoreName' => 'ScoreName',
        'scoreNumber' => 'ScoreNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }

        if (null !== $this->scoreName) {
            $res['ScoreName'] = $this->scoreName;
        }

        if (null !== $this->scoreNumber) {
            $res['ScoreNumber'] = $this->scoreNumber;
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
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }

        if (isset($map['ScoreName'])) {
            $model->scoreName = $map['ScoreName'];
        }

        if (isset($map['ScoreNumber'])) {
            $model->scoreNumber = $map['ScoreNumber'];
        }

        return $model;
    }
}
