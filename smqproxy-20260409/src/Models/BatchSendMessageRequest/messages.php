<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchSendMessageRequest;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var int
     */
    public $delaySeconds;

    /**
     * @var string
     */
    public $messageBody;

    /**
     * @var string
     */
    public $messageGroupId;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'delaySeconds' => 'DelaySeconds',
        'messageBody' => 'MessageBody',
        'messageGroupId' => 'MessageGroupId',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }

        if (null !== $this->messageBody) {
            $res['MessageBody'] = $this->messageBody;
        }

        if (null !== $this->messageGroupId) {
            $res['MessageGroupId'] = $this->messageGroupId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }

        if (isset($map['MessageBody'])) {
            $model->messageBody = $map['MessageBody'];
        }

        if (isset($map['MessageGroupId'])) {
            $model->messageGroupId = $map['MessageGroupId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
