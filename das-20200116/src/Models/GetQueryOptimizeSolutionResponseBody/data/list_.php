<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeSolutionResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $ruleId;
    /**
     * @var string
     */
    public $solution;
    /**
     * @var string
     */
    public $solutionExt;
    protected $_name = [
        'level'       => 'Level',
        'ruleId'      => 'RuleId',
        'solution'    => 'Solution',
        'solutionExt' => 'SolutionExt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }

        if (null !== $this->solutionExt) {
            $res['SolutionExt'] = $this->solutionExt;
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }

        if (isset($map['SolutionExt'])) {
            $model->solutionExt = $map['SolutionExt'];
        }

        return $model;
    }
}
