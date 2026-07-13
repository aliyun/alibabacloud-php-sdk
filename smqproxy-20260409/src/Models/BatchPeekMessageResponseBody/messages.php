<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchPeekMessageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\MessagesUserPropertiesValue;

class messages extends Model
{
    /**
     * @var int
     */
    public $dequeueCount;

    /**
     * @var int
     */
    public $enqueueTime;

    /**
     * @var int
     */
    public $firstDequeueTime;

    /**
     * @var string
     */
    public $messageBody;

    /**
     * @var string
     */
    public $messageBodyMD5;

    /**
     * @var string
     */
    public $messageGroupId;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var MessagesUserPropertiesValue[]
     */
    public $userProperties;
    protected $_name = [
        'dequeueCount' => 'DequeueCount',
        'enqueueTime' => 'EnqueueTime',
        'firstDequeueTime' => 'FirstDequeueTime',
        'messageBody' => 'MessageBody',
        'messageBodyMD5' => 'MessageBodyMD5',
        'messageGroupId' => 'MessageGroupId',
        'messageId' => 'MessageId',
        'priority' => 'Priority',
        'userProperties' => 'UserProperties',
    ];

    public function validate()
    {
        if (\is_array($this->userProperties)) {
            Model::validateArray($this->userProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dequeueCount) {
            $res['DequeueCount'] = $this->dequeueCount;
        }

        if (null !== $this->enqueueTime) {
            $res['EnqueueTime'] = $this->enqueueTime;
        }

        if (null !== $this->firstDequeueTime) {
            $res['FirstDequeueTime'] = $this->firstDequeueTime;
        }

        if (null !== $this->messageBody) {
            $res['MessageBody'] = $this->messageBody;
        }

        if (null !== $this->messageBodyMD5) {
            $res['MessageBodyMD5'] = $this->messageBodyMD5;
        }

        if (null !== $this->messageGroupId) {
            $res['MessageGroupId'] = $this->messageGroupId;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->userProperties) {
            if (\is_array($this->userProperties)) {
                $res['UserProperties'] = [];
                foreach ($this->userProperties as $key1 => $value1) {
                    $res['UserProperties'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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
        if (isset($map['DequeueCount'])) {
            $model->dequeueCount = $map['DequeueCount'];
        }

        if (isset($map['EnqueueTime'])) {
            $model->enqueueTime = $map['EnqueueTime'];
        }

        if (isset($map['FirstDequeueTime'])) {
            $model->firstDequeueTime = $map['FirstDequeueTime'];
        }

        if (isset($map['MessageBody'])) {
            $model->messageBody = $map['MessageBody'];
        }

        if (isset($map['MessageBodyMD5'])) {
            $model->messageBodyMD5 = $map['MessageBodyMD5'];
        }

        if (isset($map['MessageGroupId'])) {
            $model->messageGroupId = $map['MessageGroupId'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['UserProperties'])) {
            if (!empty($map['UserProperties'])) {
                $model->userProperties = [];
                foreach ($map['UserProperties'] as $key1 => $value1) {
                    $model->userProperties[$key1] = MessagesUserPropertiesValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
