<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers;

use AlibabaCloud\Dara\Model;

class previousState extends Model
{
    /**
     * @var string
     */
    public $detailStatus;

    /**
     * @var int
     */
    public $exitCode;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $signal;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'detailStatus' => 'DetailStatus',
        'exitCode' => 'ExitCode',
        'finishTime' => 'FinishTime',
        'message' => 'Message',
        'reason' => 'Reason',
        'signal' => 'Signal',
        'startTime' => 'StartTime',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
