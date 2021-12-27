<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SendMessageToGlobeRequest extends Model
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'from'    => 'From',
        'message' => 'Message',
        'taskId'  => 'TaskId',
        'to'      => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageToGlobeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
