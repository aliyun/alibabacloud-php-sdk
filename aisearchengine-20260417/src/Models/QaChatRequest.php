<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\QaChatRequest\message;

class QaChatRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var message
     */
    public $message;

    /**
     * @var mixed[]
     */
    public $options;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'appId' => 'appId',
        'message' => 'message',
        'options' => 'options',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
        if (null !== $this->message) {
            $this->message->validate();
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->message) {
            $res['message'] = null !== $this->message ? $this->message->toArray($noStream) : $this->message;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['message'])) {
            $model->message = message::fromMap($map['message']);
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                foreach ($map['options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
