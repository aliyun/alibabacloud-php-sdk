<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionMessageRequest\messages;

class RunCompletionMessageRequest extends Model
{
    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'messages' => 'Messages',
        'modelCode' => 'ModelCode',
        'stream' => 'Stream',
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
        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['Messages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
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
        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['Messages'] as $item1) {
                    $model->messages[$n1++] = messages::fromMap($item1);
                }
            }
        }

        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
