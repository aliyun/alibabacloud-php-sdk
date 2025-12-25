<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateChatRequest\messages;

class CreateChatRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $digitalEmployeeName;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var mixed[]
     */
    public $variables;
    protected $_name = [
        'action' => 'action',
        'digitalEmployeeName' => 'digitalEmployeeName',
        'messages' => 'messages',
        'threadId' => 'threadId',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->digitalEmployeeName) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeName;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                foreach ($this->variables as $key1 => $value1) {
                    $res['variables'][$key1] = $value1;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeName = $map['digitalEmployeeName'];
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                foreach ($map['variables'] as $key1 => $value1) {
                    $model->variables[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
