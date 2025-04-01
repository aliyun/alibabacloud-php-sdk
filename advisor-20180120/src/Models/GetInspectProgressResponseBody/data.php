<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\GetInspectProgressResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $allSubtaskCount;

    /**
     * @var bool
     */
    public $finish;

    /**
     * @var float
     */
    public $finishRate;

    /**
     * @var int
     */
    public $finishSubtaskCount;

    /**
     * @var int
     */
    public $lastInspectDate;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'allSubtaskCount' => 'AllSubtaskCount',
        'finish' => 'Finish',
        'finishRate' => 'FinishRate',
        'finishSubtaskCount' => 'FinishSubtaskCount',
        'lastInspectDate' => 'LastInspectDate',
        'taskId' => 'TaskId',
        'usedTime' => 'UsedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allSubtaskCount) {
            $res['AllSubtaskCount'] = $this->allSubtaskCount;
        }

        if (null !== $this->finish) {
            $res['Finish'] = $this->finish;
        }

        if (null !== $this->finishRate) {
            $res['FinishRate'] = $this->finishRate;
        }

        if (null !== $this->finishSubtaskCount) {
            $res['FinishSubtaskCount'] = $this->finishSubtaskCount;
        }

        if (null !== $this->lastInspectDate) {
            $res['LastInspectDate'] = $this->lastInspectDate;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
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
        if (isset($map['AllSubtaskCount'])) {
            $model->allSubtaskCount = $map['AllSubtaskCount'];
        }

        if (isset($map['Finish'])) {
            $model->finish = $map['Finish'];
        }

        if (isset($map['FinishRate'])) {
            $model->finishRate = $map['FinishRate'];
        }

        if (isset($map['FinishSubtaskCount'])) {
            $model->finishSubtaskCount = $map['FinishSubtaskCount'];
        }

        if (isset($map['LastInspectDate'])) {
            $model->lastInspectDate = $map['LastInspectDate'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
