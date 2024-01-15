<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListQualityCheckSchemeResponseBody\data\ruleList;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 12
     *
     * @var int
     */
    public $rid;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleScoreType;

    /**
     * @example 2
     *
     * @var int
     */
    public $scoreNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $scoreNumType;

    /**
     * @example 1
     *
     * @var int
     */
    public $scoreType;

    /**
     * @example 10
     *
     * @var int
     */
    public $targetType;
    protected $_name = [
        'checkType'     => 'CheckType',
        'name'          => 'Name',
        'rid'           => 'Rid',
        'ruleScoreType' => 'RuleScoreType',
        'scoreNum'      => 'ScoreNum',
        'scoreNumType'  => 'ScoreNumType',
        'scoreType'     => 'ScoreType',
        'targetType'    => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleScoreType) {
            $res['RuleScoreType'] = $this->ruleScoreType;
        }
        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }
        if (null !== $this->scoreNumType) {
            $res['ScoreNumType'] = $this->scoreNumType;
        }
        if (null !== $this->scoreType) {
            $res['ScoreType'] = $this->scoreType;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleScoreType'])) {
            $model->ruleScoreType = $map['RuleScoreType'];
        }
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['ScoreNumType'])) {
            $model->scoreNumType = $map['ScoreNumType'];
        }
        if (isset($map['ScoreType'])) {
            $model->scoreType = $map['ScoreType'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
