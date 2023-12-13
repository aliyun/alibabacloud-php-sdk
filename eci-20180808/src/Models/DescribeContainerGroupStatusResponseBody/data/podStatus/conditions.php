<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description The message about the event.
     *
     * @example Completed
     *
     * @var string
     */
    public $message;

    /**
     * @description The cause of the event.
     *
     * @example Completed
     *
     * @var string
     */
    public $reason;

    /**
     * @description The time when the status last changed.
     *
     * @example 2021-05-12T07:02:47Z
     *
     * @var string
     */
    public $lastTransitionTime;

    /**
     * @description The state of the pod condition.
     *
     * @example True
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the pod condition. Valid values:
     *
     *   PodScheduled
     *   Ready
     *   Initialized
     *   Unschedulable
     *
     * @example Ready
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'message'            => 'Message',
        'reason'             => 'Reason',
        'lastTransitionTime' => 'lastTransitionTime',
        'status'             => 'status',
        'type'               => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->lastTransitionTime) {
            $res['lastTransitionTime'] = $this->lastTransitionTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['lastTransitionTime'])) {
            $model->lastTransitionTime = $map['lastTransitionTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
