<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState;

use AlibabaCloud\Tea\Model;

class terminated extends Model
{
    /**
     * @description The container ID.
     *
     * @example containerd://3ff993933bea366c4719e43a1b067d89bc7f01f1f573981659a44ff17a******
     *
     * @var string
     */
    public $containerID;

    /**
     * @description The exit code.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The time when the container ends running.
     *
     * @example 2021-05-23T20:49:31Z
     *
     * @var string
     */
    public $finishedAt;

    /**
     * @description The message about the event.
     *
     * @example Completed
     *
     * @var string
     */
    public $message;

    /**
     * @description The reason for the transition into the current status of the event.
     *
     * @example Completed
     *
     * @var string
     */
    public $reason;

    /**
     * @description The signal code.
     *
     * @example 1
     *
     * @var int
     */
    public $signal;

    /**
     * @description The time when the container started to run.
     *
     * @example 2021-05-12T07:02:52Z
     *
     * @var string
     */
    public $startedAt;
    protected $_name = [
        'containerID' => 'ContainerID',
        'exitCode'    => 'ExitCode',
        'finishedAt'  => 'FinishedAt',
        'message'     => 'Message',
        'reason'      => 'Reason',
        'signal'      => 'Signal',
        'startedAt'   => 'StartedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return terminated
     */
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
