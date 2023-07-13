<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers;

use AlibabaCloud\Tea\Model;

class currentState extends Model
{
    /**
     * @example working
     *
     * @var string
     */
    public $detailStatus;

    /**
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example Back-off 5m0s restarting failed container=test pod=test_eci-xxx(xxx)
     *
     * @var string
     */
    public $message;

    /**
     * @example Started
     *
     * @var string
     */
    public $reason;

    /**
     * @example 1
     *
     * @var int
     */
    public $signal;

    /**
     * @example 2019-12-19T12:05:02Z
     *
     * @var string
     */
    public $startTime;

    /**
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
     * @return currentState
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
