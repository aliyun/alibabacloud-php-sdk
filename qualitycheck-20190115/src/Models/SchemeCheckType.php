<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SchemeCheckType\schemeScoreInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SchemeCheckType\taskFlowScoreInfoList;

class SchemeCheckType extends Model
{
    /**
     * @var string
     */
    public $checkName;
    /**
     * @var int
     */
    public $checkType;
    /**
     * @var int
     */
    public $enable;
    /**
     * @var int
     */
    public $schemeId;
    /**
     * @var schemeScoreInfoList[]
     */
    public $schemeScoreInfoList;
    /**
     * @var int
     */
    public $score;
    /**
     * @var int
     */
    public $sourceScore;
    /**
     * @var taskFlowScoreInfoList[]
     */
    public $taskFlowScoreInfoList;
    protected $_name = [
        'checkName'             => 'CheckName',
        'checkType'             => 'CheckType',
        'enable'                => 'Enable',
        'schemeId'              => 'SchemeId',
        'schemeScoreInfoList'   => 'SchemeScoreInfoList',
        'score'                 => 'Score',
        'sourceScore'           => 'SourceScore',
        'taskFlowScoreInfoList' => 'TaskFlowScoreInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->schemeScoreInfoList)) {
            Model::validateArray($this->schemeScoreInfoList);
        }
        if (\is_array($this->taskFlowScoreInfoList)) {
            Model::validateArray($this->taskFlowScoreInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }

        if (null !== $this->schemeScoreInfoList) {
            if (\is_array($this->schemeScoreInfoList)) {
                $res['SchemeScoreInfoList'] = [];
                $n1                         = 0;
                foreach ($this->schemeScoreInfoList as $item1) {
                    $res['SchemeScoreInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->sourceScore) {
            $res['SourceScore'] = $this->sourceScore;
        }

        if (null !== $this->taskFlowScoreInfoList) {
            if (\is_array($this->taskFlowScoreInfoList)) {
                $res['TaskFlowScoreInfoList'] = [];
                $n1                           = 0;
                foreach ($this->taskFlowScoreInfoList as $item1) {
                    $res['TaskFlowScoreInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }

        if (isset($map['SchemeScoreInfoList'])) {
            if (!empty($map['SchemeScoreInfoList'])) {
                $model->schemeScoreInfoList = [];
                $n1                         = 0;
                foreach ($map['SchemeScoreInfoList'] as $item1) {
                    $model->schemeScoreInfoList[$n1++] = schemeScoreInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['SourceScore'])) {
            $model->sourceScore = $map['SourceScore'];
        }

        if (isset($map['TaskFlowScoreInfoList'])) {
            if (!empty($map['TaskFlowScoreInfoList'])) {
                $model->taskFlowScoreInfoList = [];
                $n1                           = 0;
                foreach ($map['TaskFlowScoreInfoList'] as $item1) {
                    $model->taskFlowScoreInfoList[$n1++] = taskFlowScoreInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
