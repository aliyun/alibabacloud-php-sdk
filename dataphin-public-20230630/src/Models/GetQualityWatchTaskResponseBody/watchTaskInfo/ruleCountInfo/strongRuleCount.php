<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchTaskResponseBody\watchTaskInfo\ruleCountInfo;

use AlibabaCloud\Dara\Model;

class strongRuleCount extends Model
{
    /**
     * @var int
     */
    public $errorRuleCount;

    /**
     * @var int
     */
    public $finishedRuleCount;

    /**
     * @var int
     */
    public $successRuleCount;

    /**
     * @var int
     */
    public $totalRuleCount;
    protected $_name = [
        'errorRuleCount' => 'ErrorRuleCount',
        'finishedRuleCount' => 'FinishedRuleCount',
        'successRuleCount' => 'SuccessRuleCount',
        'totalRuleCount' => 'TotalRuleCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorRuleCount) {
            $res['ErrorRuleCount'] = $this->errorRuleCount;
        }

        if (null !== $this->finishedRuleCount) {
            $res['FinishedRuleCount'] = $this->finishedRuleCount;
        }

        if (null !== $this->successRuleCount) {
            $res['SuccessRuleCount'] = $this->successRuleCount;
        }

        if (null !== $this->totalRuleCount) {
            $res['TotalRuleCount'] = $this->totalRuleCount;
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
        if (isset($map['ErrorRuleCount'])) {
            $model->errorRuleCount = $map['ErrorRuleCount'];
        }

        if (isset($map['FinishedRuleCount'])) {
            $model->finishedRuleCount = $map['FinishedRuleCount'];
        }

        if (isset($map['SuccessRuleCount'])) {
            $model->successRuleCount = $map['SuccessRuleCount'];
        }

        if (isset($map['TotalRuleCount'])) {
            $model->totalRuleCount = $map['TotalRuleCount'];
        }

        return $model;
    }
}
