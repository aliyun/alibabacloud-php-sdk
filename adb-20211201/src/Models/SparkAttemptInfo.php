<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SparkAttemptInfo extends Model
{
    /**
     * @example s202207151211hz0cb4200*****-0001
     *
     * @var string
     */
    public $attemptId;

    /**
     * @var Detail
     */
    public $detail;

    /**
     * @example WARN: Disk is full
     *
     * @var string
     */
    public $message;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $priority;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'attemptId' => 'AttemptId',
        'detail'    => 'Detail',
        'message'   => 'Message',
        'priority'  => 'Priority',
        'state'     => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attemptId) {
            $res['AttemptId'] = $this->attemptId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SparkAttemptInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttemptId'])) {
            $model->attemptId = $map['AttemptId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = Detail::fromMap($map['Detail']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
