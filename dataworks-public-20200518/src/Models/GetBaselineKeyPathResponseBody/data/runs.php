<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data;

use AlibabaCloud\Tea\Model;

class runs extends Model
{
    /**
     * @example 1553531402000
     *
     * @var int
     */
    public $absTime;

    /**
     * @example 1553531686000
     *
     * @var int
     */
    public $beginCast;

    /**
     * @example 1553531401000
     *
     * @var int
     */
    public $beginRunningTime;

    /**
     * @example 1553531401000
     *
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @example 1553531400000
     *
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @example 1553531687000
     *
     * @var int
     */
    public $endCast;

    /**
     * @example 1553531401000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @example SUCCESS
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return runs
     */
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
