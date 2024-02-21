<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeSolutionResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The severity level. Valid values:
     *
     * **INFO**
     * **WARN**
     *
     * @example INFO
     *
     * @var string
     */
    public $level;

    /**
     * @description The tag ID.
     *
     * @example LARGE_ROWS_EXAMINED
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The suggestion.
     *
     * @example LARGE_ROWS_EXAMINED_SOLUTION
     *
     * @var string
     */
    public $solution;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
