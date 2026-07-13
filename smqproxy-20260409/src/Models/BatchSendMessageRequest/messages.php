<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models\BatchSendMessageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SMQProxy\V20260409\Models\MessagesUserPropertiesValue;

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

    /**
     * @var MessagesUserPropertiesValue[]
     */
    public $userProperties;
    protected $_name = [
        'delaySeconds' => 'DelaySeconds',
        'messageBody' => 'MessageBody',
        'messageGroupId' => 'MessageGroupId',
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
