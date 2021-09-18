<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class BatchSendMessageToGlobeRequest extends Model
{
    /**
     * @var string
     */
    public $to;

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
    public $type;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'to'      => 'To',
        'from'    => 'From',
        'message' => 'Message',
        'type'    => 'Type',
        'taskId'  => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSendMessageToGlobeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
