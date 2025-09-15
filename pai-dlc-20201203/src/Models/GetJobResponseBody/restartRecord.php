<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\restartRecord\detailErrorInfoList;

class restartRecord extends Model
{
    /**
     * @var detailErrorInfoList[]
     */
    public $detailErrorInfoList;

    /**
     * @var int
     */
    public $jobRestartCount;

    /**
     * @var string
     */
    public $occurPhase;

    /**
     * @var string
     */
    public $occurTime;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $restartDurationInSec;

    /**
     * @var string
     */
    public $restartFailReason;

    /**
     * @var string
     */
    public $restartStatus;

    /**
     * @var string
     */
    public $triggerID;
    protected $_name = [
        'detailErrorInfoList' => 'DetailErrorInfoList',
        'jobRestartCount' => 'JobRestartCount',
        'occurPhase' => 'OccurPhase',
        'occurTime' => 'OccurTime',
        'reason' => 'Reason',
        'restartDurationInSec' => 'RestartDurationInSec',
        'restartFailReason' => 'RestartFailReason',
        'restartStatus' => 'RestartStatus',
        'triggerID' => 'TriggerID',
    ];

    public function validate()
    {
        if (\is_array($this->detailErrorInfoList)) {
            Model::validateArray($this->detailErrorInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailErrorInfoList) {
            if (\is_array($this->detailErrorInfoList)) {
                $res['DetailErrorInfoList'] = [];
                $n1 = 0;
                foreach ($this->detailErrorInfoList as $item1) {
                    $res['DetailErrorInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobRestartCount) {
            $res['JobRestartCount'] = $this->jobRestartCount;
        }

        if (null !== $this->occurPhase) {
            $res['OccurPhase'] = $this->occurPhase;
        }

        if (null !== $this->occurTime) {
            $res['OccurTime'] = $this->occurTime;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->restartDurationInSec) {
            $res['RestartDurationInSec'] = $this->restartDurationInSec;
        }

        if (null !== $this->restartFailReason) {
            $res['RestartFailReason'] = $this->restartFailReason;
        }

        if (null !== $this->restartStatus) {
            $res['RestartStatus'] = $this->restartStatus;
        }

        if (null !== $this->triggerID) {
            $res['TriggerID'] = $this->triggerID;
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
        if (isset($map['DetailErrorInfoList'])) {
            if (!empty($map['DetailErrorInfoList'])) {
                $model->detailErrorInfoList = [];
                $n1 = 0;
                foreach ($map['DetailErrorInfoList'] as $item1) {
                    $model->detailErrorInfoList[$n1] = detailErrorInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobRestartCount'])) {
            $model->jobRestartCount = $map['JobRestartCount'];
        }

        if (isset($map['OccurPhase'])) {
            $model->occurPhase = $map['OccurPhase'];
        }

        if (isset($map['OccurTime'])) {
            $model->occurTime = $map['OccurTime'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RestartDurationInSec'])) {
            $model->restartDurationInSec = $map['RestartDurationInSec'];
        }

        if (isset($map['RestartFailReason'])) {
            $model->restartFailReason = $map['RestartFailReason'];
        }

        if (isset($map['RestartStatus'])) {
            $model->restartStatus = $map['RestartStatus'];
        }

        if (isset($map['TriggerID'])) {
            $model->triggerID = $map['TriggerID'];
        }

        return $model;
    }
}
