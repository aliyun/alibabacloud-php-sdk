<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SparkAttemptInfo extends Model
{
    /**
     * @var string
     */
    public $attemptId;
    /**
     * @var Detail
     */
    public $detail;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $priority;
    /**
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
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attemptId) {
            $res['AttemptId'] = $this->attemptId;
        }

        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
