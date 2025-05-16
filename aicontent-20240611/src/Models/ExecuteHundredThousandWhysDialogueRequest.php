<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteHundredThousandWhysDialogueRequest\messages;

class ExecuteHundredThousandWhysDialogueRequest extends Model
{
    /**
     * @var string
     */
    public $ageGroup;

    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var messages[]
     */
    public $messages;
    protected $_name = [
        'ageGroup' => 'ageGroup',
        'chatId' => 'chatId',
        'deviceId' => 'deviceId',
        'macAddress' => 'macAddress',
        'messages' => 'messages',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ageGroup) {
            $res['ageGroup'] = $this->ageGroup;
        }

        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }

        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }

        if (null !== $this->macAddress) {
            $res['macAddress'] = $this->macAddress;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ageGroup'])) {
            $model->ageGroup = $map['ageGroup'];
        }

        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }

        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }

        if (isset($map['macAddress'])) {
            $model->macAddress = $map['macAddress'];
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1++] = messages::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
