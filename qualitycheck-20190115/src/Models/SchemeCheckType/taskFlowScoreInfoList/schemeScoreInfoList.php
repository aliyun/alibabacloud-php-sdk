<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SchemeCheckType\taskFlowScoreInfoList;

use AlibabaCloud\Tea\Model;

class schemeScoreInfoList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var int
     */
    public $scoreNum;

    /**
     * @var int
     */
    public $scoreNumType;

    /**
     * @var int
     */
    public $scoreRuleHitType;

    /**
     * @var int
     */
    public $scoreType;

    /**
     * @var int
     */
    public $taskFlowId;

    /**
     * @var string
     */
    public $taskFlowName;
    protected $_name = [
        'name'             => 'Name',
        'rid'              => 'Rid',
        'scoreNum'         => 'ScoreNum',
        'scoreNumType'     => 'ScoreNumType',
        'scoreRuleHitType' => 'ScoreRuleHitType',
        'scoreType'        => 'ScoreType',
        'taskFlowId'       => 'TaskFlowId',
        'taskFlowName'     => 'TaskFlowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }
        if (null !== $this->scoreNumType) {
            $res['ScoreNumType'] = $this->scoreNumType;
        }
        if (null !== $this->scoreRuleHitType) {
            $res['ScoreRuleHitType'] = $this->scoreRuleHitType;
        }
        if (null !== $this->scoreType) {
            $res['ScoreType'] = $this->scoreType;
        }
        if (null !== $this->taskFlowId) {
            $res['TaskFlowId'] = $this->taskFlowId;
        }
        if (null !== $this->taskFlowName) {
            $res['TaskFlowName'] = $this->taskFlowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemeScoreInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['ScoreNumType'])) {
            $model->scoreNumType = $map['ScoreNumType'];
        }
        if (isset($map['ScoreRuleHitType'])) {
            $model->scoreRuleHitType = $map['ScoreRuleHitType'];
        }
        if (isset($map['ScoreType'])) {
            $model->scoreType = $map['ScoreType'];
        }
        if (isset($map['TaskFlowId'])) {
            $model->taskFlowId = $map['TaskFlowId'];
        }
        if (isset($map['TaskFlowName'])) {
            $model->taskFlowName = $map['TaskFlowName'];
        }

        return $model;
    }
}
