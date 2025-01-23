<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data;

use AlibabaCloud\Dara\Model;

class runs extends Model
{
    /**
     * @var int
     */
    public $absTime;
    /**
     * @var int
     */
    public $beginCast;
    /**
     * @var int
     */
    public $beginRunningTime;
    /**
     * @var int
     */
    public $beginWaitResTime;
    /**
     * @var int
     */
    public $beginWaitTimeTime;
    /**
     * @var int
     */
    public $endCast;
    /**
     * @var int
     */
    public $finishTime;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'absTime'           => 'AbsTime',
        'beginCast'         => 'BeginCast',
        'beginRunningTime'  => 'BeginRunningTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'endCast'           => 'EndCast',
        'finishTime'        => 'FinishTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->absTime) {
            $res['AbsTime'] = $this->absTime;
        }

        if (null !== $this->beginCast) {
            $res['BeginCast'] = $this->beginCast;
        }

        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }

        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }

        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }

        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AbsTime'])) {
            $model->absTime = $map['AbsTime'];
        }

        if (isset($map['BeginCast'])) {
            $model->beginCast = $map['BeginCast'];
        }

        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }

        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }

        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }

        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
