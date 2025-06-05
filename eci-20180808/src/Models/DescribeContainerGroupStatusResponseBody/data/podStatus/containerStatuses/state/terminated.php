<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\state;

use AlibabaCloud\Dara\Model;

class terminated extends Model
{
    /**
     * @var string
     */
    public $containerID;

    /**
     * @var int
     */
    public $exitCode;

    /**
     * @var string
     */
    public $finishedAt;

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
    public $startedAt;
    protected $_name = [
        'containerID' => 'ContainerID',
        'exitCode' => 'ExitCode',
        'finishedAt' => 'FinishedAt',
        'message' => 'Message',
        'reason' => 'Reason',
        'signal' => 'Signal',
        'startedAt' => 'StartedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerID) {
            $res['ContainerID'] = $this->containerID;
        }

        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }

        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
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

        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
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
        if (isset($map['ContainerID'])) {
            $model->containerID = $map['ContainerID'];
        }

        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }

        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
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

        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }

        return $model;
    }
}
