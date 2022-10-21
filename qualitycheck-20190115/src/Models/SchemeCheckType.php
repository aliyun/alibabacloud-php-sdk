<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SchemeCheckType\schemeScoreInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SchemeCheckType\taskFlowScoreInfoList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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
            $res['SchemeScoreInfoList'] = [];
            if (null !== $this->schemeScoreInfoList && \is_array($this->schemeScoreInfoList)) {
                $n = 0;
                foreach ($this->schemeScoreInfoList as $item) {
                    $res['SchemeScoreInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['TaskFlowScoreInfoList'] = [];
            if (null !== $this->taskFlowScoreInfoList && \is_array($this->taskFlowScoreInfoList)) {
                $n = 0;
                foreach ($this->taskFlowScoreInfoList as $item) {
                    $res['TaskFlowScoreInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SchemeCheckType
     */
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
                $n                          = 0;
                foreach ($map['SchemeScoreInfoList'] as $item) {
                    $model->schemeScoreInfoList[$n++] = null !== $item ? schemeScoreInfoList::fromMap($item) : $item;
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
                $n                            = 0;
                foreach ($map['TaskFlowScoreInfoList'] as $item) {
                    $model->taskFlowScoreInfoList[$n++] = null !== $item ? taskFlowScoreInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
