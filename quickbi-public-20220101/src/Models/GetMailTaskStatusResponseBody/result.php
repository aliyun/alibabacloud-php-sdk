<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetMailTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $execTime;

    /**
     * @var string
     */
    public $mailId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'execTime' => 'execTime',
        'mailId' => 'mailId',
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->execTime) {
            $res['execTime'] = $this->execTime;
        }

        if (null !== $this->mailId) {
            $res['mailId'] = $this->mailId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['execTime'])) {
            $model->execTime = $map['execTime'];
        }

        if (isset($map['mailId'])) {
            $model->mailId = $map['mailId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
