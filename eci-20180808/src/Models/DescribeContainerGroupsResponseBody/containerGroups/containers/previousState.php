<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers;

use AlibabaCloud\Tea\Model;

class previousState extends Model
{
    /**
     * @description The details of the container status.
     *
     * @example working
     *
     * @var string
     */
    public $detailStatus;

    /**
     * @description The exit code of the container.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The time when the container stopped running.
     *
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The message about the container status.
     *
     * @example Back-off 5m0s restarting failed container=test pod=test_eci-xxx(xxx)
     *
     * @var string
     */
    public $message;

    /**
     * @description The reason why the container is in this status.
     *
     * @example Completed
     *
     * @var string
     */
    public $reason;

    /**
     * @description The code of the container status.
     *
     * @example 1
     *
     * @var int
     */
    public $signal;

    /**
     * @description The time when the container started to run.
     *
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The container status. Valid values:
     *
     *   Waiting: The container is being started.
     *   Running: The container is running.
     *   Terminated: The container stops running.
     *
     * @example Terminated
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'detailStatus' => 'DetailStatus',
        'exitCode'     => 'ExitCode',
        'finishTime'   => 'FinishTime',
        'message'      => 'Message',
        'reason'       => 'Reason',
        'signal'       => 'Signal',
        'startTime'    => 'StartTime',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailStatus) {
            $res['DetailStatus'] = $this->detailStatus;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->signal) {
            $res['Signal'] = $this->signal;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return previousState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailStatus'])) {
            $model->detailStatus = $map['DetailStatus'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Signal'])) {
            $model->signal = $map['Signal'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
